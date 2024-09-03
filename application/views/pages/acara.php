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
    }
</style>
<div class="section1">
    <div id="head">
        <h1>Acara</h1>
        <p>Ikatan Alumni Akuntansu UNJ</p>
    </div>
</div>
<div class="section2">
    <div class="container" style="background-color: #fff; height: auto; padding-top: 100px;">
        <div class="row">
            <!-- <div class="side col-md-3">
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-3">
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
                <div class="card" style="height: 230px; border: 0px;">
                    <div class="card-body" sytle="width: 200px;">
                        <img src="asset/news.jpg" alt="" width="235px;">
                    </div>
                </div>
            </div> -->
            <div class="side">
                <div class="title"><h3><b>Semua Acara</b></h3></div>
                <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="asset/news.jpg" alt="" style="width: 150px;">
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</span></a>
                                </div>
                                <div style="padding-top: 5px; padding-bottom: 5px;">
                                    <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> Kamis, 25 Juli 2024</i>
                                </div>
                                <button style="background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="height: auto; border: 0px; border-bottom: #ebebeb dashed 1px;">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="asset/news.jpg" alt="" style="width: 150px;">
                            </div>
                            <div class="col-md-9">
                                <div>
                                    <a href="#" style="text-decoration: none; font-weight: bolder; color: #000;"><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</span></a>
                                </div>
                                <div style="padding-top: 5px; padding-bottom: 5px;">
                                    <i class="far fa-calendar-alt" style="color: grey; font-size: 13px;"> Kamis, 25 Juli 2024</i>
                                </div>
                                <button style="background-color: blue; color: #fff; border-radius: 7px; padding: 10px; border: 0px;">Selengkapnya</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
            <?php $data = $this->session->userdata('email'); ?>
            <?php if(!empty($data)){ ?>
                    <div style="padding-bottom: 20px;">
                        <h5><b>Bagikan Acara</b></h5>  
                    </div>
                    <form method="post" action="<?= base_url(); ?>acara/save_acara">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul" required>
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
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            <?php }else{ ?>
                <div class="main">
                    <h3>Acara Terbaru</h3>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae nesciunt commodi voluptatum minima.</li>
                </div>
            <?php } ?>
            </div>
        </div>
        <div class="row">
            
            

            <script src="https://kit.fontawesome.com/812e771e48.js" crossorigin="anonymous"></script>
        </div>
    </div>
</div>