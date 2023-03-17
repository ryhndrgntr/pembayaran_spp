@extends('app/index')
@section('title', 'Petugas')
@section('pagejudul', 'Petugas')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Edit Data Petugas                        
                </div>
                    <div class="card-body">
                      <form action="{{ route('petugas.update', $data_petugas->id_petugas)}}" method="post" class="row g-3">
                        <input type="hidden" name="id_users" value="{{ $data_petugas->id_users }}">
                        @csrf
                        @method('put')
                        <div class="col-md-6">
                          <label class="form-label">Email</label>
                          <input type="text" class="form-control text-dark bg-light" name="email" value="{{ $data_petugas->email }}" required>
                        </div>
                        <div class="col-md-6">
                          <label class="form-label">Password</label>
                          <input type="password" class="form-control text-dark bg-light" name="password" value="{{ $data_petugas->password }}" readonly>
                        </div>
                        <div class="col-6 mt-3">
                          <label class="form-label">Nama Petugas</label>
                          <input type="text" class="form-control text-dark bg-light" name="nama_petugas" value="{{ $data_petugas->nama_petugas }}" required>
                        </div>
                        <div class="col-6 mt-5">
                            
                            {{-- <label class="form-label">Level</label>
                            <select name="level" id="select-level" class="form-select input-required" value="{{ $data_petugas->level }}" required>
                                <option selected>-- Level --</option>
                                <option @if($data_petugas->level == "admin"): @selected(true) @endif value="admin">Admin</option>
                                <option @if($data_petugas->level == "petugas"): @selected(true) @endif value="petugas">Petugas</option>
                            </select> --}}
                        </div>
                        <div class="col-6 mt-3">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
                {{-- <a href="{{route('petugas.index')}}" class="btn btn-primary mb-3 text-white">Kembali</a>
                <form action="{{route('petugas.update', $data_petugas->id_petugas)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-col overflow-auto pe-xl-3" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="row gx-0 gx-xl-3">
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Email</label>
                                            <input name="email" type="text" class="form-control input-required" required value="{{$data_petugas->email}}>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Password</label>
                                            <input name="password" type="text" class="form-control input-required" required readonly>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Nama Petugas</label>
                                            <input name="nama_petugas" type="text" class="form-control input-required" required value="{{$data_petugas->nama_petugas}}>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <div id="level" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Level</label>
                                                    <select name="level" id="select-level" class="form-control input-required text-dark" required>
                                                        <option value="">-- Level --</option>
                                                        <option @if($data_petugas->level == "admin"): @selected(true) @endif value="admin">Admin</option>
                                                        <option @if($data_petugas->level == "petugas"): @selected(true) @endif value="petugas">Petugas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex gap-2">
                                            <button class="btn btn-primary" data-form-id="#form-musrenbang">Edit Data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           --}}
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
@endsection