@extends('layouts.default')
@section('content')
    <div class="bg-gray-50 w-full min-h-screen">
        <div class="w-10/12 m-auto bg-white p-5 border">
            @livewire('task-list')
        </div>
    </div>
@stop