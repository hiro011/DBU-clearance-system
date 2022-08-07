<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtensionStud extends Model
{
    use HasFactory;

    protected $table = 'extension_studs';

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
