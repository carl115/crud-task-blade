<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\Task\TaskRequest;

class TaskController extends Controller
{
    /* VIEWS */
    public function viewTasks()
    {
        $tasks = $this->getTasks()->original;

        return view('index', compact('tasks'));
    }

    public function viewCreateTask()
    {
        return view('createTask');
    }

    public function viewUpdateTask(Task $task)
    {
        return view('editTask', compact('task'));
    }
    /*-/-*/

    /* API */
    public function getTasks() 
    {
        $tasks = Task::get();

        return response()->json($tasks, 200);
    }

    public function getTask(Task $task) 
    {
        return response()->json($task, 200);
    }

    public function createTask(TaskRequest $request)
    {
        $task = new Task($request->all());
        $task->save();

        return redirect('/');
        //return response()->json($task, 201);
    }

    public function updateTask(Task $task, TaskRequest $request)
    {
        $task->update($request->all());

        return redirect('/');
        //return response()->noContent();
    }

    public function deleteTask(Task $task)
    {
        $task->delete();

        return redirect('/');
        //return response()->noContent();
    }
    /*-/-*/
}
