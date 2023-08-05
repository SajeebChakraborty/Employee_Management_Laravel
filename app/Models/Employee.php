<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'job_title',
        'joining_date',
        'salary',
        'email',
        'mobile_no',
        'address'
    ];
}
