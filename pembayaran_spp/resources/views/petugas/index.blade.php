@extends('app/index')
@section('title', 'Petugas')
@section('pagejudul', 'petugas')
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
                            <a href="petugas/create" class="btn btn-primary" title="Tambah Data Petugas"><i class="fa-solid fa-plus"></i></a>
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
                                    <th>Email</th>
                                    <th>Nama Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @foreach($data_petugas as $p)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>{{$p->nama_petugas}}</td>
                                    <td>
                                        <div class="d-flex gap-2">
                                            <a href="{{route ('petugas.edit', $p->id_petugas)}}" class="btn btn-primary text-white">Edit</a>
                                            <form action="{{route ('petugas.destroy', $p->id_petugas)}}" method="post">
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
      </div>
    </div>
    <div class="row">
      
    </div>
    
</div>
@endsection

