<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStaff extends Model
{
    use HasFactory;

    protected $table = 'admin_staff';

    protected $fillable = [
        'ID_no', 
        'name', 
        'gender', 
        'college', 
        'department',
        'status', 
    ];
}
