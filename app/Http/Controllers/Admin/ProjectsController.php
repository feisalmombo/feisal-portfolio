<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Carbon\Carbon;
use DB;
use Auth;

class ProjectsController extends Controller
{
    protected $activeMenu = ['admin','project'];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::All();
        $data['title'] = 'Projects';
        $data['projects'] = $projects;
        $data['active'] = $this->activeMenu;

        return view('admin.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        $data['title'] = 'Add Project';
        $data['project'] = $project;
        $data['active'] = $this->activeMenu;

        return view('admin.project.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_title' => 'required',
            'project_detail' => 'required',
            'project_attachment' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
        ]);

        $project = new Project();
        $project = $this->updateData($project, $request);
        
        return redirect()->back()->with('message', 'Project is successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::findOrFail($id);

        $data['title'] = 'Project Details';
        $data['project'] = $project;
        $data['active'] = $this->activeMenu;

        return view('admin.project.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $data['title'] = 'Edit Project';
        $data['project'] = $project;
        $data['active'] = $this->activeMenu;

        return view('admin.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'project_title' => 'required',
            'project_detail' => 'required',
            'project_attachment' => 'mimes:jpeg,jpg,png,gif|required|max:2048',
        ]);

        $project = Project::findOrFail($id);
        $project = $this->updateData($project, $request);

        return redirect(route('admin.project.show', $project->id))->with('message', 'Project is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect(route('admin.project.index'))->with('message', 'Project is successfully deleted');
    }

    public function updateData($project, $request)
    {
        $project->project_title = $request->get('project_title');
        $project->project_details = $request->get('project_detail');
        $project->project_image = $request->project_attachment->store('ProjectAttachments', 'public');
        $project->save();

        return $project;
    }
}
