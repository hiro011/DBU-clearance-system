<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularStud extends Model
{
    use HasFactory;

    protected $table = 'regular_studs';

    protected $fillable = [
        'ID_no', 
        'name', 
        'gender', 
        'year', 
        'college', 
        'department',
        'status', 
    ];
}
