<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ManageUser extends Component
{
    public bool $isShowModal = false;
    public $users;
    public $currentUser;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.manage-user')->with('users', $this->users);
    }

    public function confirmDelete(User $user)
    {
        $this->currentUser = $user;
        $this->isShowModal = true;
    }

    public function delete()
    {
        if ($this->currentUser) {
            $this->currentUser->delete();
        }

        $this->isShowModal = false;
    }

}
