<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subTask;

class SubTaskController extends Controller
{
    public function store(Request $request){

        // $fillable =$request->validate([
        //     'sub_title'=>'required|string',
        //     'phone'=>'required|string',
        //     'priority'=>'required|integer',
        //     'note'=>'required|text',
        //     'date' =>'required|date',
        // ]);

        // $sub =subTask::create( $fillable)->all();

        dd($request);
        subTask::create($request->all());
        return redirect()->back();
    }

    public function getAll(){

    }
    public function getById(){

    }
    public function update(){

    }
    public function search(){

    }
}
