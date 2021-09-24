<!-- Page Content -->
        <div id="page-wrapper" class="bgisi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Karyawan</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-block btn-info" onclick="exp_karyawan()"><i class="glyphicon glyphicon-print"></i> Cetak Data</button>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
                        </a>
                    </div>
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="check_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Lihat</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="apr_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-ok"> Approve</span>
                        </a>
                    </div>
                    <div class="col-sm-2" <?php echo (($this->session->userdata('user_level') != '3')?'':'style="display:none"');?>>
                        <a href="javascript:void(0)" onclick="open_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-open"> Open</span>
                        </a>
                    </div>  
                </div><br>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs" >
                            <li class="active">
                                <a href="#data_pribadi" data-toggle="tab">Data Pribadi</a>
                            </li>
                            <li>
                                <a href="#riwayat_keluarga" data-toggle="tab">Riwayat Keluarga</a>
                            </li>
                            <li>
                                <a href="#riwayat_pendidikan" data-toggle="tab">Riwayat Pendidikan</a>
                            </li>
                            <li>
                                <a href="#riwayat_pekerjaan" data-toggle="tab">Pengalaman Kerja</a>
                            </li>
                            <li>
                                <a href="#jabatan" data-toggle="tab">Jabatan Sekarang</a>
                            </li>
                            <!-- <li>
                                <a href="#pindah_jabatan" data-toggle="tab">Pindah Jabatan</a>
                            </li> -->
                        </ul>
                        <form action="#" method="post" class="form-horizontal" id="form_po">
                            <div class="tab-content" >
                                <div class="tab-pane fade in active" id="data_pribadi">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Pribadi</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Cabang</label>
                                        <div class="col-sm-8">
                                            <select id="branch" name="branch" class="selectpicker">
                                                <option value="">- Pilih - </option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">NIK</label>
                                        <div class="col-sm-1">
                                            <a href="javascript:void(0)" id="genbtn" onclick="tambah()" class="btn btn-block btn-info"><span class="glyphicon glyphicon-plus"></span></a>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="hidden" name="id_karyawan">
                                            <input class="form-control" type="text" name="nik" value="" >
                                            <input type="hidden" name="po_id" value="0">
                                            <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id')?>">
                                            <input type="hidden" name="user_branch" value="<?= $this->session->userdata('user_branch')?>">
                                            <input type="hidden" name="user_name" value="<?= $this->session->userdata('user_name')?>">
                                            <input type="hidden" name="user_brcsts" value="<?= $this->session->userdata('branch_sts')?>">
                                        </div>
                                    </div>
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-8">
                                            <label style="font-size:10px;color=red;"><b>Note : </b><font color='tosca'>HOS=Holding, &nbsp; MAS=Match Surabaya,  &nbsp; MAJ=Match Jakarta,  &nbsp; KCT=Tritunggal,  &nbsp; WPI=Wiperindo,  &nbsp; WLN=Wiklan,  &nbsp; RCP=eSeLED</font></label>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Lengkap</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_kry">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Panggilan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_panggilan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tempat Lahir</label>
                                        <div class="col-sm-3">
                                            <input class="form-control" type="text" name="tempat_lahir">
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-4 control-label">Tanggal Lahir</label>
                                            <div class='input-group date' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_lahir" type='text' class="form-control text-center" name="tgl_lahir" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>   
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Pria">Pria</label>
                                            <label class="radio-inline"><input type="radio" name="jenis_kelamin" value="Wanita">Wanita</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat KTP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="alamat_ktp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kota KTP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="kota_ktp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat Sekarang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="alamat_sekarang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kota Sekarang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="kota_sekarang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor HP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nomor_hp" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor KTP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nomor_ktp" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor NPWP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nomor_npwp" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor BPJS Kesehatan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="bpjs_kesehatan" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor BPJS Ketenagakerjaan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="bpjs_ketenagakerjaan" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Agama</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="">- Pilih -</option>
                                                <option value="Islam">ISLAM</option>
                                                <option value="Kristen">KRISTEN</option>
                                                <option value="Katolik">KATOLIK</option>
                                                <option value="Hindu">HINDU</option>
                                                <option value="Budha">BUDHA</option>
                                                <option value="Budha">PROTESTAN</option>
                                                <option value="Lain-Lain">LAIN-LAIN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Warga Negara</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="warga_negara" name="warga_negara">
                                                <option value="">- Pilih -</option>
                                                <option value="WNI">WNI</option>
                                                <option value="WNA">WNA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status Nikah</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="status_nikah" name="status_nikah">
                                                <option value="">- Pilih -</option>
                                                <option value="Menikah">MENIKAH</option>
                                                <option value="Belum">BELUM MENIKAH</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                                <option value="">- Pilih -</option>
                                                <option value="SMA">SMA/SMK</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">SIM</label>
                                        <div class="col-sm-8">
                                            <!-- <select class="form-control" id="sim" name="sim">
                                                <option value="">- Pilih -</option>
                                                <option value="SIM A">SIM A</option>
                                                <option value="SIM B1">SIM B1</option>
                                                <option value="SIM C">SIM C</option>
                                            </select> -->
                                            <input type="checkbox" class="check1" name="jenis_sim" value="SIM A">SIM A 
                                            <input type="checkbox" class="check1" name="jenis_sim" value="SIM B1">SIM B1 
                                            <input type="checkbox" class="check1" name="jenis_sim" value="SIM C">SIM C 
                                            <input type="hidden" name="sim" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Masuk</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp2'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_masuk" type='text' class="form-control text-center" name="tgl_masuk" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jumlah Cuti</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="number" name="jumlah_cuti" value='0'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor HP Dalam Keadaan Darurat</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nomor_darurat">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Dihubungi Keadaan Darurat</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_darurat">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="savekaryawan()" class="btn btn-block btn-primary btn-default btnCh">Simpan</a>
                                        </div>
                                        <div class="col-sm-offset-1 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="approvekaryawan()" class="btn btn-block btn-primary btn-default btnApr">Approve</a>
                                        </div>
                                        <div class="col-sm-offset-2 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="disapprovekaryawan()" class="btn btn-block btn-primary btn-default btnApr">Disapprove</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="riwayat_keluarga">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Data Keluarga</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="nama_keluarga">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Usia</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="usia_keluarga">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status dalam Keluarga</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="status_keluarga" name="status_keluarga">
                                                <option value="">- Pilih -</option>
                                                <option value="1">SUAMI</option>
                                                <option value="2">ISTRI</option>
                                                <option value="3">Anak Ke-1</option>
                                                <option value="4">Anak Ke-2</option>
                                                <option value="5">Anak Ke-3</option>
                                                <option value="6">Anak Ke-4</option>
                                                <option value="7">Anak Ke-5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">                              
                                        <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <label class="radio-inline"><input type="radio" name="jenis_kelamin2" value="Pria">Pria</label>
                                            <label class="radio-inline"><input type="radio" name="jenis_kelamin2" value="Wanita">Wanita</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-4">
                                            <a href="javascript:void(0)" onclick="add_keluarga()" class="btn btn-sm btn-primary btnCh"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_keluarga" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama
                                                        </th>
                                                        <th class="text-center">
                                                            Usia
                                                        </th>
                                                        <th class="text-center">
                                                            Jenis Kelamin
                                                        </th>
                                                        <th class="text-center">
                                                            Status Keluarga
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="tab-pane fade" id="riwayat_pendidikan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Riwayat Pendidikan</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tingkat Pendidikan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="pendidikan" name="pendidikan">
                                                <option value="">- Pilih -</option>
                                                <option value="SMA">SMA/SMK</option>
                                                <option value="D1">D1</option>
                                                <option value="D1">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="D4">D4</option>
                                                <option value="S1">S1</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Sekolah</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_sekolah">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jurusan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="jurusan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tahun Masuk</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="tahun_masuk" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tahun Selesai</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="tahun_selesai" onkeyup="validAngka(this)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status Kelulusan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="status_kelulusan" name="status_kelulusan">
                                                <option value="">- Pilih -</option>
                                                <option value="Lulus">LULUS</option>
                                                <option value="Belum">BELUM LULUS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_pendidikan()" class="btn btn-block btn-primary btnCh">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_pendidikan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Tingkat Pendidikan
                                                        </th>
                                                        <th class="text-center">
                                                            Nama Sekolah
                                                        </th>
                                                        <th class="text-center">
                                                            Jurusan
                                                        </th>
                                                        <th class="text-center">
                                                            Tahun Masuk
                                                        </th>
                                                        <th class="text-center">
                                                            Tahun Selesai
                                                        </th>
                                                        <th class="text-center">
                                                            Status Kelulusan
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="tab-pane fade" id="riwayat_pekerjaan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Pengalaman Kerja</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Perusahaan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_perusahaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Mulai</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp3'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_masuk" type='text' class="form-control text-center" name="tgl_mulai" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Berakhir</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp4'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_masuk" type='text' class="form-control text-center" name="tgl_berakhir" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jabatan Terakhir</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="jabatan_terakhir">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alasan Pindah</label>
                                        <div class="col-sm-8">
                                            <textarea name="alasan_pindah" class="form-control" rows="2" style="resize: vertical;"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_pekerjaan()" class="btn btn-block btn-primary btnCh">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_pekerjaan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Nama Perusahaan
                                                        </th>
                                                        <th class="text-center">
                                                            Tanggal Mulai
                                                        </th>
                                                        <th class="text-center">
                                                            Tanggal Berakhir
                                                        </th>
                                                        <th class="text-center">
                                                            Jabatan Terakhir
                                                        </th>
                                                        <th class="text-center">
                                                            Alasan Pindah
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="tab-pane fade" id="jabatan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Jabatan Sekarang</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_dept()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="dept" readonly>
                                            <input class="form-control" type="hidden" name="dept_id">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Perusahaan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="perusahaan" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Pangkat</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="pangkat" name="pangkat">
                                                <option value="">- Pilih -</option>
                                                <option value="Freelance">Freelance</option>
                                                <option value="Non Staff">Non Staff</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Staff">Staff</option>
                                                <option value="Senior Staff">Senior Staff</option>
                                                <option value="Assistant SPV">Assistant SPV</option>
                                                <option value="SPV">SPV</option>
                                                <option value="Head">Head</option>
                                                <option value="Assistant Manager">Assistant Manager</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Senior Manager">Senior Manager</option>
                                                <option value="Direktur">Direktur</option>
                                                <option value="Board of Directors">Board of Directors</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jabatan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="jabatan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_jabatan()" class="btn btn-block btn-primary btnCh">Tambah</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 table-responsive">
                                            <table id="dtb_jabatan" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">
                                                            No
                                                        </th>
                                                        <th class="text-center">
                                                            Perusahaan
                                                        </th>
                                                        <th class="text-center">
                                                            Departemen
                                                        </th>
                                                        <th class="text-center">
                                                            Pangkat
                                                        </th>
                                                        <th class="text-center">
                                                            Jabatan
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="tab-pane fade" id="pindah_jabatan">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-3 text-center">
                                            <h2>Pengalaman Kerja</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tanggal Mutasi</label>
                                        <div class="col-sm-4">
                                            <div class='input-group date' id='dtp1'>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                                <input id="tgl_mutasi" type='text' class="form-control text-center" name="tgl_mutasi" value="<?= date('Y-m-d')?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Departemen Sekarang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="departemen_sekarang" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Mutasi Departemen</label>
                                        <div class="col-sm-1">
                                            <button type="button" class="btn btn-info btn-block" onclick="srch_dept()"><span class="glyphicon glyphicon-search"></span></button>
                                        </div>
                                        <div class="col-sm-7">
                                            <input class="form-control" type="text" name="dept_mutasi" readonly>
                                            <input class="form-control" type="hidden" name="dept_id_mutasi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Jabatan Sekarang</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="departemen_sekarang" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Mutasi Jabatan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="jabatan_sekarang" name="jabatan_mutasi">
                                                <option value="">Pilih</option>
                                                <option value="Staff">Staff</option>
                                                <option value="Koordinator">Koordinator</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Head">Head</option>
                                                <option value="Asisten Manager">Asisten Manager</option>
                                                <option value="Manager">Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_mutasi()" class="btn btn-block btn-primary btn-default">Tambah</a>
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
                                                            Tanggal Mutasi
                                                        </th>
                                                        <th class="text-center">
                                                            Departemen Sebelunya
                                                        </th>
                                                        <th class="text-center">
                                                            Jabatan Sebelumnya
                                                        </th>
                                                        <th class="text-center">
                                                            Departemen Sekarang
                                                        </th>
                                                        <th class="text-center">
                                                            Jabatan Sekarang
                                                        </th>
                                                        <th class="text-center">
                                                            Actions
                                                        </th>
                                                    </tr>                            
                                                </thead>                        
                                            </table>
                                        </div>
                                    </div>
                                    <br>                  
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- Modal Search -->
    <!-- Modal Departemen Search -->
    <div class="modal fade" id="modal_dept" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_dept" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Info</th>
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="modal_kry_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive"> 
                            <table id="dtb_kry_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Cabang</th>
                                        <th>Alamat</th>
                                        <th>No KTP</th>
                                        <th>Nomor HP</th>
                                        <th>Alasan Open</th> 
                                        <th>Pilih</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <?php include 'application/views/layout/administrator/jspack.php' ?>
    <script>
        var id; var suppid; var prc; var qty; var sub;
        $(document).ready(function()
        {
            $('#dtp1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            $('#dtp2').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            $('#dtp3').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            $('#dtp4').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            $('#dts1').datetimepicker({                
                format: 'YYYY-MM-DD'
            });
            id=$('[name="po_id"]').val();


            //update system - Surat Tugas
            branch=$('[name="user_branch"]').val();
            id_karyawan= $('[name="id_karyawan"]').val();
            if ((branch=='3') || (branch=='8')){
                $('[name="tsurat"]').show();
            }else {$('[name="tsurat"]').hide}
            $('.btnSt').css({'display':'none'});
            $('.btnApr').css({'display':'none'});

            prc = 0; qty = 0; sub = 0;
            $('[name=po_qty]').on('input', function() {
                // hitung();
            });
            dropbranch();
            $('.btnCh').css({'display':'block'});
            $('.btnApr').css({'display':'none'});
        });

        function validAngka(a)
        {
            if(!/^[0-9.]+$/.test(a.value))
            {
            a.value = a.value.substring(0,a.value.length-1000);
            }
        }

        function emptybranch()
        {
            document.getElementById('branch').options.length = 0;
        }

        function dropbranch()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_branch')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    // document.getElementById('branch').options.length = 0;
                    var select = document.getElementById('branch');
                    var option;
                    option = document.createElement('option');
                    // option.value = "";
                    // option.text = "Pilih";
                    // select.add(option);
                    for (var i = 0; i < data.length; i++) {
                        option = document.createElement('option');
                        option.value = data[i]["BRANCH_ID"]
                        option.text = data[i]["BRANCH_NAME"];
                        select.add(option);
                    }
                    $('#branch').selectpicker({});
                    $('#branch').selectpicker('refresh');
                },
            error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function srch_dept()
        {
            $('#modal_dept').modal('show');
            $('.modal-title').text('Cari Departemen');
            table = $('#dtb_dept').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_dept')?>",
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
        function pick_dept(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Master/ajax_pick_dept/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="dept_id"]').val(data.DEPT_ID);
                    $('[name="dept"]').val(data.DEPT_NAME);
                    $('[name="perusahaan"]').val(data.DEPT_INFO);
                    $('#modal_dept').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function tambah()   
        {
            var branch = $('[name=branch]').val();
            if (branch !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/gen_nik/') ?>"+branch,
                        type : "GET",
                        dataType : "JSON",
                        success : function(data)
                        {
                            $('[name="nik"]').val(data.nik);
                            $('[name="id_karyawan"]').val(data.id);
                            $('#genbtn').attr('disabled',true);
                        },
                        error : function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    })
            }else{alert('Branch harus dipilih !');}
        }

        function savekaryawan()
        {
            var sim = [];
            $.each($("input[name='jenis_sim']:checked"), function(){sim.push($(this).val());
            });
            $('[name="sim"]').val(sim.join(","));
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_simpankaryawan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Disimpan');   
                                location.reload();                     
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function approvekaryawan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_approvekaryawan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil DiApprove'); 
                                location.reload();                       
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function disapprovekaryawan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_disapprovekaryawan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Di-Disapprove');   
                                location.reload();                     
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function exp_karyawan()
        {
            var id =  $('[name="id_karyawan"]').val();
            if ($('[name="id_karyawan"]').val() != ''){
                window.open ( "<?php echo site_url('administrator/Master/export_karyawan/')?>"+id,'_blank');
            }else{
                alert('Data karyawan belum dipilih !');
            }         
        }

        function add_keluarga()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahkeluarga')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                keluarga(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_keluarga(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_keluarga/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        keluarga(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function keluarga(id)
        {
            table = $('#dtb_keluarga').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_keluarga/')?>"+id,
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

        function add_pendidikan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahpendidikan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                pendidikan(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_pendidikan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_pendidikan/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        pendidikan(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
        function pendidikan(id)
        {
            table = $('#dtb_pendidikan').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_pendidikan/')?>"+id,
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

        function add_pekerjaan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahpekerjaan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                pekerjaan(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_pekerjaan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_pekerjaan/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        pekerjaan(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function pekerjaan(id)
        {
            table = $('#dtb_pekerjaan').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_pekerjaan/')?>"+id,
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

        function add_jabatan()
        {
            if ($('[name="id_karyawan"]').val() !=''){
                $.ajax({
                        url : "<?php echo site_url('administrator/Master/ajax_tambahjabatan')?>",
                        type: "POST",
                        data: $('#form_po').serialize(),
                        dataType: "JSON",
                        success: function(data)
                        {
                            if(data.status)
                            {
                                alert('Data Berhasil Ditambahkan');       
                                id = $('[name="id_karyawan"]').val();
                                jabatan(id);                 
                            }                   
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error adding / update data');
                        }
                    });
            }else{
                alert("Id Karyawan kosong atau tidak ditemukan !");
            }
        }

        function del_jabatan(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_del_jabatan/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="id_karyawan"]').val();
                        jabatan(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }

        function jabatan(id)
        {
            table = $('#dtb_jabatan').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Master/ajax_jabatan/')?>"+id,
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
    <!-- Search -->
    <script>
        function edit_kry()
        {
            $('#modal_kry_edit').modal('show');
            $('.modal-title').text('Cari Karyawan');
            table = $('#dtb_kry_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_krybysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '0';
                        data.brch = $('[name="branch"]').val();
                        data.chk = '0';
                    },
                },
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function check_kry()
        {
            $('#modal_kry_edit').modal('show');
            $('.modal-title').text('Cari Karyawan');            
            table = $('#dtb_kry_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_krybysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '2';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function apr_kry()
        {
            $('#modal_kry_edit').modal('show');
            $('.modal-title').text('Cari Karyawan');            
            table = $('#dtb_kry_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_krybysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '2';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '3';
                    },
                },                
                "columnDefs": [
                { 
                    "targets": [ 0 ],
                    "orderable": false,
                },
                ],
            });
        }

        function open_kry()
        {
            $('#modal_kry_edit').modal('show');
            $('.modal-title').text('Cari Karyawan');            
            table = $('#dtb_kry_edit').DataTable({
                "info": false,
                "destroy": true,
                // "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_krybysts')?>",
                    "type": "POST",
                    "data": function(data){
                        data.sts = '1';
                        data.brch = $('[name="user_branch"]').val();
                        data.chk = '1';
                    },
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
    <!-- Pick -->
    <script>
        
        //update sistem simpan kolom alasan open
        function pick_alasan()
        {
            var alasan=$('[name="note_'+id+'"]').val();
            // var alasan='tes1';
            return alasan;
        }

        function pick_kryedit(id)
        {
            var inputs = document.querySelectorAll('.check1');
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('select[name=branch]').val(data.id_branch);
                    $('.selectpicker').selectpicker('refresh');
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="nama_panggilan"]').val(data.nama_panggilan);
                    $('[name="jenis_kelamin"][value="'+data.jenis_kelamin+'"]').prop('checked',true);
                    $('[name="alamat_ktp"]').val(data.alamat_karyawan_ktp);
                    $('[name="kota_ktp"]').val(data.kota_karyawan_ktp);
                    $('[name="alamat_sekarang"]').val(data.alamat_karyawan);
                    $('[name="kota_sekarang"]').val(data.kota_karyawan);
                    $('[name="tempat_lahir"]').val(data.tempat_lahir);
                    $('[name="tgl_lahir"]').val(data.tgl_lahir);
                    $('[name="nomor_hp"]').val(data.nomor_hp);
                    $('[name="nomor_ktp"]').val(data.nomor_ktp);
                    $('[name="nomor_npwp"]').val(data.nomor_npwp);
                    $('[name="bpjs_kesehatan"]').val(data.nomor_bpjs_kesehatan);
                    $('[name="bpjs_ketenagakerjaan"]').val(data.nomor_bpjs_ketenagakerjaan);
                    $('[name="agama"]').val(data.agama);
                    $('[name="warga_negara"]').val(data.warga_negara);
                    $('[name="status_nikah"]').val(data.status_nikah);
                    $('[name="pendidikan_terakhir"]').val(data.pendidikan_terakhir);
                    $('[name="sim"]').val(data.sim);
                    $('[name="jumlah_cuti"]').val(data.jumlah_cuti);
                    $('[name="tgl_masuk"]').val(data.tgl_masuk);
                    $('[name="nomor_darurat"]').val(data.nomor_darurat);
                    $('[name="nama_darurat"]').val(data.nama_darurat);
                    jenis_sim = $('[name="sim"]').val();
                    if (jenis_sim.includes("SIM A")) {
                        inputs[0].checked = true;
                    }
                    if (jenis_sim.includes("SIM B1")) {
                        inputs[1].checked = true;
                    }
                    if (jenis_sim.includes("SIM C")) {
                        inputs[2].checked = true;
                    }
                    keluarga(data.id_karyawan);
                    pendidikan(data.id_karyawan);
                    pekerjaan(data.id_karyawan);
                    jabatan(data.id_karyawan);
                    $('#modal_kry_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_krychk(id)
        {
            var inputs = document.querySelectorAll('.check1');
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('select[name=branch]').val(data.id_branch);
                    $('.selectpicker').selectpicker('refresh');
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="nama_panggilan"]').val(data.nama_panggilan);
                    $('[name="jenis_kelamin"][value="'+data.jenis_kelamin+'"]').prop('checked',true);
                    $('[name="alamat_ktp"]').val(data.alamat_karyawan_ktp);
                    $('[name="kota_ktp"]').val(data.kota_karyawan_ktp);
                    $('[name="alamat_sekarang"]').val(data.alamat_karyawan);
                    $('[name="kota_sekarang"]').val(data.kota_karyawan);
                    $('[name="tempat_lahir"]').val(data.tempat_lahir);
                    $('[name="tgl_lahir"]').val(data.tgl_lahir);
                    $('[name="nomor_hp"]').val(data.nomor_hp);
                    $('[name="nomor_ktp"]').val(data.nomor_ktp);
                    $('[name="nomor_npwp"]').val(data.nomor_npwp);
                    $('[name="bpjs_kesehatan"]').val(data.nomor_bpjs_kesehatan);
                    $('[name="bpjs_ketenagakerjaan"]').val(data.nomor_bpjs_ketenagakerjaan);
                    $('[name="agama"]').val(data.agama);
                    $('[name="warga_negara"]').val(data.warga_negara);
                    $('[name="status_nikah"]').val(data.status_nikah);
                    $('[name="pendidikan_terakhir"]').val(data.pendidikan_terakhir);
                    $('[name="sim"]').val(data.sim);
                    $('[name="tgl_masuk"]').val(data.tgl_masuk);
                    $('[name="jumlah_cuti"]').val(data.jumlah_cuti);
                    $('[name="nomor_darurat"]').val(data.nomor_darurat);
                    $('[name="nama_darurat"]').val(data.nama_darurat);
                    jenis_sim = $('[name="sim"]').val();
                    if (jenis_sim.includes("SIM A")) {
                        inputs[0].checked = true;
                    }
                    if (jenis_sim.includes("SIM B1")) {
                        inputs[1].checked = true;
                    }
                    if (jenis_sim.includes("SIM C")) {
                        inputs[2].checked = true;
                    }
                    keluarga(data.id_karyawan);
                    pendidikan(data.id_karyawan);
                    pekerjaan(data.id_karyawan);
                    jabatan(data.id_karyawan);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').css({'display':'none'});
                    $('#modal_kry_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_kryapr(id)
        {
            var inputs = document.querySelectorAll('.check1');
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_krygb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('select[name=branch]').val(data.id_branch);
                    $('.selectpicker').selectpicker('refresh');
                    $('[name="id_karyawan"]').val(data.id_karyawan);
                    $('[name="nik"]').val(data.nik);
                    $('[name="nama_kry"]').val(data.nama_karyawan);
                    $('[name="nama_panggilan"]').val(data.nama_panggilan);
                    $('[name="jenis_kelamin"][value="'+data.jenis_kelamin+'"]').prop('checked',true);
                    $('[name="alamat_ktp"]').val(data.alamat_karyawan_ktp);
                    $('[name="kota_ktp"]').val(data.kota_karyawan_ktp);
                    $('[name="alamat_sekarang"]').val(data.alamat_karyawan);
                    $('[name="kota_sekarang"]').val(data.kota_karyawan);
                    $('[name="tempat_lahir"]').val(data.tempat_lahir);
                    $('[name="tgl_lahir"]').val(data.tgl_lahir);
                    $('[name="nomor_hp"]').val(data.nomor_hp);
                    $('[name="nomor_ktp"]').val(data.nomor_ktp);
                    $('[name="nomor_npwp"]').val(data.nomor_npwp);
                    $('[name="bpjs_kesehatan"]').val(data.nomor_bpjs_kesehatan);
                    $('[name="bpjs_ketenagakerjaan"]').val(data.nomor_bpjs_ketenagakerjaan);
                    $('[name="agama"]').val(data.agama);
                    $('[name="warga_negara"]').val(data.warga_negara);
                    $('[name="status_nikah"]').val(data.status_nikah);
                    $('[name="pendidikan_terakhir"]').val(data.pendidikan_terakhir);
                    $('[name="sim"]').val(data.sim);
                    $('[name="tgl_masuk"]').val(data.tgl_masuk);
                    $('[name="jumlah_cuti"]').val(data.jumlah_cuti);
                    $('[name="nomor_darurat"]').val(data.nomor_darurat);
                    $('[name="nama_darurat"]').val(data.nama_darurat);
                    jenis_sim = $('[name="sim"]').val();
                    if (jenis_sim.includes("SIM A")) {
                        inputs[0].checked = true;
                    }
                    if (jenis_sim.includes("SIM B1")) {
                        inputs[1].checked = true;
                    }
                    if (jenis_sim.includes("SIM C")) {
                        inputs[2].checked = true;
                    }
                    keluarga(data.id_karyawan);
                    pendidikan(data.id_karyawan);
                    pekerjaan(data.id_karyawan);
                    jabatan(data.id_karyawan);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').css({'display':'block'});
                    $('#modal_kry_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function pick_kryopen(id)
        {
            if($('[name="note_'+id+'"]').val() === '')
            {
                alert('Note Harus Diisi !!!');
            }
            else
            {
                $.ajax({
                    url : "<?php echo site_url('administrator/Master/ajax_openkry/')?>" + id,
                    type: "POST",
                    data: {notes : $('[name="note_'+id+'"]').val()},
                    dataType: "JSON",
                    success: function(data)
                    {
                        if(data.status)
                        {
                            alert('Record Karyawan Sukses Dibuka');
                            $('#modal_kry_edit').modal('hide');
                        }
                        // else
                        // {
                        //     alert('Record Invoice masih digunakan di transaksi '+data.string);
                        // }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error get data from ajax');
                    }
                });

            }
        }
    </script>
</body>
</html>