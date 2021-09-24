<body>
    <!-- <div class="navbar navbar-inverse set-radius-zero"> -->
    <div class="navbar-default navbar-static-top iku">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="<?php echo base_url('Dashboard')?>"> -->
                    <!-- <img src="<?php //echo base_url('assets/img/logo.png')?>" /> -->
                <!-- </a> -->
                <a style="padding-top: 30px; width: 250px" class="navbar-brand" href="<?php echo base_url().'Post' ?>">
                    <img src="<?php echo base_url('assets/img/SistemKepegawaian.png')?>" class="img-responsive">
                </a>
            </div>
            <div class="left-div">
                
            </div>
        </div>
    </div>
    <section class="menu-section">
        <div class="container">
            <input type="hidden" name="ses_logid" value="<?php echo $this->session->userdata('login_id');?>">
            <input type="hidden" name="ses_akspost" value="<?php echo $this->session->userdata('akses_post');?>">
            <input type="hidden" name="ses_aksadm" value="<?php echo $this->session->userdata('akses_admin');?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left">
                            <li>
                                <!-- <a href="javascript:void(0)" onclick="back_()"> -->
                                <a href="<?php echo 'https://www.e-matchad.com/' ?>"
                                    <i class="glyphicon glyphicon-home"></i> Home E-Match
                                </a>
                            </li>
                        </ul>
                        <!-- <ul id="menu-top" class="nav navbar-nav navbar-right"> -->
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <!-- <li>
                                <a <?php if($menu == 'dashboard'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Dashboard')?>">
                                    Dashboard
                                </a>
                            </li> -->
                            <li>
                                <a <?php if($menu == 'visi_misi'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Dashboard')?>">
                                    Visi Misi
                                </a>
                            </li>
                            <li>
                                <a <?php if($menu == 'budaya_kerja'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Dashboard/budaya')?>">
                                    Budaya Kerja
                                </a>
                            </li>
                            <li>
                                <a <?php if($menu == 'dash_post'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Post')?>">
                                    Permohonan
                                </a>
                            </li>     
                            <?php if ($this->session->userdata('usg_id')=='1'): ?>                                
                            <li id="nav_admin">
                                <a <?php if($menu == 'dash_manage'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Manage')?>">
                                    Kelola User
                                </a>
                            </li>
                            <?php endif ?>                            
                            <li style="display: none;">
                                <a <?php if($menu == 'login'){echo 'class="menu-top-active"';}?> href="<?php echo base_url('Login')?>">
                                    Login
                                </a>
                            </li>

                            <li >
                                 <a href="https://www.e-matchad.com/login/logout"  > 
                                <!--<a href="http://localhost/ematch/login/logout"  >-->
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>