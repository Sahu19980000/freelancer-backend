<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Planmake;
use App\Models\SubCategory;
use App\Models\TechnologyDetail;
use App\Models\TechnologyName;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ExploreProject extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return Response($categories);
    }

    public function Projecttype($id)
    {
        $subcategories = SubCategory::where('category_id','=',$id)->get();
        return Response($subcategories);
    }

    public function ProjectTypeChecklist($id)
    {
        $planmakes = Planmake::with('categories','subcategories','planitems')->where('subcategoryid','=',$id)->get();
        return Response($planmakes);
    }

    public function ProjectTypeChecklistTechnology($planmakeid, $planname)
    {
        // return $planmakeid. " ". $planname;
        $technologies = TechnologyName::where('planmake_id','=',$planmakeid)->where('plan_name','=',$planname)->get();
        return Response($technologies);
    }

    public function TechnologyDetails($techid)
    {
        $tech_info = TechnologyDetail::with('multipleimagesvideos')->where('techid','=',$techid)->get();
        return Response($tech_info);
    }
}
