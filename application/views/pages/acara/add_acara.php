<style>
    .section2{
        height: 800px;
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
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 150px;">
        <div>
            <a href="<?= base_url() ?>acara" style="text-decoration: none; font-size: 18px;"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <div class="row">
            <?php 
                $data = $this->session->userdata('email');
                $data2 = $this->db->get_where('acara', ["created_by" => $data])->result_array();
            ?>
            <div class="side">
                <div class="title"><h3><b>Daftar Acara</b></h3></div>
                <?php if(!empty($data2)){ ?>
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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach($data2 as $key) { ?>
                                            <tr>
                                                <td class="col-md-1"><?= $no++; ?></td>
                                                <td class="col-md-2"><?= $key['judul']; ?></td>
                                                <td class="col-md-3"><?= $key['deskripsi']; ?></td>
                                                <td class="col-md-1"><img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar']; ?>" width="100px" alt=""></td>
                                                <td class="col-md-1"><?= date("d-m-Y",strtotime($key['date_created'])); ?></td>
                                                <?php if($key['status'] == 0){ ?>
                                                    <td><span style="color: orange;">Belum diverifikasi</span></td>
                                                <?php }else if($key['status'] == 1){ ?>
                                                    <td><span style="color: green;">Sudah diverifikasi</span></td>
                                                <?php } ?>
                                                <td class="col-md-2">
                                                    <a href="<?= base_url() ?>acara/edit/<?= $key['id'] ?>"class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pen"></i></a>
                                                    <a href="<?= base_url() ?>acara/delete/<?= $key['id'] ?>"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-trash"></i></a>
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
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>flayer</th>
                                            <th>Tanggal dibuat</th>
                                            <th>Status</th>
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
            </div>
            <div class="main">
                <div style="padding-bottom: 20px;">
                    <h5><b>Bagikan Acara</b></h5>  
                </div>
                <form id="form-acara" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="kategori" name="kategori" required>
                    </div>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi <span style="color:red;">*</span></label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required style="height: 150px;"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Upload Gambar <span style="color:red;">*</span></label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <div align="center">
                        <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $("#form-acara").on("submit", function(e){
        e.preventDefault();
        var gambar = new FormData(this);
        // console.log(gambar);
        
        $.ajax({
            url : "<?= base_url(); ?>acara/save_acara",
            method : "post",
            data : gambar,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success : function (data) {
                if(data.success == true){
                    toastr.success(data.message, 'success',);
                    setTimeout(function() {
                        window.location.href = "<?= base_url(); ?>acara/add_acara";
                    }, 1000)
                }else if(data.success == true){
                    toastr.warning(data.message, 'error',);
                }
            }
        })
    })
</script>