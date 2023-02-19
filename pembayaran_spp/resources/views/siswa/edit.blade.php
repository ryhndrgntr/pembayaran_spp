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
              <div class="card-header">
                <div class="card-header fw-bold bg-grad text-black">
                    Edit Data Siswa                        
                </div>
<div class="body flex-grow-1 px-3">
    <div class="card shadow-sm">
        <div class="card-header fw-bold bg-grad text-light">
            Edit Data Siswa
        </div>

        
<div class="container my-5">
        <div class="card-body">
            <a href="{{route('siswa.index')}}" class="btn btn-primary mb-3 text-white"><i class="fa-solid fa-arrow-left"></i>Kembali</a>
            <form action="{{route('siswa.update', $data_siswa->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row gap-3">
                    <div class="col-lg">
                        <div class='mb-3'>
                            <label class='form-lable'>Nisn</label>
                            <input type="text" class='form-control' name="nisn" value="{{$data_siswa->nisn}}">
                        </div>
                        <div class='mb-3'>
                            <label class='form-lable'>Nis</label>
                            <input type="text" class='form-control' name="nis" value="{{$data_siswa->nis}}">
                        </div>
                        <div class='mb-3'>
                            <label class='form-lable'>Nama</label>
                            <input type="text" class='form-control' name="nama" value="{{$data_siswa->nama}}">
                        </div>
                        <div class='mb-3'>
                            <label class='form-lable'>Kelas</label>
                            <input type="text" class='form-control' name="id_kelas" value="{{$data_siswa->id_kelas}}">
                        </div>
                        <div class='mb-3'>
                            <label class='form-lable'>Alamat</label>
                            <input type="text" class='form-control' name="alamat" value="{{$data_siswa->alamat}}">
                        </div>
                        <div class='mb-3'>
                            <label class='form-lable'>No Telpon</label>
                            <input type="text" class='form-control' name="no_telp" value="{{$data_siswa->no_telp}}">
                        </div>
                        <div class='mb-3'>
                            <label class='form-lable'>Jumlah Pembayaran</label>
                            <input type="text" class='form-control' name="id_spp" value="{{$data_siswa->id_spp}}">
                        </div>
                        </div>
                    </div>
                </div>
                <button type='submit' class='btn btn-primary w-100 text-white'>Simpan</button>
            </form>
        </div>
</div>
</div>          
</div>
</div>
</div>
</div>
</div>
</div>
@endsection