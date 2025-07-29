@extends('layouts.sbadmin2')

@section('content')
    <div class="card">
        <div class="card-header bg-custom-gradient-2">{{ $judul }}</div>
        <div class="card-body">
            <form action="/pasien/{{ $pasien->id }}" method="POST">
                @method('PUT')
                @csrf
                <h5 class="mb-3">Data Pemilik</h5>
                <div class="row mb-3">
                    <div class="col-md-6 form-group ">
                        <label for="nama_pasien">Nama Pemilik</label>
                        <input type="text" name="nama_pasien" class="form-control"
                            value="{{ old('nama_pasien') ?? $pasien->nama_pasien }}" autofocus />
                        <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                    </div>
                    <div class="col-md-6 form-group ">
                        <label for="nomor_hp">Nomor HP</label>
                        <input type="text" name="nomor_hp" class="form-control"
                            value="{{ old('nomor_hp') ?? $pasien->nomor_hp }}" autofocus />
                        <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" rows="3" class="form-control">{{ old('alamat') ?? $pasien->alamat }}</textarea>
                    <span class="text-danger">{{ $errors->first('alamat') }}</span>
                </div>

                <h5>Data Hewan</h5>
                <div class="form-group">
                    <label>Nama Hewan</label>
                    <input type="text" name="nama_hewan" class="form-control" value="{{ old('nama_hewan', $pasien->nama_hewan) }}">
                </div>
                <div class="form-group">
                    <label>Jenis Hewan</label>
                    <input type="text" name="jenis_hewan" class="form-control" value="{{ old('jenis_hewan', $pasien->jenis_hewan) }}">
                </div>
                <div class="form-group">
                    <label>Ras</label>
                    <input type="text" name="ras" class="form-control" value="{{ old('ras', $pasien->ras) }}">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin Hewan</label>
                    <select name="jenis_kelamin_hewan" class="form-control">
                        <option value="Jantan" {{ old('jenis_kelamin_hewan', $pasien->jenis_kelamin_hewan) == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                        <option value="Betina" {{ old('jenis_kelamin_hewan', $pasien->jenis_kelamin_hewan) == 'Betina' ? 'selected' : '' }}>Betina</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir Hewan</label>
                    <input type="date" name="tanggal_lahir_hewan" class="form-control" value="{{ old('tanggal_lahir_hewan', $pasien->tanggal_lahir_hewan) }}">
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn bg-custom-gradient-2">Update</button>
                    <a href="/pasien" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
