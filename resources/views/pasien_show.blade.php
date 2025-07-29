@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('pasien') }}" class="btn btn-secondary mb-3">← Kembali</a>

    <div class="card">
        <div class="card-body">
            <h5><strong>DATA PEMILIK HEWAN</strong></h5>
            <p><strong>Kode Pasien:</strong> {{ $pasien->kode_pasien }}</p>
            <p><strong>Nama Pasien:</strong> {{ $pasien->nama_pasien }}</p>
            <p><strong>Nomor HP:</strong> {{ $pasien->nomor_hp }}</p>
            <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>

            <hr>
            <h5><strong>DATA HEWAN</strong></h5>
            <p><strong>Nama Hewan:</strong> {{ $pasien->nama_hewan }}</p>
            <p><strong>Jenis Hewan:</strong> {{ $pasien->jenis_hewan }}</p>
            <p><strong>Ras:</strong> {{ $pasien->ras }}</p>
            <p><strong>Jenis Kelamin Hewan:</strong> {{ $pasien->jenis_kelamin_hewan }}</p>
            <p><strong>Tanggal Lahir Hewan:</strong> {{ $pasien->tanggal_lahir_hewan }}</p>
        </div>
    </div>
</div>
@endsection
