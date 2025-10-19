<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() {
        $data = [
            'nama' => 'Nabila Cahaya Putri',
            'npm' => '2357051010',
            'kelas' => 'B'
        ];
        return view('profile', $data);
    }
}


