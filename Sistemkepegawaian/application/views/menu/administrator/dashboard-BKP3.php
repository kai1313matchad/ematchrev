<!-- Page Content -->
<style>
    .line-separator{
        height:1px;
        background:#717171;
        border-bottom:1px solid #313030;
    }
</style>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Selamat Datang di Sistem Kepegawaian</h1>
                    </div>
                </div>
                <div class="row">
                    <?php
                        if(isset($_SESSION['alert']))
                        {
                            echo $_SESSION['alert'];
                            $this->session->unset_userdata('alert');
                        }                        
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#1" data-toggle="tab">
                                    <h4>Status Akses</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#2" data-toggle="tab">
                                    <h4>Profile Karyawan</h4>
                                </a>
                            </li>                         
                            <li>
                                <a href="#3" data-toggle="tab">
                                    <h4>Ganti Password</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#4" data-toggle="tab">
                                    <h4>Status SP</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#5" data-toggle="tab">
                                    <h4>Koperasi</h4>
                                </a>
                            </li>
                            <li>
                                <a href="#6" data-toggle="tab">
                                    <h4>Potongan Salary</h4>
                                </a>
                            </li>
                            <li <?php echo (($this->session->userdata('user_akses') != '0')? 'style="display:none"':''); ?>>
                                <a href="#7" data-toggle="tab">
                                    <h4>User Access</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="1">
                        <br>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Username</label>
                                <div class="col-xs-6">
                                    <div class="well well-sm">
                                        <?php echo $this->session->userdata('username'); ?>
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Cabang</label>
                                <div class="col-xs-6">
                                    <div class="well well-sm">
                                        <?php echo $this->session->userdata('user_branchname'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Status Cabang</label>
                                <div class="col-xs-6">
                                    <div class="well well-sm">
                                        <?php echo (($this->session->userdata('branch_sts') == '0')? 'PUSAT' : 'CABANG'); ?>
                                    </div>
                                    <!-- <input type="text" class="form-control" name="" value="<?php echo (($this->session->userdata('branch_sts') == '0')? 'PUSAT' : 'CABANG'); ?>" readonly> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">User Level</label>
                                <div class="col-xs-6">
                                    <div class="well well-sm">
                                        <?php
                                            if($this->session->userdata('user_akses') == '0'){echo '<i class="fa fa-user-secret fa-lg"></i> Administrator';}
                                            if($this->session->userdata('user_akses') == '1'){echo '<i class="fa fa-user-circle fa-lg"></i> Super';}
                                            if($this->session->userdata('user_akses') == '2'){echo '<i class="fa fa-user fa-lg"></i> Regular';}
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <button type="button" onclick="test()" class="btn btn-primary">Test</button>
                            </div> -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="2">
                        <br>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">NIK</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="NIK2" name="NIK2"></span>
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Nama Lengkap</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="nama_karyawan2" name="nama_karyawan2"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Agama</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="agama" name="agama"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Status Menikah</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="status" name="status"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">E-mail</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="email" name="email"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Phone</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="phone" name="phone"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Nomor KTP</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="KTP" name="KTP"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Alamat KTP</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="alamat_KTP" name="alamat_KTP"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Nomor NPWP</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="npwp" name="npwp"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Nomor BPJS Kesehatan</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="BPJS_kesehatan" name="BPJS_kesehatan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Nomor BPJS Ketenagakerjaan</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="BPJS_ketenagakerjaan" name="BPJS_ketenagakerjaan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">SIM</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="SIM" name="SIM"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Pendidikan Terakhir</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="pendidikan" name="pendidikan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Tanggal Masuk Kerja</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="masuk_kerja" name="masuk_kerja"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Jabatan Sekarang</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="jabatan" name="jabatan"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-offset-1 col-xs-2">Jumlah Cuti</label>
                                <div class="col-xs-6">
                                    <div class="form-control">
                                        <span id="jumlah_cuti" name="jumlah_cuti"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="3">
                        <br>
                        <form id="form_password" class="form-horizontal">
                            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('id_karyawan'); ?>">
                            <div class="form-group">
                                <label class="col-xs-offset-1 col-xs-2 control-label">Password Lama</label>
                                <div class="col-xs-6">
                                    <input type="password" name="old_pass1" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-offset-1 col-xs-2 control-label">Password Baru</label>
                                <div class="col-xs-6">
                                    <input type="password" name="new_pass" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-offset-1 col-xs-2 control-label">Konfirmasi</label>
                                <div class="col-xs-6">
                                    <input type="password" name="confirm_pass" class="form-control">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-offset-3 col-xs-6">
                                    <button type="button" id="btnPass" onclick="change_pass()" class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="4">
                        <br>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3 text-center">
                                    <h2>Surat Peringatan</h2>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">NIK</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="hidden" name="id_karyawan" value="<?= $this->session->userdata('kar_id')?>">
                                    <input class="form-control" type="text" name="nik" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="nama_karyawan" value="" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12 table-responsive">
                                    <table id="dtb_mutasi" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th class="text-center">
                                                    Tanggal 
                                                </th>
                                                <th class="text-center">
                                                    Atasan Pemberi SP
                                                </th>
                                                <th class="text-center">
                                                    Jenis SP
                                                </th>
                                                <th class="text-center">
                                                    Keterangan
                                                </th>
                                            </tr>                            
                                        </thead>                        
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="5">
                        <br>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3 text-center">
                                    <h2>Koperasi Karyawan</h2>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">NIK</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="hidden" name="id_karyawan" value="<?= $this->session->userdata('kar_id')?>">
                                    <input class="form-control" type="text" name="nik" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="nama_karyawan" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Total Tabungan</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="total_tabungan" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Total Iuran Wajib</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="total_iuran" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tanggal Terakhir Menabung</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input class="form-control" type="text" name="tgl_menabung" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="line-separator"></div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Total Pinjaman</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="total_pinjaman" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jangka Angsuran</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">Bulan</span>
                                        <input class="form-control" type="text" name="jangka_angsuran" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jumlah Angsuran</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="jumlah_angsuran" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Sisa Angsuran</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="sisa_angsuran" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Bunga</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">%</span>
                                        <input class="form-control" type="text" name="bunga_pinjaman" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Status Pinjaman</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="status_pinjaman" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Tanggal Terakhir Membayar</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input class="form-control" type="text" name="tgl_bayar" value="" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="6">
                        <br>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3 text-center">
                                    <h2>Potongan Salary Karyawan</h2>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">NIK</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="hidden" name="id_karyawan" value="<?= $this->session->userdata('kar_id')?>">
                                    <input class="form-control" type="text" name="nik" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="nama_karyawan" value="" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Potongan Pajak</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="potongan_pajak" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Potongan THT</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="potongan_tht" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Potongan BPJS</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="potongan_bpjs" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Potongan Pinjaman</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="potongan_pinjaman" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-3 control-label">Tanggal Terakhir Menabung</label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        <input class="form-control" type="text" name="tgl_menabung" value="" readonly>
                                    </div>
                                </div>
                            </div> -->

                            <div class="line-separator"></div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><b>TOTAL POTONGAN</b></label>
                                <div class="col-sm-5">
                                    <div class="input-group">
                                        <span class="input-group-addon curr">Rp</span>
                                        <input class="form-control curr-num" type="text" name="total_potongan" value="" readonly>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="7"><br>
                        <form class="form-horizontal" id="form_useraccess">
                            <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                            <div class="form-group">
                                <label class="col-xs-2 control-label">User</label>
                                <div class="col-xs-6">
                                    <select class="form-control" id="user_list" name="user_list" data-live-search="true">
                                        <option value="">Pilih</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>Data Master</strong><br>
                                            <input type="checkbox" name="master_pick" onclick="pickall_master()"> Pilih Semua
                                        </div>
                                        <div class="panel-body" id="mstr">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <strong>Data Transaksi</strong><br>
                                            <input type="checkbox" name="trx_pick" onclick="pickall_trx()"> Pilih Semua
                                        </div>
                                        <div class="panel-body" id="trx">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-offset-1 col-xs-2">
                                        <button onclick="useraccess_submit()" id="subUsrAccs" type="button" class="btn btn-block btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php'; ?>
    <script>
        $(document).ready(function() 
        {
            // os_data();
            id_karyawan= $('[name="id_karyawan"]').val();
            pick_kryedit(id_karyawan);
            pick_tabungan(id_karyawan);
            pick_pinjaman(id_karyawan);
            pick_potongan(id_karyawan);
            checkboxes();
            drop_user();
            surat_peringatan(id_karyawan);
            // drop_branch('os_branch');
            // drop_coa('os_prccoadeb');
            // drop_coa('os_prccoacrd');
            // drop_coa('os_prccoamaincrd');
            // drop_coa('os_prccoasubcrd');
            // drop_coa('os_prccoadisc');
            // drop_coa('os_prccoappn');
            // drop_coa('os_prccoacost');
            // drop_coa('os_nota');
            // drop_coa('os_giroaccrcv');
            // drop_coa('os_girodebt');
            // drop_coa('os_bankinvppn');
            // drop_coa('os_prcgacoadeb');
            // drop_coa('os_prcgacoadisc');
            // drop_coa('os_prcgacoappn');
            // drop_coa('os_prcgacoacost');
            // drop_coa('os_prcgacoacrd');
            // drop_bank();
            $('#user_list').change(function(){
                check_access($('#user_list option:selected').val());                
            });
            $('#os_bankinfo').change(function(){
                if($('#os_bankinfo option:selected').val() != '')
                {
                    pick_bank($('#os_bankinfo option:selected').val());
                }                
            });
            $('#os_branch').change(function(){
                os_data($('#os_branch option:selected').val());
            });
        });
        function os_data(id)
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/get_appdata/')?>"+id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="stg_infoinvc"]').val(data.PRINT_BANKINVOICE);
                    $('[name="stg_infoinvppn"]').val('Akun PPN : '+data.INV_COANAMEPPN);
                    $('[name="stg_infoprccoa"]').val('Akun HPP : '+data.PRC_COANAME+'\n'+'Akun Hutang : '+data.PRC_COANAMEAG+'\n'+'Akun Hutang Main-Vendor Sub-Kontrak : '+data.PRC_COAMAINNAME+'\n'+'Akun Hutang Sub-Vendor Sub-Kontrak : '+data.PRC_COASUBNAME+'\n'+'Akun Diskon : '+data.PRC_COANAMEDISC+'\n'+'Akun PPN : '+data.PRC_COANAMEPPN+'\n'+'Akun Biaya : '+data.PRC_COANAMECOST);
                    $('[name="stg_infoprcgacoa"]').val('Akun HPP : '+data.PRCGA_COANAMESUPPLY+'\n'+'Akun Hutang : '+data.PRCGA_COANAMEDEBT+'\n'+'Akun Diskon : '+data.PRCGA_COANAMEDISC+'\n'+'Akun PPN : '+data.PRCGA_COANAMEPPN+'\n'+'Akun Biaya : '+data.PRCGA_COANAMECOST);
                    $('[name="stg_infonotafin"]').val('Akun Nota Gantung : '+data.NOTAFIN_ACCNAME);
                    $('[name="stg_infogiroacc"]').val('Akun Piutang Giro : '+data.ACCRCVGIRO_ACCNAME+'\n'+'Akun Hutang Giro : '+data.DEBTGIRO_ACCNAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Gagal Ambil Data Setting Aplikasi');
                }
            });
        }
        function change_pass()
        {
            var x = check_pass();
            if (x == 1) 
            {
                $('[name="new_pass"]').parent().parent().addClass('has-error');
                $('[name="new_pass"]').next().text('Password Tidak Sama');
                $('[name="confirm_pass"]').parent().parent().addClass('has-error');
                $('[name="confirm_pass"]').next().text('Password Tidak Sama');
            }
            else
            {
                $.ajax({
                    url : "<?php echo site_url('Dashboard/pass_change/')?>",
                    type: "POST",
                    data: $('#form_password').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Password Berhasil Diganti');
                        }
                        else
                        {
                            for (var i = 0; i < data.inputerror.length; i++) 
                            {
                                $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error');
                                $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]);
                            }
                        }
                        $('#btnPass').text('save');
                        $('#btnPass').attr('disabled',false);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                        $('#btnPass').text('save');
                        $('#btnPass').attr('disabled',false);
                    }
                });
            }            
        }
        function check_pass()
        {
            var n = $('[name="new_pass"]').val();
            var c = $('[name="confirm_pass"]').val();
            var s = (n != c)? 1:0;
            return s;
        }
        function sub_prccoa()
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/save_prccoa/')?>",
                type: "POST",
                data: $('form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Data Berhasil Disimpan');
                    os_data();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');                    
                }
            });
        }
        function sub_bankinfo()
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/save_bankinfo/')?>",
                type: "POST",
                data: $('form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Data Berhasil Disimpan');
                    os_data();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');                    
                }
            });
        }
        function sub_notafin()
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/save_notafin/')?>",
                type: "POST",
                data: $('form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Data Berhasil Disimpan');
                    os_data((isset($('#os_branch option:selected').val()))?$('#os_branch option:selected').val():0);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');                    
                }
            });
        }
        function sub_giroacc()
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/save_giroacc/')?>",
                type: "POST",
                data: $('form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Data Berhasil Disimpan');
                    os_data();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');                    
                }
            });
        }
        function sub_prcgacoa()
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/save_prcgacoa/')?>",
                type: "POST",
                data: $('form').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert('Data Berhasil Disimpan');
                    os_data((isset($('#os_branch option:selected').val()))?$('#os_branch option:selected').val():0);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');                    
                }
            });
        }
        function pickall_master()
        {
            $('[name="master_pick"]').click(function() 
            {
                $('.mstr').prop('checked',$(this).prop('checked'));
            });
        }
        function pickall_trx()
        {
            $('[name="trx_pick"]').click(function() 
            {
                $('.trx').prop('checked',$(this).prop('checked'));
            });
        }
        function useraccess_submit()
        {
            $('#subUsrAccs').text('Processing....');
            $('#subUsrAccs').attr('disabled',true);
            $.ajax({
                url : "<?php echo site_url('Dashboard/add_useraccess')?>",
                type: "POST",
                data: $('#form_useraccess').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        alert('Hak Akses Sudah Diupdate');
                    }
                    $('#subUsrAccs').text('Submit');
                    $('#subUsrAccs').attr('disabled',false);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                    $('#subUsrAccs').text('Submit');
                    $('#subUsrAccs').attr('disabled',false);
                }
            });
        }
        function checkboxes()
        {
            $('#mstr').empty();
            $('#trx').empty();
            $.ajax({
            url : "<?php echo site_url('Dashboard/get_menulist')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    for (var i = 0; i < data['mst'].length; i++) 
                    {
                        var chkbox = $('<div class="col-xs-4"><input type="checkbox" name="mstr[]" class="mstr" value="'+data['mst'][i]['MENU_CODE']+'" /> '+data['mst'][i]['MENU_NAME']+'</div>');
                        chkbox.appendTo('#mstr');
                    }
                    for (var i = 0; i < data['trx'].length; i++) 
                    {
                        var chkbox = $('<div class="col-xs-4"><input type="checkbox" name="trx[]" class="trx" value="'+data['trx'][i]['MENU_CODE']+'" /> '+data['trx'][i]['MENU_NAME']+'</div>');
                        chkbox.appendTo('#trx');
                    }
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function drop_user()
        {
            $.ajax({
            url : "<?php echo site_url('Dashboard/get_user')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('user_list');
                    var option;
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["USR_ID"]
                        option.text = data[i]["username"];
                        select.add(option);
                    }
                    $('#user_list').selectpicker({});
                    $('#user_list').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function drop_branch(id)
        {
            $.ajax({            
            url : "<?php echo site_url('administrator/Master/getcoabrc')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#'+id).empty();
                    var select = document.getElementById(id);
                    var option;
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["BRANCH_ID"]
                        option.text = data[i]["BRANCH_NAME"];
                        select.add(option);
                    }
                    $('#'+id).selectpicker({
                        dropupAuto: false
                    });
                    $('#'+id).selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop coa');
                }
            });
        }
        function drop_coa(parid)
        {
            $.ajax({            
            url : "<?php echo site_url('administrator/Master/getcoa')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#'+parid).empty();
                    var select = document.getElementById(parid);
                    var option;
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["COA_ID"]
                        option.text = data[i]["COA_ACC"]+'-'+data[i]["COA_ACCNAME"];
                        select.add(option);
                    }
                    $('#'+parid).selectpicker({
                        dropupAuto: false
                    });
                    $('#'+parid).selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop coa');
                }
            });
        }
        function drop_bank()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Master/get_masterbank')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {
                    $('#os_bankinfo').empty();
                    var select = document.getElementById('os_bankinfo');
                    var option;
                    option = document.createElement('option');
                        option.value = ''
                        option.text = 'Pilih';
                        select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["BANK_ID"]
                        option.text = data[i]["BANK_NAME"];
                        select.add(option);
                    }
                    $('#os_bankinfo').selectpicker({
                        dropupAuto: false
                    });
                    $('#os_bankinfo').selectpicker('refresh');                    
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax drop bank');
                }
            });
        }
        function check_access(id)
        {
            $('input:checkbox').prop('checked',false);
            $.ajax({            
            url : "<?php echo site_url('Dashboard/get_useraccess/')?>"+id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {                    
                    for (var i = 0; i < data.length; i++)
                    {
                        $('input[type="checkbox"][value="'+data[i]["MENU_CODE"]+'"]').prop('checked',true);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Pilih Salah Satu User');
                }
            });
        }
        function pick_bank(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_bank/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="stg_infoinvc"]').val(data.BANK_NAME+' '+data.BANK_BRANCH+' A/C '+data.BANK_ACC+' A/N '+data.BANK_ACCNAME);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax pick bank');
                }
            });
        }
        function test()
        {
            $.ajax({
                url : "<?php echo site_url('Dashboard/test')?>",
                type: "POST",
                data: $('#form_useraccess').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    alert(data.tes);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }

        function pick_kryedit(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    // $('[name="branch"]').val(data.id_branch);
                    // dropbranch();
                    
                    // cek_jumlah_cuti(data.id_karyawan);
                    $('[name="branch"]').val(data.id_branch);
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_karyawan"]').val(data.nama_karyawan);
                    document.getElementById("NIK2").innerHTML=data.nik;
                    document.getElementById("nama_karyawan2").innerHTML=data.nama_karyawan;
                    document.getElementById("agama").innerHTML=data.agama;
                    document.getElementById("status").innerHTML=data.status_nikah;
                    document.getElementById("email").innerHTML=data.email;
                    document.getElementById("phone").innerHTML=data.nomor_hp;
                    document.getElementById("KTP").innerHTML=data.nomor_ktp;
                    document.getElementById("alamat_KTP").innerHTML=data.alamat_karyawan_ktp;
                    document.getElementById("npwp").innerHTML=data.nomor_npwp;
                    document.getElementById("BPJS_kesehatan").innerHTML=data.nomor_bpjs_kesehatan;
                    document.getElementById("BPJS_ketenagakerjaan").innerHTML=data.nomor_bpjs_ketenagakerjaan;
                    document.getElementById("SIM").innerHTML=data.sim;
                    document.getElementById("pendidikan").innerHTML=data.pendidikan_terakhir;
                    document.getElementById("masuk_kerja").innerHTML=data.tgl_masuk;
                    document.getElementById("jabatan").innerHTML=data.jabatannya;
                    document.getElementById("jumlah_cuti").innerHTML=data.jumlah_cuti;
                    // $('[name="quota_cuti_karyawan"]').val(data.jumlahcuti);
                    // mutasi();
                    // $('#modal_kry_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_tabungan(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_tabungangb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="total_tabungan"]').val(data[0]['tabungan']);
                    $('[name="total_iuran"]').val(data[0]['iuran']);
                    $('[name="tgl_menabung"]').val(data[0]['tgl_setoran']);
                 },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }  

        function pick_pinjaman(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_sisa_pinjamangb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="total_pinjaman"]').val(data[0]['total_pinjaman']);
                    $('[name="jangka_angsuran"]').val(data[0]['jangka_angsuran']);
                    $('[name="jumlah_angsuran"]').val(data[0]['angsuran']);
                    $('[name="sisa_angsuran"]').val(data[0]['sisa_angsuran']);
                    $('[name="bunga_pinjaman"]').val(data[0]['bunga']);
                    $('[name="status_pinjaman"]').val(data[0]['status_pinjaman']);
                    $('[name="tgl_bayar"]').val(data[0]['tgl_pembayaran']);
                 },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }   

        function pick_potongan(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_potongangb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    var potongan_pajak = data[0]['potongan_pajak'];
                    var potongan_tht = data[0]['potongan_tht'];
                    var potongan_bpjs = data[0]['potongan_bpjs'];
                    var potongan_pinjaman = data[0]['potongan_pinjaman'];
                    var total_potongan = (potongan_pajak * 1) + (potongan_tht * 1) + (potongan_bpjs * 1) + (potongan_pinjaman * 1);
                    $('[name="potongan_pajak"]').val(potongan_pajak);
                    $('[name="potongan_tht"]').val(potongan_tht);
                    $('[name="potongan_bpjs"]').val(potongan_bpjs);
                    $('[name="potongan_pinjaman"]').val(potongan_pinjaman);
                    $('[name="total_potongan"]').val(total_potongan);
                 },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        } 

        function surat_peringatan(id)
        {
            table = $('#dtb_mutasi').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_peringatan_by_id/')?>"+id,
                    "type": "POST",                
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }
    </script>
</body>
</html>