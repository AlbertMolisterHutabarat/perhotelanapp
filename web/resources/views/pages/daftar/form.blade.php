@extends('main')

@section('title','Form Daftar')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Daftar Kamar</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("kamar.index") }}">List Kamar</a></li>
                        <li class="breadcrumb-item active">Form Daftar Kamar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Daftar</h3>
            </div>
            <div class="card-body">
                <form action={{ isset($data)
                                    ?route("kamar.update",[$data->id])
                                    :route("kamar.store") }}
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="idkamar">ID Kamar</label>
                        <input type="text"
                            class="form-control @error("idkamar") is-invalid @enderror"
                            name="idkamar" value='{{ (isset($data)?$data->idkamar:old("idkamar")) }}'>
                        @error("idkamar")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Kamar</label>
                        <input type="text"
                            class="form-control @error("jenis") is-invalid @enderror"
                            name="jenis" value='{{ (isset($data)?$data->jenis:old("jenis")) }}'>
                        @error("jenis")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                    <label for="">&nbsp&nbsp&nbsp&nbspFasilitas</label>
                        <div class="column" style="padding-right:100px;">
                        <div class="form-group">
                        <label for="fasilitas1"></label>
                        <input type="text"
                            class="form-control @error("fasilitas1") is-invalid @enderror"
                            name="fasilitas1" value='{{ (isset($data)?$data->fasilitas1:old("fasilitas1")) }}'>
                        @error("fasilitas1")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas2"></label>
                        <input type="text"
                            class="form-control @error("fasilitas2") is-invalid @enderror"
                            name="fasilitas2" value='{{ (isset($data)?$data->fasilitas2:old("fasilitas2")) }}'>
                        @error("fasilitas2")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label for="fasilitas3"></label>
                        <input type="text"
                            class="form-control @error("fasilitas3") is-invalid @enderror"
                            name="fasilitas3" value='{{ (isset($data)?$data->fasilitas3:old("fasilitas3")) }}'>
                        @error("fasilitas3")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas4"></label>
                        <input type="text"
                            class="form-control @error("fasilitas4") is-invalid @enderror"
                            name="fasilitas4" value='{{ (isset($data)?$data->fasilitas4:old("fasilitas4")) }}'>
                        @error("fasilitas4")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas5"></label>
                        <input type="text"
                            class="form-control @error("fasilitas5") is-invalid @enderror"
                            name="fasilitas5" value='{{ (isset($data)?$data->fasilitas5:old("fasilitas5")) }}'>
                        @error("fasilitas5")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                        </div>
                        <div class="column">
                        <div class="form-group">
                        <label for="fasilitas6"></label>
                        <input type="text"
                            class="form-control @error("fasilitas6") is-invalid @enderror"
                            name="fasilitas6" value='{{ (isset($data)?$data->fasilitas6:old("fasilitas6")) }}'>
                        @error("fasilitas6")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas7"></label>
                        <input type="text"
                            class="form-control @error("fasilitas7") is-invalid @enderror"
                            name="fasilitas7" value='{{ (isset($data)?$data->fasilitas7:old("fasilitas7")) }}'>
                        @error("fasilitas7")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas8"></label>
                        <input type="text"
                            class="form-control @error("fasilitas8") is-invalid @enderror"
                            name="fasilitas8" value='{{ (isset($data)?$data->fasilitas8:old("fasilitas8")) }}'>
                        @error("fasilitas8")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas9"></label>
                        <input type="text"
                            class="form-control @error("fasilitas9") is-invalid @enderror"
                            name="fasilitas9" value='{{ (isset($data)?$data->fasilitas9:old("fasilitas9")) }}'>
                        @error("fasilitas9")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fasilitas10"></label>
                        <input type="text"
                            class="form-control @error("fasilitas10") is-invalid @enderror"
                            name="fasilitas10" value='{{ (isset($data)?$data->fasilitas10:old("fasilitas10")) }}'>
                        @error("fasilitas10")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text"
                            class="form-control @error("harga") is-invalid @enderror"
                            name="harga" value='{{ (isset($data)?$data->harga:old("harga")) }}'>
                        @error("harga")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group float-right">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <a href="{{ route("kamar.index") }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
