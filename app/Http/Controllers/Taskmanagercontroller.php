<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;


class Taskmanagercontroller extends Controller
{

	public function index()
	{

           $tasks=Task::all();
           // dd($tasks); 


		    return view('tasks',compact('tasks'));

	}

public function create()
	{

           


		    return view('tasks.create');

	}
public function store(Request $request)
	{

           $task=new Task;
           $task->task=$request->task;
           $task->description=$request->description;
           $task->save();
          

          return Redirect('/task');



//dd($request->description);
	}


 public function edit($taskId)
{
	$task=Task::find($taskId);
	return view ("tasks.edit", compact('task'));
}

public function update(Request $request, $taskId)
{
	$task = Task::where('id',$taskId)->first();

	$task->task=$request->input('task');
	$task->description=$request->description;

	$task->save();

	 return redirect()->route("task.index"); 
}

public function destroy($taskid)
{
	$task=Task::find($taskid);
	$task->delete();
	 return redirect()->route("task.index");   

}




}
