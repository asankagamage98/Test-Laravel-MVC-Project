<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
    public function store(Request $request){
        try {
            test::create($request->all());
            return redirect()->back();
            
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function index(){
        $tests = test::all();
        return view('Pages.Todo.test')->with('tests',$tests);

    }

}
