<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteUser extends Component
{
    public bool $isShowModal = false;

    public function render()
    {
        return view('livewire.delete-user');
    }

    public function handle()
    {
        return 'handle';
    }

}
