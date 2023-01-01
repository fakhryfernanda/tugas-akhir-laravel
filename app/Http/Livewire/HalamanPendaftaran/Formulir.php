<?php

namespace App\Http\Livewire\HalamanPendaftaran;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class Formulir extends Component
{
    use WithFileUploads;
    
    public function __construct() {
        self::start();
    }
    
    // Ada 66 atribut
    public $attributes = [
        'id_akun',
        
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

    protected $autofill = true;

    // Untuk menyiapkan property
    protected function start()
    {
        // Session::put('fakhry' , 'cakep');
        // dd(Session::get('fakhry'));
        // Buat data dummy di form
        if ($this->autofill){
            $this->id_akun = null;

            // Data Awal
            $this->jalur = 'akademik';
            $this->jurusan = 'ipa';
            $this->sekolah_asal = 'SMPN 24 Bekasi';
            $this->nomor_ijazah = 'DN-24 DI-2360246';

            // Data Diri
            $this->nama_lengkap = 'Muhamad Fakhry Fernanda';
            $this->jenis_kelamin = 'L';
            $this->nisn = '1516200023';
            $this->tempat_lahir = 'Bekasi';
            $this->tanggal_lahir = '2006-03-23';
            $this->tinggi_badan = 130;
            $this->berat_badan = 45;
            $this->agama = 'islam';
            $this->kewarganegaraan = 'wni';
            $this->nomor_handphone = '08813096322';
            $this->email = 'mff023@gmail.com';
            $this->jumlah_saudara_kandung = 1;
            $this->foto = 'Ini foto fakhry';

            // Data Alamat
            $this->alamat_jalan = 'Kp. Pedurenan No. 82 RT06 / RW02';
            $this->kelurahan = 'Jatiluhur';
            $this->kecamatan = 'Jatiasih';
            $this->kota = 'Bekasi';
            $this->kode_pos = 17425;

            // Berkas Pendukung
            $this->kis = null;
            $this->kip = null;
            $this->kks = null;
            $this->sktm = null;

            // Data Orang Tua
            $this->nama_ayah = 'William';
            $this->tahun_lahir_ayah = 1980;
            $this->pendidikan_ayah = 's2';
            $this->pekerjaan_ayah = 'wiraswasta';
            $this->penghasilan_bulanan_ayah = 'penghasilan_5';
            $this->nama_ibu = 'Grace';
            $this->tahun_lahir_ibu = 1983;
            $this->pendidikan_ibu = 's3';
            $this->pekerjaan_ibu = 'tidak_bekerja';
            $this->penghasilan_bulanan_ibu = 'penghasilan_2';
            $this->nama_wali = null;
            $this->tahun_lahir_wali = null;
            $this->pendidikan_wali = null;
            $this->pekerjaan_wali = null;
            $this->penghasilan_bulanan_wali = null;

            // Data Nilai Rapor
            $this->indo_1 = mt_rand(75,100);
            $this->indo_2 = mt_rand(75,100);
            $this->indo_3 = mt_rand(75,100);
            $this->indo_4 = mt_rand(75,100);
            $this->indo_5 = mt_rand(75,100);
            $this->eng_1 = mt_rand(75,100);
            $this->eng_2 = mt_rand(75,100);
            $this->eng_3 = mt_rand(75,100);
            $this->eng_4 = mt_rand(75,100);
            $this->eng_5 = mt_rand(75,100);
            $this->mtk_1 = mt_rand(75,100);
            $this->mtk_2 = mt_rand(75,100);
            $this->mtk_3 = mt_rand(75,100);
            $this->mtk_4 = mt_rand(75,100);
            $this->mtk_5 = mt_rand(75,100);
            $this->ipa_1 = mt_rand(75,100);
            $this->ipa_2 = mt_rand(75,100);
            $this->ipa_3 = mt_rand(75,100);
            $this->ipa_4 = mt_rand(75,100);
            $this->ipa_5 = mt_rand(75,100);
            $this->ips_1 = mt_rand(75,100);
            $this->ips_2 = mt_rand(75,100);
            $this->ips_3 = mt_rand(75,100);
            $this->ips_4 = mt_rand(75,100);
            $this->ips_5 = mt_rand(75,100);
        } else {
            foreach ($this->attributes as $attribute) {
                $this->$attribute = null;
            }    
        }

        foreach ($this->attributes as $attribute) {
            
            // Jika attribute tidak dalam array not_required
            if (!in_array($attribute, $this->not_required)) {
                // Buat validasi
                $this->rules[$attribute] = 'required';

                // Buat pesan error
                $this->messages[$attribute . '.required'] = 'Wajib Diisi';
            }
        }

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

        // dd($payload);
        // Jika validasi gagal
        if ($validator->fails()) {
            // dd('gagal');
            return back()->with('formError', 'Periksa kembali data Anda');
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
        return redirect('/ppdb/hasil')->with('success', 'Pendaftaran Berhasil');
    }

    public function render()
    {
        return view('livewire.halaman-pendaftaran.formulir');
    }
}
