<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Student extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [
        'school_name',
        'district',
        'id',
        'class_name',
        'name',
        'dob',
        'gender',
        'place_birth',
        'ethnic',
        'permanent_residence',
        'phone',
        'total_point_1',
        'total_point_2',
        'total_point_3',
        'total_point_4',
        'total_point_5',
        'total_point_years',
        'priority_point',
        'total_prequalifi_point',
        'note',
    ];

    public function getPriorityPointAttribute($value): int
    {
        return $value !== null ? $value : 0;
    }

    public function getDobAttribute($date)
    {
        return date('d-m-Y', strtotime($date));
    }

}
