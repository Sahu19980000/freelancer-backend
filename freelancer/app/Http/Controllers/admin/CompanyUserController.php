<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Planmake;
use App\Models\PlanmakeItem;
use App\Models\CompanyDetail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use File;

class CompanyUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyuser = User::all()->where('joinas', 'Company');
        return view('admin.company_user.index', compact('companyuser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hide = 1;
        $categories = Category::get();
        return view('admin.company_user.create',compact('hide','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $companyuser = new User();
        $companyuser->name = $request->companyname;
        $companyuser->email = $request->email;
        $companyuser->joinas = 'Company';
        // $companyuser->joinas = $request->joinas;
        // $companyuser->country = $request->country;
        $companyuser->password = password_hash($request->password, PASSWORD_BCRYPT);
        $companyuser->save();

        // company all details
        $companydetails = new CompanyDetail($request->all());
        $companydetails->cb_id = $companyuser->id;
        // balance sheet file upload here
        if ($request->hasfile('balancesheet')) {
            // if (File::exists(public_path($user->balancesheet))) {
            //     File::delete(public_path($user->balancesheet));
            // }
            $balancesheet = $request->balancesheet;
            $balancesheetName = rand().'_'.$balancesheet->getClientOriginalName();
            $balancesheet->move(public_path('balancesheet'), $balancesheetName);
            $path = "/balancesheet/".$balancesheetName;
            $companydetails->balancesheet = $path;
        }

        // balance sheet file upload here
        if ($request->hasfile('companyvideo')) {
            // if (File::exists(public_path($user->balancesheet))) {
            //     File::delete(public_path($user->balancesheet));
            // }
            $companyvideo = $request->companyvideo;
            $companyvideoName = rand().'_'.$companyvideo->getClientOriginalName();
            $companyvideo->move(public_path('companyvideo'), $companyvideoName);
            $path = "/companyvideo/".$companyvideoName;
            $companydetails->companyvideo = $path;
        }

        // picture video file upload here
        if ($request->hasfile('picturevideo')) {
            // if (File::exists(public_path($user->balancesheet))) {
            //     File::delete(public_path($user->balancesheet));
            // }
            $picturevideo = $request->picturevideo;
            $picturevideoName = rand().'_'.$picturevideo->getClientOriginalName();
            $picturevideo->move(public_path('picturevideo'), $picturevideoName);
            $path = "/picturevideo/".$picturevideoName;
            $companydetails->picturevideo = $path;
        }

        $companydetails->save();

        Session::flash('success', __('Company Created Successfully.'));
        return response()->json(['status'=>1, 'msg'=>'Company Created Successfully.']);
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
        $companyuser = User::find($id);
        $cd_id = CompanyDetail::where('cb_id','=',$id)->pluck('id')->first();
        $companydetails = CompanyDetail::find($cd_id);
        $hide = 1;
        $categories = Category::get();
        $subcategories = SubCategory::get();
        $plannmakes = Planmake::get();
        $plannmakeitems = PlanmakeItem::get();

        return view('admin.company_user.edit', compact('companyuser','hide','categories','companydetails','subcategories','plannmakes','plannmakeitems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $companyuser = User::find($request->userid);
        $companyuser->update($request->all());
        // $companyuser->name = $request->company_name;
        // $companyuser->email = $request->company_email;
        // $companyuser->joinas = $request->joinas;
        // $companyuser->country = $request->country;
        // // $companyuser->password = $request->password;
        // $companyuser->password = password_hash($request->password, PASSWORD_BCRYPT);
        // $companyuser->save();

        // here company details update
        $companydetailsupdate = CompanyDetail::find($request->cd_id);

        if ($request->hasfile('balancesheet')) {
            // if (File::exists(public_path($user->balancesheet))) {
            //     File::delete(public_path($user->balancesheet));
            // }
            $balancesheet = $request->balancesheet;
            $balancesheetName = rand().'_'.$balancesheet->getClientOriginalName();
            $balancesheet->move(public_path('balancesheet'), $balancesheetName);
            $path = "/balancesheet/".$balancesheetName;
            $companydetailsupdate->balancesheet = $path;
        }

        // balance sheet file upload here
        if ($request->hasfile('companyvideo')) {
            // if (File::exists(public_path($user->balancesheet))) {
            //     File::delete(public_path($user->balancesheet));
            // }
            $companyvideo = $request->companyvideo;
            $companyvideoName = rand().'_'.$companyvideo->getClientOriginalName();
            $companyvideo->move(public_path('companyvideo'), $companyvideoName);
            $path = "/companyvideo/".$companyvideoName;
            $companydetailsupdate->companyvideo = $path;
        }

        // picture video file upload here
        if ($request->hasfile('picturevideo')) {
            // if (File::exists(public_path($user->balancesheet))) {
            //     File::delete(public_path($user->balancesheet));
            // }
            $picturevideo = $request->picturevideo;
            $picturevideoName = rand().'_'.$picturevideo->getClientOriginalName();
            $picturevideo->move(public_path('picturevideo'), $picturevideoName);
            $path = "/picturevideo/".$picturevideoName;
            $companydetailsupdate->picturevideo = $path;
        }

        $companydetailsupdate->update($request->all());

        Session::flash('success', __('Company updated Successfully.'));
        return response()->json(['status'=>1, 'msg'=>'Company updated Successfully.']);
        // return Redirect::back()->with('success', 'Data Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // first get company detail id
        $cd_id = CompanyDetail::where('cb_id','=',$id)->pluck('id')->first();
        //  then company details deleted first
        if(!empty($cd_id)){
            $companydetailsdelete = CompanyDetail::find($cd_id);
            $companydetailsdelete->delete();
        }
        // and second is use has deleted in company profile
        $companyuser = User::find($id);
        $companyuser->delete();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }
}
