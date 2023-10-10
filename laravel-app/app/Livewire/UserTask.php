<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class UserTask extends Component
{
    use WithPagination;

    public $userId;

    public $taskName;

    public function delete(Task $taskId){
        $taskId->delete();
    }

    public function changeStatus($taskId){
        $record = Task::find($taskId);
        if ($record->completed == 0) {

            $record->completed = true;
        
            $record->save();
        } else {

            $record->completed = false;
        
            $record->save();
        }
    }

    public function handleSearch() {
        dd($this->userId . ' ' . $this->taskName );
    }

    public function render()
    {
        $tasks = Task::paginate(5);

        return view('livewire.user-task',[
            'tasks' => $tasks
        ]);
    }
}
