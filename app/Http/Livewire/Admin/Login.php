<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Login extends Component
{
    public function render()
    {
        return view('livewire.admin.login')->layout('livewire.admin.login');
    }
}
