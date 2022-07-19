<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\DataContent;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;

        $projects = $this->show();

        return view('project.project', [
            'nameUser' => $nameUser,
            'user' => $user,
            'projects' => $projects
        ]);
    }

    public function config(){
        $user = Auth::user();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $nameUser['email'] = $user->email;

        $projectTypes = ProjectType::All();

        return view('project.config', [
            'nameUser' => $nameUser,
            'user' => $user,
            'projectTypes' => $projectTypes
        ]);
    }

    public function projectsUser(){
        return Auth::user();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project['name'] = $request->name;
        $project['description'] = $request->description;
        $project->save();

        return redirect()->route('project');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        if($id){

        }else{
            return Project::All();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $project = Project::where('id', $id)->first();

        return view('project.edit', [
            'nameUser' => $nameUser,
            'user' => $user,
            'project' => $project
        ]);
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
        $project = Project::where('id', $id)->first();
        $project->update($request->all());

        return redirect()->route('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect()->route('project');
    }

    public function open($id){
        $user = Auth::user();
        $nameUser = $this->getLastNameCommaFirstName($user->name);
        $project = Project::where('id', $id)->first();
        $dataContents = DataContent::where('projects_id', $id)->orderBy('projects_id')->get();
        $projectType = ProjectType::where('id', 5)->get();

        //dd($dataContents[2]->project_types()->first());

        return view('project.open', [
            'nameUser' => $nameUser,
            'user' => $user,
            'project' => $project,
            'dataContents' => $dataContents
        ]);
    }

    private function getLastNameCommaFirstName($fullName) {
        $names = explode(' ', $fullName);
        $firstName = $names[0];
        $lastName = str_replace($firstName, '', $fullName) ;
        return ['name'=>$firstName, 'lastName'=>$lastName];
    }
}
