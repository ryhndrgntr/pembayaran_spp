@extends('app/index')
@section('title', 'SPP')
@section('pagejudul', 'SPP')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Edit Data SPP                        
                </div>
                <form action="{{route('spp.update', $data_spp->id_spp)}}" method="post" enctype="multipart/form-data">
                   @csrf
                   @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl">
                                <div class="form-col overflow-auto pe-xl-3" data-simplebar data-simplebar-auto-hide="false">
                                    <div class="row gx-0 gx-xl-3">
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Nominal</label>
                                            <input name="nominal" type="text" class="form-control input-required" required value="250000" disabled>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="tahun" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Tahun</label>
                                                    <select name="tahun" id="select-tahun" class="form-control input-required text-dark" required>
                                                        <option value="">-- Tahun --</option>
                                                        <option @if($data_spp->tahun == "2022"): @selected(true) @endif value="2022">2022</option>
                                                        <option @if($data_spp->tahun == "2023"): @selected(true) @endif value="2023">2023</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
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