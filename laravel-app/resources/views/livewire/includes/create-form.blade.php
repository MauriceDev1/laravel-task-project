<form wire:submit="createTask" action="" class="w-full flex flex-col gap-3">
    <div>
        <button 
            wire:click="changeScreen('view')"
            class="text-sky-500 hover:text-gray-600"
        >
            View tasks 
        </button>    
        / Create Task
    </div>
    <h1 class="text-2xl font-semibold">Create Task</h1>
    <label for="title">Title</label>
    <input
        wire:model="taskTitle" 
        type="text"
        placeholder="Enter a title"
        class="w-full border px-2 border-gray-300 h-10"
    >
    <label for="title">Description</label>
    <textarea 
        wire:model="taskDesc" 
        name="description" 
        cols="30" 
        rows="8"
        placeholder="Enter a description"
        class="w-full border border-gray-300 p-2 resize-none"
    >
    </textarea>
    <button
        class="bg-blue-500 hover:bg-blue-600 duration-300 mt-3 rounded h-10 text-lg text-white"
    >
        Create New Task
    </button>
</form>