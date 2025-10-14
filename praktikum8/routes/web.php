<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/profile', function () {
//     $kelas = "pweb-b IF";
//     $umur = 10;

    

//     // return view('profile', ['kelas' => $kelas]);
//     return view('profile', compact('kelas', 'umur', 'mahasiswa'));
    
// });

Route::get("/profile", [MahasiswaController::class, "index"]);
