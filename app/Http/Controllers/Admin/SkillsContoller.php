<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skills;
use Carbon\Carbon;
use DB;
use Auth;

class SkillsContoller extends Controller
{
    protected $activeMenu = ['admin','skills'];

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
        $skills = Skills::All();
        $data['title'] = 'Skills';
        $data['skills'] = $skills;
        $data['active'] = $this->activeMenu;

        return view('admin.skills.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skill = new Skills();
        $data['title'] = 'Add Skill';
        $data['skill'] = $skill;
        $data['active'] = $this->activeMenu;

        return view('admin.skills.create', $data);
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
            'skills_name' => 'required',
            'skills_description' => 'required',
        ]);

        $skill = new Skills();
        $skill = $this->updateData($skill, $request);

        return redirect('admin/skills/index')->with('message', 'Skill is successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $skill = Skills::findOrFail($id);

        $data['title'] = 'Skill Details';
        $data['skill'] = $skill;
        $data['active'] = $this->activeMenu;

        return view('admin.skillS.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill = Skills::findOrFail($id);

        $data['title'] = 'Edit Skill';
        $data['skill'] = $skill;
        $data['active'] = $this->activeMenu;

        return view('admin.skills.edit', $data);
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
            'skills_name' => 'required',
            'skills_description' => 'required',
        ]);

        $skill = Skills::findOrFail($id);
        $skill = $this->updateData($skill, $request);

        return redirect(route('admin.skills.show', $skill->id))->with('message', 'Skill is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skills::findOrFail($id);
        $skill->delete();

        return redirect()->back()->with('message', 'Skill is successfully deleted');
    }

    public function updateData($skill, $request)
    {
        $skill->skills_name = $request->get('skills_name');
        $skill->skills_description = $request->get('skills_description');
        $skill->save();

        return $skill;
    }
}
