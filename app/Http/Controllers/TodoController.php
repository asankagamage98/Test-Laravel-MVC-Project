<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Log;  //check logs

class TodoController extends Controller
{


    public function store(Request $request){

        $record = $request->validate([
            'name'=>'required|string',
            'price' =>'required|string'
        ]);

        $task = todo::create($record)->all();
        Log::info($task);

        return redirect()->back();
        // return redirect()->back(route('Todo'));  can use both code
    }

    public function getAll(){
        $tasks = todo::all();
        return view('Pages.Todo.index')->with('tasks', $tasks);

    }

    public function getById(string $id){
       return todo::find($id);
    }



    public function update(Request $request , string $id){
        $user = todo::find( $id);
        $tasks = $user->update( $request->all());
        return redirect()->back();
    }

    public function search(string $name){
        return todo::where('name','like','%'.$name.'%')->get();
    }

    public function delete($id){
          todo::destroy($id);
        // return todo::all();

        //  $data =todo::find($id);
        //  $data->delete();

        return redirect()->back();
    }


    //page route and pass data for pages

    public function getDetailUpdate(Request $request){
        $tasks = todo::find($request['id']);
        return view('Pages.Todo.edit')->with('tasks', $tasks); // data pass for Pages.Todo.editt page
    }

    public function sub($id){
        $tasks = todo::find($id);
        return view('Pages.Todo.sub')->with('tasks', $tasks); //// data pass for Pages.Todo.sub page
    }

}
