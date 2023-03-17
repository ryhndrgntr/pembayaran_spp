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
                                                <h3 class="card-title">{{ $titlepage }}</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="d-block">
                                                <form action={{ route('laporan.cetak') }} method="post">
                                                    @csrf
                                                    <label for="start_date">Tanggal Mulai:</label>
                                                    <input type="date" id="start_date" name="start_date"
                                                        value="{{ old('start_date') }}" placeholder="Pilih Tanggal">

                                                    <label for="end_date">Tanggal Selesai:</label>
                                                    <input type="date" id="end_date" name="end_date"
                                                        value="{{ old('end_date') }}" placeholder="Pilih Tanggal">
                                                    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> --}}
                                                    {{-- <h1 class="h3 mb-0 text-gray-800"></h1> --}}
                                                    <button type="submit"
                                                        class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                                            class="fas fa-download fa-sm text-white-50"></i>
                                                        Generate Report</button>
                                                </form>
                                                {{-- </div> --}}
                                            </div>
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
                                                    @foreach ($data_transaksi as $item)
                                                        {{-- @if (Auth::user()->role == 'siswa' && $item->id_users == auth()->id()) --}}
                                                            {{-- kondisi : jika yang login itu role adalah siswa --}}
                                                            <tr>
                                                                <td>{{ $no++ }}</td>
                                                                <td>{{ $item->nama }}</td>
                                                                <td>{{ $item->nama_kelas }}</td>
                                                                <td>{{ $item->jurusan }}</td>
                                                                <td>Rp. {{ number_format($item->jumlah_bayar) }}</td>
                                                                <td>{{ $item->bulan_dibayar }}</td>
                                                                <td>{{ $item->tahun_dibayar }}</td>
                                                            </tr>
                                                        {{-- @endif --}}
                                                        {{-- @if (Auth::user()->role == 'admin') --}}
                                                            {{-- kondisi : jika yang login itu role adalah siswa --}}
                                                            {{-- <tr>
                                                                <td>{{ $no++ }}</td>
                                                                <td>{{ $item->nama }}</td>
                                                                <td>{{ $item->nama_kelas }}</td>
                                                                <td>{{ $item->jurusan }}</td>
                                                                <td>Rp. {{ number_format($item->jumlah_bayar) }}</td>
                                                                <td>{{ $item->bulan_dibayar }}</td>
                                                                <td>{{ $item->tahun_dibayar }}</td>
                                                            </tr> --}}
                                                        {{-- @endif --}}
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
