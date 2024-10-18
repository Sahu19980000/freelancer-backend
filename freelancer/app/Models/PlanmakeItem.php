<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanmakeItem extends Model
{
    use HasFactory;

    protected $fillable = ['planid','items'];

}
