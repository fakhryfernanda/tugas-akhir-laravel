<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormulirPendaftaran extends Component
{
    public function __construct() {
        self::start();
    }
    
    // Ada 65 atribut
    public $attributes = [
        // Data Awal
        'jalur',
        'jurusan',
        'sekolah_asal',
        'nomor_ijazah',

        // Data Diri
        'nama_lengkap',
        'jenis_kelamin',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'tinggi_badan',
        'berat_badan',
        'agama',
        'kewarganegaraan',
        'nomor_handphone',
        'email',
        'jumlah_saudara_kandung',
        'foto',

        // Data Alamat
        'alamat_jalan',
        'kelurahan',
        'kecamatan',
        'kota',

        // Berkas Pendukung
        'kis',
        'kip',
        'kks',
        'sktm',

        // Data Orang Tua
        'nama_ayah',
        'tahun_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_bulanan_ayah',
        'nama_ibu',
        'tahun_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_bulanan_ibu',
        'nama_wali',
        'tahun_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_bulanan_wali',

        // Data Nilai Rapor
        'indo_1',
        'indo_2',
        'indo_3',
        'indo_4',
        'indo_5',
        'eng_1',
        'eng_2',
        'eng_3',
        'eng_4',
        'eng_5',
        'mtk_1',
        'mtk_2',
        'mtk_3',
        'mtk_4',
        'mtk_5',
        'ipa_1',
        'ipa_2',
        'ipa_3',
        'ipa_4',
        'ipa_5',
        'ips_1',
        'ips_2',
        'ips_3',
        'ips_4',
        'ips_5',
    ];

    public $not_required = [
        'kis',
        'kip',
        'kks',
        'sktm',
        'nama_wali',
        'tahun_lahir_wali',
        'pendidikan_wali',
        'pekerjaan_wali',
        'penghasilan_bulanan_wali',
    ];

    protected $rules = [];
    protected $messages = [];

    // Untuk menyiapkan property
    protected function start()
    {
        foreach ($this->attributes as $attribute) {
            // Buat atribut
            $this->$attribute = null;
            
            // Jika attribute tidak dalam array not_required
            if (!in_array($attribute, $this->not_required)) {
                // Buat validasi
                $this->rules[$attribute] = 'required';

                // Buat pesan error
                $this->messages[$attribute . '.required'] = 'Wajib Diisi';
            }

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
