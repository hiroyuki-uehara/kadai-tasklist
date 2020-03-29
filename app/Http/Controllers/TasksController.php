<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use App\Task;

class TasksController extends Controller {
    
    public function index()
    {
            $data = [];
            
            if (Auth::check()) {
                $user = Auth::user();
                $tasks = $user->tasks()->paginate(5);
    
                $data = [
                'user' => $user,
                'tasks' => $tasks, 
                ];
            }

            return view('welcome', $data);
    }

    
    public function create()
    {
        $task = new Task;
        
        return view('tasks.create', [
            'task' => $task,
        ]);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
            'status' => 'required|max:10',
        ]);
        
        $task = new Task;
        $task->content = $request->content;
        $task->status = $request->status;
        $task->user_id = $request->user()->id;
        if (Auth::id() === $task->user_id) {
            $task->save();
        }
            
            // $request->user()->tasks()->create([
            //     'content' => $request->content,
            //     'status' => $request->status,
            //     'user_id' => $request->user()->id,
            // ]);

        return redirect('/');
    }

    
    public function show($id)
    {
        $task = Task::find($id);
        
        if (Auth::id() === $task->user_id) {
            
            return view('tasks.show', [
                'task' => $task,
            ]);
        }
        else {
             return redirect('/'); 
        }
    }
    
    
    public function edit($id)
    {
        $task = Task::find($id);
        
        if (Auth::id() === $task->user_id) {
            return view('tasks.edit', [
                'task' => $task,
            ]);
        }
        else {
             return redirect('/'); 
        }
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'content' => 'required|max:191',
            'status' => 'required|max:10',
        ]);
        
        $task = Task::find($id);
        $task->content = $request->content;
        $task->status = $request->status;
        $task->user_id = $request->user()->id;
        if (Auth::id() === $task->user_id) {
            $task->save();
        }
        
        // $task = Task::find($id);
        // $request->task->create([
        //     'content' => $request->content,
        //     'status' => $request->status,
        //     'user_id' => $request->user()->id,
        // ]);
        
        return redirect('/');
    }

    
    public function destroy($id)
    {
        $task = Task::find($id);
        
        if (Auth::id() === $task->user_id) {
                $task->delete();
        }
        
        return redirect('/'); 
    }
}