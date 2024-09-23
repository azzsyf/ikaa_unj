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
        padding-top: 50px; 
        padding-bottom: 50px;
        height: 600px;
        .card-inner{
            border: 1px solid #ebebeb;
            padding: 20px;
            border-radius: 5px;
        }
    }
</style>
<div class="section1">
    <div id="head">
        <h1>Data Alumni</h1>
        <p>Ikatan Alumni Akuntansi UNJ</p>
    </div>
</div>
<div class="section2">
    <div class="container" style="padding-top: 20px;">
        <div class="container">
            <h3>Daftar Alumni Akuntansi</h3>
            <?php if(!empty($email)) { ?>
                <div class="row">
                    <div class="col-md-9" style="border-right: #ebebeb solid 1px;">
                        <div class="card-inner">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>ID Anggota</th>
                                        <th>Alamat</th>
                                        <th>Angkatan</th>
                                        <th>Prodi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($profil as $key) { ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $key['nama_lengkap']; ?></td>
                                            <td><?= $key['id_anggota']; ?></td>
                                            <td><?= $key['alamat']; ?></td>
                                            <td><?= $key['angkatan']; ?></td>
                                            <td><?= $key['program_studi']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php }else if(empty($email)){ ?>
                <span>Silahkan login terlebih dahulu untuk melihat daftar alumni</span>
            <?php } ?>
        </div>
    </div>
</div>