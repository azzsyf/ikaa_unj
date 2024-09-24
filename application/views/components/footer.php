<style>
    .parallax6{
        background: url("asset/Group-1.png") left bottom no-repeat, url("asset/Group.png") right top no-repeat, #006805;
        background-size: 200px, 200px, cover;
        height: auto;
        padding-bottom: 10px;
        #headfoot{
            display: flex; 
            flex-direction: row;
            padding-top: 4%; 
            padding-bottom: 4%; 
            padding-left: 6%;
        }
    }
    footer #footer{
        display: flex;
        color: #ffffff;
        padding-top: 5%;
        #text-footer{
            font-size: 16px;
        }
    }

    #logoFooter{
        padding-left: 45px;
        flex-grow: 1;
        img{
            width: 200px;
        }
    }

    footer p{
        color: #ffffff;
        text-align: center;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
    }

    /* @media screen and (max-width: 768px) {
        footer #footer{
            #text-footer{
                font-size: 12px;
            }
        }
        footer p{
            font-size: 10px;
        }

    }


    @media screen and (max-width: 614px) {
        footer #footer{
            #text-footer{
                font-size: 10px;
            }
            h3{
                font-size: 15px;
            }
        }
        footer p{
            font-size: 8px;
        }
    }

    @media screen and (max-width: 375px){
        footer #footer{
            h3{
                font-size: 14px;
            }
            #text-footer{
                font-size: 8px;
            }
        }
        footer p{
            font-size: 6px;
        }
    }

    @media screen and (max-width: 320px){
        footer #footer{
            h3{
                font-size: 10px;
            }
            #text-footer{
                font-size: 7px;
            }
        }
        footer p{
            font-size: 5px;
        }
        
    } */
</style> 
    <div class="parallax6">
        <footer>
            <div id="footer">
                <div class="card" style="background: transparent; border: 0px; width: 350px; padding: 10px;">
                    <div class="card-body">
                        <div id="logoFooter">
                            <img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" alt="">
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .1;">
                    <div class="card" style="background: transparent; border: 0px;">
                        <div class="card-body">
                            <div style="color: #fff; font-weight: bold; font-size: 17px; padding-bottom: 10px;">
                                MENU
                            </div>
                            <div>
                                <a href="<?= base_url() ?>home" style="color: #bcbcbc;">Beranda</a>
                            </div>
                            <div>
                                <a href="<?= base_url() ?>organisasi" style="color: #bcbcbc;">Organisasi</a>
                            </div>
                            <div>
                                <a href="<?= base_url() ?>alumni" style="color: #bcbcbc;">Data Alumni</a>
                            </div>
                            <div>
                                <a href="<?= base_url() ?>karir" style="color: #bcbcbc;">Karir</a>
                            </div>
                            <div>
                                <a href="<?= base_url() ?>acara" style="color: #bcbcbc;">Acara</a>
                            </div>
                            <div>
                                <a href="<?= base_url() ?>berita" style="color: #bcbcbc;">Berita</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .1;">
                    <div class="card" style="background: transparent; border: 0px; width: 500px;">
                        <div class="card-body">
                            <div style="color: #fff; font-weight: bold; font-size: 17px; padding-bottom: 10px;">
                                KONTAK KAMI
                            </div>
                            <!-- <div>
                                <span style="color: #fff;">Kantor Sekretariat</span>
                            </div> -->
                            <div>
                                <span style="color: #bcbcbc;"><i class="fas fa-building"></i> Universitas Negeri jakarta</span>
                            </div>
                            <div>
                                <span style="color: #bcbcbc;"><i class="fas fa-map-pin"></i> Jl. R.Mangun Muka Raya No.11, RT.11/RW.14, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</span>
                            </div>
                            <!-- <div>
                                <a href="https://wa.me/" style="color: #bcbcbc; text-decoration: none;"><i class="fab fa-whatsapp"> </i> +6285777888999</a>
                            </div>
                            <div>
                                <a href="https://www.tiktok.com" style="color: #bcbcbc; text-decoration: none;"><i class="fab fa-tiktok"> </i> ikaa.unj_official</a> 
                            </div> -->
                            <div style="color: #fff; font-weight: bold; font-size: 17px; padding-bottom: 10px; padding-top: 10px;">
                                IKUTI KAMI
                            </div>
                            <div>
                                <a href="https://www.instagram.com/ikaakuntansiunj" style="color: #bcbcbc; text-decoration: none;"><i class="fab fa-instagram"> </i> ikaakuntansiunj</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style=" width: 100px; padding-left: 20px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31731.893973526763!2d106.8404615586611!3d-6.199332802447752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4ed14403213%3A0x2412a91a0f6a01c8!2sUniversitas%20Negeri%20Jakarta!5e0!3m2!1sid!2sid!4v1726819396799!5m2!1sid!2sid" 
                        width="400" height="300" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
            <p>COPYRIGHT &copy; 2024 IKATAN ALUMNI AKUNTANSI UNIVERSITAS NEGERI JAKARTA</p>
        </footer>    
    </div> 
</body>
</html>
<script>
    function myFunction() {
        var x = document.getElementById("navbarSupportedContent");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
      $('#example').DataTable();
    });
</script>