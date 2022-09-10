<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUser extends Component
{
    public bool $isShowModal = false;
    public $users;
    public $currentUserId;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.manage-user')->with('users', $this->users);
    }

    public function confirmDelete($userId)
    {
        $this->currentUserId = $userId;
        $this->isShowModal = true;
    }

    public function delete()
    {
        if ($this->currentUserId) {
            User::find($this->currentUserId)->delete();
        }

        $this->isShowModal = false;
    }

}
