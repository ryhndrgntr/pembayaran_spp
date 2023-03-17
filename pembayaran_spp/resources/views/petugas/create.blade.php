@extends('app/index')
@section('title', 'Petugas')
@section('pagejudul', 'Petugas')
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
                    Tambah Data Petugas                        
                </div>
                <form action="{{route('petugas.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-col overflow-auto pe-xl-3" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="row gx-0 gx-xl-3">
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control input-required text-dark bg-light" required>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="password" class="form-control input-required text-dark bg-light" required>
                                        </div>
                                        <div class="col-xl-4 mb-3">
                                            <label class="form-label">Nama Petugas</label>
                                            <input name="nama_petugas" type="text" class="form-control input-required text-dark bg-light" required>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            
                                            {{-- <div id="level" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Level</label>
                                                    <select name="level" id="select-level" class="form-control input-required text-dark" required>
                                                        <option value="">-- Level --</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="petugas">Petugas</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                        </div>
                                        
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-success" data-form-id="#form-musrenbang">Tambah Data</button>
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