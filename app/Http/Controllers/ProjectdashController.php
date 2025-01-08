<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectdashController extends Controller
{
    public function project(){
        return view('projectsdash');
    }
}
