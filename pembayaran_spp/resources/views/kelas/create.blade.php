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
                    Tambah Data Kelas                        
                </div>
                <form action="{{route('kelas.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-col overflow-auto pe-xl-3" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="row gx-0 gx-xl-3">
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Nama Kelas</label>
                                            <input name="nama_kelas" type="text" class="form-control input-required" required>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jurusan" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Jurusan</label>
                                                    <select name="jurusan" id="select-jurusan" class="form-select input-required" required>
                                                        <option value="">Pilih Berdasarkan Jurusan</option>
                                                        <option value="mipa">MIPA</option>
                                                        <option value="ips">IPS</option>
                                                        <option value="agama">Agama</option>
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