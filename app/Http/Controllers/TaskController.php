<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

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

        return redirect()->route('homeIndex');
    }
}
