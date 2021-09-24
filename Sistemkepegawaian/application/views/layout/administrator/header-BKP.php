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
                <a style="padding-top: 10px; width: 250px" class="navbar-brand" href="<?php echo base_url() ?>administrator/Dashboard">
                    <img src="<?php echo base_url('assets/img/logo/mtpd.png')?>" class="img-responsive">
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
                        <li><a href="<?php echo base_url('Dashboard/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>                    
                </li>                
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav iki" id="side-menu">                        
                        <li>
                            <a <?php if ($menu == 'dashboard') {echo 'class=active';} ?> href="<?php echo base_url() ?>administrator/Dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                                <!-- <li>
                                    <a <?php if ($menulist == 'pangkat') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/pangkat')?>"><i class="fa <?php if ($menulist == 'pagkat') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Pangkat</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'person') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Master/person')?>"><i class="fa <?php if ($menulist == 'person') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> User</a>
                                </li> -->  
                            </ul>                            
                        </li>
                        <li <?php if ($menu == 'administrasi') {echo 'class=active';} ?>>
                            <a href="#"><i class="fa fa-money fa-fw"></i> Permohonan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a <?php if ($menulist == 'cuti') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/cuti') ?>"><i class="fa <?php if ($menulist == 'inv') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Cuti</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'ijin') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/ijin') ?>"><i class="fa <?php if ($menulist == 'ijin') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Ijin</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'lembur') {echo 'class=active';} ?> href="<?php echo base_url('transaction/Permohonan/lembur') ?>"><i class="fa <?php if ($menulist == 'lembur') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Lembur</a>
                                </li>
                                <li>
                                    <a <?php if ($menulist == 'report_administrasi') {echo 'class=active';} ?> href="<?php echo base_url('administrator/Administrasi/report') ?>"><i class="fa <?php if ($menulist == 'report_administrasi') {echo 'fa-circle';} else {echo 'fa-circle-o';}?> fa-fw"></i> Laporan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>