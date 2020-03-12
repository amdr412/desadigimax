<div class="page-sidebar page-sidebar-fixed scroll">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">SIMARTE DT</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#" class="profile-mini">
                <img src="<?= base_url() ?>asset/assets/images/users/avatar.png" alt="John Doe"/>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="<?= base_url() ?>asset/assets/images/users/avatar.png" alt="John Doe"/>
                </div>
                <div class="profile-data">
                    <div class="profile-data-name"><?= $this->session->userdata('nama_admin'); ?></div>
                    <div class="profile-data-title"><?= $this->session->userdata('level'); ?></div>
                </div>
            </div>                                                                        
        </li>
        <li class="xn-title">MENU APLIKASI</li>
        <li class="<?= @$dashboard ?>">
            <a href="<?= site_url('sysadmin') ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
        </li>
        <li class="xn-openable <?= @$master ?>">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">MASTER DATA</span></a>
            <ul>
                <li class="<?= @$admin ?>"><a href="<?= site_url('sysadmin/admin') ?>"><span class="fa fa-users"></span> Data Admin</a></li>
                <li class="<?= @$rt ?>"><a href="<?= site_url('sysadmin/rt') ?>"><span class="fa fa-building-o"></span> Data RT</a></li>
                <li class="<?= @$rw ?>"><a href="<?= site_url('sysadmin/rw') ?>"><span class="fa fa-building-o"></span> Data RW</a></li>
                <li class="<?= @$warga ?>"><a href="<?= site_url('sysadmin/warga') ?>"><span class="fa fa-users"></span> Data Warga</a></li>
            </ul>
        </li>
        <li class="xn-openable <?= @$kegiatan ?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">KEGIATAN</span></a>
            <ul>
                <li class="<?= @$dkegiatan ?>"><a href="<?= site_url('sysadmin/kegiatan') ?>"><span class="fa fa-table"></span> Data Kegiatan</a></li>
            </ul>
        </li>
        <li class="xn-openable <?= @$berita ?>">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">BERITA</span></a>
            <ul>
                <li class="<?= @$dberita ?>"><a href="<?= site_url('view_admin/berita') ?>"><span class="fa fa-file"></span> Data Berita</a></li>
            </ul>
        </li>
        <li class="xn-openable <?= @$slider ?>">
            <a href="#"><span class="fa fa-image"></span> <span class="xn-text">SLIDER</span></a>
            <ul>
                <li class="<?= @$dslider ?>"><a href="<?= site_url('sysadmin/slider') ?>"><span class="fa fa-image"></span> Data Slider</a></li>
                <li class="<?= @$dbanner ?>"><a href="<?= site_url('sysadmin/banner') ?>"><span class="fa fa-image"></span> Data Banner</a></li>
                <li class="<?= @$dmenu ?>"><a href="<?= site_url('sysadmin/menu') ?>"><span class="fa fa-image"></span> Data Menu</a></li>
                <li class="<?= @$dsubmenu ?>"><a href="<?= site_url('sysadmin/submenu') ?>"><span class="fa fa-image"></span> Data Sub Menu</a></li>
                <li class="<?= @$dkonten ?>"><a href="<?= site_url('sysadmin/konten') ?>"><span class="fa fa-image"></span> Data Konten</a></li>
            </ul>
        </li>
        <li class="xn-openable <?= @$surat ?>">
            <a href="#"><span class="fa fa-image"></span> <span class="xn-text">Management Surat</span></a>
            <ul>
                <li class="<?= @$dsurat ?>"><a href="<?= site_url('sysadmin/surat') ?>"><span class="fa fa-image"></span> Surat SKCK</a></li>
                <li class="<?= @$dktp ?>"><a href="<?= site_url('sysadmin/ktp') ?>"><span class="fa fa-image"></span> KTP</a></li>
            </ul>
         <li class="xn-openable <?= @$surat ?>">
            <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Letak Administratif</span></a>
            <ul>
                <li class="<?= @$dwilayah ?>"><a href="<?= site_url('sysadmin/wilayah') ?>"><span class="fa fa-file-text-o"></span> Wil. RT</a></li>
                <li class="<?= @$dwilayah ?>"><a href="<?= site_url('sysadmin/wilayah') ?>"><span class="fa fa-file-text-o"></span> Wil. RW</a></li>
            </ul>    
        </li>
        <li class="xn-openable <?= @$telepon ?>">
            <a href="#"><span class="fa fa-phone"></span> <span class="xn-text">TELEPON</span></a>
            <ul>
                <li class="<?= @$dtelepon ?>"><a href="<?= site_url('sysadmin/telepon') ?>"><span class="fa fa-phone-square"></span> Data Telepon</a></li>
            </ul>
        </li>
        <li class="xn-openable <?= @$penarikan_dana ?>">
            <a href="#"><span class="fa fa-money"></span> <span class="xn-text">PENARIKAN DANA</span></a>
            <ul>
                <li class="<?= @$dpenarikan_dana ?>"><a href="<?= site_url('sysadmin/penarikan-dana') ?>"><span class="fa fa-table"></span> Data Penarikan Dana</a></li>
            </ul>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>