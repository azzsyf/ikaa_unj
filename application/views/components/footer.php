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
        padding-left: 5%;
        flex-grow: 2;
        img{
            width: 100px;
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

    @media screen and (min-width: 501px) AND (max-width: 600px){
        footer #footer{
            display: flex;
            color: #ffffff;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 5%;
            #text-footer{
                font-size: 16px;
            }
        }

        #logoFooter{
            padding-left: 0%; 
            flex-grow: 2;
            img{
                width: 200px;
            }
        }

        #text-footer{
            font-size: 15px;
        }
    }

    @media screen and (max-width: 768px) {
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

    @media screen and (max-width: 425px){
        nav{
            width: 425px;
        }
        
        .parallax1 {
            background-color: #006805;
            height: 100%;
            h1{
                color: #ffffff;
                margin-bottom: auto;
                font-weight: bolder ;
                font-size: 15px;
                padding-top: 40px;
            }
            h6{
                color: #ffffff;
                margin-bottom: auto;
                font-size: 10px;
            }
        }
        
        .parallax2{
            background: url("asset/Snapinsta4.png") left bottom no-repeat, url("asset/Snapinsta3.png") right bottom no-repeat, url("asset/BG.png") no-repeat;
            background-size: 130px, 160px, cover;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            .card{
                display: flex;
                border-radius: 15px;
                background: linear-gradient(0deg, rgba(255,255,255,0.48783263305322133) 0%, rgba(255,255,255,0.49) 100%);
                text-align: center;
                align-self: center;
                box-shadow: 0px 1px 2px #000000;
                width: 200px;
                height: 135px;
                transition: 0.5s;
                transition-timing-function: ease-in-out;
                &:hover{
                    width: 230px !important;
                    height: 135px;
                    background: linear-gradient(0deg, rgba(14,227,47,0.67) 0%, rgba(14,227,47,0.67) 100%);
                    -ms-transform: scale(1.1);
                    transform: scale(1.1);
                }
                h1{
                    font-size: 40px;
                }
                h5{
                    font-size: 13px;
                }
                p{
                    font-size: 10px;
                }
            }
        }

        .parallax3 {
            background: rgb(86,198,95);
            background: linear-gradient(0deg, rgba(86,198,95,1) 0%, rgba(255,255,255,1) 50%, rgba(86,198,95,1) 100%);
            height: 230px;
            img{
                width: 100px;
            }
            h2{
                font-size: 15px;
            }
        }

        .parallax4{
            .row{
                padding-top: 5%; 
                padding-bottom: 2%; 
                padding-left: 6%; 
                padding-right: 6%;
                h2{
                    padding-top: 8%; 
                    font-weight: bolder;
                    font-size: 15px;
                }
                a{
                    font-size: 12px;
                    align-self: center;
                }
            }
            .flex-container {
                overflow-x: scroll; 
                display: flex;
                flex-wrap: wrap;
                margin: 10px;
                height: 500px;
                -webkit-scrollbar {display: none;}
                row-gap: 2em;
                .card{
                    width: 400px;
                    height: auto;
                    transition: 1s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 400px !important;
                        height: auto;
                        -ms-transform: scale(1.1);
                        transform: scale(1.1); 
                    }
                }
            }
            .flex-container::-webkit-scrollbar {display: none;}
            .flex-containerBerita {
                overflow-x: scroll; 
                display: flex;
                flex-wrap: wrap;
                height: 390px;
                -webkit-scrollbar {display: none;}
                row-gap: 2em;
                .card{
                    width: 400px;
                    height: auto;
                    transition: 1s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 400px !important;
                        height: auto;
                        -ms-transform: scale(1.1);
                        transform: scale(1.1); 
                    }
                }
            }
            .flex-containerBerita::-webkit-scrollbar {display: none;}
            }

        .parallax5{
            display: flex;
            flex-direction: column;
            background: url("asset/light-trails-buildings 1.png") center repeat;
            background-size: 180% 100%;
            height: 800px;
            align-items: center;
            justify-content: center;
        }
        .parallax5 #puzzle #div-img{
            width: 400px;
            height: 400px;
            margin: 10px;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("asset/Subtract.png");
            transition: 1s;
            &:hover{
                width: 400px;
                height: 400px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract2.png");
            }
        }
        .parallax5 .div-card{
            flex-direction: column;
            width: 400px; 
            height: 250px;
            margin: 10px;
            margin-top: 150px;
            background: rgb(255,255,255);
            background: linear-gradient(22deg, rgba(255,255,255,0.4542191876750701) 0%, rgba(255,255,255,0.67) 100%);
            border-radius: 15px;
            transition: 1s;
            &:hover{
                background: rgb(255,255,255);
                background: linear-gradient(22deg, rgba(255,255,255,0.7399334733893557) 0%, rgba(255,255,255,0.67) 100%);
                width: 400px; 
                height: 250px;
            }
        }
        .parallax5 #puzzle{
            font-size:12px;
            width: 440px;
            height: 290px;
            border-radius:15px;
            .atas{
                width:8em;
                height:8em;
                position:absolute;
                top:.7em;
                left:27em;
                -webkit-border-radius:.5em;
                -moz-border-radius:.5em;
                border-radius:15px;
                background-color:#fff;
                transition: 1s;
            }
            #business{
                width: 584px;
                padding-right: 124px;
                transition: 1s;
                margin-left: -26px;
                margin-top: -29px;
            }
            #lamp{
                width: 5.5em;
                margin-top: 14px;
                transition: 1s;
                margin-left: 14.5px;
            }
            &:hover{
                .atas{
                    transform: translateY(-30px) translateX(-5px);
                    width:8em;
                    height:8em;
                    position:absolute;
                    top:.5em;
                    left:27.5em;
                    -webkit-border-radius:4em;
                    -moz-border-radius:4em;
                    border-radius:4em;
                    background-color:#fff;
                }
                #business{
                    transform: translateX(-30px) translateY(-20px);
                    width: 606px;
                }
            }
        }
        .parallax5 #btn2{
            background-color: transparent; 
            border-width: 2px;
            border-color: #079c38;
            color: #079c38; 
            padding: 1px 10px; 
            border-radius: 8px;
            &:hover {
                background: rgb(7,156,56);
                background: linear-gradient(0deg, rgba(7,156,56,0.23) 0%, rgba(7,156,56,0.227328431372549) 100%);
                color: #079c38;
                box-shadow: 0 12px 14px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
            }
        }
        .parallax5 #btn1 {
            color: #fff;
            border-width: 2px;
            border-color: #079c38;
            padding: 1px 10px; 
            border-radius: 8px;
            background: linear-gradient(90deg, rgba(7,156,56,1) 0%, rgba(141,242,154,1));
            background-size: 300% auto;
            transition: .5s;
            &:hover {
                background-position: 50% 0;
            }
        }

        .parallax6{
            button{
                font-size: 10px;
            }
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
        
    }
</style>
        
        <footer>
            <div id="footer">
                <div id="logoFooter">
                    <img src="asset/Logo IKA Akuntansi UNJ bulet.png" alt="" style="">
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    Beranda <br> Organisani <br> Karir <br> Event <br> Berita <br> Kontak
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    Beranda <br> Organisani <br> Karir <br> Event <br> Berita <br> Kontak
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    Beranda <br> Organisani <br> Karir <br> Event <br> Berita <br> Kontak
                </div>
                <div id="text-footer" style="flex-grow: .5;">
                    Beranda <br> Organisani <br> Karir <br> Event <br> Berita <br> Kontak
                </div>
                <div id="text-footer" style="flex-grow: .8;">
                    haloalumni@ikaaunj.id <br>
                    <i class="fab fa-tiktok"></i> <i class="fab fa-instagram"></i> <i class="fab fa-whatsapp"></i>
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