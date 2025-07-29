@extends('layouts.sbadmin2')

@section('content')
<div class="card">
    <div class="card-header bg-custom-gradient-2">{{ $judul }}</div>
    <div class="card-body">
        <form action="/pasien" method="POST">
            @method('POST')
            @csrf
            <h5 class="mb-3"><strong>Data Pemilik</strong></h5>
            <div class="row mb-3">
                <div class="col-md-6 form-group ">
                    <label for="nama_pasien">Nama Pemilik</label>
                    <input type="text" name="nama_pasien" class="form-control" value="{{ old('nama_pasien') }}"
                        autofocus />
                    <span class="text-danger">{{ $errors->first('nama_pasien') }}</span>
                </div>
                <div class="col-md-6 form-group ">
                    <label for="nomor_hp">Nomor HP</label>
                    <input type="text" name="nomor_hp" class="form-control" value="{{ old('nomor_hp') }}"
                        autofocus />
                    <span class="text-danger">{{ $errors->first('nomor_hp') }}</span>
                </div>
            </div>
            <div class="form-group mt-3">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" rows="3" class="form-control">{{ old('alamat') }}</textarea>
                <span class="text-danger">{{ $errors->first('alamat') }}</span>
            </div>

            <hr>
            <h5 class="mt-4 mb-3"><strong>Data Hewan</strong></h5>
            <div class="row mb-3">
                <div class="col-md-6 form-group">
                    <label for="nama_hewan">Nama Hewan</label>
                    <input type="text" name="nama_hewan" class="form-control" value="{{ old('nama_hewan') }}" required />
                    <span class="text-danger">{{ $errors->first('nama_hewan') }}</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="jenis_hewan">Jenis Hewan</label>
                    <input type="text" name="jenis_hewan" class="form-control" value="{{ old('jenis_hewan') }}" required />
                    <span class="text-danger">{{ $errors->first('jenis_hewan') }}</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 form-group">
                    <label for="ras">Ras</label>
                    <input type="text" name="ras" class="form-control" value="{{ old('ras') }}" />
                    <span class="text-danger">{{ $errors->first('ras') }}</span>
                </div>
                <div class="col-md-6 form-group">
                    <label for="jenis_kelamin_hewan">Jenis Kelamin Hewan</label>
                    <select name="jenis_kelamin_hewan" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option value="Jantan" {{ old('jenis_kelamin_hewan') == 'Jantan' ? 'selected' : '' }}>Jantan</option>
                        <option value="Betina" {{ old('jenis_kelamin_hewan') == 'Betina' ? 'selected' : '' }}>Betina</option>
                    </select>
                    <span class="text-danger">{{ $errors->first('jenis_kelamin_hewan') }}</span>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal_lahir_hewan">Tanggal Lahir Hewan</label>
                <input type="date" name="tanggal_lahir_hewan" class="form-control" value="{{ old('tanggal_lahir_hewan') }}" />
                <span class="text-danger">{{ $errors->first('tanggal_lahir_hewan') }}</span>
            </div>

            <div class="form-group mt-2">
                <button type="submit" class="btn bg-custom-gradient-2">SIMPAN</button>
            </div>
        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection