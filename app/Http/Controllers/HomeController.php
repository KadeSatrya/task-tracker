<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $tasks = Task::where('user_id', auth()->id())->get();
        return view('home', ['tasks' => $tasks]);
    }
}
