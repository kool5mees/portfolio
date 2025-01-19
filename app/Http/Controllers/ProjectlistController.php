<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectlistController extends Controller
{
    public function projects(){
        return view('projects');
    }
}