<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function view(){
        return view('pages.tasks');
    }

    public function create(){
        $users = User::all();
        return view('pages.create', [
            'users' => $users
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'user_id' =>'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        Task::create($data);

        return redirect(route('home'));

    }

    public function update(Task $task, Request $request){
        $data = $request->validate([
            'title' =>'required',
            'description' => 'required',
        ]);

        $task->update($data);

        return redirect(route('home'));
    }

    public function edit($id){
        $task = Task::find($id);
        return view('pages.edit',[
            'task' => $task
        ]);
    }
}
