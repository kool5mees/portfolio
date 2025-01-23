<?php

namespace App\Http\Controllers;

use App\Models\FrameworkProject;
use App\Models\Framework;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectcreateController extends Controller
{
    public function projectcreate(Request $request){

        if($request->isMethod('post')){
            $Project = new Project();
            $Project->naam =$request->get('naam');
            $Project->beschrijving =$request->get('beschrijving');
            if($request->filled('github')){
                $Project->github =$request->get('github');
            }
            if($request->filled('site')){
                $Project->site =$request->get('site');
            }
            if($request->filled('github')){
                $Project->download =$request->get('download');
            }
            $Project->thumbnail =$request->get('thumbnail');
            $Project->save();

            foreach ($request->input('frameworks',[]) as $f){
                $Project->frameworks()->attach($f);
            };
            

        };

        $frameworks = Framework::all();
        return view('projectcreate', ['frameworks' => $frameworks]);
    }

    public function projectedit(Request $request, $id){
        if($request->isMethod('post')){
        $project = Project::find($id);
        $project->naam = $request->input('naam');
        $project->beschrijving = $request->input('beschrijving');
        $project->github = $request->input('github');
        $project->site = $request->input('site');
        $project->download = $request->input('download');
        $project->thumbnail = $request->input('thumbnail');
        $project->save();

        if ($request->has('frameworks')) {
            $project->frameworks()->sync($request->input('frameworks'));
        } else {
            $project->frameworks()->sync([]);
        }}

        $project = Project::where('id', $id)->first();
        $filteredFrameworks = Framework::when($id, function ($query) use ($id) {
            $query->whereHas('projects', function ($subQuery) use ($id) {
                $subQuery->where('project_id', $id);
            });
        })->get();
        $frameworks = Framework::all();
        return view('projectedit',['project'=> $project, 'frameworksfilt' => $filteredFrameworks, 'frameworks' => $frameworks]);
    }
}
