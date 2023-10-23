<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subTask;
use Illuminate\Support\Facades\Log; //check logs

class SubTaskController extends Controller
{
    public function store(Request $request){

        subTask::create($request->all());
        return redirect()->back();
    }

    public function update(){

    }
    public function search(){

    }
}
