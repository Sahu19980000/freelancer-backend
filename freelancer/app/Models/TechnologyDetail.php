<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologyDetail extends Model
{
    use HasFactory;

    protected $fillable = ['categoryid','subcategoryid','planid','techid','frontend', 'backend','database','avg_cost','delivery_time','other_variables','other_variables_one','info'];

    public function multipleimagesvideos()
    {
        return $this->hasMany('App\Models\TechnologyDetailImageVideo', 'td_id', 'id');
    }
}
