@extends('app/index')
@section('title', 'Kelas')
@section('pagejudul', 'Kelas')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card card-chart">
                    <div class="card-header ">
                        <span>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </span>
                        <div class="row">
                            <div class="card-header">
                                <div class="card-header fw-bold bg-grad text-black">
                                    Tambah Data Kelas
                                </div>
                                <form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 mb-3">
                                                <div id="nama_kelas" class="d-flex gap-3">
                                                    <div class="w-100">
                                                        <label class="form-label">Kelas</label>
                                                        <select name="nama_kelas" id="select-nama_kelas"
                                                            class="form-control input-required @error('nama_kelas') is invalid @enderror text-dark bg-light"
                                                            required>
                                                            <option value="">Pilih Berdasarkan Kelas</option>
                                                            <option value="X MIPA 1">X MIPA 1</option>
                                                            <option value="X MIPA 2">X MIPA 2</option>
                                                            <option value="X MIPA 3">X MIPA 3</option>
                                                            <option value="X IPS 1">X IPS 1</option>
                                                            <option value="X IPS 2">X IPS 2</option>
                                                            <option value="X IPS 3">X IPS 3</option>
                                                            <option value="XI MIPA 1">XI MIPA 1</option>
                                                            <option value="XI MIPA 2">XI MIPA 2</option>
                                                            <option value="XI MIPA 3">XI MIPA 3</option>
                                                            <option value="XI IPS 1">XI IPS 1</option>
                                                            <option value="XI IPS 2">XI IPS 2</option>
                                                            <option value="XI IPS 3">XI IPS 3</option>
                                                            <option value="XII MIPA 1">XII MIPA 1</option>
                                                            <option value="XII MIPA 2">XII MIPA 2</option>
                                                            <option value="XII MIPA 3">XII MIPA 3</option>
                                                            <option value="XII IPS 1">XII IPS 1</option>
                                                            <option value="XII IPS 2">XII IPS 2</option>
                                                            <option value="XII IPS 3">XII IPS 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                @error('nama_kelas')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xl-12 mb-3">
                                                <div id="jurusan" class="d-flex gap-3">
                                                    <div class="w-100">
                                                        <label class="form-label">Jurusan</label>
                                                        <select name="jurusan" id="select-jurusan"
                                                            class="form-control input-required text-dark bg-light" required>
                                                            <option value="">Pilih Berdasarkan Jurusan</option>
                                                            <option value="MIPA">MIPA</option>
                                                            <option value="IPS">IPS</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-6 mt-3">
                                                <button class="btn btn-success">Tambah Data</button>
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
