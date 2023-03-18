
<div class="sidebar">
    <div class="sidebar-wrapper">
        {{-- <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
            {{ $titleside }}
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
            {{ $pageside }}
            </a>
        </div> --}}
        <ul class="nav">

            @if (Auth::user()->role == "admin")
                <li class="{{ (request()->is('dashadmin')) ? 'active' : '' }}">
                    <a href="/dashadmin">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ (request()->is('petugas')) ? 'active' : '' }}">
                    <a href="/petugas">
                        <i class="fas fa-users"></i>
                        <p>Petugas</p>
                    </a>
                </li>
                <li class="{{ (request()->is('siswa')) ? 'active' : '' }}">
                    <a href="/siswa">
                        <i class="fas fa-user"></i>
                        <p>Siswa</p>
                    </a>
                </li>
                <li class="{{ (request()->is('kelas')) ? 'active' : '' }}">
                    <a href="/kelas">
                        <i class="fas fa-door-open"></i>
                        <p>Kelas</p>
                    </a>
                </li>
                <li class="{{ (request()->is('spp')) ? 'active' : '' }}">
                    <a href="/spp">
                        <i class="fas fa-money-check"></i>
                        <p>SPP</p>
                    </a>
                </li>
                <li class="{{ (request()->is('transaksi')) ? 'active' : '' }}">
                    <a href="/transaksi/">
                        <i class="fas fa-exchange"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="{{ (request()->is('laporan')) ? 'active' : '' }}">
                    <a href="/laporan">
                        <i class="fas fa-file"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li class="{{ (request()->is('histori')) ? 'active' : '' }}">
                    <a href="/histori">
                        <i class="fas fa-history"></i>
                        <p>Histori Pembayaran</p>
                    </a>
                </li>
            @endif
            
            @if (Auth::user()->role == "petugas")
                <li class="{{ (request()->is('dashpetugas')) ? 'active' : '' }}">
                    <a href="/dashpetugas">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ (request()->is('transaksi')) ? 'active' : '' }}">
                    <a href="/transaksi/">
                        <i class="fas fa-exchange"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="{{ (request()->is('histori')) ? 'active' : '' }}">
                    <a href="/histori">
                        <i class="fas fa-history"></i>
                        <p>Histori Pembayaran</p>
                    </a>
                </li>
            @endif

            @if (Auth::user()->role == "siswa")
                <li class="{{ (request()->is('dashsiswa')) ? 'active' : '' }}">
                    <a href="/dashsiswa">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ (request()->is('histori')) ? 'active' : '' }}">
                    <a href="/histori">
                        <i class="fas fa-history"></i>
                        <p>Histori Pembayaran</p>
                    </a>
                </li>
            @endif
        </ul>
    </div> 
</div>