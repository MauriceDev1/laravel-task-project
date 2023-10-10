<div>
    @if($screen == 'create')
        @include('livewire.includes.create-form')
    @else
        @include('livewire.includes.user-table')
    @endif 
</div>
