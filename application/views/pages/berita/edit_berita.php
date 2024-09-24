<div class="container">
    <div style="padding-top: 150px;">
        <h1>Edit Acara</h1>
        <div class="container" style="padding-bottom: 20px; border: solid 1px #bcbcbc; border-radius: 12px; padding: 20px;">
            <form id="form-edit-berita" method="post" enctype="multipart/form-data">
                <div class="mb-3 row">
                    <input type="hidden" id="id" name="id" value="<?= $berita['id'] ?>"> 
                    <label for="judul" class="col-sm-2 col-form-label">Judul <span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $berita['judul'] ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi <span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"><?= $berita['deskripsi'] ?></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="gambar" class="col-sm-2 col-form-label">Flayer <span style="color:red;">*</span></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="gambar" name="gambar" value="">
                        <img src="<?= base_url() ?>asset/images/berita/<?= $berita['gambar'] ?>" width="150px;" style="padding-top: 20px;" alt="">
                    </div>
                </div>
                <div align="right">
                    <button class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#form-edit-berita").on("submit", function(e){
        e.preventDefault();
        var gambar = new FormData(this);
        // console.log(gambar);
        
        $.ajax({
            url : "<?= base_url(); ?>berita/save_edit",
            method : "post",
            data : gambar,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success : function (data) {
                if(data.success == true){
                    toastr.success(data.message, 'success',);
                    setTimeout(function() {
                        window.location.href = "<?= base_url(); ?>berita";
                    }, 1000)
                }else if(data.success == true){
                    toastr.warning(data.message, 'error',);
                }
            }
        })
    })
</script>