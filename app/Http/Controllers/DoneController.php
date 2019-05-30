<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;

class DoneController extends Controller
{
    public function show() {
      $tasks = Task::latest()->where('done_flag', 1)->get();
      return view('tasks.done',['tasks'=>$tasks]);
    }
}
