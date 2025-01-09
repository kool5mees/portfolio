<?php

namespace App\Http\Controllers;

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

            if($Project->id){
                $projectid= $Project->id;
            }


        };



        $frameworks = Framework::all();
        return view('projectcreate', ['frameworks' => $frameworks]);
    }
}
