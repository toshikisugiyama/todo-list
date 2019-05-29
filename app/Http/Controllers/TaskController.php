<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index() {
      $tasks = Task::latest()->where('done_flag', 0)->get();
      return view('tasks.index',['tasks'=>$tasks]);
    }
    public function create(Request $request) {
      $task = new Task();
      $task->title = $request->title;
      $task->user_id = Auth::id();
      $task->save();
      return redirect('/');
    }
    public function destroy(Task $task) {
      $task->delete();
      return redirect('/');
    }
    public function done(Task $task) {
      $task->done_flag = 1;
      $task->save();
      return redirect('/');
    }
}
