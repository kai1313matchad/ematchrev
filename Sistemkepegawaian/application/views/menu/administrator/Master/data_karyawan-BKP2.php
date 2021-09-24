<!-- Page Content -->
        <div id="page-wrapper" class="bgisi">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Karyawan</h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <a href="javascript:void(0)" onclick="edit_kry()" class="btn btn-block btn-primary">
                            <span class="glyphicon glyphicon-edit"> Edit</span>
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
                                <a href="#riwayat_pekerjaan" data-toggle="tab">Riwayat Pekerjaan</a>
                            </li>
                            <li>
                                <a href="#jabatan" data-toggle="tab">Jabatan</a>
                            </li>
                            <li>
                                <a href="#pindah_jabatan" data-toggle="tab">Pindah Jabatan</a>
                            </li>
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
                                            <select id="branch" name="branch" class="form-control">
                                                <option value="">Pilih</option>
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
                                            <input class="form-control" type="text" name="nomor_hp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor KTP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nomor_ktp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor NPWP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nomor_npwp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor BPJS Kesehatan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="bpjs_kesehatan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nomor BPJS Ketenagakerjaan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="bpjs_ketenagakerjaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Agama</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="agama" name="agama">
                                                <option value="">Pilih</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Warga Negara</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="warga_negara" name="warga_negara">
                                                <option value="">Pilih</option>
                                                <option value="WNI">WNI</option>
                                                <option value="WNA">WNA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status Nikah</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="status_nikah" name="status_nikah">
                                                <option value="">Pilih</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Belum">Belum Menikah</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Pendidikan Terakhir</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                                <option value="">Pilih</option>
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
                                    <br>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="savekaryawan()" class="btn btn-block btn-primary btn-default btnCh">Simpan</a>
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
                                            <input class="form-control curr-num-perc" type="text" name="usia_keluarga">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status dalam Keluarga</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="status_keluarga" name="status_keluarga">
                                                <option value="">Pilih</option>
                                                <option value="1">Suami</option>
                                                <option value="2">Istri</option>
                                                <option value="3">Anak ke-1</option>
                                                <option value="4">Anak Ke-2</option>
                                                <option value="5">Anak ke-3</option>
                                                <option value="6">Anak ke-4</option>
                                                <option value="7">Anak ke-5</option>
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
                                                <option value="">Pilih</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP">SMP</option>
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
                                            <input class="form-control" type="text" name="tahun_masuk">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tahun Selesai</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="tahun_selesai">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Status Kelulusan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="status_kelulusan" name="status_kelulusan">
                                                <option value="">Pilih</option>
                                                <option value="Lulus">Lulus</option>
                                                <option value="Belum">Belum Lulus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_pendidikan()" class="btn btn-block btn-primary btn-default">Tambah</a>
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
                                            <h2>Riwayat Pekerjaan</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Perusahaan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="nama_perusahaan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tahun Mulai</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="tahun_mulai">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Tahun Berakhir</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" name="tahun_berakhir">
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
                                            <a href="javascript:void(0)" onclick="add_pekerjaan()" class="btn btn-block btn-primary btn-default">Tambah</a>
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
                                                            Tahun Mulai
                                                        </th>
                                                        <th class="text-center">
                                                            Tahun Berakshir
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
                                            <h2>Jabatan</h2>
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
                                        <label class="col-sm-3 control-label">Jabatan</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="jabatan" name="jabatan">
                                                <option value="">Pilih</option>
                                                <option value="1">Staff</option>
                                                <option value="2">Koordinator</option>
                                                <option value="3">Supervisor</option>
                                                <option value="4">Head</option>
                                                <option value="5">Asisten Manager</option>
                                                <option value="6">Manager</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-2 text-center">
                                            <a href="javascript:void(0)" onclick="add_jabatan()" class="btn btn-block btn-primary btn-default">Tambah</a>
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
                                                            Departemen
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
                                            <h2>Riwayat Pekerjaan</h2>
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
                                                <option value="1">Staff</option>
                                                <option value="2">Koordinator</option>
                                                <option value="3">Supervisor</option>
                                                <option value="4">Head</option>
                                                <option value="5">Asisten Manager</option>
                                                <option value="6">Manager</option>
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
    <div class="modal fade" id="modal_supp" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_supp" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>No.Tlp</th>
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
    <div class="modal fade" id="modal_barang" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_brg" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Ukuran</th>
                                        <th>Info</th>
                                        <th>Harga</th>
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
    <div class="modal fade" id="modal_appr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_appr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Approval</th>
                                        <th>PO</th>
                                        <th>Tanggal</th>
                                        <th>Customer</th>
                                        <th>Lokasi</th>
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
    <div class="modal fade" id="modal_curr" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_curr" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Rate</th>
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
    <div class="modal fade" id="modal_loc" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive">
                            <table id="dtb_loc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
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
    <div class="modal fade" id="modal_po_edit" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create Item</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12 table-responsive"> 
                            <table id="dtb_po_edit" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>Nama Karyawan</th>
                                        <th>Cabang</th>
                                        <th>Alamat</th>
                                        <th>No KTP</th>
                                        <th>Nomor HP</th>
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


            // barang(id);
            prc = 0; qty = 0; sub = 0;
            $('[name=po_qty]').on('input', function() {
                hitung();
            });
            dropbranch();
            // if (id_karyawan != ""){
            //     keluarga(id_karyawan);
            // }
        });

        function dropbranch()
        {
            $.ajax({
            url : "<?php echo site_url('administrator/Dropdown/drop_branch')?>",
            type: "GET",
            dataType: "JSON",
            success: function(data)
                {   
                    var select = document.getElementById('branch');
                    var option;
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
                    $('#modal_dept').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }

        function print_po()
        {
            var ids = $('[name=po_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_po/')?>"+ids,'_blank');
        }

        //update sistem - Cetak Surat Tugas
        function print_surat_tugas()
        {
            var ids = $('[name=po_id]').val();
            window.open ( "<?php echo site_url('administrator/Logistik/pageprint_surat_tugas/')?>"+ids,'_blank');
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
            // alert($('[name="warga_negara"]').val());
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

        function aprpo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_approvepo')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Logistik/lgt_trx_po')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function disaprpo()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_disapprovepo')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {
                        var url = "<?php echo site_url('administrator/Logistik/lgt_trx_po')?>";
                        window.location = url;
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function hitung()
        {
            prc = $('[name="gd_price"]').val();
            qty = $('[name="po_qty"]').val();
            sub = qty * prc;
            $('[name="po_sub"]').val(sub);            
        }
        function sub_total(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_sub/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_subs"]').val(data.Subtotal);
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function barang(id)
        {
            table = $('#dtb_barang').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_barang/')?>"+id,
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
        function barang_(id)
        {
            table = $('#dtb_barang').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_barang_/')?>"+id,
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
        function add_barang()
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_add_brg')?>",
                type: "POST",
                data: $('#form_po').serialize(),
                dataType: "JSON",
                success: function(data)
                {
                    if(data.status)
                    {                        
                        alert('Data Berhasil Ditambahkan');
                        id = $('[name="po_id"]').val();
                        barang(id);
                        sub_total(id);
                    }                   
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                }
            });
        }
        function del_brg(id)
        {
            if(confirm('Are you sure delete this data?'))
            {                
                $.ajax({
                    url : "<?php echo site_url('administrator/Logistik/ajax_del_brg/')?>"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                        alert('Data Berhasil Dihapus');
                        id = $('[name="po_id"]').val();
                        barang(id);
                        sub_total(id);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error deleting data');
                    }
                });
            }
        }
    </script>
    <!-- Search -->
    <script>
        function srch_curr()
        {
            $('#modal_curr').modal('show');
            $('.modal-title').text('Cari Rate Mata Uang');            
            table = $('#dtb_curr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_curr')?>",
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


        //Update Sistem Nomor Approval PO MATCH,HO,WIKLAN,RCP
        function srch_appr()
        {


             //Update Sistem Nomor Approval PO MATCH,HO,WIKLAN,RCP
            branch=$('[name="user_branch"]').val();


            $('#modal_appr').modal('show');
            $('.modal-title').text('Cari Approval');            
            table = $('#dtb_appr').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {

                    //Update Sistem Nomor Approval PO MATCH,HO,WIKLAN,RCP
                    "url": "<?php echo site_url('administrator/Searchdata/srch_apprglobal/')?>"+branch,


                    "type": "POST",
                    "data": function(data){
                        data.brch = $('[name="user_branch"]').val();
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
        function srch_supp()
        {
            $('#modal_supp').modal('show');
            $('.modal-title').text('Cari Supplier');            
            table = $('#dtb_supp').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Logistik/ajax_srch_supp')?>",
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
        function srch_brg()
        {

            if($('[name="supp_id"]').val()==='')
            {
                alert('Supplier Wajib Diisi!!')

            }
            else{
                suppid = $('[name="supp_id"]').val();
                brcid = $('[name="user_branch"]').val();
                $('#modal_barang').modal('show');
                $('.modal-title').text('Cari Barang');            
                table = $('#dtb_brg').DataTable({
                    "info": false,
                    "destroy": true,
                    "responsive": true,
                    "processing": true,
                    "serverSide": true,
                    "order": [],                
                    "ajax": {
                        "url": "<?php echo site_url('administrator/Searchdata/srch_gdforlgt/')?>"+suppid+'/'+brcid,
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


            // suppid = $('[name="supp_id"]').val();
            // brcid = $('[name="user_branch"]').val();
            // $('#modal_barang').modal('show');
            // $('.modal-title').text('Cari Barang');            
            // table = $('#dtb_brg').DataTable({
            //     "info": false,
            //     "destroy": true,
            //     "responsive": true,
            //     "processing": true,
            //     "serverSide": true,
            //     "order": [],                
            //     "ajax": {
            //         "url": "<?php //echo site_url('administrator/Searchdata/srch_gdforlgt/')?>"+suppid+'/'+brcid,
            //         "type": "POST",                
            //     },                
            //     "columnDefs": [
            //     { 
            //         "targets": [ 0 ],
            //         "orderable": false,
            //     },
            //     ],
            // });


        }
        function srch_loc()
        {
            $('#modal_loc').modal('show');
            $('.modal-title').text('Cari Lokasi');          
            table = $('#dtb_loc').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Marketing/ajax_srch_loc')?>",
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
        function edit_kry()
        {
            $('#modal_po_edit').modal('show');
            $('.modal-title').text('Cari PO');
            table = $('#dtb_po_edit').DataTable({
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


        function open_lgtpo()
        {
            $('#modal_po_edit').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_po_edit').DataTable({
                "info": false,
                "destroy": true,


                //Update sistem rensponsive kolom simpan alasan open
                // "responsive": true,



                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pobysts')?>",
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
        function check_lgtpo()
        {
            $('#modal_po_edit').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_po_edit').DataTable({
                "info": false,
                "destroy": true,

                //"responsive": true,

                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pobysts')?>",
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
        function apr_lgtpo()
        {
            $('#modal_po_edit').modal('show');
            $('.modal-title').text('Cari PO');            
            table = $('#dtb_po_edit').DataTable({
                "info": false,
                "destroy": true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "order": [],                
                "ajax": {
                    "url": "<?php echo site_url('administrator/Searchdata/srch_pobysts')?>",
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
    </script>
    <!-- Pick -->
    <script>
        function pick_brg(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_brg/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="gd_id"]').val(data.GD_ID);
                    $('[name="gd_name"]').val(data.GD_NAME);
                    $('[name="gd_unit1"]').val(' / ' +data.GD_UNIT+' '+data.GD_MEASURE);
                    $('[name="gd_price"]').val(data.GD_PRICE);
                    prc = $('[name="gd_price"]').val();
                    $('[name="gd_unit2"]').val(data.GD_MEASURE);
                    $('#modal_barang').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_supp(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_supp/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
                    $('[name="supp_id"]').val(data.SUPP_ID);
                    $('[name="supp_name"]').val(data.SUPP_NAME);
                    $('[name="supp_address"]').val(data.SUPP_ADDRESS);
                    $('[name="supp_city"]').val(data.SUPP_CITY);
                    $('[name="supp_info"]').val(data.SUPP_DUE+"\n"+data.SUPP_OTHERCTC);
                    $('#modal_supp').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_apprgb(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_appr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="appr_id"]').val(data.APPR_ID);
                    $('[name="appr_code"]').val(data.APPR_CODE);
                    $('[name="loc_id"]').val(data.LOC_ID);
                    $('[name="loc_name"]').val(data.LOC_NAME);    

                    //Tambah kolom Keterangan Lokasi
                    $('[name="ket_loc"]').val(data.LOC_INFO);    

                    $('#modal_appr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_curr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Logistik/ajax_pick_curr/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="curr_id"]').val(data.CURR_ID);                    
                    $('[name="curr_name"]').val(data.CURR_NAME);
                    $('[name="curr_rate"]').val(data.CURR_RATE);
                    $('#modal_curr').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_loc(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Marketing/ajax_pick_loc/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="loc_id"]').val(data.LOC_ID);
                    $('[name="loc_name"]').val(data.LOC_NAME);

                    //Tambah kolom Keterangan Lokasi
                    $('[name="ket_loc"]').val(data.LOC_INFO);   

                    $('#modal_loc').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_polgtopen(id)
        {


            //update sistem simpan kolom alasan open
            if($('[name="note_'+id+'"]').val() === '')
            // if(notes === '')
            {
                alert('Note Harus Diisi !!!');
            }
            else
            {





                    $.ajax({
                        url : "<?php echo site_url('administrator/Logistik/open_lgtpo/')?>" + id,
                        type: "POST",





                        //update sistem simpan kolom alasan open
                        // data: $('#form_po').serialize(),
                        data: {notes : $('[name="note_'+id+'"]').val()},
                        





                        dataType: "JSON",
                        success: function(data)
                        {   
                            if(data.status)
                            {
                                alert('Record PO Logistik Sukses Dibuka');
                                $('#modal_po_edit').modal('hide');
                            }
                            else
                            {
                                alert('Record PO Logistik masih digunakan di transaksi '+data.string);
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            alert('Error get data from ajax');
                        }
                    });


            }


        }






        //update sistem simpan kolom alasan open
        function pick_alasan()
        {
            var alasan=$('[name="note_'+id+'"]').val();
            // var alasan='tes1';
            return alasan;
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
                    dropbranch();
                    $('[name="branch"]').val(data.id_branch);
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
                    $('[name="tgl_masuk"]').val(data.tgl_masuk);
                    keluarga(data.id_karyawan);
                    pendidikan(data.id_karyawan);
                    pekerjaan(data.id_karyawan);
                    // $('.btnSt').css({'display':'none'});


                    // pick_apprgb(data.APPR_ID);
                    // pick_supp(data.SUPP_ID);
                    // barang(data.PO_ID);
                    // $('[name="po_term"]').val(data.PO_TERM);
                    // $('[name="po_info"]').val(data.PO_INFO);
                    // pick_curr(data.CURR_ID);
                    // sub_total(data.PO_ID);
                    $('#modal_po_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_polgtchk(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_polgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_id"]').val(data.PO_ID);
                    $('[name="po_code"]').val(data.PO_CODE);
                    $('[name="po_so"]').val(data.PO_ORDNUM);
                    $('[name="po_code"]').val(data.PO_CODE);
                    $('[name="po_tgl"]').val(data.PO_DATE);


                    //update sistem - surat tugas
                    $('[name="surat_tanggal"]').val(data.TAYANG);
                    $('[name="visual_lama"]').val(data.VISUAL_LAMA);
                    $('[name="visual_baru"]').val(data.VISUAL_BARU);
                    $('[name="vinyl_baru"]').val(data.DIAMBIL);
                    $('[name="vinyl_lama"]').val(data.DIKEMBALIKAN);
                    $('.btnSt').css({'display':'block'});


                    pick_apprgb(data.APPR_ID);
                    pick_supp(data.SUPP_ID);
                    barang_(data.PO_ID);
                    $('[name="po_term"]').val(data.PO_TERM);
                    $('[name="po_info"]').val(data.PO_INFO);
                    pick_curr(data.CURR_ID);
                    sub_total(data.PO_ID);
                    $('.btnCh').css({'display':'none'});
                    $('#modal_po_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
        function pick_polgtapr(id)
        {
            $.ajax({
                url : "<?php echo site_url('administrator/Searchdata/pick_polgtgb/')?>" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {   
                    $('[name="po_id"]').val(data.PO_ID);
                    $('[name="po_code"]').val(data.PO_CODE);
                    $('[name="po_so"]').val(data.PO_ORDNUM);
                    $('[name="po_code"]').val(data.PO_CODE);
                    $('[name="po_tgl"]').val(data.PO_DATE);


                    //update sistem - surat tugas
                    $('[name="surat_tanggal"]').val(data.TAYANG);
                    $('[name="visual_lama"]').val(data.VISUAL_LAMA);
                    $('[name="visual_baru"]').val(data.VISUAL_BARU);
                    $('[name="vinyl_baru"]').val(data.DIAMBIL);
                    $('[name="vinyl_lama"]').val(data.DIKEMBALIKAN);
                    $('.btnSt').css({'display':'block'});

                    pick_apprgb(data.APPR_ID);
                    pick_supp(data.SUPP_ID);
                    barang_(data.PO_ID);
                    $('[name="po_term"]').val(data.PO_TERM);
                    $('[name="po_info"]').val(data.PO_INFO);
                    pick_curr(data.CURR_ID);
                    sub_total(data.PO_ID);
                    $('.btnCh').css({'display':'none'});
                    $('.btnApr').prop('disabled',false);
                    $('#modal_po_edit').modal('hide');
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
        }
    </script>
</body>
</html>