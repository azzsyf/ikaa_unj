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
        height: auto;
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
    <div class="container" style="padding-top: 20px; ">
        <div class="container">
            <div class="row" style="padding: 10px;">
                <div class="col-md-6" style="margin-left: -15px;"><h3><b>Data Alumni</b></h3></div>
                <div class="col-md-6" align="right" style="margin-left: 15px;">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Import Data">
                        <i class="fas fa-file-import"></i> Import
                    </button>
                </div>
            </div>
            <?php if(!empty($email)) { ?>
                <div class="row">
                    <div class="col-md-12" style="width: 99%;">
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
                                        <th>Action</th>
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
                                            <td class="col-md-2">
                                                <!-- <a href="<?= base_url() ?>acara/edit/"class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-pen"></i></a> -->
                                                <a href="<?= base_url() ?>acara/delete/"class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="fas fa-trash"></i></a>
                                            </td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Alumni</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url() ?>alumni/import" method="POST" enctype="multipart/form-data">
            <input class="form-control" type="file" name="file" id="file">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>