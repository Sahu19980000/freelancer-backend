<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::all();
        return view('admin.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->company_title = $request->company_title;

        if ($request->file('company_image')) {
            $company_image = $request->file('company_image');
            $filename = time() . '.' . $company_image->getClientOriginalExtension();
            $path = public_path('company_image');
            $company_image->move($path, $filename);
            $url = url('company_image/' . $filename); // Generate URL
            $company->company_image = $url; // Save URL to database
        }

        $company->company_loction = $request->company_loction;
        $company->company_work = $request->company_work;
        $company->timing = $request->timing;
        $company->rating = $request->rating;
        $company->description = $request->description;
        $company->save();
        return redirect()->route('company.index')->with('success', 'Data Has Been Created');
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
        $company = Company::find($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $company = Company::find($id);
        $company->company_title = $request->company_title;

        if ($request->file('company_image')) {
            $company_image = $request->file('company_image');
            $filename = time() . '.' . $company_image->getClientOriginalExtension();
            $path = public_path('company_image');
            $company_image->move($path, $filename);
            $url = url('company_image/' . $filename); // Generate URL
            $company->company_image = $url; // Save URL to database
        }

        $company->company_loction = $request->company_loction;
        $company->company_work = $request->company_work;
        $company->timing = $request->timing;
        $company->rating = $request->rating;
        $company->description = $request->description;
        $company->save();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = Company::find($id);
        $cat->delete();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }
}
