<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Redirect;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::all();
        return view('admin.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->project_title = $request->project_title;

        if ($request->file('project_screenshort')) {
            $project_screenshort = $request->file('project_screenshort');
            $filename = time() . '.' . $project_screenshort->getClientOriginalExtension();
            $path = public_path('project_screenshort');
            $project_screenshort->move($path, $filename);
            $url = url('project_screenshort/' . $filename); // Generate URL
            $project->project_screenshort = $url; // Save URL to database
        }

        $project->project_company = $request->project_company;
        $project->timing = $request->timing;
        $project->rating = $request->rating;
        $project->description = $request->description;
        $project->save();
        return redirect()->route('project.index')->with('success', 'Data Has Been Created');
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
        $project = Project::find($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $project = Project::find($id);
        $project->project_title = $request->project_title;

        if ($request->file('project_screenshort')) {
            $project_screenshort = $request->file('project_screenshort');
            $filename = time() . '.' . $project_screenshort->getClientOriginalExtension();
            $path = public_path('project_screenshort');
            $project_screenshort->move($path, $filename);
            $url = url('project_screenshort/' . $filename); // Generate URL
            $project->project_screenshort = $url; // Save URL to database
        }

        $project->project_company = $request->project_company;
        $project->timing = $request->timing;
        $project->rating = $request->rating;
        $project->description = $request->description;
        $project->save();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);
        $project->delete();
        return Redirect::back()->with('success', 'Data Updated successfully!');
    }
}
