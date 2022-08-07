<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $title;
    public $count = 0;
 
    public function increment()
    {
        $this->count++;
    }

    public function mount(){
        $this->title = 'Hello from livewire';

    }
    public function setTitle($title){
            $this->title = $title;

    }

    public function render()
    {
        return view('livewire.post');

    }
}
