<div class="bg-gray-50 py-3 sticky top-0">
    <div class="w-10/12 flex justify-between m-auto items-center">
        <a id="logo" href="/">
            <img src="{{URL('storage/images/logo.png')}}" class="h-10">
        </a>
        <div>
            @livewire('weather')
        </div>
        <div class="flex gap-4">
            <a href="/create">
                <button class="bg-sky-500 hover:bg-sky-600 h-10 px-5 rounded text-white">
                    Create Task
                </button>
            </a>
        </div>
    </div>
 </div>