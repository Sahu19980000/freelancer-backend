<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Planmake;
use App\Models\TechnologyDetail;
use App\Models\TechnologyDetailImageVideo;
use App\Models\TechnologyName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.languageinfo.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'categoryid' => 'required',
            'subcategoryid' => 'required',
            'planid' => 'required',
            'techid' => 'required',
            'frontend' => 'required',
            'backend' => 'required',
            'database' => 'required',
            'avg_cost' => 'required',
            'delivery_time' => 'required',
            'other_variables' => 'required',
            'other_variables_one' => 'required',
            'info' => 'required',
            'images'=>'nullable',
            'videos'=>'nullable',
        ]);

        if(!$validator->passes()){
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // technology all details save here
            $technology_details_add= TechnologyDetail::create($request->all());

            // technology some images update here
            if($request->hasFile('images'))
            {
                $files = $request->file('images');
                foreach($files as $file){
                    $filename = $file->getClientOriginalName();
                    foreach ($request->images as $photo) {
                        $filename = $photo->store('multiple_images');
                        TechnologyDetailImageVideo::create([
                        'td_id' => $technology_details_add->id,
                        'images' => $filename
                        ]);
                    }
                }
            }
            // technology video update here
            if($request->hasFile('videos'))
            {
                $files = $request->file('videos');
                foreach($files as $file){
                    $filename = $file->getClientOriginalName();
                    foreach ($request->videos as $photo) {
                        $filename = $photo->store('multiple_videos');
                        TechnologyDetailImageVideo::create([
                        'td_id' => $technology_details_add->id,
                        'videos' => $filename
                        ]);
                    }
                }
            }
        }
        Session::flash('success', __('Technology Details Created Successfully.'));
        return response()->json(['status'=>1, 'msg'=>'Technology Details Created Successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function GetSubcategoryPlan(Request $request)
    {
        $data = Planmake::where('categoryid','=',$request->categoryid)->where('subcategoryid','=',$request->subcategoryid)->get();
        return Response()->json($data);
    }

    public function GetSubcategoryPlans(Request $request)
    {
        // dd($request->all());
        $planname = Planmake::where('id','=',$request->planid)->pluck('plan_name')->first();
        $data = TechnologyName::where('planmake_id','=',$request->planid)->where('plan_name','=',$planname)->get();
        return Response()->json($data);
    }
}
