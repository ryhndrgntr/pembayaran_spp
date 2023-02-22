@extends('app/index')
@section('title', 'Siswa')
@section('pagejudul', 'Siswa')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Edit Data Siswa                      
                </div>
                <form action="{{route('siswa.update', $data_siswa->id_siswa)}}" method="post" enctype="multipart/form-data">
                   @csrf
                   @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-col overflow-auto pe-xl-3" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="row gx-0 gx-xl-3">
                                        <div class="col-xl mb-3">
                                            <label class="form-label">NISN</label>
                                            <input name="nisn" type="text" value="{{ $data_siswa->nisn }}" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Nama</label>
                                            <input name="nama" type="text" value="{{ $data_siswa->nama }}" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input name="alamat" type="text" value="{{ $data_siswa->alamat }}" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">No Telepon</label>
                                            <input name="no_telp" type="text" value="{{ $data_siswa->no_telp }}" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jk" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <select name="jk" id="select-jk" class="form-control input-required text-dark" required>
                                                        <option value="">-- Jenis Kelamin --</option>
                                                        <option @if($data_siswa->jk == "perempuan"): @selected(true) @endif value="perempuan">Perempuan</option>
                                                        <option @if($data_siswa->jk == "laki-laki"): @selected(true) @endif value="perempuan">Laki-laki</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <div id="kelas" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Kelas</label>
                                                    <select name="kelas" id="select-kelas" class="form-control input-required text-dark bg-light" required>
                                                        <option value="">-- Pilih Kelas --</option>
                                                        @foreach ($data_kelas as $value)
                                                            <option  @if($data_siswa->id_kelas == $value->id_kelas): @selected(true) @endif value="{{ $value->id_kelas }}">{{$value->nama_kelas}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <div id="spp" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Tahun</label>
                                                    <select name="spp" id="select-spp" class="form-control input-required text-dark bg-light" required>
                                                        <option value="">Pilih Tahun</option>
                                                        @foreach ($data_spp as $value)
                                                            <option @if($data_siswa->id_spp == $value->id_spp): @selected(true) @endif value="{{ $value->id_spp }}">{{$value->tahun}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6 mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
{{-- @extends('app/index')
@section('title', 'Siswa')
@section('pagejudul', 'Siswa')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Edit Data Siswa                        
                </div>
            <div class="card-body">
            <form action="{{route('siswa.update', $data_siswa->id_siswa)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn" value="{{ $data_siswa->nisn }}" required>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" value="{{ $data_siswa->nama }}" required>
                  </div>
                  <div class="col-6 mt-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $data_siswa->alamat }}" required>
                  </div>
                  <div class="col-6 mt-3">
                    <label class="form-label">No Telepon</label>
                    <input type="text" class="form-control" name="no_telp" value="{{ $data_siswa->no_telp }}" required>
                  </div>
                        <div class="col-xl mb-3">
                            <div id="jk" class="d-flex gap-3">
                                <div class="w-100">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="select-jk" class="form-control input-required text-dark bg-light" required>
                                        <option value="">Pilih Berdasarkan Jenis Kelamin</option>
                                        <option @if($data_siswa->jk == "perempuan"): @selected(true) @endif value="perempuan">Perempuan</option>
                                        <option @if($data_siswa->jk == "laki-laki"): @selected(true) @endif value="laki-laki">Laki-Laki</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl mb-3">
                            <div id="jk" class="d-flex gap-3">
                                <div class="w-100">
                                    <label class="form-label">Kelas</label>
                                    <select name="kelas" id="select-kelas" class="form-control input-required text-dark bg-light" required>
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($data_kelas as $value)
                                            <option  @if($data_siswa->id_kelas == $value->id_kelas): @selected(true) @endif value="{{ $value->id_kelas }}">{{$value->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl mb-3">
                            <div id="jk" class="d-flex gap-3">
                                <div class="w-100">
                                    <label class="form-label">Tahun</label>
                                    <select name="spp" id="select-spp" class="form-control input-required text-dark bg-light" required>
                                        <option value="">Pilih Tahun</option>
                                        @foreach ($data_spp as $value)
                                            <option @if($data_siswa->id_spp == $value->id_spp): @selected(true) @endif value="{{ $value->id_spp }}">{{$value->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <button type='submit' class='btn btn-primary w-100 text-white'>Simpan</button>
            </form>
        </div>
</div>
</div>          
</div>
</div>
</div>
</div>
</div>
</div>
@endsection --}}