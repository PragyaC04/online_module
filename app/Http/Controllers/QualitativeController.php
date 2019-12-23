<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualitative;
use App\Analytical;
use App\Creative;
use App\Comprehension;

class QualitativeController extends Controller
{
    public function add($c){
        return view('addtest')->with('c',$c);
    }

    public function index(){
        $qual = Qualitative::all()->unique('setid');
        return view('test')->with('qual',$qual);
    }

    public function edit($sid,$qid){
        
        
        $a=$sid;
        $qual = Qualitative::where('sid',$sid)->where('qid',$qid);
        return view('qualedit')->with('qual',$qual)->with('a',$a); 
    }

    public function display($sid){
        $a=$sid;
        $qual = Qualitative::all()->where('setid',$sid);
        $analy = Analytical::all()->where('setid',$sid);
        $creat = Creative::all()->where('setid',$sid);
        $comp = Comprehension::all()->where('setid',$sid);
        return view('viewtest')->with('qual',$qual)->with('analy',$analy)->with('creat',$creat)->with('comp',$comp)->with('a',$a);
    }

    public function store($c,Request $request){
        $qual = new Qualitative();
        $qual->qid = $request->input('q_number');
        $qual->question = $request->input('q_content');
        $qual->marks = $request->input('q_mks');
        $qual->setid = $request->input('sid');
        $qual->correct = $request->input('correct');
        if($request->hasfile('q_image')){
            $file = $request->file('q_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/questions/', $filename);
            $qual->questionimg = $filename;
        }
        else
        {
            $qual->questionimg=' ';
        }
        
        $qual->option1 = $request->input('o1_content');
        if($request->hasfile('o1_image')){
            $file = $request->file('o1_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option1/', $filename);
            $qual->option1img = $filename;
        }
        else
        {
            $qual->option1img=' ';
        }

        
        $qual->option2 = $request->input('o2_content');
        if($request->hasfile('o2_image')){
            $file = $request->file('o2_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option2/', $filename);
            $qual->option2img = $filename;
        }
        else
        {
            $qual->option2img=' ';
        }

        $qual->option3 = $request->input('o3_content');
        if($request->hasfile('o3_image')){
            $file = $request->file('o3_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option3/', $filename);
            $qual->option3img = $filename;
        }
        else
        {
            $qual->option3img=' ';
        }

        $qual->option4 = $request->input('o4_content');
        if($request->hasfile('o4_image')){
            $file = $request->file('o4_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/option4/', $filename);
            $qual->option4img = $filename;
        }
        else
        {
            $qual->option4img=' ';
        }

        $qual->save();
        return view('addtest')->with('qual',$qual);
    } 
}
