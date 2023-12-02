<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = 'wash';
    public $todos = [
        'tAKE OUT TRASH',
        'DO THE DISHES',
    ];

    public function addTodo()
    {
        dd('hello');
    }
    public function render()
    {
        return view('livewire.todos');
    }
}
