<div class="w-full py-5">
    <form wire:submit="handleSearch" action="" class="w-9/12 bg-white h-full gap-4 flex m-auto">
        <input 
            wire:model="userName"
            type="text" 
            name="userName" 
            placeholder="Enter user name" 
            class="w-1/4 border border-gray-300 h-10 rounded p-2"
        >
        <input 
            wire:model="taskName"
            type="text" 
            name="userId" 
            placeholder="Enter task title" 
            class="w-1/4 border border-gray-300 h-10 rounded p-2"
        >
        <input 
            wire:model="taskDate"
            type="date" 
            name="taskDate" 
            placeholder="Enter Task Name" 
            class="w-1/4 border border-gray-300 h-10 rounded p-2"
        >
        <button class="w-1/4 h-10 rounded text-white text-lg bg-purple-700 hover:bg-purple-800 ease-in-out duration-300">
            Search
        </button>
    </form>
</div>