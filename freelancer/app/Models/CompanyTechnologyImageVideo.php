<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTechnologyImageVideo extends Model
{
    use HasFactory;

    protected $fillable = ['ct_id','images','videos'];

}
