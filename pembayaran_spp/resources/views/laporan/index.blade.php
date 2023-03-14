@extends('app/index')
@section('title', 'Laporan')
@section('pagejudul', 'Laporan')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">
              
            </div>
          </div>
          <div class="card-body">
              <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card" style="width: 100%; margin 0 auto">
                          <div class="card-header">
                            <h3 class="card-title">{{ $titlepage }}</h3>
                            {{-- <a href="/laporan/create" class="btn btn-primary" target="_blank">CETAK PDF</a> --}}
                          </div>
                          <!-- /.card-header -->
                          <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"></h1>
                            <a href="{{route ('laporan.cetak') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" target="_blank"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                        </div>
           
                        <!-- DataTales Example -->
                   <div class="card shadow mb-4">
                   <div class="card-header py-3">
                       <h6 class="m-0 font-weight-bold text-primary">Laporan</h6>
                   </div>
                   <div class="card-body">
                      @foreach ($data_transaksi as $id)
                      <div class="border-top">
                        <div class="mt-4 text-uppercase text-bold">
                           {{$id->nisn . ' - ' . $id->nama . ' - ' . $id->nama_kelas}}
                        </div>
                            <div>SPP Bulan <b class="text-capitalize">{{ $id->bulan_dibayar }}</b></div>
                            <div>ID SPP {{ $id->id_spp }}</div>
                            <div>Bayar Rp. {{ $id->jumlah_bayar }}</div>                     
                        </div>
                      @endforeach
                   </div>
               </div>
                    </div>
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      
    </div>
    
</div>
@endsection



{{-- @extends('app/index')
@section('title', 'Laporan')
@section('pagejudul', 'Laporan')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-chart">
          <div class="card-header ">
            <div class="row">
              
            </div>
          </div>
          <div class="card-body">
            <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card" style="width: 100%; margin 0 auto">
                        <div class="card-header">
                             <!-- /header -->
                             
                             <hr class="border">
                             
                             <!-- content -->
                             
                             <div class="size2 text-center mb-1">LAPORAN PEMBAYARAN SPP</div>
                             
                            <table class="table-center mb-1">
                                <thead>
                                   <tr>
                                      <th>Petugas</th>
                                      <th>Siswa</th>
                                      <th>Kelas</th>
                                      <th>SPP Bulan</th>
                                      <th>SPP Nominal</th>
                                      <th>Nominal Bayar</th>
                                      <th>Tanggal Bayar</th>
                                   </tr>
                                </thead>
                                <tbody>
                                {{-- @dd($data_kelas) --}}
                                   {{-- @foreach($data_transaksi as $val)
                                   <tr>
                                      <td>{{ $val->nama_petugas }}</td>
                                      <td>{{ $val->nama }}</td>
                                      <td>{{ $val->nama_kelas }}</td>
                                      <td>{{ $val->bulan_dibayar }}</td>
                                      <td>{{ $val->nominal }}</td>
                                      <td>{{ $val->jumlah_bayar }}</td> --}}
                                      {{-- <td>{{ $val->created_at->format('d M, Y') }}</td> --}}
                                   
                                   {{-- </tr>
                                   @endforeach
                                </tbody>
                          
                          
                          </table>
                  </div>
              </div>
            </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      
    </div>
    
</div> --}}
