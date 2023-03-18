@extends('app/index')
@section('title', 'Histori')
@section('pagejudul', 'Histori')
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
                          <h3 class="card-title">{{$titlepage}}</h3>
                        </div>
                        <!-- /.card-header -->
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nama</th>
                                  <th>Nama Kelas</th>
                                  <th>Jurusan</th>
                                  <th>Nominal</th>
                                  <th>Bulan diBayar</th>
                                  <th>Tahun diBayar</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                              $no = 1;
                              @endphp
                              @foreach($data_transaksi as $item)
                                @if (Auth::user()->role == "siswa" && $item->id_users == auth()->id())  {{-- kondisi : jika yang login itu role adalah siswa --}}
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->nama_kelas}}</td>
                                        <td>{{$item->jurusan}}</td>
                                        <td>Rp. {{number_format( $item->nominal ) }}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->tahun_dibayar}}</td>
                                    </tr>
                                @endif    
                                @if (Auth::user()->role == "petugas" && $item->id_petugas == auth()->id())  {{-- kondisi : jika yang login itu role adalah petugas --}}
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->nama_kelas}}</td>
                                        <td>{{$item->jurusan}}</td>
                                        <td>Rp. {{number_format( $item->nominal ) }}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->tahun_dibayar}}</td>
                                    </tr>
                                @endif    
                                @if (Auth::user()->role == "admin")  {{-- kondisi : jika yang login itu role adalah admin --}}
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->nama_kelas}}</td>
                                        <td>{{$item->jurusan}}</td>
                                        <td>Rp. {{number_format( $item->nominal ) }}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->tahun_dibayar}}</td>
                                    </tr>
                                @endif
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
    
</div>
@endsection