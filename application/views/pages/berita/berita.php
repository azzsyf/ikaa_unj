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
            /* height: 600px; */
        }

        /* Fake image, just for this example */
        .fakeimg {
            background-color: #aaa;
            width: 100%;
            padding: 20px;
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
    $hari_ini   = date('Y-m-d');
    echo getDayIndonesia($hari_ini);
    

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
        <h1>Berita</h1>
        <p>Ikatan Alumni Akuntansu UNJ</p>
    </div>
</div>
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 50px;">
        <div class="row">
            <?php 
                $data = $this->session->userdata('email');
                $data2 = $this->db->get_where('berita', ["created_by" => $data])->result_array();
            ?>
            <div class="side">
                <div class="title"><h3><b>Daftar Berita</b></h3></div>
                <?php if(!empty($data)){ ?>
                    <?php if($user['role_id'] == 1){ ?>
                        <div class="row">
                            <div class="col-md-12" style="border: #ebebeb solid 1px;">
                                <div class="card-inner">
                                    <table id="example" class="table table-striped" style="width:100%; font-size: 15px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul</th>
                                                <th>Deskripsi</th>
                                                <th>flayer</th>
                                                <th>Tanggal dibuat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach($berita as $key) { ?>
                                                <tr>
                                                    <td class="col-md-1"><?= $no++; ?></td>
                                                    <td class="col-md-2"><?= $key['judul']; ?></td>
                                                    <td class="col-md-2"><?= $key['deskripsi']; ?></td>
                                                    <td class="col-md-1"><img src="<?= base_url() ?>asset/images/berita/<?= $key['gambar']; ?>" width="100px" alt=""></td>
                                                    <td class="col-md-2"><?= date("d-m-Y",strtotime($key['date_created'])); ?></td>
                                                    <td class="col-md-2">
                                                        <a href="<?= base_url() ?>berita/delete/<?= $key['id'] ?>"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-trash"></i></a>
                                                        <!-- <a href="<?= base_url() ?>berita/edit/<?= $key['id'] ?>"class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pen"></i></a> -->
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php }else if($user['role_id'] == 0){?>
                        <?php if(!empty($data2)){ ?>
                            <div class="oke">
                                <?php if($dataKategori == null) { ?>
                                    <?php foreach ($berita as $key) : ?>
                                        <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?= base_url() ?>asset/images/berita/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
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
                                                            <a href="<?= base_url() ?>berita/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                <?php }else{ ?>
                                    <?php foreach ($berita as $key) : ?>
                                        <?php if($key['kategori'] == $dataKategori) { ?>
                                            <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="<?= base_url() ?>asset/images/berita/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
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
                                                                <a href="<?= base_url() ?>berita/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php endforeach ?>
                                <?php } ?>
                            </div>
                        <?php }else{ ?>
                            <span>Belum Ada Berita</span>
                        <?php } ?>
                    <?php } ?>
                <?php }else if(empty($data)){ ?>
                    <?php if(!empty($berita)){ ?>
                        <div class="oke">
                                <?php if($dataKategori == null) { ?>
                                    <?php foreach ($berita as $key) : ?>
                                        <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="<?= base_url() ?>asset/images/berita/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
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
                                                            <a href="<?= base_url() ?>berita/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                <?php }else{ ?>
                                    <?php foreach ($berita as $key) : ?>
                                        <?php if($key['kategori'] == $dataKategori) { ?>
                                            <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <img src="<?= base_url() ?>asset/images/berita/<?= $key['gambar'] ?>" alt="" style="width: 150px;">
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
                                                                <a href="<?= base_url() ?>berita/view/<?= $key['id'] ?>" style="text-decoration: none; background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php endforeach ?>
                                <?php } ?>
                            </div>
                    <?php }else if(empty($berita)){ ?>
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
                            <span style="font-size: large;">Kategori Berita</span>
                        </div>
                        <div class="col-md-6">
                            <a href="<?= base_url() ?>berita/add_berita" class="btn btn-primary">Bagikan Berita <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div style="padding-top: 20px;">
                        <?php foreach ($kategori as $key){ ?>
                            <div>
                                <i class="fas fa-chevron-right"></i> <a href="<?= base_url() ?>berita?kategori=<?= $key['kategori'] ?>" id="" style="text-decoration: none;"><?= $key['kategori'] ?></a>
                            </div>
                        <?php } ?>
                    </div>
                <?php }else{ ?>
                    <h3>Kategori Berita</h3>
                    <?php foreach ($kategori as $key){ ?>
                        <div>
                            <i class="fas fa-chevron-right"></i> <a href="<?= base_url() ?>berita?kategori=<?= $key['kategori'] ?>" id="" style="text-decoration: none;"><?= $key['kategori'] ?></a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>