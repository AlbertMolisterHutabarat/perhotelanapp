@extends('main')

@section('title','List Pesan Kamar')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6"><h1>Pesan Kamar</h1></div>
                <div class="col-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">List Pesan Kamar</li>
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
                <h3 class="card-title">List Pesan Kamar</h3>
            </div>
            <div class="card-body">
                <div class="float-right mb-2">
                    <a href="/pesankamar/form" class="btn btn-success">
                        <i class="fa fa-plus"></i> Tambah</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID Kamar</th>
                            <th>ID Customer</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Checkin</th>
                            <th>Checkout</th>
                            <th>Total Hari</th>
                            <th>Harga Kamar</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    
                            <tr>
                                <td>1. </td>
                                <td>001</td>
                                <td>114121550</td>
                                <td>sudesh</td>
                                <td>0825313</td>
                                <td>Medan</td>
                                <td>sudesh@gmail.com</td>
                                <td>20-11-19</td>
                                <td>24-11-19</td>
                                <td>5</td>
                                <td>400.000</td>
                                <td>2.000.000</td>
                                <td>Menunggu Pembayaran</td>
                                
                            </tr>
                            <tr>
                                <td>2. </td>
                                <td>002</td>
                                <td>114121551</td>
                                <td>Polan</td>
                                <td>0822222</td>
                                <td>Binjai</td>
                                <td>Polan@gmail.com</td>
                                <td>22-01-19</td>
                                <td>26-01-19</td>
                                <td>5</td>
                                <td>300.000</td>
                                <td>1.500.000</td>
                                <td>Bayar Di Tempat</td>
                                
                            </tr>
                        
                    </tbody>
                </table>

                    
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
