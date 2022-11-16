<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stdntData extends Model
{
    use HasFactory;
    protected $fillable = ['stdnt_name','stdnt_dept','stdnt_sem','stdnt_sec'];
}
