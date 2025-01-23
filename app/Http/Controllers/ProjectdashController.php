<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectdashController extends Controller
{
    public function project(){

        $projects = Project::all();
        return view('projectsdash', ['projects' => $projects]);
    }
}
