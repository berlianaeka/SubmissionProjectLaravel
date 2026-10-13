<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Berliana Eka Puspitasari';
        $nim = '242520038';
        $prodi = 'Teknologi Informasi';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = [
            [
                'nama' => 'Berliana Eka Puspitasari',
                'nim' => '242520038',
                'ipk' => 3.67
            ],
            [
                'nama' => 'Feby Dwi Nurwahid',
                'nim' => '242520067',
                'ipk' => 2.53
            ],
            [
                'nama' => 'Rofiq Muallif',
                'nim' => '242520020',
                'ipk' => 3.89
            ],
            [
                'nama' => 'Chaerani Nur Azizah',
                'nim' => '242520034',
                'ipk' => 3.71
            ],
            [
                'nama' => 'Adhe Irma Suryani',
                'nim' => '242520074',
                'ipk' => 1.85
            ],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            [
                'nama' => 'Berliana Eka Puspitasari',
                'nim' => '242520038',
                'ipk' => 3.67
            ],
            [
                'nama' => 'Feby Dwi Nurwahid',
                'nim' => '242520067',
                'ipk' => 2.53
            ],
            [
                'nama' => 'Rofiq Muallif',
                'nim' => '242520020',
                'ipk' => 3.89
            ],
            [
                'nama' => 'Chaerani Nur Azizah',
                'nim' => '242520034',
                'ipk' => 3.71
            ],
            [
                'nama' => 'Adhe Irma Suryani',
                'nim' => '242520074',
                'ipk' => 1.85
            ],
        ];

        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        abort_unless($data, 404);

        return view('mahasiswa.detail', compact('data'));
    }
}