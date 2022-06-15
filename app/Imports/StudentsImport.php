<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentsImport implements ToModel, WithStartRow, WithCalculatedFormulas
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'school_name'  => $row['1'],
            'district'  => $row[2],
            'id'  => preg_replace("/\"|\\n/m", '', $row[3]),
            'class_name'  => $row[4],
            'name'  => $row[5],
            'dob'  => date("Y/m/d",mktime(0,0,0, $row[7], $row[6],$row[8])),
            'gender'  => ($row[9] === 'Nữ') || ($row[9] === 'nữ') ? 0 : 1,
            'place_birth'  => $row[10],
            'ethnic'  => $row[11],
            'permanent_residence'  => $row[12],
            'phone'  => $row[13],
            'total_point_1'  => $row[14],
            'total_point_2'  => $row[15],
            'total_point_3'  => $row[16],
            'total_point_4'  => $row[17],
            'total_point_5'  => $row[18],
            'total_point_years'  => $row[19],
            'priority_point'  => $row[20],
            'total_prequalifi_point'  => $row[21],
            'note'  => $row[22],
        ]);
    }

    public function startRow(): int
    {
        return 6;
    }

    public function chunkSize(): int
    {
        return 200;
    }
}
