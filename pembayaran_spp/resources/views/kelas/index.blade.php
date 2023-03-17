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
                          <a href="kelas/create" class="btn btn-success" title="Tambah Data Kelas"><i class="fa-solid fa-plus"></i></a>
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
                                  <th>Nama Kelas</th>
                                  <th>Jurusan</th>
                                  <th class="text-center">Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              @php
                              $no = 1;
                              @endphp
                              @foreach($data_kelas as $item)
                              <tr>
                                  <td>{{$no++}}</td>
                                  <td>{{$item->nama_kelas}}</td>
                                  <td>{{$item->jurusan}}</td>
                                  <td>
                                      <div class="d-flex gap-2 justify-content-center">
                                          <a href="{{route ('kelas.edit', $item->id_kelas)}}" class="btn-sm btn-success text-white"><i class="fas fa-pencil"></i></a>
                                          <form action="{{route ('kelas.destroy', $item->id_kelas)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button class="btn-sm btn-danger text-white"
                                                  onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a></button>
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