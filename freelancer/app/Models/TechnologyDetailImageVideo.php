<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyDetailImageVideo extends Model
{
    use HasFactory;

    protected $fillable = ['td_id','images','videos'];

}
