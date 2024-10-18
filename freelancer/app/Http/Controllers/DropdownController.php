<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;



class DropdownController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('dropdown', compact('categories'));
    }

    public function fetchSubcategories(Request $request)
    {
        $data['subcategories'] = Subcategory::where("category_id", $request->category_id)->get();
        return response()->json($data);
    }
}
