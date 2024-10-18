<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = ['cb_id','companyname','website','empcount_min','empcount_max','no_ofoffice','introduction','revenue','balancesheet','companyvideo','youtubelink','category','parent_category','nameoftheproject','projectphoto','projectdescription','projectduration','projectcategory','projectsubcategory','projectcost','picturevideo','otherinfo'];
}
