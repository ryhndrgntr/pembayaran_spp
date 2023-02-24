
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
            {{ $titleside }}
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
            {{ $pageside }}
            </a>
        </div>
        <ul class="nav">
            <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                <a href="/">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            @if (Auth::user()->role == "admin")
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
                    <a href="/transaksi">
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
            @endif
            {{-- <li>
            <a href="./icons.html">
                <i class="tim-icons icon-atom"></i>
                <p>Icons</p>
            </a>
            </li>
            <li>
            <a href="./map.html">
                <i class="tim-icons icon-pin"></i>
                <p>Maps</p>
            </a>
            </li>
            <li>
            <a href="./notifications.html">
                <i class="tim-icons icon-bell-55"></i>
                <p>Notifications</p>
            </a>
            </li>
            <li>
            <a href="./user.html">
                <i class="tim-icons icon-single-02"></i>
                <p>User Profile</p>
            </a>
            </li>
            <li>
            <a href="./tables.html">
                <i class="tim-icons icon-puzzle-10"></i>
                <p>Table List</p>
            </a>
            </li>
            <li>
            <a href="./typography.html">
                <i class="tim-icons icon-align-center"></i>
                <p>Typography</p>
            </a>
            </li>
            <li>
            <a href="./rtl.html">
                <i class="tim-icons icon-world"></i>
                <p>RTL Support</p>
            </a>
            </li>
            <li class="active-pro">
            <a href="./upgrade.html">
                <i class="tim-icons icon-spaceship"></i>
                <p>Upgrade to PRO</p>
            </a>
            </li> --}}
        </ul>
    </div> 
</div>