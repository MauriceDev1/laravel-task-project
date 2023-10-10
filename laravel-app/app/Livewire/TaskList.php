<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class TaskList extends Component
{

    use WithPagination;

    public $screen = "view";
    public $taskTitle;
    public $taskDesc;

    public function createTask() {
        $validate = $this->validate([
            'taskTitle' => 'required|min:3|max:50',
            'taskDesc' => 'required|min:10|max:150'
        ]);

        Task::create([
            'user_id' => 1,
            'title' => $this->taskTitle,
            'description' => $this->taskDesc
        ]);

        $this->screen = "View";
    }

    public function editTask($taskID) {
        dd($taskID);
    }

    public function deleteTask(Task $task) {
        $task->delete();
    }

    public function changeScreen($state) {
        if($state == "create"){
            $this->screen = "create";
        } else {
            $this->screen = "view";
        }
    }

    public function render()
    {
        $userId = 1; 
        $tasks = Task::paginate(5);

        return view('livewire.task-list',[
            'userId' => $userId,
            'allTasks' => $tasks,
            'screen' => $this->screen
        ]);
    }
}
