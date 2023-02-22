@extends('app/index')
@section('title', 'Kelas')
@section('pagejudul', 'Kelas')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Edit Data Kelas                        
                </div>
                <form action="{{route('kelas.update', $data_kelas->id_kelas)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <div id="nama_kelas" class="d-flex gap-3">
                                    <div class="w-100">
                                        <label class="form-label">Kelas</label>
                                        <select name="nama_kelas" id="select-nama_kelas" class="form-control input-required" required>
                                            <option value="">Pilih Berdasarkan Kelas</option>
                                            <option @if($data_kelas->nama_kelas == "X"): @selected(true) @endif value="X">X</option>
                                            <option @if($data_kelas->nama_kelas == "XI"): @selected(true) @endif value="XI">XI</option>
                                            <option @if($data_kelas->nama_kelas == "XII"): @selected(true) @endif value="XII">XII</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="jurusan" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Jurusan</label>
                                                    <select name="jurusan" id="select-jurusan" class="form-control input-required" required>
                                                        <option value="">Pilih Berdasarkan Jurusan</option>
                                                        <option @if($data_kelas->jurusan == "MIPA 1"): @selected(true) @endif value="MIPA 1">MIPA 1</option>
                                                        <option @if($data_kelas->jurusan == "MIPA 2"): @selected(true) @endif value="MIPA 2">MIPA 2</option>
                                                        <option @if($data_kelas->jurusan == "MIPA 3"): @selected(true) @endif value="MIPA 3">MIPA 3</option>
                                                        <option @if($data_kelas->jurusan == "MIPA 4"): @selected(true) @endif value="MIPA 4">MIPA 4</option>
                                                        <option @if($data_kelas->jurusan == "MIPA 5"): @selected(true) @endif value="MIPA 5">MIPA 5</option>
                                                        <option @if($data_kelas->jurusan == "IPS 1"): @selected(true) @endif value="IPS 1">IPS 1</option>
                                                        <option @if($data_kelas->jurusan == "IPS 2"): @selected(true) @endif value="IPS 2">IPS 2</option>
                                                        <option @if($data_kelas->jurusan == "IPS 3"): @selected(true) @endif value="IPS 3">IPS 3</option>
                                                        <option @if($data_kelas->jurusan == "IPS 4"): @selected(true) @endif value="IPS 4">IPS 4</option>
                                                        <option @if($data_kelas->jurusan == "IPS 5"): @selected(true) @endif value="IPS 5">IPS 5</option>
                                                        <option @if($data_kelas->jurusan == "AGAMA"): @selected(true) @endif value="AGAMA">Agama</option>
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