<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penerimaan Peserta Didik Baru | SMK Walisongo Pecangaan Jepara</title>
    <link rel="shortcut icon" href="<?=getAsset()?>svg/yayasan.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?=getCss()?>bootstrap.min.css">
    <link rel="stylesheet" href="<?=getCss()?>font-awesome.min.css">
    <link rel="stylesheet" href="<?=getCss()?>bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?=getCss()?>jquery-ui.min.css">
    <link rel="stylesheet" href="<?=getCss()?>AdminLTE.min.css">
    <script src="<?=getJs()?>jquery.js"></script>
    <script src="<?=getJs()?>jquery-ui.min.js"></script>
    <script src="<?=getJs()?>bootstrap.min.js"></script>
    <!-- <script src="<?=getJs()?>select2.min.js"></script> -->
    <script src="<?=getJS()?>adminlte.min.js"></script>
    <script src="<?=getJs()?>script.js"></script>
</head>

<body>
    <!-- Header with logo SMK Walisongo -->
    <div class="row">
        <div class="container">
            <div class="col-md-2">
                <img src="<?=getImg()?>logo-smk.png">
            </div>
            <div class="col-md-10">
                <h2 class="text-uppercase"><b>SMK Walisongo Pecangaan Jepara</b></h2>
                <h6 class="lead">Penerimaan Peserta Didik Baru TP. 2020/2021</h6>
            </div>
        </div>
    </div>
    <div class="row">
        <form method="post" class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <!-- Biodata peserta didik baru -->
                        <div class="col-md-6">
                            <div class="box box-default">
                                <div class="box-header">
                                    <h4>Biodata Peserta Didik Baru</h4>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" name="nik" id="nik" min="16" class="form-control" required>
                                                <span class="help-block small text-yellow"><b>NIK untuk Login Portal</b></span>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap Sesuai Ijazah</label>
                                                <input type="text" name="nama" id="nama" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jk">Jenis Kelamin</label><br>
                                                <label class="radio-inline" for="jk1"><input type="radio" name="jk" id="jk1" value="L"> Laki-laki</label>
                                                <label class="radio-inline" for="jk2"><input type="radio" name="jk" id="jk2" value="P"> Perempuan</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="passwd">Kata Sandi</label>
                                                <div class="input-group">
                                                    <input type="password" name="passwd" id="passwd" class="form-control" value="smkw9_jepara" required>
                                                    <a type="button" class="input-group-addon"><i class="fa fa-eye"></i></a>
                                                </div>
                                                <span class="help-block small text-yellow"><b>Sandi untuk Login Portal</b></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="lahir" id="lahir" class="form-control" required placeholder="Jepara">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal Lahir</label>
                                                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control datepicker" placeholder="28/12/2005" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="agm">Agama</label>
                                                <select name="agm" id="agm" class="form-control" required>
                                                    <option value="">-- Pilih --</option>
                                                    <option value="Islam" selected="selected">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Buddha">Buddha</option>
                                                    <option value="Konghuchu">Konghuchu</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="desa">Desa</label>
                                                <input type="text" name="desa" id="desa" class="form-control" required placeholder="Pecangaan Kulon">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="rt">RT</label>
                                                <input type="number" name="rt" id="rt" class="form-control" placeholder="1" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="rw">RW</label>
                                                <input type="number" name="rw" id="rw" class="form-control" placeholder="12" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kec">Kecamatan</label>
                                                <input type="text" name="kec" id="kec" class="form-control" required placeholder="Pecangaan">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="kab">Kabupaten</label>
                                                <input type="text" name="kab" id="kab" class="form-control" required value="Jepara">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of col-md-6 -->
                        <!-- Data Orang Tua Peserta Didik Baru -->
                        <div class="col-md-6">
                            <div class="box box-default">
                                <div class="box-header">
                                    <h4>Data Keluarga & Orang Tua Peserta Didik Baru</h4>
                                </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="trns">Transportasi</label>
                                        <select name="trns" class="form-control" required>
                                            <option value="">--Transportasi ke sekolah--</option>
                                            <option value="Jalan Kaki">Jalan Kaki</option>
                                            <option value="Kendaraan Pribadi">Kendaraan Pribadi</option>
                                            <option value="Kendaraan Umum">Kendaraan Umum</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nohp">Nomer Telepon Orang Tua</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">+62</div>
                                                    <input type="text" name="nohp" id="nohp" class="form-control" placeholder="89004455661" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nohp1">Nomer HP Peserta Didik</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">+62</div>
                                                    <input type="text" name="nohp1" id="nohp1" class="form-control" placeholder="89004455660">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ayah">Nama Ayah</label>
                                                <input type="text" name="ayah" id="ayah" class="form-control" placeholder="Sukijan" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ibu">Nama Ibu</label>
                                                <input type="text" name="ibu" id="ibu" class="form-control" placeholder="Tukiyem" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="krj_ayah">Pekerjaan Ayah</label>
                                                <input type="text" name="krj_ayah" id="krj_ayah" class="form-control" placeholder="Wiraswasta/Petani/Pegawai Negeri" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="krj_ibu">Pekerjaan Ibu</label>
                                                <input type="text" name="krj_ibu" id="krj_ibu" class="form-control" value="Ibu Rumah Tangga" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="wali">Nama Wali</label>
                                                <input type="text" name="wali" id="wali" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="krj_wali">Pekerjaan Wali</label>
                                                <input type="text" name="krj_wali" id="krj_wali" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="sdr">Jumlah Saudara Kandung</label>
                                                <input type="number" name="sdr" id="sdr" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="anakke">Anak Ke-</label>
                                                <input type="number" name="anakke" id="anakke" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of data parents -->
                    </div>
                    <!-- new row -->
                    <div class="row">
                        <!-- data Pendaftaran -->
                        <div class="col-md-6">
                            <div class="box box-default">
                                <div class="box-header">
                                    <h4>Informasi Pendaftaran Peserta Didik Baru</h4>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jalur">Jalur Pendaftaran</label><br>
                                                <label class="radio-inline" for="jal1"><input type="radio" name="jalur" id="jal1" value="Umum"> Umum</label>
                                                <label class="radio-inline" for="jal2"><input type="radio" name="jalur" id="jal2" value="Khusus"> Khusus</label>
                                                <label class="radio-inline" for="jal3"><input type="radio" name="jalur" id="jal3" value="Industri"> Industri</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" id="khusus" style="display:none;">
                                                <label for="khus">Jalur Khusus</label>
                                                <select class="form-control" name="khus" id="pilih">
                                                    <option value="">-Pilih Jalur Khusus-</option>
                                                    <option value="yatim">Yatim / Yatim Piatu</option>
                                                    <option value="mts/smp w9">dari MTs./SMP Walisongo</option>
                                                    <option value="saudara 1 unit">Saudara Kandung siswa di Walisongo</option>
                                                    <option value="pa/pi guru/karyawan">Putra/i Guru/karyawan di Walisongo</option>
                                                    <option value="tahfidz">Peserta didik Tahfidz minimal 5 Juz</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="khus">Jurusan Pertama</label>
                                                <select class="form-control" name="jur1" required>
                                                    <option value="">-Pilih Jurusan-</option>
                                                    <option value="KT">Kriya Tekstil</option>
                                                    <option value="TKR">Teknik Kendaraan Ringan</option>
                                                    <option value="TKJ">Teknik Komputer Jaringan</option>
                                                    <option value="PBS">Perbankan Syari'ah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="khus">Jurusan Kedua</label>
                                                <select class="form-control" name="jur2" required>
                                                    <option value="">-Pilih Jurusan-</option>
                                                    <option value="KT">Kriya Tekstil</option>
                                                    <option value="TKR">Teknik Kendaraan Ringan</option>
                                                    <option value="TKJ">Teknik Komputer Jaringan</option>
                                                    <option value="PBS">Perbankan Syari'ah</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ui-widget form-group">
                                        <label for="sek_asal">Nama Sekolah Asal</label>
                                        <input type="text" name="sek_asal" id="sek_asal" placeholder="MTs Madaul Huda" class="form-control" required>
                                    </div>
                                    <label for="al_sek">Alamat Asal sekolah</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ui-widget form-group">
                                                <input type="text" name="sek_asal_des" id="al_sek" placeholder="Desa" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ui-widget form-group">
                                                <input type="text" name="sek_asal_kec" id="al_sek1" placeholder="Kecamatan" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="preak">Prestasi Akademik</label>
                                                <textarea name="preak" id="preak" cols="5" rows="3" class="form-control" placeholder="Masukan Prestasi Akademik dipisah dengan ; jika lebih dari 1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="prenon">Prestasi Nonakademik</label>
                                                <textarea name="prenon" id="prenon" cols="5" rows="3" class="form-control" placeholder="Masukan Prestasi Nonakademik dipisah dengan ; jika lebih dari 1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end of data Pendaftaran -->
                        <!-- data trespass -->
                        <div class="col-md-6">
                            <div class="box box-default">
                                <div class="box-header">
                                    <h4>Trespass Peserta Didik Baru</h4>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="rokok">Apakah Anda Merokok ?</label><br>
                                                <label class="radio-inline" for="ya"><input type="radio" name="rokok" id="ya" value="Iya" required> Iya</label>
                                                <label class="radio-inline" for="tdk"><input type="radio" name="rokok" id="tdk" value="Tidak" required> Tidak</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="kbthn">Apakah Anda Berkebutuhan Khusus ?</label><br>
                                                <label class="radio-inline" for="ya1"><input type="radio" name="kbthn" id="ya1" value="Iya" required> Iya</label>
                                                <label class="radio-inline" for="tdk1"><input type="radio" name="kbthn" id="tdk1" value="Tidak" required> Tidak</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="tato">Apakah Anda Bertato ?</label><br>
                                                <label class="radio-inline" for="ya2"><input type="radio" name="tato" id="ya2" value="Iya" required> Iya</label>
                                                <label class="radio-inline" for="tdk2"><input type="radio" name="tato" id="tdk2" value="Tidak" required> Tidak</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="buta">Apakah Anda Buta Warna ?</label><br>
                                                <label class="radio-inline" for="ya3"><input type="radio" name="buta" id="ya3" value="Iya" required> Iya</label>
                                                <label class="radio-inline" for="tdk3"><input type="radio" name="buta" id="tdk3" value="Tidak" required> Tidak</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="yatim">Apakah Anda Yatim ?</label><br>
                                                <label class="radio-inline" for="ya4"><input type="radio" name="yatim" id="ya4" value="Iya" required> Iya</label>
                                                <label class="radio-inline" for="tdk4"><input type="radio" name="yatim" id="tdk4" value="Tidak" required> Tidak</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="kip">Apakah Anda Penerima KIP ?</label><br>
                                                <label class="radio-inline" for="ya5"><input type="radio" name="kip" id="ya5" value="Iya" required> Iya</label>
                                                <label class="radio-inline" for="tdk5"><input type="radio" name="kip" id="tdk5" value="Tidak" required> Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox"><label for="agree"><input type="checkbox" name="agree" id="agree" required>Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar. Apabila ternyata data tersebut tidak benar / palsu, maka saya bersedia menerima sanksi berupa PEMBATALAN menjadi CALON PESERTA DIDIK SMK Walisongo Pecangaan</label></div>
                                        <div class="checkbox"><label for="agree1"><input type="checkbox" name="agree" id="agree1" required>Bersedia menyerahkan Fotokopi KARTU KELUARGA (KK) kepada Panitia PPDB SMK Walisongo Pecangaan</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <div id="divGenerateRandomValues"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Masukan Angka Captcha" id="textInput" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" id="btnGetCaptcha" name="daftar">Daftar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>

    <script src="<?=getJs()?>bootstrap-datepicker.min.js"></script>
</body>

</html>