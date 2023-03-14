@extends('app/index')
@section('title', 'Siswa')
@section('pagejudul', 'Siswa')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-chart">
        <div class="card-header ">
          <div class="row">
            <section class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card" style="width: 100%; margin 0 auto">
                        <div class="card-header">
                          <h3 class="card-title"> {{ $titlepage }} </h3>
                          <a href="siswa/create" class="btn btn-primary" title="Tambah Data Siswa"><i class="fa-solid fa-plus"></i></a>
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
                                  <th>Nama</th>
                                  <th>Kelas</th>
                                  <th>Alamat</th>
                                  <th>No Telpon</th>
                                  <th>Jenis Kelamin</th>
                                  <th>Tahun</th>
                                  <th>Nominal</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                              $no = 1;
                              @endphp
                              @foreach($data_siswa as $item)
                              <tr>
                                  <td>{{$no++}}</td>
                                  <td>{{$item->nisn}}</td>
                                  <td>{{$item->nama}}</td>
                                  <td>{{$item->nama_kelas}}</td>
                                  <td>{{$item->alamat}}</td>
                                  <td>{{$item->no_telp}}</td>
                                  <td>{{$item->jk}}</td>
                                  <td>{{$item->tahun}}</td>
                                  <td>Rp. {{number_format( $item->nominal ) }}</td>
                                  {{-- <td>{{$item->tahun}} / Rp. {{number_format($item->nominal)}} </td> --}}
                                  <td>
                                      <div class="d-flex gap-2">
                                          <a href="{{route ('siswa.edit', $item->id_siswa )}}" class="btn btn-primary text-white">Edit</a>
                                          <form action="{{route('siswa.destroy', $item->id_siswa)}}" method="post">
                                              <input type="hidden" name="id_users" value="{{ $item->id_users }}">
                                              @csrf
                                              @method('DELETE')
                                              <button class="btn btn-danger text-white"
                                                  onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a></button>
                                          </form>
                                      </div> 
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
        </section>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="chartBig1"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    
  </div>
  
</div>
@endsection

