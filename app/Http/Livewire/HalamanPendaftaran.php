<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;

class HalamanPendaftaran extends Component
{
    use WithFileUploads;
    
    public function __construct() {
        self::start();
    }
    
    // Ada 66 atribut
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
        'kode_pos',

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

    public $input_number = [
        'tinggi_badan',
        'berat_badan',
        'jumlah_saudara_kandung',
        'tahun_lahir_ayah',
        'tahun_lahir_ibu',
        'tahun_lahir_wali',
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
            if (!in_array($attribute, $this->input_number) && $attribute != 'jenis_kelamin') {
                $this->$attribute = 'string';
            } elseif (in_array($attribute, $this->input_number)) {
                $this->$attribute = 100;
            } else {
                $this->$attribute = null;
            }
            
            // Jika attribute tidak dalam array not_required
            if (!in_array($attribute, $this->not_required)) {
                // Buat validasi
                $this->rules[$attribute] = 'required';

                // Buat pesan error
                $this->messages[$attribute . '.required'] = 'Wajib Diisi';
            }
        }
        // $this->jenis_kelamin = 'P';
        $this->email = 'string@gmail.com';
        $this->kode_pos = '17425';

        // Validasi untuk foto
        // $this->rules['foto'] = 'required|image|max:1024'; // 1MB Max

    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function submit()
    {
        $payload = [];
        foreach ($this->attributes as $attribute) {
            $payload[$attribute] = $this->$attribute;
        }

        $validator = Validator::make(
            $payload,
            $this->rules
        );

        // Jika validasi gagal
        if ($validator->fails()) {
            dd('gagal');
        }

        // Validasi berhasil
        $this->validate();

        // Kode di bawah ini gak akan jalan kalo validasinya gagal
        
        // $path = $payload['foto']->getPathName();
        // $fileName = $payload['foto']->getClientOriginalName();

        // $response = Http::asMultipart()->attach(
        //     'image', 
        //     file_get_contents($path), 
        //     $fileName
        // )->post(
        //     'http://127.0.0.1:8000/api/pendaftar/add',
        //     $payload
        // )->json();

        // Foto dianggap teks dulu
        $response = Http::post('http://127.0.0.1:8000/api/pendaftar/add', $payload);
        dd($payload);
        dd($response);
    }

    public function render()
    {
        return view('livewire.halaman-pendaftaran');
    }
}
