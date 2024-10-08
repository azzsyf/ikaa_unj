<style>
    .section1{
        background: url("asset/slider.png") no-repeat;
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
        /* height: 800px; */
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
            height: 600px;
            margin-bottom: 20px;
        }

        /* Fake image, just for this example */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
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

<?php 
    function getDayIndonesia($date)
    {
        if($date != '0000-00-00'){
            $data = hari(date('D', strtotime($date)));
        }else{
            $data = '-';
        }
  
        return $data;
    }
  
  
    function hari($day) {
        $hari = $day;
  
        switch ($hari) {
            case "Sun":
                $hari = "Minggu";
                break;
            case "Mon":
                $hari = "Senin";
                break;
            case "Tue":
                $hari = "Selasa";
                break;
            case "Wed":
                $hari = "Rabu";
                break;
            case "Thu":
                $hari = "Kamis";
                break;
            case "Fri":
                $hari = "Jum'at";
                break;
            case "Sat":
                $hari = "Sabtu";
                break;
        }
        return $hari;
    }
  
    // Menampilkan nama hari format Bahasa Indonesia
    // $hari_ini   = date('Y-m-d');
    // echo getDayIndonesia($hari_ini);
    

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
        <h1>Acara</h1>
        <p>Ikatan Alumni Akuntansu UNJ</p>
    </div>
</div>
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 50px;">
        <div class="row">
            <?php 
                $data = $this->session->userdata('email');
                $data2 = $this->db->get_where('acara', ["created_by" => $data])->result_array();
                // var_dump($data2);
            ?>
            <?php if(!empty($user['role_id'])){ ?>
                <div class="side">
                    <?php if(!empty($data)) { ?>
                        <?php if($user['role_id'] == 1){ ?>
                            <div class="row" style="padding: 10px;">
                                <div class="col-md-3" style="margin-left: -25px;"><h3><b>Daftar Acara</b></h3></div>
                                <div class="col-md-9" align="right" style="margin-left: 25px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Bagikan Acara">
                                    <a href="<?= base_url() ?>acara/add_acara" class="btn btn-success">
                                        <i class="far fa-plus-square"></i> Tambah
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12" style="border: #ebebeb solid 1px; width: 98%;">
                                    <div class="card-inner">
                                        <table id="example" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Deskripsi</th>
                                                    <th>Flayer</th>
                                                    <th>Tanggal Dibuat</th>
                                                    <th>Created_by</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach($acara as $key) { ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $key['judul']; ?></td>
                                                        <td><?= $key['deskripsi']; ?></td>
                                                        <td><img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar']; ?>" width="100px;" alt=""></td>
                                                        <td><?= $key['date_created']; ?></td>
                                                        <td><?= $key['created_by']; ?></td>
                                                        <?php if($key['status'] == 0){ ?>
                                                            <td><span style="color: orange;">Belum diverifikasi</span></td>
                                                        <?php }else if($key['status'] == 1){ ?>
                                                            <td><span style="color: green;">Sudah diverifikasi</span></td>
                                                        <?php } ?>
                                                        <?php if($key['status'] == 0){ ?>
                                                            <td class="col-md-2">
                                                                <a class="btn-verify btn btn-warning" name="btn-verify" id="<?= $key['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Verifikasi"><i class="fas fa-check"></i></a>
                                                                <a href="<?= base_url() ?>acara/delete/<?= $key['id'] ?>"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        <?php }else if($key['status'] == 1){?>
                                                            <?php if($key['pin'] == 0){ ?>
                                                                <td class="col-md-2">
                                                                    <a href="<?= base_url() ?>acara/pin/<?= $key['id'] ?>"class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Sematkan"><i class="fas fa-thumbtack"></i></a>
                                                                    <a href="<?= base_url() ?>acara/delete/<?= $key['id'] ?>"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                </td>
                                                            <?php }else if($key['pin'] == 1){ ?>
                                                                <td class="col-md-2">
                                                                    <a href="<?= base_url() ?>acara/unpin/<?= $key['id'] ?>"class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Lepas Sematkan"><i class="fas fa-thumbtack"></i></a>
                                                                    <a href="<?= base_url() ?>acara/delete/<?= $key['id'] ?>"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                </td>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php }else if($user['role_id'] == 0){ ?>
                            <div class="title"><h3><b>Daftar Acara</b></h3></div>            
                            <?php if(!empty($acara)){ ?>
                                <div class="oke">
                                    <?php if($dataKategori == null){ ?>
                                        <?php foreach ($acara as $key) { ?>
                                            <?php if($key['status'] == 1) { ?>
                                                <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px; margin-left: -15px;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div>
                                                                    <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                                </div>
                                                                <div>
                                                                    <span style="text-decoration: none; color: #000;"><?= $key['deskripsi'] ?></span>
                                                                </div>
                                                                <div style="padding-top: 5px; padding-bottom: 5px;">
                                                                    <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                                </div>
                                                                <div style="padding-top: 20px;">
                                                                    <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php }else{ ?>
                                        <?php foreach ($acara as $key) { ?>
                                            <?php if($key['status'] == 1) { ?>
                                                <?php if($key['kategori'] == $dataKategori){ ?>
                                                    <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div>
                                                                        <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                                    </div>
                                                                    <div>
                                                                        <span style="text-decoration: none; color: #000;"><?= $key['deskripsi'] ?></span>
                                                                    </div>
                                                                    <div style="padding-top: 5px; padding-bottom: 5px;">
                                                                        <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                                    </div>
                                                                    <div style="padding-top: 20px;">
                                                                        <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
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
                        <div class="title"><h3><b>Semua Acara</b></h3></div>            
                        <?php if(!empty($acara)){ ?>
                            <?php if($dataKategori == null){ ?>
                                <?php foreach($acara as $key) : ?>
                                    <?php if($key['status'] == 1) { ?>
                                        <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px; margin-left: -15px;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div>
                                                            <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                        </div>
                                                        <div>
                                                            <span style="text-decoration: none; color: #000;">
                                                                <?php for ($i=0; $i < 70; $i++) { ?><?= $key['deskripsi'][$i] ?><?php } ?>....   
                                                            </span>
                                                        </div>
                                                        <div style="padding-top: 5px; padding-bottom: 5px;">
                                                            <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                        </div>
                                                        <div style="padding-top: 20px;">
                                                            <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php }else{ ?>
                                <?php foreach($acara as $key) : ?>
                                    <?php if($key['status'] == 1) { ?>
                                        <?php if($key['kategori'] == $dataKategori){ ?>
                                            <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div>
                                                                <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                            </div>
                                                            <div>
                                                                <span style="text-decoration: none; color: #000;">
                                                                    <?php for ($i=0; $i < 70; $i++) { ?><?= $key['deskripsi'][$i] ?><?php } ?>....   
                                                                </span>
                                                            </div>
                                                            <div style="padding-top: 5px; padding-bottom: 5px;">
                                                                <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                            </div>
                                                            <div style="padding-top: 20px;">
                                                                <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php } ?>
                        <?php }else if(empty($acara)){ ?>
                            <div class="flex" style="padding-top: 20px;">
                                <div class="card" style="flex: 100%; border: 0px; background-color: #f1f1f1;">
                                    <div class="card-body">
                                        <h3 align="center">" Belum Ada Data "</h3>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            <?php }else if(empty($user['role_id'])){ ?>
                <div class="side">
                    <?php if(!empty($data)) { ?>
                        <div class="title"><h3><b>Daftar Acara</b></h3></div>            
                        <?php if(!empty($acara)){ ?>
                            <div class="oke">
                                <?php if($dataKategori == null){ ?>
                                    <?php foreach ($acara as $key) { ?>
                                        <?php if($key['status'] == 1) { ?>
                                            <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px; margin-left: -15px;">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div>
                                                                <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                            </div>
                                                            <div>
                                                                <span style="text-decoration: none; color: #000;"><?= $key['deskripsi'] ?></span>
                                                            </div>
                                                            <div style="padding-top: 5px; padding-bottom: 5px;">
                                                                <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                            </div>
                                                            <div style="padding-top: 20px;">
                                                                <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php }else{ ?>
                                    <?php foreach ($acara as $key) { ?>
                                        <?php if($key['status'] == 1) { ?>
                                            <?php if($key['kategori'] == $dataKategori){ ?>
                                                <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div>
                                                                    <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                                </div>
                                                                <div>
                                                                    <span style="text-decoration: none; color: #000;"><?= $key['deskripsi'] ?></span>
                                                                </div>
                                                                <div style="padding-top: 5px; padding-bottom: 5px;">
                                                                    <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                                </div>
                                                                <div style="padding-top: 20px;">
                                                                    <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </div>
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
                        <div class="title"><h3><b>Semua Acara</b></h3></div>            
                        <?php if(!empty($acara)){ ?>
                            <?php if($dataKategori == null){ ?>
                                <?php foreach($acara as $key) : ?>
                                    <?php if($key['status'] == 1) { ?>
                                        <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px; margin-left: -15px;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div>
                                                            <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                        </div>
                                                        <div>
                                                            <span style="text-decoration: none; color: #000;">
                                                                <?php for ($i=0; $i < 70; $i++) { ?><?= $key['deskripsi'][$i] ?><?php } ?>....   
                                                            </span>
                                                        </div>
                                                        <div style="padding-top: 5px; padding-bottom: 5px;">
                                                            <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                        </div>
                                                        <div style="padding-top: 20px;">
                                                            <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php }else{ ?>
                                <?php foreach($acara as $key) : ?>
                                    <?php if($key['status'] == 1) { ?>
                                        <?php if($key['kategori'] == $dataKategori){ ?>
                                            <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div>
                                                                <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span><?= $key['judul'] ?></span></a>
                                                            </div>
                                                            <div>
                                                                <span style="text-decoration: none; color: #000;">
                                                                    <?php for ($i=0; $i < 70; $i++) { ?><?= $key['deskripsi'][$i] ?><?php } ?>....   
                                                                </span>
                                                            </div>
                                                            <div style="padding-top: 5px; padding-bottom: 5px;">
                                                                <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> <?= getDayIndonesia($key['date_created']) ?>, <?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></i>
                                                            </div>
                                                            <div style="padding-top: 20px;">
                                                                <a href="<?= base_url() ?>acara/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                <?php endforeach ?>
                            <?php } ?>
                        <?php }else if(empty($acara)){ ?>
                            <div class="flex" style="padding-top: 20px;">
                                <div class="card" style="flex: 100%; border: 0px; background-color: #f1f1f1;">
                                    <div class="card-body">
                                        <h3 align="center">" Belum Ada Data "</h3>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="main">
                    <?php $data = $this->session->userdata('email'); ?>
                    <?php if(!empty($data)){ ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <span style="font-size: large;">Kategori Acara</span>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?= base_url() ?>acara/add_acara" class="btn btn-primary">Bagikan Acara <i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <div style="padding-top: 20px;">
                                <?php foreach ($kategori as $key){ ?>
                                    <div>
                                        <i class="fas fa-chevron-right"></i> <a href="<?= base_url() ?>acara?kategori=<?= $key['kategori'] ?>" id="" style="text-decoration: none;"><?= $key['kategori'] ?></a>
                                    </div>
                                <?php } ?>
                            </div>
                    <?php }else{ ?>
                        <span style="font-size: large;">Kategori Acara</span>
                        <div style="padding-top: 20px;">
                            <?php foreach ($kategori as $key){ ?>
                                <div>
                                    <?php if($key['status'] == 1){ ?>
                                        <i class="fas fa-chevron-right"></i> <a href="<?= base_url() ?>acara?kategori=<?= $key['kategori'] ?>" id="" style="text-decoration: none;"><?= $key['kategori'] ?></a>
                                    <?php } ?>
                                </div>
                            <?php } ?>
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
            url : "<?= base_url(); ?>acara/verify",
            method : "post",
            dataType: "JSON",
            data : {id: id},
            success : function (data) {
                // var response = JSON.parse(data);
                if(data.success == true){
                    toastr.success(data.messages);
                    setTimeout(function() {
                        window.location.href = "<?= base_url(); ?>acara";
                    }, 1000)
                }else if(data.success == false){
                    toastr.warning(data.messages);
                }
            }
        })

    })
</script>


