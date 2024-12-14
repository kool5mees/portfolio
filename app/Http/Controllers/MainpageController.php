<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aboutmecontent;

class MainpageController extends Controller
{
    public function Mainpage(){
        $aboutme = Aboutmecontent::all();
        return view('aboutme', ['aboutme' => $aboutme]);
    }
}
