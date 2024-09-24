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
            font-size: 60px;
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
        padding-top: 50px;
        /* .row{
            display: flex;
            float: left;
        } */
    }

    .side {
        flex: 70%;
        background-color: #fff;
        padding: 20px;
    }

        /* Main column */
    .main {
        flex: 30%;
        background-color: #f1f1f1;
        padding: 20px;
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
</style>
<?php 
    // $daftar_hari = array(
    //     'Sunday' => 'Minggu',
    //     'Monday' => 'Senin',
    //     'Tuesday' => 'Selasa',
    //     'Wednesday' => 'Rabu',
    //     'Thursday' => 'Kamis',
    //     'Friday' => 'Jumat',
    //     'Saturday' => 'Sabtu'
    //    );

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
<!-- <div class="section1">
    <div id="head">
        <h1>Lowongan Kerja</h1>
        <p>Ikatan Alumni Akuntansi UNJ</p>
    </div>
</div> -->
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 80px;">
        <div class="row">
            <div class="side">
            <div style="padding-bottom: 20px;">
                <a href="<?= base_url() ?>karir" style="text-decoration: none; font-size: 18px;"><i class="fas fa-chevron-left"></i> Kembali</a>
            </div>
                <!-- <div class="title"><h3 style=" padding: 20px; border-bottom-right-radius: 20px; border-left: solid 5px yellow;"><b>Lowongan Kerja</b></h3></div> -->
                <h4><b><?= $lokerID['nama_perusahaan']; ?></b></h4>
                <img src="<?= base_url(); ?>asset/images/karir/<?= $lokerID['gambar'] ?>" width="700px" alt="">
                <?php if(!empty($lokerID)){ ?>
                    <div class="flex" style="display: flex;">
                        <div class="card" style="flex: 60px; border: 0px;">
                            <div class="card-body">
                                <h3><b><?= $lokerID['divisi']; ?></b></h3>
                                <i class="fas fa-building"></i> <?= $lokerID['nama_perusahaan']; ?>
                                <div class="row" style="padding-top: 10px; font-family: arial;">
                                    <div class="col-md-12" style="font-size: 15px;">
                                        <i class="fas fa-map-marker-alt"></i> <?= $lokerID['alamat']; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card" style="flex: 10px; border: 0px;">
                            <div class="card-body">
                                <p>Upload : <?= tgl_indo(date("Y-m-d",strtotime($lokerID['date_created']))); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="isi">
                        <div>
                            <?= $lokerID['syarat']; ?>
                        </div>
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
            </div>
            <div class="main">
                <h3>Lorem</h3>
                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nesciunt commodi voluptatum minima.</li>
            </div>
        </div>
        <div class="row">
            
            

            <script src="https://kit.fontawesome.com/812e771e48.js" crossorigin="anonymous"></script>
        </div>
    </div>
</div>