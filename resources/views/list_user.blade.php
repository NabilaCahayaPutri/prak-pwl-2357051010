
@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="card-title mb-0">Daftar Pengguna</h3>
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Pengguna</a>
                </div>

                @if($users->isEmpty())
                    <div class="d-flex flex-column align-items-center justify-content-center py-5">
                        <div class="text-center mb-3">
                            <h5 class="mb-1">Belum ada pengguna</h5>
                            <p class="text-muted mb-0">Daftar pengguna masih kosong. Tambahkan pengguna baru untuk memulai.</p>
                        </div>
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mt-3">Buat pengguna pertama</a>
                    </div>
                @else
                    @if(session('success'))
                        <div class="alert alert-success mx-3">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger mx-3">{{ session('error') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->npm }}</td>
                                        <td>{{ $user->nama_kelas }}</td>
                                        <td>
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
