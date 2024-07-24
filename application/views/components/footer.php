<style>
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
    .horizontal_line {
        display: flex;
        justify-content: center;
        align-items: center;
        .card{
            display: flex;
            align-self: center;
            border-bottom: 1px solid white;
            width: 90.5%;
        }
    }

    @media screen and (min-width: 375px) AND (max-width: 500px){
        footer #footer{
            display: flex;
            color: #ffffff;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 5%;
            #text-footer{
                font-size: 13px;
            }
        }

        footer p{
            font-size: 10px;
        }

        #logoFooter{
            padding-left: 0%; 
            flex-grow: 2;
            img{
                width: 200px;
            }
        }

        #text-footer{
            font-size: 12px;
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
        
        <footer>
            <div id="footer">
                <div class="card" style="background: transparent; border: 0px; width: 350px;">
                    <div class="card-body">
                        <div id="logoFooter">
                            <img src="asset/Logo IKA Akuntansi UNJ bulet.png" alt="">
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    <div class="card" style="background: transparent; border: 0px;">
                        <div class="card-body">
                            <div style="color: #fff">
                                Tentang Kami
                            </div>
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    <div class="card" style="background: transparent; border: 0px;">
                        <div class="card-body">
                            <div style="color: #fff">
                                Tautan
                            </div>
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    <div class="card" style="background: transparent; border: 0px;">
                        <div class="card-body">
                            <div style="color: #fff">
                                Beranda
                            </div>
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    <div class="card" style="background: transparent; border: 0px;">
                        <div class="card-body">
                            <div style="color: #fff">
                                Tentang Kami
                            </div>
                        </div>
                    </div>
                </div>
                <div id="text-footer" style="flex-grow: .8;">
                    <div class="card" style="background: transparent; border: 0px;">
                        <div class="card-body">
                            <div>
                                <span style="color: #fff;">Kantor Sekretariat</span>
                            </div>
                            <div>
                                <span style="color: #fff;">Universitas Negeri jakarta</span>
                            </div>
                            <div class="mail">
                                <a href="https://haloalumni@ikaaunj.id" style="color: #bcbcbc; hover: color: #fff;"><i class="fas fa-envelope"> haloalumni@ikaaunj.id</i></a>
                            </div>
                            <div>
                                <a href="https://www.google.co.id/maps/" style="color: #bcbcbc;"><i class="fas fa-map-marker-alt"> Alamat</i></a>
                            </div>
                            <div>
                                <a href="https://wa.me/" style="color: #bcbcbc;"><i class="fab fa-whatsapp"> +6285777888999</i></a>
                            </div>
                            <div>
                                <a href="https://www.tiktok.com" style="color: #bcbcbc;"><i class="fab fa-tiktok"> ikaa.unj_official</i></a> 
                            </div>
                            <div>
                                <a href="https://www.instagram.com" style="color: #bcbcbc;"><i class="fab fa-instagram"> ikaa.unj_official</i></a>
                            </div>
                        </div>
                    </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>