<div class="w-full">
    @include('livewire.includes.search-task')
    @if(count($tasks) != 0)
        <div class="w-9/12 flex m-auto rounede border border-gray-300 py-3 font-semibold bg-gray-100">
            <div class="w-1/12 px-4">
                Check
            </div>
            <div class="w-1/12 px-4">
                id
            </div>
            <div class="w-2/12 px-4">
                User
            </div>
            <div class="w-2/12 px-4">
                Title
            </div>
            <div class="w-2/12 px-4">
                Status
            </div>
            <div class="w-2/12 px-4">
                Date
            </div>
            <div class="w-2/12 px-4">
                Action
            </div>
        </div>
        <div class="w-9/12 py-5 flex flex-col gap-3 m-auto items-center">
            
                @foreach($tasks as $task)
                    <div class="w-full flex h-16 bg-gray-100 border border-gray-300 items-center">
                        <div class="w-1/12 px-4">
                            <input wire:click="changeStatus({{$task->id}})" type="checkbox"  {{ old($task->completed) ? 'checked' : '' }}/>
                        </div>
                        <div class="w-1/12 px-4">
                            {{ $task->id }}
                        </div>
                        <div class="w-2/12 px-4">
                            {{ $task->user->name }}
                        </div>
                        <div class="w-2/12 px-4">
                            {{ $task->title }}
                        </div>
                        <div class="w-2/12 px-4">
                            @if($task->completed)
                                complete
                            @else
                                Not complete
                            @endif
                        </div>
                        <div class="w-2/12 px-4">
                            {{ $task->created_at }}
                        </div>
                        <div class="w-2/12 px-4 flex gap-3">
                            <a href="/edit_task/{{$task->id}}" class="text-sky-500 hover:text-yellow-500">
                                Edit
                            </a>
                            <div>
                                .
                            </div>
                            <button wire:click="delete({{$task->id}})" class="text-sky-500 hover:text-red-500"> 
                                Delete
                            </button>
                        </div>
                    </div>
                @endforeach
                <div class="w-full">
                    {{ $tasks->links()}}
                </div>
        </div>
        @else
            <div class="w-full py-10 flex">
                <div class="bg-gray-200 rounded flex m-auto h-32 border px-10">
                    <h3 class="m-auto text-gray-600 font-semibold">
                        There is no tasks at the moment!
                    </h3>
                </div>
            </div>

        @endif
   </div>
