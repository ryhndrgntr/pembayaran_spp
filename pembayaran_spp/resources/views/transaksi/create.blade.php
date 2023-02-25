@extends('app/index')
@section('title', 'Transaksi')
@section('pagejudul', 'Transaksi')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Tambah Data Transaksi                        
                </div>
                <form action="{{route('transaksi.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl mb-3">
                                <div id="nisn" class="d-flex gap-3">
                                    <div class="w-100">
                                        <label class="form-label">NISN</label>
                                        <select name="nisn" id="select-nisn" class="form-control input-required text-dark bg-light" required>
                                            <option value="">Pilih Siswa</option>
                                            @foreach ($data_siswa as $value)
                                                <option value="{{ $value->id_siswa }}"> {{ $value->nisn }} - {{ $value->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 mb-3">
                                <label class="form-label">Tanggal Bayar</label>
                                <input name="tgl_bayar" type="date" class="form-control input-required bg-light" value={{ date('Y-m-d') }} required>
                            </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="bulan_dibayar" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Bulan diBayar</label>
                                                    <select name="bulan_dibayar" id="select-bulan_dibayar" class="form-control input-required" required>
                                                        <option value="">Pilih Bulan diBayar</option>
                                                        <option value="Januari">Januari</option>
                                                        <option value="Februari">Februari</option>
                                                        <option value="Maret">Maret</option>
                                                        <option value="April">April</option>
                                                        <option value="Mei">Mei</option>
                                                        <option value="Juni">Juni</option>
                                                        <option value="Juli">Juli</option>
                                                        <option value="Agustus">Agustus</option>
                                                        <option value="September">September</option>
                                                        <option value="Oktober">Oktober</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <div id="tahun_dibayar" class="d-flex gap-3">
                                                <div class="w-100">
                                                    <label class="form-label">Tahun diBayar</label>
                                                    <select name="tahun_dibayar" id="select-tahun_dibayar" class="form-control input-required" required>
                                                        <option value="">Pilih Tahun diBayar</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl mb-3">
                                            <label class="form-label">Jumlah Bayar</label>
                                            <input name="jumlah_bayar" type="number" class="form-control input-required" value="250000" readonly>
                                        </div>
                                        <input type="hidden" name="id_petugas" value={{ auth()->id() }}>
                                        <input type="hidden" name="id_spp" value="1"/>
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