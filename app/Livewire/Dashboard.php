<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public string $item = '';
    public array $checklist = [];
    public string $priority = 'low';

    public function addChecklistItem()
    {
        $priorityClass = '';
        switch ($this->priority) {
            case 'low':
                $priorityClass = 'bg-green-500';
                break;
            case 'medium':
                $priorityClass = 'bg-orange-500';
                break;
            case 'high':
                $priorityClass = 'bg-red-500';
                break;
        }
        $itemConfig = [
            'item' => $this->item,
            'priorityClass' => $priorityClass
        ];
        $this->checklist[] = $itemConfig;
        $this->item = '';
    }

    public function removeChecklistItem(int $index)
    {
        unset($this->checklist[$index]);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
