<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Planmake;
use App\Models\SubCategory;
use App\Models\PlanmakeItem;
use Illuminate\Http\Request;
use App\Models\TechnologyName;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PlanMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = Planmake::where('plan_name','=','basic')->get();
        return view('admin.basicplanmake.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();
        return view('admin.basicplanmake.create',compact('categories'));
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
        ],[
            'categoryid.required' => 'The Category field is require.',
            'subcategoryid.required' => 'The Sub Category field is require.'
        ]);
        $input = $request->all();

        if (!$validator->passes()){
            // Retrieve the validated input...
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // create plan
            $addplan = new Planmake($input);
            $addplan->save();
            // make basic plan descriptions
            if(!Empty($request->basic)){
                foreach ($request->basic as $row) {
                    $create = new PlanmakeItem($row);
                    $create->planid = $addplan->id;
                    $create->items = $row['items'];
                    $create->save();
                }
            }
            // make plan basic in technology
            if(!Empty($request->tech)){
                foreach ($request->tech as $row) {
                    $create_tech = new TechnologyName($row);
                    $create_tech->planmake_id = $addplan->id;
                    $create_tech->plan_name = 'basic';
                    $create_tech->name = $row['name'];
                    $create_tech->save();
                }
            }
        }
        return response()->json(['status'=>1, 'msg'=>'Plan created successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $planmakes = Planmake::find($id);
        return view('admin.basicplanmake.show', compact('planmakes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::get();
        $planmakes = Planmake::with('planitems')->find($id);
        $subcategories = SubCategory::get();
        $planmakes_item = PlanmakeItem::where('planid','=',$id)->get();
        $technologies = TechnologyName::where('planmake_id','=',$id)->where('plan_name','=','basic')->get();
        return view('admin.basicplanmake.edit', compact('planmakes','categories','subcategories','planmakes_item','technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ],[
            'categoryid.required' => 'The Category field is require.',
            'subcategoryid.required' => 'The Sub Category field is require.'
        ]);
        $input = $request->all();

        if (!$validator->passes()){
            // Retrieve the validated input...
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // update plan
            $updateplan = Planmake::find($id);
            $updateplan->update($input);
            // make basic plan descriptions
            if(!Empty($request->basic)){
                foreach ($request->basic as $row) {
                    // dd($row);
                    if(!empty($row['id'])){
                        // dd($row);
                        $items_update = PlanmakeItem::find($row['id']);
                        $items_update->planid = $id;
                        $items_update->items = $row['items'];
                        $items_update->update();
                    }else{
                        // dd($row);
                        $create = new PlanmakeItem;
                        $create->planid = $id;
                        $create->items = $row['items'];
                        $create->save();
                    }
                }
            }
            // make plan basic in technology
            if(!Empty($request->tech)){
                foreach ($request->tech as $rows) {
                    if(!empty($rows['techid'])){
                        $tech_update = TechnologyName::find($rows['techid']);
                        $tech_update->update($rows);
                    }else{
                        $create_tech = new TechnologyName($rows);
                        $create_tech->planmake_id = $id;
                        $create_tech->plan_name = 'basic';
                        $create_tech->name = $rows['name'];
                        $create_tech->save();
                    }
                }
            }
        }
        return response()->json(['status'=>1, 'msg'=>'Plan Updated Successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function GetSubcategory($categoryid)
    {
        $data = SubCategory::where('category_id','=',$categoryid)->get();
        return Response()->json($data);
    }

    public function BasicPlanItemDelete(Request $request)
    {
        $deleteitem = PlanmakeItem::find($request->id);
        $deleteitem->delete();
        Session::flash('success', __('Plan item Deleted Succesfully'));
        $data            = array();
        return Response::json([
            'success' => true,
            'data'    => $data,
        ]);
    }

    public function AdvanceIndex()
    {
        $plans = Planmake::where('plan_name','=','advance')->get();
        return view('admin.advanceplanmake.index',compact('plans'));
    }

    public function AdvanceCreate()
    {
        // dd($request->all());
        $categories = Category::get();
        return view('admin.advanceplanmake.create',compact('categories'));
    }

    public function AdvanceStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ],[
            'categoryid.required' => 'The Category field is require.',
            'subcategoryid.required' => 'The Sub Category field is require.'
        ]);
        $input = $request->all();

        if (!$validator->passes()){
            // Retrieve the validated input...
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // create plan
            $addplan = new Planmake($input);
            $addplan->save();
            // make advance plan descriptions
            if(!Empty($request->advance)){
                foreach ($request->advance as $row) {
                    $create = new PlanmakeItem($row);
                    $create->planid = $addplan->id;
                    $create->items = $row['items'];
                    $create->save();
                }
            }
            // make plan advance in technology
            if(!Empty($request->tech)){
                foreach ($request->tech as $row) {
                    $create_tech = new TechnologyName($row);
                    $create_tech->planmake_id = $addplan->id;
                    $create_tech->plan_name = 'advance';
                    $create_tech->name = $row['name'];
                    $create_tech->save();
                }
            }
        }
        return response()->json(['status'=>1, 'msg'=>'Plan created successfully.']);
    }

    public function AdvanceEdit(string $id)
    {
        $categories = Category::get();
        $planmakes = Planmake::with('planitems')->find($id);
        $subcategories = SubCategory::get();
        $planmakes_item = PlanmakeItem::where('planid','=',$id)->get();
        $technologies = TechnologyName::where('planmake_id','=',$id)->where('plan_name','=','advance')->get();
        return view('admin.advanceplanmake.edit', compact('planmakes','categories','subcategories','planmakes_item','technologies'));
    }

    public function AdvanceUpdate(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ],[
            'categoryid.required' => 'The Category field is require.',
            'subcategoryid.required' => 'The Sub Category field is require.'
        ]);
        $input = $request->all();

        if (!$validator->passes()){
            // Retrieve the validated input...
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // update plan
            $updateplan = Planmake::find($request->id);
            $updateplan->update($input);
            // make advance plan descriptions
            if(!Empty($request->advance)){
                foreach ($request->advance as $row) {
                    // dd($row);
                    if(!empty($row['id'])){
                        // dd($row);
                        $items_update = PlanmakeItem::find($row['id']);
                        $items_update->planid = $request->id;
                        $items_update->items = $row['items'];
                        $items_update->update();
                    }else{
                        // dd($row);
                        $create = new PlanmakeItem;
                        $create->planid = $request->id;
                        $create->items = $row['items'];
                        $create->save();
                    }
                }
            }
            // make plan advance in technology
            if(!Empty($request->tech)){
                foreach ($request->tech as $rows) {
                    if(!empty($rows['techid'])){
                        $tech_update = TechnologyName::find($rows['techid']);
                        $tech_update->update($rows);
                    }else{
                        $create_tech = new TechnologyName($rows);
                        $create_tech->planmake_id = $request->id;
                        $create_tech->plan_name = 'advance';
                        $create_tech->name = $rows['name'];
                        $create_tech->save();
                    }
                }
            }
        }
        return response()->json(['status'=>1, 'msg'=>'Plan Updated Successfully.']);
    }

    public function Advancedelete($id)
    {
        dd($id);
    }

    public function AdvanceItemDelete(Request $request)
    {
        // dd($request->all());
        $deleteitem = PlanmakeItem::find($request->id);
        $deleteitem->delete();
        Session::flash('success', __('Plan item Deleted Succesfully'));
        $data            = array();
        return Response::json([
            'success' => true,
            'data'    => $data,
        ]);
    }

    public function PremiumIndex()
    {
        $plans = Planmake::where('plan_name','=','premium')->get();
        return view('admin.premiumplanmake.index',compact('plans'));
    }

    public function PremiumCreate()
    {
        // dd($request->all());
        $categories = Category::get();
        return view('admin.premiumplanmake.create',compact('categories'));
    }

    public function PremiumStore(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ],[
            'categoryid.required' => 'The Category field is require.',
            'subcategoryid.required' => 'The Sub Category field is require.'
        ]);
        $input = $request->all();

        if (!$validator->passes()){
            // Retrieve the validated input...
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // create plan
            $addplan = new Planmake($input);
            $addplan->save();
            // make premium plan descriptions
            if(!Empty($request->premium)){
                foreach ($request->premium as $row) {
                    $create = new PlanmakeItem($row);
                    $create->planid = $addplan->id;
                    $create->items = $row['items'];
                    $create->save();
                }
            }
            // make plan advance in technology
            if(!Empty($request->tech)){
                foreach ($request->tech as $row) {
                    $create_tech = new TechnologyName($row);
                    $create_tech->planmake_id = $addplan->id;
                    $create_tech->plan_name = 'premium';
                    $create_tech->name = $row['name'];
                    $create_tech->save();
                }
            }
        }
        return response()->json(['status'=>1, 'msg'=>'Plan created successfully.']);
    }

    public function PremiumEdit(string $id)
    {
        $categories = Category::get();
        $planmakes = Planmake::with('planitems')->find($id);
        $subcategories = SubCategory::get();
        $planmakes_item = PlanmakeItem::where('planid','=',$id)->get();
        $technologies = TechnologyName::where('planmake_id','=',$id)->where('plan_name','=','premium')->get();
        return view('admin.premiumplanmake.edit', compact('planmakes','categories','subcategories','planmakes_item','technologies'));
    }

    public function PremiumUpdate(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'categoryid' => 'required',
            'subcategoryid' => 'required',
        ],[
            'categoryid.required' => 'The Category field is require.',
            'subcategoryid.required' => 'The Sub Category field is require.'
        ]);
        $input = $request->all();

        if (!$validator->passes()){
            // Retrieve the validated input...
            return response()->json(['status'=>0, 'error'=>$validator->errors()->toArray()]);
        }else{
            // update plan
            $updateplan = Planmake::find($request->id);
            $updateplan->update($input);
            // make advance plan descriptions
            if(!Empty($request->premium)){
                foreach ($request->premium as $row) {
                    // dd($row);
                    if(!empty($row['id'])){
                        // dd($row);
                        $items_update = PlanmakeItem::find($row['id']);
                        $items_update->planid = $request->id;
                        $items_update->items = $row['items'];
                        $items_update->update();
                    }else{
                        // dd($row);
                        $create = new PlanmakeItem;
                        $create->planid = $request->id;
                        $create->items = $row['items'];
                        $create->save();
                    }
                }
            }
            // make plan advance in technology
            if(!Empty($request->tech)){
                foreach ($request->tech as $rows) {
                    if(!empty($rows['techid'])){
                        $tech_update = TechnologyName::find($rows['techid']);
                        $tech_update->update($rows);
                    }else{
                        $create_tech = new TechnologyName($rows);
                        $create_tech->planmake_id = $request->id;
                        $create_tech->plan_name = 'premium';
                        $create_tech->name = $rows['name'];
                        $create_tech->save();
                    }
                }
            }
        }
        return response()->json(['status'=>1, 'msg'=>'Plan Updated Successfully.']);
    }

    public function Premiumdelete($id)
    {
        dd($id);
    }

    public function PremiumItemDelete(Request $request)
    {
        // dd($request->all());
        $deleteitem = PlanmakeItem::find($request->id);
        $deleteitem->delete();
        Session::flash('success', __('Plan item Deleted Succesfully'));
        $data            = array();
        return Response::json([
            'success' => true,
            'data'    => $data,
        ]);
    }
}
