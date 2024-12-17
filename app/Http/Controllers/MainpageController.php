<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutmecontent;
use App\Models\Framework;

class MainpageController extends Controller
{
    public function Mainpage(){
        $aboutme = Aboutmecontent::all();
        $frameworks = Framework::all();
        return view('aboutme', ['aboutme' => $aboutme, 'framework' => $frameworks]);
    }
}
