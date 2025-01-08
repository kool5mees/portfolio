<?php

namespace App\Http\Controllers;

use App\Models\Framework;
use Illuminate\Http\Request;

class ProjectcreateController extends Controller
{
    public function projectcreate(){
        $frameworks = Framework::all();
        return view('projectcreate', ['frameworks' => $frameworks]);
    }
}
