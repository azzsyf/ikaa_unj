<div class="container">
    <div style="padding-top: 150px;">
        <div style="padding-bottom: 20px;">
            <a href="<?= base_url() ?>karir/add_karir" style="text-decoration: none; font-size: 18px;"><i class="fas fa-chevron-left"></i> Kembali</a>
        </div>
        <h2>Edit Karir</h2>
        <div class="container" style="padding-bottom: 20px; border: 1px solid #bcbcbc; border-radius: 12px; padding: 20px;">
            <form id="form-edit-loker" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <input type="hidden" id="id" name="id" value="<?= $loker['id'] ?>"> 
                    <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $loker['nama_perusahaan'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="alamat" name="alamat"><?= $loker['alamat'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="divisi" name="divisi" value="<?= $loker['divisi'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="syarat" class="col-sm-2 col-form-label">Syarat</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control summernote" id="syarat" name="syarat"><?= $loker['syarat'] ?></textarea>
                    </div>
                </div>
                <!-- <div class="mb-3 row">
                    <label for="gambar" class="col-sm-2 col-form-label">Flyer</label>
                    <div class="col-sm-10">
                        <img src="<?= base_url() ?>asset/images/karir/<?= $loker['gambar'] ?>" width="100px" style="padding-bottom: 20px;" alt="">
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                </div> -->
                <div align="right">
                    <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#form-edit-loker").on("submit", function(e){
        e.preventDefault();
        
        var id = $("#id").val();
        var nama_perusahaan = $("#nama_perusahaan").val();
        var alamat = $("#alamat").val();
        var divisi = $("#divisi").val();
        var syarat = $(".summernote").val();
        var gambar = new FormData(this);
        
        var data = {id, nama_perusahaan, alamat, divisi, syarat}
        console.log(data)

        $.ajax({
            url : "<?= base_url(); ?>karir/save_edit",
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
</script>