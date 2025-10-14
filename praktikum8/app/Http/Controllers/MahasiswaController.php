<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            [
                "nama" => "Eka Pratama",
                "nim" => "232410102001",
                "prodi" => "Informatika"
            ],
            [
                "nama" => "Dewi Lestari",
                "nim" => "232410102002",
                "prodi" => "Sistem Informasi"
            ],
            [
                "nama" => "Andi Nugroho",
                "nim" => "232410102003",
                "prodi" => "Teknologi Informasi"
            ],
            [
                "nama" => "Budi Santoso",
                "nim" => "232410102004",
                "prodi" => "Informatika"
            ],
            [
                "nama" => "Citra Ayu",
                "nim" => "232410102005",
                "prodi" => "Sistem Informasi"
            ],
            [
                "nama" => "Fajar Ramadhan",
                "nim" => "232410102006",
                "prodi" => "Teknik Komputer"
            ],
            [
                "nama" => "Gita Novia",
                "nim" => "232410102007",
                "prodi" => "Informatika"
            ],
            [
                "nama" => "Hendra Saputra",
                "nim" => "232410102008",
                "prodi" => "Teknologi Informasi"
            ],
            [
                "nama" => "Intan Sari",
                "nim" => "232410102009",
                "prodi" => "Sistem Informasi"
            ],
            [
                "nama" => "Joko Susilo",
                "nim" => "232410102010",
                "prodi" => "Informatika"
            ]
        ];

        return view("profile", compact("mahasiswa"));
    }
}
