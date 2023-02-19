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
                                            <input name="nisn" type="text" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Nama Siswa</label>
                                            <input name="nama" type="text" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Alamat</label>
                                            <input name="alamat" type="text" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">No Telepon</label>
                                            <input name="no_telp" type="text" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jk" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <select name="jk" id="select-jk" class="form-select input-required" required>
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
                                                    <select name="kelas" id="select-kelas" class="form-select input-required" required>
                                                        <option value="">-- Pilih Kelas --</option>
                                                        @foreach ($data as $value)
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
                                                    <select name="spp" id="select-spp" class="form-select input-required" required>
                                                        <option value="">Pilih Tahun</option>
                                                        @foreach ($data2 as $value)
                                                            <option value="{{ $value->id_spp }}">{{$value->tahun}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-primary" data-form-id="#form-musrenbang">Tambah Data</button>
                                            {{-- <a href="{{route('dsiswa.create')}}" class="btn btn-primary">Tambah Data !</a> --}}
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