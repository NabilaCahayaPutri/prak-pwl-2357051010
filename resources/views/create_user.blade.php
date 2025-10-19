@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">Buat Pengguna Baru</h5>
                            <small class="text-muted">Isi data pengguna yang akan ditambahkan</small>
                        </div>
                        <a href="{{ url('/user') }}" class="btn btn-sm btn-outline-secondary">Kembali</a>
                    </div>

                    <div class="card-body">
                        {{-- Flash message --}}
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        {{-- Validation errors --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('user.store') }}" method="POST" novalidate>
                            @csrf

                            <div class="row g-3">
                                <div class="col-12 col-md-6">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            id="nama"
                                            name="nama"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="Nama lengkap"
                                            value="{{ old('nama') }}"
                                            required
                                            autofocus
                                        >
                                        <label for="nama">Nama</label>
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            id="npm"
                                            name="npm"
                                            class="form-control @error('npm') is-invalid @enderror"
                                            placeholder="NPM"
                                            value="{{ old('npm') }}"
                                        >
                                        <label for="npm">NPM</label>
                                        @error('npm')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="kelas_id" class="form-label">Kelas</label>
                                    <select name="kelas_id" id="kelas_id" class="form-select @error('kelas_id') is-invalid @enderror">
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($kelas as $kelasItem)
                                            <option value="{{ $kelasItem->id }}" 
                                            {{ old('kelas_id') == $kelasItem->id ? 'selected' : '' }}>{{ $kelasItem->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                    @error('kelas_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12 text-center mt-3">
                                    <button type="submit" class="btn btn-primary me-2">Buat Pengguna</button>
                                    <a href="{{ url('/user') }}" class="btn btn-outline-secondary">Batal</a>
                                    <div class="small text-muted mt-2">Pastikan data sudah benar sebelum menyimpan.</div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection