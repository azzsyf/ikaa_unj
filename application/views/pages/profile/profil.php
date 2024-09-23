<style>
    .section1{
        background: url("<?= base_url() ?>asset/slider.png") no-repeat;
        background-size: cover;
        width: 100%;
        height: 350px;
        #head{
            padding-top: 150px;
            text-align: center;
            color: #fff;
        }
        #head h1{
            position: relative;
            font-family: "Wittgenstein", serif;
            font-size: 70px;
        }
        h1:after {
            content: "";
            position: absolute;
            left: 50%;
            margin-left: -50px;
            bottom: 0;
            width: 100px;
            border-bottom: 2px solid #fff;
        }
    }

    .modal{
        .card{
            background: url("<?= base_url() ?>asset/bg-kartu.jpg") no-repeat;
            background-size: cover;
            width: 465px; 
            height: 300px; 
            border-radius: 12px;
        }
    }
</style>
<!-- <div class="section1">
    <div id="head">
        <h1>Karir</h1>
        <p>Ikatan Alumni Akuntansi UNJ</p>
    </div>
</div> -->
<div class="section2">
    <div class="container" style="padding-top: 130px;">
        <h3>Biodata Anggota</h3>
        <form action="profile/upload" method="post" enctype="multipart/form-data">
            <div class="row" style="padding-top: 20px;">
                <?php 
                    $email = $this->session->userdata('email');
                    $data = $this->db->get_where('foto_profil', ['created_by' => $email])->row_array(); 
                    // var_dump($data);
                ?>
                <?php if(!empty($data)){ ?>
                    <div class="col-md-2">
                        <div style="padding-top: 50px; width: 150px; height: 150px; background: url('<?= base_url() ?>asset/images/uploads/<?= $data['file_name']; ?>'); background-size: cover;">
                        </div>
                    </div>
                <?php } else{ ?>
                    <div class="col-md-2">
                        <div style="padding-top: 50px; width: 150px; height: 150px; background: url('<?= base_url() ?>asset/profil-anon.jpg'); background-size: cover;">
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-10">
                    <input type="hidden" name="id_anggota" value="<?= $profil['id_anggota']; ?>">
                    <label for="gambar" class="form-label">Upload Foto</label>
                    <input class="form-control" type="file" id="gambar" name="gambar">
                    <div style="padding-top: 40px;" align="right">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </div>
        </form>  

        
        <div class="row" style="padding-top: 20px;">
            <label for="id_anggota" class="col-sm-2 col-form-label">ID ANGGOTA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="id_anggota" name="id_anggota" readonly value=": <?= $profil['id_anggota']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="nama" name="nama" readonly value=": <?= $profil['nama_lengkap']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat lahir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="tempat_lahir" name="tempat_lahir" readonly value=": <?= $profil['tempat_lahir']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal lahir</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="tanggal_lahir" name="tanggal_lahir" value=": <?= $profil['tanggal_lahir']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="alamat" name="alamat" value=": <?= $profil['alamat']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="angkatan" name="angkatan" value=": <?= $profil['angkatan']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="program_studi" name="program_studi" value=": <?= $profil['program_studi']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="no_hp" class="col-sm-2 col-form-label">No. Hp</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="no_hp" name="no_hp" value=": <?= $profil['no_hp']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control-plaintext" for="email" name="email" value=": <?= $profil['email']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="pekerjaan" name="pekerjaan" value=": <?= $profil['pekerjaan']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="jabatan" name="jabatan" value=": <?= $profil['jabatan']; ?>">
            </div>
        </div>
        <div class="row" style="padding-top: 10px;">
            <label for="nama_instansi" class="col-sm-2 col-form-label">Nama Instansi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" for="nama_instansi" name="nama_instansi" value=": <?= $profil['nama_instansi']; ?>">
            </div>
        </div>
        <div style="padding-top: 20px; padding-bottom: 20px;" align="right">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-print"></i> Cetak Kartu</button>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kartu Anggota</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="float: center;">
            <div class="card" style="">
                <div class="card-body">
                    <div class="row head-card" style="text-align: center;">
                        <div class="col-md-2">
                            <img src="<?= base_url() ?>asset/Logo IKAA.png" width="90px;" alt="">
                        </div>
                        <div class="col-md-10">
                            <span style="font-size: 18px;"><b>KARTU ANGGOTA</b><br></span>
                            <span style="font-size: 18px;"><b>IKATAN ALUMNI AKUNTANSI</b><br></span>
                            <span><b>UNIVERSITAS NEGERI JAKARTA</b></span>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 15px; padding-left: 20px;">
                        <div class="col-md-3" style="font-size: 13px;">ID ANGGOTA</div>
                        <div class="col-md-1" style="font-size: 13px;">:</div>
                        <div class="col-md-8" style="font-size: 13px;"><?= $profil['id_anggota']; ?></div>
                    </div>
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-md-3" style="font-size: 13px;">Nama</div>
                        <div class="col-md-1" style="font-size: 13px;">:</div>
                        <div class="col-md-8" style="font-size: 13px;"><?= $profil['nama_lengkap']; ?></div>
                    </div>
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-md-3" style="font-size: 13px;">Tmp/tgl lahir</div>
                        <div class="col-md-1" style="font-size: 13px;">:</div>
                        <div class="col-md-8" style="font-size: 13px;"><?= $profil['tempat_lahir']; ?>, <?= $profil['tanggal_lahir']; ?></div>
                    </div>
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-md-3" style="font-size: 13px;">Alamat</div>
                        <div class="col-md-1" style="font-size: 13px;">:</div>
                        <div class="col-md-8" style="font-size: 13px;"><?= $profil['alamat']; ?></div>
                    </div>
                    <div class="row" style="padding-left: 20px;">
                        <div class="col-md-3" style="font-size: 13px;">Angkatan</div>
                        <div class="col-md-1" style="font-size: 13px;">:</div>
                        <div class="col-md-8" style="font-size: 13px;"><?= $profil['angkatan']; ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            <button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </div>
    </div>
  </div>
</div>