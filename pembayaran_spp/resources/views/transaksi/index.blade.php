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
                          <a href="{{route ('transaksi.create')}}" class="btn btn-primary" title="Tambah Data"><i class="fa-solid fa-plus"></i></a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          @if ($message = Session::get('message'))
                          <div class="alert alert-success alert-block"> 
                            <strong>{{ $message }}</strong>
                          </div>
                          @endif
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Nisn</th>
                                  <th>Nama Siswa</th>
                                  <th>Tanggal Bayar</th>
                                  <th>Bulan diBayar</th>
                                  <th>Tahun diBayar</th>
                                  <th>Jumlah Bayar</th>
                                  @if (Auth::user()->role == "petugas")
                                    {{-- <th class="text-center">Aksi</th> --}}
                                  @endif  
                              </tr>
                          </thead>
                          <tbody>
                              @php
                              $no = 1;
                              @endphp
                              
                                @foreach($data_transaksi as $item)
                                  {{-- @if (Auth::user()->role == "admin")
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nisn}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->tgl_bayar}}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->tahun_dibayar}}</td>
                                        <td>{{$item->jumlah_bayar}}</td>
                                        @if (Auth::user()->role == "petugas")
                                          <td>
                                              <div class="d-flex gap-2 justify-content-center">
                                                  <a href="{{route ('transaksi.edit', $item->id_pembayaran)}}" class="btn btn-primary text-white">Edit</a>
                                                  <form action="{{route ('transaksi.destroy', $item->id_pembayaran)}}" method="post">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button class="btn btn-danger text-white"
                                                          onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></button>
                                                  </form>
                                              </div> 
                                          </td>
                                      @endif   
                                    </tr>
                                  @endif  --}}

                                  @if (Auth::user()->role == "petugas" && $item->id_petugas == auth()->id() || Auth::user()->role == "admin" && $item->is_admin == auth()->id())
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$item->nisn}}</td>
                                        <td>{{$item->nama}}</td>
                                        <td>{{$item->tgl_bayar}}</td>
                                        <td>{{$item->bulan_dibayar}}</td>
                                        <td>{{$item->tahun_dibayar}}</td>
                                        <td>Rp. 
                                          <?php
                                          echo number_format($item->nominal)."<br>";
                                          ?>
                                        </td>
                                         {{-- <td>
                                            <div class="d-flex gap-2 justify-content-center"> --}}
                                                {{-- <a href="{{route ('transaksi.edit', $item->id_pembayaran)}}" class="btn btn-primary text-white">Edit</a> --}}
                                                {{-- <form action="{{route ('transaksi.destroy', $item->id_pembayaran)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger text-white"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></button>
                                                </form>
                                              </div>
                                         </td> --}}
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