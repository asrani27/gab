@extends('layouts.app2')
@section('title')
Beranda
@endsection
@section('content')
<div class="text-center">
    <img src="/theme/logo.png" width="300px">
</div>
<br />
<div class="callout callout-danger">
    Selamat Datang Di Aplikasi Sistem Pengelolaan Data Wedding Organizer TRINITY,
    Untuk mengelola aplikasi silahkan gunakan menu di bawah ini atau menu di atas
</div>
<div class="row">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title text-center">MENU</h3>
        </div>
        <div class="box-body text-center">
            <a href="/karyawan" class="btn btn-app">
                <i class="fa fa-user"></i> KARYAWAN
            </a>
            <a href="/paket" class="btn btn-app">
                <i class="fa fa-list"></i> PAKET
            </a>
            <a href="/pelanggan" class="btn btn-app">
                <i class="fa fa-users"></i> KLIEN
            </a>
            <a href="/pemesanan" class="btn btn-app">
                <i class="fa fa-shopping-cart"></i> PEMESANAN
            </a>
            <a href="/pelunasan" class="btn btn-app">
                <i class="fa fa-money"></i> PEMBAYARAN
            </a>
            <a href="/laporan" class="btn btn-app">
                <i class="fa fa-file"></i> LAPORAN
            </a>
        </div>
        <!-- /.box-body -->
    </div>
</div>
@endsection