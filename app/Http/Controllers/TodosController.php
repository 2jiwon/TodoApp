<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index () {
      $todos = Todo::all();

      return view('todos')->with('todos', $todos);
    }

    public function store(Request $request) {
      $todo = new Todo;

      $todo->todo = $request->todo;
      $todo->save();

      return redirect()->back();
    }
}
