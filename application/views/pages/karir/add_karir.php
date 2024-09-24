<style>
    .section2{
        padding-top: 120px;
        padding-bottom: 20px;
        /* height: 1000px; */
        .side {
            flex: 70%;
            background-color: #fff;
            padding: 20px;
        }

            /* Main column */
        .main {
            flex: 30%;
            background-color: #f1f1f1;
            padding: 25px;
            /* height: 900px; */
        }

        .flex{
            /* flex: 20%; */
            display: flex;
            /* background: #f1f1f1; */
            padding: 10px; 
            font-family: arial;
            height: auto;
        }
    }
</style>
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 50px;">
        <div>
            <a href="<?= base_url() ?>karir" style="text-decoration: none; font-size: 18px;"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <div class="row">
            <?php 
                $data = $this->session->userdata('email');
                $data2 = $this->db->get_where('loker', ["email_created" => $data])->result_array();
            ?>
            <div class="side">
                <div class="asd" style="display: flex; margin-bottom: 20px;">
                    <h3 style="margin-right: 400px;"><b>Daftar Lowongan Kerja</b></h3>
                    <!-- <input type="text" class="form-control" name="cari" id="cari" placeholder="Cari loker" style="width: 250px; margin-left: 10px; margin-right: 10px; border-color: green;"> -->
                    <!-- <button class="btn btn-success form-control" style="width: 70px;"><i class="fas fa-search"></i></button> -->
                </div>
                <?php if(!empty($data)){ ?>
                    <?php if($user['role_id'] == 1){ ?>
                        <div class="row">
                            <div class="col-md-12" style="border: #ebebeb solid 1px;">
                                <div class="card-inner">
                                    <table id="example" class="table table-striped" style="width:100%; font-size: 15px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Alamat</th>
                                                <th>Divisi</th>
                                                <th>Syarat</th>
                                                <th>Flyer</th>
                                                <th>Tanggal dibuat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach($loker as $key) { ?>
                                                <tr>
                                                    <td class="col-md-1"><?= $no++; ?></td>
                                                    <td class="col-md-2"><?= $key['nama_perusahaan']; ?></td>
                                                    <td class="col-md-2"><?= $key['alamat']; ?></td>
                                                    <td class="col-md-1"><?= $key['divisi']; ?></td>
                                                    <td class="col-md-3"><?= $key['syarat']; ?></td>
                                                    <td class="col-md-1">
                                                        <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar']; ?>" width="100px" alt="">
                                                    </td>
                                                    <td><?= date("d-m-Y",strtotime($key['date_created'])); ?></td>
                                                    <td class="col-md-2">
                                                        <a href="<?= base_url() ?>karir/delete/<?= $key['id'] ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fas fa-trash"></i></a>
                                                        <!-- <a href="<?= base_url() ?>karir/edit/<?= $key['id'] ?>" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pen"></i></a> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($user['role_id'] == 0){ ?>
                        <?php if(!empty($data2)){ ?>
                            <div class="row">
                                <div class="col-md-12" style="border: #ebebeb solid 1px;">
                                    <div class="card-inner">
                                        <table id="example" class="table table-striped" style="width:100%; font-size: 15px;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Perusahaan</th>
                                                    <th>Alamat</th>
                                                    <th>Divisi</th>
                                                    <th>Syarat</th>
                                                    <th>Flyer</th>
                                                    <th>Tanggal dibuat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach($data2 as $key) { ?>
                                                    <tr>
                                                        <td class="col-md-1"><?= $no++; ?></td>
                                                        <td class="col-md-2"><?= $key['nama_perusahaan']; ?></td>
                                                        <td class="col-md-2"><?= $key['alamat']; ?></td>
                                                        <td class="col-md-1"><?= $key['divisi']; ?></td>
                                                        <td class="col-md-3"><?= $key['syarat']; ?></td>
                                                        <td class="col-md-1">
                                                            <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar']; ?>" width="100px;" alt="">
                                                        </td>
                                                        <td><?= date("d-m-Y",strtotime($key['date_created'])); ?></td>
                                                        <td class="col-md-2">
                                                            <a href="<?= base_url() ?>karir/delete/<?= $key['id'] ?>"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fas fa-trash"></i></a>
                                                            <a href="<?= base_url() ?>karir/edit/<?= $key['id'] ?>"class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pen"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }else{ ?>
                            <div class="row">
                                <div class="col-md-12" style="border: #ebebeb solid 1px;">
                                    <div class="card-inner">
                                        <table id="example" class="table table-striped" style="width:100%; font-size: 15px;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Perusahaan</th>
                                                    <th>Alamat</th>
                                                    <th>Divisi</th>
                                                    <th>Syarat</th>
                                                    <th>Flyer</th>
                                                    <th>Tanggal dibuat</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php }else if(empty($data)){ ?>
                    <!-- <?php if(!empty($loker)){ ?>
                        <div class="oke">
                            <?php foreach ($loker as $key) { ?>
                                <div class="flex" style="display: flex;">
                                    <div class="card" style="flex: 20px;; border: 0px; background: transparent;">
                                        <img src="<?= base_url() ?>asset/lowongan-kerja.png" alt="" style="width: 200px; padding-top: 20px;">
                                    </div>
                                    <div class="card" style="flex: 60px; border: 0px; margin-left: 50px;">
                                        <div class="card-body">
                                            <h3><b><?= $key['divisi']; ?></b></h3>
                                            <i class="fas fa-building"></i> <?= $key['nama_perusahaan']; ?>
                                            <div class="row" style="padding-top: 10px; font-family: arial;">
                                                <div class="col-md-12" style="font-size: 15px;">
                                                    <i class="fas fa-map-marker-alt"></i> <?= $key['alamat']; ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card" style="flex: 10px; border: 0px; margin-left: 130px;">
                                        <div class="card-body">
                                            <p><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="isi">
                                    <div>
                                        <?= $key['syarat']; ?>
                                    </div>
                                </div>
                                <div style="padding-top: 10px; padding-bottom: 10px;">
                                    <a href="<?= base_url() ?>karir/view/<?= $key['id']; ?>" class="btn btn-success" style="width: 100%;">Selengkapnya</a>
                                </div>
                            <?php } ?>
                        </div>
                    <?php }else if(empty($loker)){ ?>
                        <div class="flex" style="padding-top: 20px;">
                            <div class="card" style="flex: 100%; border: 0px; background-color: #f1f1f1;">
                                <div class="card-body">
                                    <h3 align="center">" Belum Ada Data "</h3>
                                </div>
                            </div>
                        </div>
                    <?php } ?> -->
                    <div class="flex" style="padding-top: 20px;">
                        <div class="card" style="flex: 100%; border: 0px; background-color: #f1f1f1;">
                            <div class="card-body">
                                <h3 align="center">" Silahkan daftar dan login terlebih dahulu! "</h3>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="main">
                <?php if(!empty($data)){ ?>
                    <div style="padding-bottom: 20px;">
                        <h5><b>Bagikan Lowongan Kerja</b></h5>  
                    </div>
                    <form method="post" action="" id="form-loker" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi yang dibutuhkan <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" id="divisi" name="divisi" required>
                        </div>
                        <div class="mb-3">
                            <label for="syarat" class="form-label">Syarat dan ketentuan <span style="color:red;">*</span></label>
                            <textarea class="form-control summernote" id="syarat" name="syarat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Upload Flayer</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                <?php }else{ ?>
                    <h3>Loker Terbaru</h3>
                    <!-- <?php foreach ($loker as $key){ ?>
                        <li><a href="#"><?= $key['divisi']; ?>, <?= $key['nama_perusahaan']; ?></a></li>
                    <?php } ?> -->
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    $("#form-loker").on("submit", function(e){
        e.preventDefault();
        var gambar = new FormData(this);
        console.log(gambar);
        
        $.ajax({
            url : "<?= base_url(); ?>karir/save_loker",
            method : "post",
            data : gambar,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success : function (data) {
                if(data.success == true){
                    toastr.success(data.message, 'success',);
                    setTimeout(function() {
                        window.location.href = "<?= base_url(); ?>karir/add_karir";
                    }, 1000)
                }else if(data.success == true){
                    toastr.warning(data.message, 'error',);
                }
            }
        })
    })

 
    $("#cari").on("keyup",function(){
        var keywoard = $(this).val();
        var data = keywoard;
        console.log(data)
        // alert(cari);
        
    })

</script>