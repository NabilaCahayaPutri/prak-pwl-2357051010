<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

        public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }
    

        public function create()
    {
        $KelasModel = new Kelas();
        $kelas = $KelasModel->getKelas();
        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];
            return view('create_user', $data);
    }
    

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'nullable|string|max:50',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $this->userModel->create([
            'nama' => $validated['nama'],
            'npm' => $validated['npm'] ?? null,
            'kelas_id' => $validated['kelas_id'],
        ]);

        return redirect()->to('/user')->with('success', 'Pengguna berhasil dibuat.');
    }

    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    public function edit($id)
    {
        $user = $this->userModel->find($id);
        if (!$user) {
            return redirect('/user')->with('error', 'Pengguna tidak ditemukan.');
        }

        $kelas = $this->kelasModel->getKelas();
        return view('edit_user', [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'nullable|string|max:50',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $user = $this->userModel->find($id);
        if (!$user) {
            return redirect('/user')->with('error', 'Pengguna tidak ditemukan.');
        }

        $user->update([
            'nama' => $validated['nama'],
            'npm' => $validated['npm'] ?? null,
            'kelas_id' => $validated['kelas_id'],
        ]);

        return redirect('/user')->with('success', 'Pengguna berhasil diperbarui.');
    }
}