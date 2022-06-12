@extends('layouts.app2')
@push('css')

@endpush
@section('content')
<div class="row">
    <form role="form" method="post" action="/pelunasan/bayar/{{$data->id}}">
        @csrf
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Info Transaksi</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nota</label>
                        <input type="text" name="nota" class="form-control" value="{{$data->nota}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Pemesanan</label>
                        <input type="date" name="tgl_pemesanan" class="form-control" value="{{$data->tgl_pemesanan}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tgl Acara</label>
                        <input type="date" name="tgl_acara" class="form-control" value="{{$data->tgl_acara}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Klien</label>
                        <input type="text" name="tgl_pelunasan" class="form-control" value="{{$data->pelanggan->nama}}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Acara</label>
                        <input type="text" name="tempat" class="form-control" value="{{$data->tempat}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Karyawan yang menangani</label>
                        <select name="karyawan_id" class="form-control">
                            <option value="">-pilih-</option>
                            @foreach ($karyawan as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Pemesanan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->pemesanan_detail as $key => $item)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td>{{$item->paket == null ? '' :$item->paket->nama}}</td>
                                <td>Rp. {{number_format($item->harga)}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td>Total</td>
                                <td>Rp. {{number_format($data->total)}}</td>
                                <td>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <tr>

                        <button type="submit" class="btn btn-block btn-success">Bayar
                            {{number_format($data->sisa)}}</button><br />
                        <a href="/pelunasan" class=" btn btn-block btn-danger">Kembali</a>
                    </tr>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@push('js')


@endpush