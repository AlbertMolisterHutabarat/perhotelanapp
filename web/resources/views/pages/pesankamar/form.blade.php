@extends('main')

@section('title','Form Pesan Kamar')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pesan Kamar</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pesankamar">List Pesan Kamar</a></li>
                        <li class="breadcrumb-item active">Form Pesan Kamar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Form Pesan Kamar</h3>
            </div>
            <div class="card-body">
                <form action=""
                    method="POST" autocomplete="off">
                    @csrf
                    @if (isset($data))
                        @method("PUT")
                    @endif
                    <div class="form-group">
                        <label for="a">ID Kamar</label>
                        <input type="text"
                            class="form-control @error("a") is-invalid @enderror"
                            name="a" >
                        @error("a")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                            <label for="nama">ID Customer</label>
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
                        <label for="nama">Nama</label>
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
                            <label for="nama">Telepon</label>
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
                                <label for="nama">Alamat</label>
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
                        <label for="email">Email</label>
                        <input type="email"
                            class="form-control @error("email") is-invalid @enderror"
                            name="email">
                        @error("email")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="checkin">Checkin</label>
                        <input type="date"
                            class="form-control @error("checkin") is-invalid @enderror"
                            name="checkin">
                        @error("checkin")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="checkout">Checkout</label>
                        <input type="date"
                            class="form-control @error("checkout") is-invalid @enderror"
                            name="checkout">
                        @error("checkout")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total">Lama Inap</label>
                        <input type="text"
                            class="form-control @error("total") is-invalid @enderror"
                            name="total">
                        @error("total")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total">Harga Kamar</label>
                        <input type="text"
                            class="form-control @error("total") is-invalid @enderror"
                            name="total">
                        @error("total")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total">Total Harga</label>
                        <input type="text"
                            class="form-control @error("total") is-invalid @enderror"
                            name="total">
                        @error("total")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="total">Status</label>
                        <input type="text"
                            class="form-control @error("total") is-invalid @enderror"
                            name="total">
                        @error("total")
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group float-right">
                    <a href="/pesankamar" class="btn btn-success">
                            <i class="fa fa-save"></i>Simpan
                        </a>
                        <a href="/pesankamar" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
