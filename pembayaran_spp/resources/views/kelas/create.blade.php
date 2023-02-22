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
                    Tambah Data Kelas                        
                </div>
                <form action="{{route('kelas.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 mb-3">
                                <div id="nama_kelas" class="d-flex gap-3">
                                    <div class="w-100">
                                        <label class="form-label">Kelas</label>
                                        <select name="nama_kelas" id="select-nama_kelas" class="form-control input-required" required>
                                            <option value="">Pilih Berdasarkan Kelas</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
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
                                                        <option value="MIPA 1">MIPA 1</option>
                                                        <option value="MIPA 2">MIPA 2</option>
                                                        <option value="MIPA 3">MIPA 3</option>
                                                        <option value="MIPA 4">MIPA 4</option>
                                                        <option value="MIPA 5">MIPA 5</option>
                                                        <option value="IPS 1">IPS 1</option>
                                                        <option value="IPS 2">IPS 2</option>
                                                        <option value="IPS 3">IPS 3</option>
                                                        <option value="IPS 4">IPS 4</option>
                                                        <option value="IPS 5">IPS 5</option>
                                                        <option value="AGAMA">Agama 1</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-6 mt-3">
                                            <button class="btn btn-primary">Tambah Data</button>
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