@extends('layouts.default')
@section('content')
    <div class="w-full h-full">
        <div class="w-11/12 sm:w-8/12 m-auto p-5">
            <div>
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
            <form action="{{route('task.update', ['task' => $task])}}" method="post" class="w-full flex flex-col gap-3">
                @csrf
                @method('put')
                <h1 class="text-2xl font-semibold">Create Task</h1>
                <label for="title">Title</label>
                <input
                    type="text"
                    name="title"
                    placeholder="Enter a title"
                    value="{{$task->title}}"
                    class="w-full border px-2 border-gray-300 h-10"
                >
                <label for="title">Description</label>
                <textarea 
                    name="description" 
                    cols="30" 
                    rows="8"
                    placeholder="Enter a description"
                    class="w-full border border-gray-300 p-2 resize-none"
                >{{trim($task->description)}}</textarea>
                <input type="submit" value="Update Task" class="bg-blue-500 hover:bg-blue-600 duration-300 mt-3 rounded h-10 text-lg text-white">
            </form>
        </div>
    </div>
@stop