@extends('main')

@section('title','Form Pegawai')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pegawai</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="/booking">List Pegawai</a></li>
                        <li class="breadcrumb-item active">Form Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Pegawai</h3>
            </div>
            <div class="card-body">
                <form action=""
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="namakamar">ID Pegawai</label>
                        <input type="text"
                            class="form-control @error("namakamar") is-invalid @enderror"
                            name="namakamar" >
                        @error("namakamar")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pegawai</label>
                        <input type="nama"
                            class="form-control @error("nama") is-invalid @enderror"
                            name="nama">
                        @error("nama")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Jabatan</label>
                        <input type="email"
                            class="form-control @error("email") is-invalid @enderror"
                            name="email">
                        @error("email")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Tambah
                        </button>
                        <a href="booking" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
