<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Mapel;
use App\Nilai;
use App\Siswa;
use App\Periode;
use App\Karyawan;
use App\PKGsiswa;
use App\Pelanggan;
use App\Pemesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{

    public function index()
    {
        return view('superadmin.laporan.index');
    }
    public function pelunasan()
    {
        return view('superadmin.laporan.pelunasan');
    }
    public function pelanggan()
    {
        return view('superadmin.laporan.pelanggan');
    }
    public function pemesanan()
    {
        return view('superadmin.laporan.pemesanan');
    }

    public function pelanggancetak()
    {
        $data = Pelanggan::get();


        $path = 'theme/logo.png';
        $datalogo = file_get_contents($path);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($datalogo);

        $pdf = PDF::loadView('superadmin.laporan.pdf_pelanggan', compact('data', 'logo'))->setPaper('legal');
        return $pdf->stream();
    }

    public function karyawancetak()
    {
        $data = Karyawan::get();

        $path = 'theme/logo.png';
        $datalogo = file_get_contents($path);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($datalogo);

        $pdf = PDF::loadView('superadmin.laporan.pdf_karyawan', compact('data', 'logo'))->setPaper('legal');
        return $pdf->stream();
    }



    public function jadwalcetak()
    {
        $data = Pemesanan::get();

        $path = 'theme/logo.png';
        $datalogo = file_get_contents($path);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($datalogo);

        $pdf = PDF::loadView('superadmin.laporan.pdf_jadwal', compact('data', 'logo'))->setPaper('legal');
        return $pdf->stream();
    }

    public function pemesanancetak()
    {
        $path = 'theme/logo.png';
        $datalogo = file_get_contents($path);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($datalogo);

        $data = Pemesanan::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_pemesanan', compact('data', 'logo'))->setPaper('legal');
        return $pdf->stream();
    }
    public function pelunasancetak()
    {
        $path = 'theme/logo.png';
        $datalogo = file_get_contents($path);
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $logo = 'data:image/' . $type . ';base64,' . base64_encode($datalogo);

        $data = Pemesanan::get();
        $pdf = PDF::loadView('superadmin.laporan.pdf_pelunasan', compact('data', 'logo'))->setPaper('legal');
        return $pdf->stream();
    }
}
