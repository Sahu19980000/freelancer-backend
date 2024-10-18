<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTechnology extends Model
{
    use HasFactory;

    protected $fillable = ['companyname','categoryid','subcategoryid','planid','techid','frontend','backend','database','avg_cost','delivery_time','other_variables','other_variables_one','info'];

}
