<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\PseudoTypes\False_;

class TodosController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view("Todos.index", compact("todos"));
    }
    public function show(Todo $todo)
    {
        return view("Todos.show", compact("todo"));
    }
    public function create()
     {
        return view("Todos.create");
     }
     public function store(Request $request)
     {
        $this->validate(request(), [
            "name" => "required|min:6",
            "description" => "required|min:10"
        ]);
        $data = $request->all();

        $todo = new Todo();
        $todo->name = $data["name"];
        $todo->description = $data["description"];
        $todo->completed = false;

        $todo->save();

        session()->flash("success", "Todo Created successfully");

        return redirect("/todo");
     }
     public function edit(Todo $todo)
     {
        return view("Todos.edit", compact("todo"));
     }

     public function update(Todo $todo, Request $request)
     {
        $this->validate(request(), [
            "name" => "required|min:6",
            "description" => "required|min:10"
        ]);

        $data = $request->all();
        $todo->name = $data["name"];
        $todo->description = $data["description"];
        $todo->completed = false;

        $todo->save();

        session()->flash("success", "Todo Updated successfully");

        return redirect("/todo");
     }

     public function destroy(Todo $todo)
     {
        $todo->delete();
        session()->flash("success", "Todo Deleted successfully");

        return redirect("/todo");

     }

     public function complete (Todo $todo)
     {
        $todo->completed = true;
        $todo->save();

        session()->flash("success", "Todo Completed Successfully");

        return redirect("/todo");
     }

}
