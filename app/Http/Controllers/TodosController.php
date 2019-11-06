<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use Session;

class TodosController extends Controller
{
    public function index(){

        $todoValues = Todo::all();

        return view('todo')->with('todoKey', $todoValues);
    }

    public function store(Request $request){

        // dd($request);
        // dd($request->all());

        $todoStore = new Todo;

        // the todoData here is the field name (in the form)
        $todoStore->todo = $request->todoData;
        $todoStore->save();

        // before redirecting, you can set a session to displays messages
        session::flash('success', 'You todo was added successfully!');

        // then return the user back to the first page (which is /todo)
        return redirect()->back();
    }

    public function delete($id){

        // dd($id);
        $eraseTodo = Todo::find($id);

        $eraseTodo->delete();

        session::flash('success', 'You todo was deleted successfully!');

        return redirect()->back();
    }

    public function update($id){
        $updateTodo = Todo::find($id);

        return view('update')->with('todo', $updateTodo);

    }

    public function save(Request $request, $id){
        $todoSave = Todo::find($id);

        $todoSave->todo = $request->todo;

        $todoSave->save();

        session::flash('success', 'You todo was updated successfully!');
        
        return redirect()->route('todo');
        // dd($request->all());
    }

    public function completed($id){
        $todoEnded = Todo::find($id);

        $todoEnded->completed = 1;

        $todoEnded->save();
        Session::flash('success', 'You todo was marked as completed successfully!');

        return redirect()->back();
    }
}
