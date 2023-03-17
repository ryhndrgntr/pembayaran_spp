@extends('app/index')
@section('title', 'Siswa')
@section('pagejudul', 'Siswa')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
            <span>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </span>
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Tambah Data Siswa                        
                </div>
                <form action="{{route('siswa.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-col overflow-auto pe-xl-3" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="row gx-0 gx-xl-3">
                                        <div class="col-xl mb-3">
                                            <label class="form-label">NISN</label>
                                            <input class="form-control @error ('nisn') is-invalid @enderror" id="exampleFormControlInput1" type="number" name="nisn" placeholder="" data-bs-original-title="" title="" value="{{ old('nisn') }}">
                                            @error('nisn')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Nama Siswa</label>
                                            <input class="form-control @error ('nama') is-invalid @enderror" id="exampleFormControlInput1" type="text" name="nama" placeholder="" data-bs-original-title="" title="" value="{{ old('nama') }}">
                                            @error('nama')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                            @enderror
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input class="form-control @error ('alamat') is-invalid @enderror" id="exampleFormControlInput1" type="text" name="alamat" placeholder="" data-bs-original-title="" title="" value="{{ old('alamat') }}">
                                            @error('alamat')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                            @enderror
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">No Telepon</label>
                                            <input class="form-control @error ('no_telp') is-invalid @enderror" id="exampleFormControlInput1" type="number" name="no_telp" placeholder="" data-bs-original-title="" title="" value="{{ old('no_telp') }}">
                                            @error('no_telp')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                            @enderror
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jk" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <select name="jk" id="select-jk" class="form-control input-required text-dark bg-light" required>
                                                        <option value="">Pilih Berdasarkan Jenis Kelamin</option>
                                                        <option value="perempuan">Perempuan</option>
                                                        <option value="laki-laki">Laki-Laki</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jk" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Kelas</label>
                                                    <select name="kelas" id="select-kelas" class="form-control input-required text-dark bg-light" required>
                                                        <option value="">-- Pilih Kelas --</option>
                                                        @foreach ($data_kelas as $value)
                                                            <option value="{{ $value->id_kelas }}">{{$value->nama_kelas}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jk" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Tahun</label>
                                                    <select name="spp" id="select-spp" class="form-control input-required text-dark bg-light" required>
                                                        <option value="">Pilih Tahun</option>
                                                        @foreach ($data_spp as $value)
                                                            <option value="{{ $value->id_spp }}">{{$value->tahun}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <button type="submit" class="btn btn-success">Tambah Data</button>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
@endsection