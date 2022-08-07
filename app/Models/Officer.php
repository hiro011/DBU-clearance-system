<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    use HasFactory;

    protected $table = 'officers';

    protected $fillable = [
        'ID_no', 
        'name', 
        'gender', 
        'college', 
        'department',
        'add_by', 
    ];
}
