<?php

namespace App\Livewire;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserTask extends Component
{
    use WithPagination;

    public $userName;

    public $taskName;

    public $taskComplete;

    public $taskDate;

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
 
    public function search()
    {
        $this->resetPage();
    }
 

    public function render()
    {
        $tasks = Task::query();

        $username = $this->userName;

        if($username){
            $tasks->whereHas('user', function ($query) use ($username) {
                $query->where('name', 'like', '%' . $username . '%');
            });
        }
        
        if($this->taskName){
            $tasks->where('title', 'like', "%$this->taskName%");
        }

        if($this->taskComplete){
            $tasks->where('completed',$this->taskComplete);
        }

        if($this->taskDate){
            $tasks->whereDate('created_at',$this->taskDate);
        }

        $result = $tasks->paginate(5);        

        return view('livewire.user-task',[
            'tasks' => $result
        ]);
    }
}
