@extends('main')

@section('title','Pegawai')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pegawai</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($message = session("info"))
            <div class="alert alert-success">
                <i class="fa fa-info-circle"></i> {{ $message }}
            </div>
        @endif
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">List Pegawai</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="/pegawai/form" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Pegawai</th>
                            <th>Nama Pegawai</th>
                            <th>Jabatan</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                                <td>12</td>
                                <td>Mustafa</td>
                                <td>Manager</td>
                                <td> <form action=""
                                        method="">
                                        @method("delete")
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-danger btn-block">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
                <div class="float-right mt-2">
                    
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
