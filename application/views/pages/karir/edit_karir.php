<div class="container">
    <div style="padding-top: 150px;">
        <h1>Edit Karir</h1>
        <div class="container" style="padding-bottom: 20px;">
            <form id="form-edit-loker" method="post">
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
                <div align="right">
                    <button class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
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
        
        var data = {id, nama_perusahaan, alamat, divisi, syarat}
        console.log(data)

        $.ajax({
            url : "<?= base_url(); ?>karir/save_edit",
            method : "post",
            data : $("#form-edit-loker").serialize(),
            dataType: "JSON",
            success : function (data) {
                // var response = JSON.parse(data);
                if(data.success == true){
                    toastr.success(data.messages, 'Success');
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