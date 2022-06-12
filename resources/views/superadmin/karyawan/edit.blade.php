@extends('layouts.app2')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Karyawan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/karyawan/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIK Karyawan</label>
                        <input type="text" name="nik" class="form-control" value="{{$data->nik}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Karyawan</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Karyawan</label>
                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp Karyawan</label>
                        <input type="text" name="telp" class="form-control" value="{{$data->telp}}"
                            onkeypress="return hanyaAngka(event)" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/karyawan" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush