<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class HalamanPendaftaran extends Component
{
    

    public function render()
    {
        return view('livewire.halaman-pendaftaran');
    }
}
