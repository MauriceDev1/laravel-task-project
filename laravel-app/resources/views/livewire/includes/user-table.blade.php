<div>
    <div class="w-full justify-between flex items-center m-autop pb-5">
        <h1 class=" text-2xl font-semibold items-center">
            List Of All My Tasks
        </h1>
        <button wire:click="changeScreen('create')" class="bg-purple-600 h-10 px-5 rounded hover:bg-purple-700 text-white ">
            Create Task
        </button>
    </div>
    @if(count($allTasks) != 0)
        <div class="w-full flex m-auto rounede border border-gray-300 py-3 font-semibold bg-gray-100">
            <div class="w-1/5 px-4">
                id
            </div>
            <div class="w-1/5 px-4">
                Title
            </div>
            <div class="w-1/5 px-4">
                Description
            </div>
            <div class="w-1/5 px-4">
                Completed
            </div>
            <div class="w-1/5 px-4">
                Action
            </div>
        </div>
        <div class="w-full pt-5 flex flex-col gap-3 m-auto items-center">
            
                @foreach($allTasks as $task)
                    <div class="w-full flex h-20 bg-gray-100 border border-gray-300 items-center">
                        <div class="w-1/5 px-4">
                            {{ $task->id }}
                        </div>
                        <div class="w-1/5 px-4">
                            {{ $task->title }}
                        </div>
                        <div class="w-1/5 px-4">
                            {{ $task->description }}
                        </div>
                        <div class="w-1/5 px-4">
                            {{ $task->completed }}
                        </div>
                        <div class="w-1/5 px-4">
                            <button wire:click="deleteTask({{ $task->id }})">Delete</button>
                            <button wire:click="editTask({{ $task->id }})">Edit</button>
                        </div>
                    </div>
                @endforeach
                <div class="w-full">
                    {{ $allTasks->links()}}
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
    <div class="w-0 bg-black bg-opacity-50 fixed top-0 right-0">
        <div class="w-[500px] bg-white h-screen">
            test
        </div>
    </div>
</div>