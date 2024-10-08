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

    .section2{
        padding-bottom: 20px;
        /* height: 1000px; */
        .side {
            flex: 70%;
            background-color: #fff;
            padding: 20px;
            height: 600px;
        }

            /* Main column */
        .main {
            flex: 30%;
            background-color: #f1f1f1;
            padding: 25px;
            /* height: 600px; */
        }
    }
</style>
<?php 
    function tgl_indo($tanggal){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        
        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun
    
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
?>
<div class="section1">
    <div id="head">
        <h1>Karir</h1>
        <p>Ikatan Alumni Akuntansi UNJ</p>
    </div>
</div>
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 50px;">
        <div class="row">
            <?php 
                $data = $this->session->userdata('email');
                $data2 = $this->db->get_where('loker', ["email_created" => $data])->result_array();
            ?>
            <?php if(!empty($user['role_id'])){ ?>
                <div class="side">
                    <?php if(!empty($data)){ ?>
                        <?php if($user['role_id'] == 1){ ?>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-6" style="margin-left: -25px;"><h3><b>Daftar Lowongan Kerja</b></h3></div>
                                <div class="col-md-6" align="right" style="margin-left: 25px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Bagikan Berita">
                                    <a href="<?= base_url() ?>karir/add_karir" class="btn btn-success">
                                        <i class="far fa-plus-square"></i> Tambah
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="border: #ebebeb solid 1px; width: 98%;">
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
                                                    <th>Status</th>
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
                                                        <td class="col-md-2"><?= $key['syarat']; ?></td>
                                                        <td class="col-md-1">
                                                            <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar']; ?>" width="100px" alt="">
                                                        </td>
                                                        <td><?= date("d-m-Y",strtotime($key['date_created'])); ?></td>
                                                        <?php if($key['status'] == 0){ ?>
                                                            <td><span style="color: orange;">Belum diverifikasi</span></td>
                                                        <?php }else if($key['status'] == 1){ ?>
                                                            <td><span style="color: green;">Sudah diverifikasi</span></td>
                                                        <?php } ?>
                                                        <td class="col-md-2">
                                                            <a class="btn-verify btn btn-warning" name="btn-verify" id="<?= $key['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Verifikasi"><i class="fas fa-check"></i></a>
                                                            <a href="<?= base_url() ?>karir/delete/<?= $key['id'] ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fas fa-trash"></i></a>
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
                            <?php if(!empty($acara)){ ?>
                                <?php if($dataKategori == null){ ?>
                                    <?php foreach ($loker as $key) : ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar'] ?>" alt="" style="width: 100px; padding-top: 20px;">
                                            </div>
                                            <div class="col-md-7" style="padding-top: 20px;">
                                                <h4><b><?= $key['divisi']; ?></b></h4>
                                                <i class="fas fa-building"></i> <?= $key['nama_perusahaan']; ?>
                                                <div><i class="fas fa-map-marker-alt"></i> <?= $key['alamat']; ?></div>
                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;">
                                                <p><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                            </div>
                                        </div>
                                        <div style="padding-top: 10px; padding-bottom: 10px;">
                                            <a href="<?= base_url() ?>karir/view/<?= $key['id']; ?>" class="btn btn-success" style="width: 100%;">Selengkapnya</a>
                                        </div>
                                    <?php endforeach ?>
                                <?php }else{ ?>
                                    <?php foreach ($loker as $key) : ?>
                                        <?php if($key['kategori'] == $dataKategori){ ?>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar'] ?>" alt="" style="width: 100px; padding-top: 20px;">
                                                </div>
                                                <div class="col-md-7" style="padding-top: 20px;">
                                                    <h4><b><?= $key['divisi']; ?></b></h4>
                                                    <i class="fas fa-building"></i> <?= $key['nama_perusahaan']; ?>
                                                    <div><i class="fas fa-map-marker-alt"></i> <?= $key['alamat']; ?></div>
                                                </div>
                                                <div class="col-md-3" style="padding-top: 20px;">
                                                    <p><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                                </div>
                                            </div>
                                            <div style="padding-top: 10px; padding-bottom: 10px;">
                                                <a href="<?= base_url() ?>karir/view/<?= $key['id']; ?>" class="btn btn-success" style="width: 100%;">Selengkapnya</a>
                                            </div>
                                        <?php } ?>
                                    <?php endforeach ?>
                                <?php } ?>
                            <?php }else{ ?>
                                <div class="flex" style="padding-top: 20px;">
                                    <div class="card" style="flex: 100%; border: 0px; background-color: #f1f1f1;">
                                        <div class="card-body">
                                            <h3 align="center">" Belum Ada Data "</h3>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    <?php }else if(empty($data)){ ?>
                        <div style="height: 300px;">
                            <span>Silahkan daftar dan login terlebih dahulu untuk melihat lowongan kerja..</span>
                        </div>
                    <?php } ?>
                </div>
            <?php }else if(empty($user['role_id'])){ ?>
                <div class="side">
                    <div class="asd" style="margin-bottom: 20px;">
                        <h3 style="margin-right: 400px;"><b>Daftar Lowongan Kerja</b></h3>
                    </div>
                    <?php if(!empty($data)){ ?>
                        <?php if(!empty($data2)){ ?>
                            <?php if($dataKategori == null){ ?>
                                <?php foreach ($loker as $key) : ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar'] ?>" alt="" style="width: 100px; padding-top: 20px;">
                                        </div>
                                        <div class="col-md-7" style="padding-top: 20px;">
                                            <h4><b><?= $key['divisi']; ?></b></h4>
                                            <i class="fas fa-building"></i> <?= $key['nama_perusahaan']; ?>
                                            <div><i class="fas fa-map-marker-alt"></i> <?= $key['alamat']; ?></div>
                                        </div>
                                        <div class="col-md-3" style="padding-top: 20px;">
                                            <p><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                        </div>
                                    </div>
                                    <div style="padding-top: 10px; padding-bottom: 10px;">
                                        <a href="<?= base_url() ?>karir/view/<?= $key['id']; ?>" class="btn btn-success" style="width: 100%;">Selengkapnya</a>
                                    </div>
                                <?php endforeach ?>
                            <?php }else{ ?>
                                <?php foreach ($loker as $key) : ?>
                                    <?php if($key['kategori'] == $dataKategori){ ?>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <img src="<?= base_url() ?>asset/images/karir/<?= $key['gambar'] ?>" alt="" style="width: 100px; padding-top: 20px;">
                                            </div>
                                            <div class="col-md-7" style="padding-top: 20px;">
                                                <h4><b><?= $key['divisi']; ?></b></h4>
                                                <i class="fas fa-building"></i> <?= $key['nama_perusahaan']; ?>
                                                <div><i class="fas fa-map-marker-alt"></i> <?= $key['alamat']; ?></div>
                                            </div>
                                            <div class="col-md-3" style="padding-top: 20px;">
                                                <p><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                            </div>
                                        </div>
                                        <div style="padding-top: 10px; padding-bottom: 10px;">
                                            <a href="<?= base_url() ?>karir/view/<?= $key['id']; ?>" class="btn btn-success" style="width: 100%;">Selengkapnya</a>
                                        </div>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <div class="flex" style="padding-top: 20px;">
                                <div class="card" style="flex: 100%; border: 0px; background-color: #f1f1f1;">
                                    <div class="card-body">
                                        <h3 align="center">" Belum Ada Data "</h3>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php }else if(empty($data)){ ?>
                        <div style="height: 300px;">
                            <span>Silahkan daftar dan login terlebih dahulu untuk melihat lowongan kerja..</span>
                        </div>
                    <?php } ?>
                </div>
                <div class="main">
                    <?php if(!empty($data)){ ?>
                        <div class="row">
                            <div class="col-md-6">
                                <span style="font-size: large;">Kategori Loker</span>
                            </div>
                            <div class="col-md-6">
                                <a href="<?= base_url() ?>karir/add_karir" class="btn btn-primary">Bagikan Loker <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div style="padding-top: 10px;">
                            <?php foreach($kategori as $key) : ?>
                                <div>
                                    <i class="fas fa-chevron-right"></i> <a href="<?= base_url() ?>karir?kategori=<?= $key['kategori'] ?>" id="" style="text-decoration: none;"><?= $key['kategori'] ?></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-confirm" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin untuk verifikasi data ini??</p>
      </div>
      <div class="modal-footer">
        <form action="" id="form-confirm-verify">
            <input type="hidden" name="btn-verify" value="<?= $key['id'] ?>">
            <!-- <input type="text" name="status" value="<?= $key['status'] ?>"> -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Verifikasi</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(".btn-verify").on("click", function(e){
        e.preventDefault();

        var id = this.id;
        $("input[name=btn-verify]").val(id);
        console.log(id)

        $("#modal-confirm").modal('show');
    })

    $("#form-confirm-verify").on("submit", function(e){
        e.preventDefault();

        var id = $("input[name=btn-verify]").val();
        // var status = $("input[name=status]").val();
        console.log(id)

        $.ajax({
            url : "<?= base_url(); ?>karir/verify",
            method : "post",
            dataType: "JSON",
            data : {id: id},
            success : function (data) {
                // var response = JSON.parse(data);
                if(data.success == true){
                    toastr.success(data.messages);
                    setTimeout(function() {
                        window.location.href = "<?= base_url(); ?>karir";
                    }, 1000)
                }else if(data.success == false){
                    toastr.warning(data.messages);
                }
            }
        })
    })
</script>