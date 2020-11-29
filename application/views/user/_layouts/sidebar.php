        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="<?= base_url()?>" aria-expanded="false">
                            <i class="icon-home menu-icon"></i><span class="nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-globe menu-icon"></i><span class="nav-text">Data Master</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= site_url('Administrator/masterSHDK') ?>">Status Hubungan Dalam Keluarga</a></li>
                            <li><a href="<?= site_url('Administrator/masterPekerjaan') ?>">Pekerjaan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= site_url('Administrator/kartuKeluarga') ?>" aria-expanded="false">
                            <i class="icon-people menu-icon"></i><span class="nav-text">Kartu Keluarga</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= site_url('Administrator/pegawai') ?>" aria-expanded="false">
                            <i class="icon-user menu-icon"></i><span class="nav-text">Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-docs menu-icon"></i><span class="nav-text">Laporan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= site_url('Administrator/laporanPenduduk') ?>">Penduduk</a></li>
                            <li><a href="<?= site_url('Administrator/laporanPendidikan') ?>">Pendidikan Terakhir</a></li>
                            <li><a href="<?= site_url('Administrator/laporanPekerjaan') ?>">Pekerjaan</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->