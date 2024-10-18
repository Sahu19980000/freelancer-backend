<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planmake extends Model
{
    use HasFactory;

    protected $fillable = ['categoryid','subcategoryid','plan_name'];

    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'id', 'categoryid');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Models\SubCategory', 'id', 'subcategoryid');
    }

    public function planitems()
    {
        return $this->hasMany('App\Models\PlanmakeItem', 'planid', 'id');
    }
}
