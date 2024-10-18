<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyName extends Model
{
    use HasFactory;

    protected $fillable = ['planmake_id','plan_name','name'];

}
