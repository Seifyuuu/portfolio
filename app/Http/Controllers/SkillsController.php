<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::first();
        $skills = Skill::all();
        return view("backoffice.sections.skills.all", compact("profile", "skills"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::first();
        return view("backoffice.sections.skills.create", compact("profile"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skills = new Skill();
        $skills->name = $request->name;
        $skills->level = $request->level;
        $skills->save();
        return redirect()->route("skills.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skill  $skills
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skills)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skill  $skills
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skills)
    {
        $profile = Profile::first();
        return view("backoffice.sections.skills.edit", compact("profile"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skills
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skills)
    {
        $skills->name = $request->name;
        $skills->level = $request->level;
        $skills->save();
        return redirect()->route("skills.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skill  $skills
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skills)
    {
        $skills->delete();
        return redirect()->route('skills.index');
    }
}
