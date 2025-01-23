<?php

namespace App\Http\Controllers;

use App\Models\Aboutmecontent;
use App\Models\Framework;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    public function aboutmeadmin(Request $request)
    {
        $aboutmeedit = Aboutmecontent::find(1);
        if($request->isMethod('post') && $request->posttype == 'update'){
        $aboutmeedit->titel = $request->titel;
        $aboutmeedit->content = $request->content;
        $aboutmeedit->img = $request->img;
        $aboutmeedit->link1 = $request->link1;
        $aboutmeedit->link2 = $request->link2;
        $aboutmeedit->link3 = $request->link3;
        $aboutmeedit->img1 = $request->img1;
        $aboutmeedit->img2 = $request->img2;
        $aboutmeedit->img3 = $request->img3;
        $aboutmeedit->save();
        };

        if($request->isMethod('post') && $request->posttype == 'add'){
            $request->validate([
                'naam' => 'required',
                'logo' => 'required|file|',
            ]);
            $framework = new Framework();
            $framework->naam =$request->get('naam');
            $path = $request->file('logo')->store('frameworkimages', ["disk"=>'public']);
            $framework->logo = $path;
            $framework->save();
            };



        $aboutme = Aboutmecontent::all();
        return view("aboutmeadmin", ['aboutme' => $aboutme]);
    }
}
