@extends('layouts.medilab')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    PENDAFTARAN PASIEN
                </div>
                <div class="card-body">
                    <form action="{{ route('registrasipasien.store') }}" method="POST">
                        @method('POST')
                        @csrf
                        <h5 class="mb-3">Data Pemilik</h5>
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
                        <h5 class="mt-4 mb-3">Data Hewan</h5>
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
                        <div class="form-group mt-3">
                            <label for="keluhan">Keluhan Pasien</label>
                            <textarea name="keluhan" class="form-control" rows="3">{{ old('keluhan') }}</textarea>
                            <span class="text-danger">{{ $errors->first('keluhan') }}</span>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 form-group">
                                <label for="tanggal">Rencana Tanggal Berobat</label>
                                <input id="tanggal" class="form-control" type="date" name="tanggal"
                                    value="{{ date('Y-m-d') }}">
                                <span class="text-danger">{{ $errors->first('tanggal') }}</span>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="poli_id">Pilih Poli Tujuan</label>
                                <select name="poli_id" id="poli_id" class="form-control">
                                    @foreach ($poli as $item)
                                    <option value="{{ $item->id }}" @selected(old('poli_id')==$item->id)>
                                        Poli {{ $item->nama }} - Biaya
                                        {{ number_format($item->biaya, 0, ',', '.') }}
                                    </option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{ $errors->first('poli_id') }}</span>
                            </div>
                        </div>



                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">DAFTAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection