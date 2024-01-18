<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Log;


class TaskController extends Controller
{
    public function index(){
        return view('taskForm');
    }

    public function submit() {
        $task = Task::create(
            [
                'title' => request()->input('title'),
                'description' => request()->input('description')
            ]
        );

        return redirect()->route('home.index');
    }

    public function changeStatus($id){
        $task = Task::where('id', $id)->first();
        $task->isFinished = !($task->isFinished);
        $task->save();
        return redirect()->route('home.index');
    }

    public function delete($id){
        Log::info('Route taken: ' . request()->path());

        $task = Task::where('id', $id)->first();
        $task->delete();
        return redirect()->route('home.index');
    }
}
