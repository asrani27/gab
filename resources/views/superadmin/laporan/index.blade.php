@extends('layouts.app2')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">LAPORAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a class="btn btn-app" href="/laporan/pelanggan/cetak" target="_blank">
                    <i class="fa fa-file"></i> LAPORAN KLIEN
                </a>
                <a class="btn btn-app" href="/laporan/karyawan/cetak" target="_blank">
                    <i class="fa fa-file"></i> LAPORAN KARYAWAN
                </a>
                <a class="btn btn-app" href="/laporan/pemesanan/cetak" target="_blank">
                    <i class="fa fa-file"></i> LAPORAN PEMESANAN
                </a>
                <a class="btn btn-app" href="/laporan/pelunasan/cetak" target="_blank">
                    <i class="fa fa-file"></i> LAPORAN PEMBAYARAN
                </a>
                <a class="btn btn-app" href="/laporan/jadwal/cetak" target="_blank">
                    <i class="fa fa-file"></i> LAPORAN JADWAL
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush