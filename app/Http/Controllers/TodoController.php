<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Log;  //check logs

class TodoController extends Controller
{
    public function index(){
        return view('Pages.Todo.index');
    }

    public function store(Request $request){

        $record = $request->validate([
            'name'=>'required|string',
            'price' =>'required|string'
        ]);

        $user = todo::create($record)->all();
        Log::info($user);

        return redirect()->back();
        // return redirect()->back(route('Todo'));  can use both code
    }

    public function getAll(){
        return todo::all();
    }

    public function getById(Request $request, string $id){
       return todo::find($id);
    }

    public function update(Request $request , string $id){
        $user = todo::find( $id);
        $user->update( $request->all());

        return $user;
    }

    public function search(string $name){
        return todo::where('name','like','%'.$name.'%')->get();
    }

    public function delete(string $id){
        $data = todo::destroy($id);
        return todo::all();
    }
}
