<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulirPendaftaran extends Component
{
    public function __construct() {
        self::start();
    }
    
    public $attributes = [
        'jalur',
        'jurusan',
        'sekolah_asal',
        'nomor_ijazah'
    ];

    protected $rules = [];
    protected $messages = [];

    // Untuk menyiapkan property
    protected function start()
    {
        foreach ($this->attributes as $attribute) {
            // Buat atribut
            $this->$attribute = null;
            
            // Buat validasi
            $this->rules[$attribute] = 'required';

            // Buat pesan error
            $this->messages[$attribute . '.required'] = 'Wajib Diisi';

        }
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function submit()
    {
        $this->validate();
 
        // Execution doesn't reach here if validation fails.
 
        // Contact::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        // ]);
    }

    public function render()
    {
        return view('livewire.formulir-pendaftaran');
    }
}
