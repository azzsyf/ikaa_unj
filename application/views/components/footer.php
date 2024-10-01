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
        color: #ffffff;
        padding-top: 5%;
        #text-footer{
            font-size: 16px;
        }
    }

    #logoFooter{
        /* padding-left: 45px; */
        /* padding-right: 45px; */
        img{
            width: 200px;
        }
    }

    footer p{
        color: #ffffff;
        text-align: center;
        font-size: 12px;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
    }

    footer{
        #menu{
            padding-left: 150px;
            #head-menu{
                font-size: 17px;
            }
        }
        #kontak-kami{
            #head-kontak{
                font-size: 17px;
            }
            #head-follow{
                font-size: 17px;
            }
            /* padding-right: 100px; */
            /* .card{
                width: 300px;
            } */
        }
        #iframe{
            position: relative;
            width: 100%;
            overflow: hidden;
            /* padding-top: 100%; */
            margin-right: 50px;
        }
        .iframe-responsive{
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
    }

    @media screen and ((max-width: 1069px) AND (min-width: 991px)){
        #logoFooter{
            padding-left: 45px;
            padding-right: 45px;
            /* flex-grow: 1; */
            img{
                width: 200px;
            }
        }
        footer{
            #menu{
                #head-menu{
                    font-size: 17px;
                }
                /* padding-left: 150px; */
                .card{
                    width: 130px;
                    /* font-size: 12px; */
                }
            }
            #kontak-kami{
                /* padding-right: 100px; */
                #head-kontak{
                    font-size: 17px;
                }
                #head-follow{
                    font-size: 17px;
                }
                .card{
                    width: 250px;
                    text-align: justify;
                    /* font-size: 12px; */
                }
            }
        }
    }

    @media screen and ((max-width: 990px) AND (min-width: 890px)){
        #logoFooter{
            padding-left: 5px;
            img{
                width: 150px;
            }
        }
        footer{
            #menu{
                #head-menu{
                    font-size: 17px;
                }
                padding-left: 150px;
                .card{
                    width: 120px;
                    font-size: 14px;
                }
            }
            #kontak-kami{
                #head-kontak{
                    font-size: 17px;
                }
                #head-follow{
                    font-size: 17px;
                }
                padding-right: 20px;
                .card{
                    width: 250px;
                    text-align: justify;
                    font-size: 14px;
                }
            }
            #iframe{
                margin-right: 80px;
            }
        }
    }

    @media screen and ((max-width: 889px) AND (min-width: 800px)){
        #logoFooter{
            padding-left: 5px;
            img{
                width: 150px;
            }
        }
        footer{
            #menu{
                #head-menu{
                    font-size: 15px;
                }
                padding-left: 150px;
                .card{
                    width: 120px;
                    font-size: 14px;
                }
            }
            #kontak-kami{
                #head-kontak{
                    font-size: 15px;
                }
                #head-follow{
                    font-size: 15px;
                }
                padding-right: 20px;
                .card{
                    width: 200px;
                    text-align: justify;
                    font-size: 14px;
                }
            }
        }
    }

    @media screen and ((max-width: 799px) AND (min-width: 750px)){
        #logoFooter{
            padding-left: 5px;
            img{
                width: 120px;
            }
        }
        footer{
            #menu{
                #head-menu{
                    font-size: 14px;
                }
                padding-left: 50px;
                .card{
                    width: 120px;
                    font-size: 13px;
                }
            }
            #kontak-kami{
                #head-kontak{
                    font-size: 14px;
                }
                #head-follow{
                    font-size: 14px;
                }
                padding-right: 20px;
                .card{
                    width: 200px;
                    text-align: justify;
                    font-size: 13px;
                }
            }
        }
    }

    @media screen and ((max-width: 749px) AND (min-width: 700px)){
        #logoFooter{
            padding-left: 5px;
            img{
                width: 120px;
            }
        }
        footer{
            #menu{
                #head-menu{
                    font-size: 13px;
                }
                padding-left: 50px;
                .card{
                    width: 120px;
                    font-size: 12px;
                }
            }
            #kontak-kami{
                #head-kontak{
                    font-size: 13px;
                }
                #head-follow{
                    font-size: 13px;
                }
                padding-right: 20px;
                .card{
                    width: 200px;
                    text-align: justify;
                    font-size: 12px;
                }
            }
        }
    }

    @media screen and ((max-width: 699px) AND (min-width: 614px)){
        #logoFooter{
            padding-left: 5px;
            img{
                width: 120px;
            }
        }
        footer{
            #menu{
                #head-menu{
                    font-size: 13px;
                }
                padding-left: 50px;
                .card{
                    width: 120px;
                    font-size: 12px;
                }
            }
            #kontak-kami{
                #head-kontak{
                    font-size: 13px;
                }
                #head-follow{
                    font-size: 13px;
                }
                padding-right: 20px;
                .card{
                    width: 200px;
                    text-align: justify;
                    font-size: 12px;
                }
            }
        }
    }

    @media screen and (max-width: 500px){
        footer{
            #menu{
                padding-left: 0px;
            }
        }

        #iframe{
            position: relative;
            width: 50%;
            overflow: hidden;
            /* padding-top: 100%; */
            margin-right: 0px;
        }
        .iframe-responsive{
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 50%;
            border: none;
        }
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
            <div id="footer" class="row">
                <div class="col-md-3" align="center">
                    <img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" alt="" style="width: 70%;">
                </div>
                <div class="col-md-2" style="padding: 20px;">
                    <div id="head-menu" style="color: #fff; font-weight: bold; padding-bottom: 5px;">
                        TENTANG KAMI
                    </div>
                    <div style="margin-top: 5px;">
                        <a href="<?= base_url() ?>organisasi" style="color: #bcbcbc;">Organisasi</a>
                    </div>
                    <div style="margin-top: 5px;">
                        <a href="<?= base_url() ?>karir" style="color: #bcbcbc;">Karir</a>
                    </div>
                    <div style="margin-top: 5px;">
                        <a href="<?= base_url() ?>acara" style="color: #bcbcbc;">Acara</a>
                    </div>
                    <div style="margin-top: 5px;">
                        <a href="<?= base_url() ?>berita" style="color: #bcbcbc;">Berita</a>
                    </div>
                </div>
                <div class="col-md-3" style="padding: 20px;">
                    <div id="head-kontak" style="color: #fff; font-weight: bold; padding-bottom: 5px;">
                        KONTAK KAMI
                    </div>
                    <!-- <div>
                        <span style="color: #fff;">Kantor Sekretariat</span>
                    </div> -->
                    <div style="padding-bottom: 5px;">
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
                    <div id="head-follow" style="color: #fff; font-weight: bold; padding-bottom: 5px; padding-top: 20px;">
                        IKUTI KAMI
                    </div>
                    <a href="https://www.instagram.com/ikaakuntansiunj" style="color: #bcbcbc; text-decoration: none;"><i class="fab fa-instagram"> </i> ikaakuntansiunj</a>
                </div>
                <div class="col-md-4" style="padding: 20px;" align="center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.524925130935!2d106.87646897440968!3d-6.1942536606837635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4ed14403213%3A0x2412a91a0f6a01c8!2sUniversitas%20Negeri%20Jakarta!5e0!3m2!1sid!2sid!4v1727749569048!5m2!1sid!2sid" height="250" style="border:0; width: 80%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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