<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('users')]
class Index extends Component
{
    use \Livewire\WithPagination;
    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::query()->latest()->paginate(10)
        ]);
    }
}
