<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .form-control:focus {
            border-color: #86fe9a;
            box-shadow: none;
            -webkit-box-shadow: 0 0 0 0.25rem rgb(134 254 154 / 25%);
        }
        .pagination {
            justify-content: center;
        }
    </style>
    <title>Import Students</title>
</head>
<body class="bg-light text-dark">
    <div class="container-fluid bg-white border-bottom border-2 border-success" style="--bs-border-opacity: .2;">
        <div class="container py-3">
            <a href="{{ route('index') }}" class="text-muted fs-5 fw-semibold text-decoration-none">
                Import Students - Excel Laravel
            </a>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container border bg-white rounded">
            <h1 class="p-4 border-bottom">Students</h1>

            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="d-flex justify-content-between">
                <form class="m-4 row row-cols-lg-auto g-3" action="{{ route('students.import') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12" style="padding:0;margin-right:8px;">
                        <input class="form-control" id="user-file" type="file" name="user_file" accept=".xlsx">
                    </div>
                    <button class="btn btn-success" type="submit">Import</button>
                </form>

                <div class="m-4 row row-cols-lg-auto g-3">
                    <div class="col-12" style="padding:0;margin-right:8px;">
                        <input class="form-control" id="search-input" type="search" name="q" placeholder="Search with id or name" value="{{ $search }}">
                    </div>
                    <button class="btn btn-success" type="button" id="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="m-4 row row-cols-lg-auto g-3">
                <form action="{{ route('students.destroy') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        Clear Data
                    </button>
                </form>
            </div>
            <div class="table-responsive m-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">Full name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DoB</th>
                        <th scope="col">School</th>
                        <th scope="col">Total Point</th>
                        <th scope="col">Priority Point</th>
                        <th scope="col">Pre-qualification Point</th>
                    </tr>
                    </thead>
                    <tbody class="table-group-divider">
                    @php($index = 0)
                    @foreach($data as $row)
                        <tr>
                            <th scope="row">
                                {{ ++$index }}
                            </th>
                            <td> {{ $row->id }} </td>
                            <td> {{ $row->name }} </td>
                            <td> {{ $row->gender === 0 ? 'Nữ' : 'Nam' }} </td>
                            <td> {{ $row->dob }} </td>
                            <td> {{ $row->school_name }} </td>
                            <td> {{ $row->total_point_years }} </td>
                            <td> {{ $row->priority_point }} </td>
                            <td> {{ $row->total_prequalifi_point }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>

    </div>
    <script>
        let searchButton = document.getElementById('search-button');
        let searchInput = document.getElementById('search-input');
        searchButton.addEventListener('click', search);
        searchInput.addEventListener('keypress', function(evt) {
            if (evt.key === 'Enter') {
                evt.preventDefault();
                search();
            }
        });

        function search() {
            let inputValue = searchInput.value;
            if(inputValue === '') {
                window.location.href = "{{ route('index') }}";
            } else {
                window.location.href = "{{ route('index') }}" + "/?q=" + inputValue;
            }
        }
    </script>
</body>
</html>
