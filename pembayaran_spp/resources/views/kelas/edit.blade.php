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
                                            <option @if($data_kelas->nama_kelas == "X MIPA 1"): @selected(true) @endif value="X MIPA 1">X MIPA 1</option>
                                            <option @if($data_kelas->nama_kelas == "X MIPA 2"): @selected(true) @endif value="X MIPA 2">X MIPA 2</option>
                                            <option @if($data_kelas->nama_kelas == "X MIPA 3"): @selected(true) @endif value="X MIPA 3">X MIPA 3</option>
                                            <option @if($data_kelas->nama_kelas == "X MIPA 4"): @selected(true) @endif value="X MIPA 4">X MIPA 4</option>
                                            <option @if($data_kelas->nama_kelas == "X MIPA 5"): @selected(true) @endif value="X MIPA 5">X MIPA 5</option>
                                            <option @if($data_kelas->nama_kelas == "X IPS 1"): @selected(true) @endif value="X IPS 1">X IPS 1</option>
                                            <option @if($data_kelas->nama_kelas == "X IPS 2"): @selected(true) @endif value="X IPS 2">X IPS 2</option>
                                            <option @if($data_kelas->nama_kelas == "X IPS 3"): @selected(true) @endif value="X IPS 3">X IPS 3</option>
                                            <option @if($data_kelas->nama_kelas == "X IPS 4"): @selected(true) @endif value="X IPS 4">X IPS 4</option>
                                            <option @if($data_kelas->nama_kelas == "XI MIPA 1"): @selected(true) @endif value="XI MIPA 1">XI MIPA 1</option>
                                            <option @if($data_kelas->nama_kelas == "XI MIPA 2"): @selected(true) @endif value="XI MIPA 2">XI MIPA 2</option>
                                            <option @if($data_kelas->nama_kelas == "XI MIPA 3"): @selected(true) @endif value="XI MIPA 3">XI MIPA 3</option>
                                            <option @if($data_kelas->nama_kelas == "XI MIPA 4"): @selected(true) @endif value="XI MIPA 4">XI MIPA 4</option>
                                            <option @if($data_kelas->nama_kelas == "XI MIPA 5"): @selected(true) @endif value="XI MIPA 5">XI MIPA 5</option>
                                            <option @if($data_kelas->nama_kelas == "XI IPS 1"): @selected(true) @endif value="XI IPS 1">XI IPS 1</option>
                                            <option @if($data_kelas->nama_kelas == "XI IPS 2"): @selected(true) @endif value="XI IPS 2">XI IPS 2</option>
                                            <option @if($data_kelas->nama_kelas == "XI IPS 3"): @selected(true) @endif value="XI IPS 3">XI IPS 3</option>
                                            <option @if($data_kelas->nama_kelas == "XI IPS 4"): @selected(true) @endif value="XI IPS 4">XI IPS 4</option>
                                            <option @if($data_kelas->nama_kelas == "XII MIPA 1"): @selected(true) @endif value="XII MIPA 1">XII MIPA 1</option>
                                            <option @if($data_kelas->nama_kelas == "XII MIPA 2"): @selected(true) @endif value="XII MIPA 2">XII MIPA 2</option>
                                            <option @if($data_kelas->nama_kelas == "XII MIPA 3"): @selected(true) @endif value="XII MIPA 3">XII MIPA 3</option>
                                            <option @if($data_kelas->nama_kelas == "XII MIPA 4"): @selected(true) @endif value="XII MIPA 4">XII MIPA 4</option>
                                            <option @if($data_kelas->nama_kelas == "XII MIPA 5"): @selected(true) @endif value="XII MIPA 5">XII MIPA 5</option>
                                            <option @if($data_kelas->nama_kelas == "XII IPS 1"): @selected(true) @endif value="XII IPS 1">XII IPS 1</option>
                                            <option @if($data_kelas->nama_kelas == "XII IPS 2"): @selected(true) @endif value="XII IPS 2">XII IPS 2</option>
                                            <option @if($data_kelas->nama_kelas == "XII IPS 3"): @selected(true) @endif value="XII IPS 3">XII IPS 3</option>
                                            <option @if($data_kelas->nama_kelas == "XII IPS 4"): @selected(true) @endif value="XII IPS 4">XII IPS 4</option>
                                            
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
                                                        <option @if($data_kelas->jurusan == "MIPA"): @selected(true) @endif value="MIPA">MIPA</option>
                                                        <option @if($data_kelas->jurusan == "IPS"): @selected(true) @endif value="IPS">IPS</option>
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