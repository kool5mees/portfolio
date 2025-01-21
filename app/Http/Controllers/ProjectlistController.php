<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrameworkProject;
use App\Models\Framework;
use App\Models\Project;

class ProjectlistController extends Controller
{
    public function projects(Request $request){
        $frameworks = Framework::all();
        $frameworkId = $request->input('framework_id');
        
        $filteredProjects = Project::when($frameworkId, function ($query) use ($frameworkId) {
            $query->whereHas('frameworks', function ($subQuery) use ($frameworkId) {
                $subQuery->where('framework_id', $frameworkId);
            });
        })->get();

        return view('projects', ['frameworks' => $frameworks,
            'projects' => $filteredProjects,
            'frameworkId' => $frameworkId,]);
    }
}