<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top iku" role="navigation" style="margin-bottom: 0">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!--  <a style="padding-top: 10px; width: 250px" class="navbar-brand" href="<?php //echo base_url() ?>administrator/Dashboard"> -->
                 <a style="padding-top: 10px; width: 250px" class="navbar-brand" href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url('assets/img/SistemKepegawaian.png')?>" class="img-responsive">
                </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <!-- <li><a href="<?php //echo base_url('Dashboard/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a> -->
                        <li> <a href="http://localhost/ematch/login/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>                    
                </li>                
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav iki" id="side-menu">                        
                        <li>
                            <a <?php if ($menu == 'dashboard') {echo 'class=active';} ?> href="<?php echo base_url() ?>Post"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li <?php if ($menu == 'master') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-database fa-fw"></i> Data Center<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'karyawan') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/karyawan')?>"><i class="fa <?php if ($menulist == 'karyawan') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Karyawan</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'jabatan') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/jabatan')?>"><i class="fa <?php if ($menulist == 'jabatan') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Jabatan</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'sp') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/sp')?>"><i class="fa <?php if ($menulist == 'sp') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Record SP</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'tabungan') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/tabungan')?>"><i class="fa <?php if ($menulist == 'tabungan') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Tabungan Karyawan</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'pembayaran') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/pembayaran')?>"><i class="fa <?php if ($menulist == 'pembayaran') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Pembayaran Koperasi</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'potongan') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/potongan')?>"><i class="fa <?php if ($menulist == 'potongan') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Potongan Salary</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'LaporanDC') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/report') ?>"><i class="fa <?php if ($menulist == 'LaporanDC') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li> 
                            </ul>                            
                        </li>
                        <li <?php if ($menu == 'administrasi') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Permohonan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'cuti') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/cuti') ?>"><i class="fa <?php if ($menulist == 'cuti') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Cuti</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'ijin') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/ijin') ?>"><i class="fa <?php if ($menulist == 'ijin') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Ijin</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'lembur') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/lembur') ?>"><i class="fa <?php if ($menulist == 'lembur') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Lembur</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'pinjaman') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/pinjaman')?>"><i class="fa <?php if ($menulist == 'pinjaman') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Pinjaman Koperasi</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'LaporanPermohonan') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/report') ?>"><i class="fa <?php if ($menulist == 'LaporanPermohonan') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>