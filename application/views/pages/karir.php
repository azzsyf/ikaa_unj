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
            <div class="side">
                <h3><b>Lowongan Kerja</b></h3>
                <?php if(!empty($data)){ ?>
                    <?php if(!empty($data2)){ ?>
                        <?php foreach ($data2 as $key) { ?>
                            <div class="flex" style="display: flex;">
                                <div class="card" style="flex: 20px;; border: 0px; background: transparent;">
                                    <img src="<?= base_url() ?>asset/lowongan-kerja.png" alt="" style="width: 200px; padding-top: 20px;">
                                </div>
                                <div class="card" style="flex: 100px; border: 0px;">
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
                                <div class="card" style="flex: 10px; border: 0px;">
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
                    <?php foreach ($loker as $key) { ?>
                        <div class="flex" style="display: flex;">
                            <div class="card" style="flex: 20px;; border: 0px; background: transparent;">
                                <img src="<?= base_url() ?>asset/lowongan-kerja.png" alt="" style="width: 200px; padding-top: 20px;">
                            </div>
                            <div class="card" style="flex: 60px; border: 0px;">
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
                            <div class="card" style="flex: 10px; border: 0px;">
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
                <?php } ?>
            </div>
            <div class="main">
                <?php if(!empty($data)){ ?>
                    <div style="padding-bottom: 20px;">
                        <h5><b>Bagikan Lowongan Kerja</b></h5>  
                    </div>
                    <form method="post" action="" id="form-loker">
                        <div class="mb-3">
                            <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <label for="divisi" class="form-label">Divisi yang dibutuhkan</label>
                            <input type="text" class="form-control" id="divisi" name="divisi" required>
                        </div>
                        <div class="mb-3">
                            <label for="syarat" class="form-label">Syarat dan ketentuan</label>
                            <textarea class="form-control summernote" id="syarat" name="syarat" required></textarea>
                        </div>
                        <div align="center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                <?php }else{ ?>
                    <div class="main">
                        <h3>Loker Terbaru</h3>
                        <?php foreach ($loker as $key){ ?>
                            <li><a href="#"><?= $key['divisi']; ?>, <?= $key['nama_perusahaan']; ?></a></li>
                      <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    $("#form-loker").on("submit", function(e){
        e.preventDefault();
        // console.log('oke');

        var nama_perusahaan = $("#nama_perusahaan").val();
        var alamat = $("#alamat").val();
        var divisi = $("#divisi").val();
        var syarat = $(".summernote").val();
        
        $.ajax({
            url : "<?= base_url(); ?>karir/save_loker",
            method : "post",
            data : $("#form-loker").serialize(),
            success : function (data) {
                var response = JSON.parse(data);
                if(response.success == true){
                    toastr.success(response.messages);
                    setTimeout(function() {
                        window.location.href = "<?= base_url(); ?>karir";
                    }, 1000)
                }else if(response.success == false){
                    toastr.warning(response.messages);
                }
            }
        })
    })
</script>