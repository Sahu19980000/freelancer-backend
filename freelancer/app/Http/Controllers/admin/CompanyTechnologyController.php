<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Planmake;
use App\Models\TechnologyName;
use App\Models\CompanyTechnology;
use App\Models\CompanyTechnologyImageVideo;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class CompanyTechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companytechs = CompanyTechnology::get();
        return view('admin.company_technology.index', compact('companytechs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.company_technology.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'companyname' => 'required',
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
            $company_tech_add= CompanyTechnology::create($request->all());

            // technology some images update here
            // if($request->hasFile('images'))
            // {
            //     $files = $request->file('images');
            //     foreach($files as $file){
            //         $filename = $file->getClientOriginalName();
            //         foreach ($request->images as $photo) {
            //             $filename = $photo->store('multiple_images');
            //             CompanyTechnologyImageVideo::create([
            //             'ct_id' => $company_tech_add->id,
            //             'images' => $filename
            //             ]);
            //         }
            //     }
            // }

            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs('multiple_images', $filename, 'public');
                    CompanyTechnologyImageVideo::create([
                        'ct_id' => $company_tech_add->id,
                        'images' => $filename
                    ]);
                }
            }
            // technology video update here
            if ($request->hasFile('videos')) {
                foreach ($request->file('videos') as $video) {
                    $filename = time() . '_' . $video->getClientOriginalName();
                    $video->storeAs('multiple_videos', $filename, 'public');
                    CompanyTechnologyImageVideo::create([
                        'ct_id' => $company_tech_add->id,
                        'videos' => $filename
                    ]);
                }
            }
        }
        Session::flash('success', __('Company Technology Created Successfully.'));
        return response()->json(['status'=>1, 'msg'=>'Company Technology Created Successfully.']);
        // ::
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
        $companytech_edits = CompanyTechnology::find($id);
        $categories = Category::get();
        $subcategories = SubCategory::all();
        $plans = Planmake::all();
        $technames = TechnologyName::all();
        return view('admin.company_technology.edit', compact('companytech_edits','categories','subcategories','plans','technames'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'companyname' => 'required',
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
            $company_tech_update = CompanyTechnology::find($request->id);
            $company_tech_update->update($request->all());

            // technology some images update here
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $filename = time() . '_' . $image->getClientOriginalName();
                    $image->storeAs('multiple_images', $filename, 'public');
                    CompanyTechnologyImageVideo::create([
                        'ct_id' => $request->id,
                        'images' => $filename
                    ]);
                }
            }
            // technology video update here
            if ($request->hasFile('videos')) {
                foreach ($request->file('videos') as $video) {
                    $filename = time() . '_' . $video->getClientOriginalName();
                    $video->storeAs('multiple_videos', $filename, 'public');
                    CompanyTechnologyImageVideo::create([
                        'ct_id' => $request->id,
                        'videos' => $filename
                    ]);
                }
            }
        }
        Session::flash('success', __('Company Technology Updated Successfully.'));
        return response()->json(['status'=>1, 'msg'=>'Company Technology Updated Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // delete all company upload images and videos
        CompanyTechnologyImageVideo::whereIn('ct_id',explode(",",$id))->delete();
        // company technology is deleted
        $company = CompanyTechnology::find($id);
        $company->delete();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }
}
