<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyTechnology;

class ApiCompanyTechnologyController extends Controller
{
    public function filter(Request $request)
    {
        $minPrice = $request->query('min', 0);
        $maxPrice = $request->query('max', 10000000);

        $products = CompanyTechnology::whereBetween('avg_cost', [$minPrice, $maxPrice])->get();

        return response()->json($products);
    }
}
