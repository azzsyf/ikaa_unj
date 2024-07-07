
    <style>
        body{
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }

        .parallax1 {
            padding-top: 200px;
            background: url("<?= base_url() ?>asset/logo-unj.png") left bottom no-repeat, url("asset/Logo IKA Akuntansi UNJ bulet.png") right bottom no-repeat, #006805 repeat;
            background-size: 240px, 290px, 1000px;
            /* height: 750px; */
            display: flex;
            align-items: center;
            justify-content: center;
            h1{
                color: #ffffff;
                margin-bottom: auto;
                font-weight: bolder ;
            }
            h6{
                color: #ffffff;
                margin-bottom: auto;
                font-size: 20px;
            }
        }
        .parallax2 {
            background: url("asset/Snapinsta4.png") left bottom no-repeat, url("asset/Snapinsta3.png") right bottom no-repeat, url("asset/BG.png") no-repeat;
            background-size: 290px, 340px, cover;
            height: 650px;
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .parallax2 .card{
            display: flex;
            border-radius: 15px;
            background: linear-gradient(0deg, rgba(255,255,255,0.48783263305322133) 0%, rgba(255,255,255,0.49) 100%);
            text-align: center;
            align-self: center;
            box-shadow: 0px 1px 2px #000000;
            width: 400px;
            height: 200px;
            transition: 0.5s;
        }
        .parallax2 .card h1{
            font-size: 65px;
        }
        .parallax2 #zoom-effect {
            transition-timing-function: ease-in-out;
        }
        .parallax2 .card:hover {
            width: 420px !important;
            height: 200px;
            background: linear-gradient(0deg, rgba(14,227,47,0.67) 0%, rgba(14,227,47,0.67) 100%);
            -ms-transform: scale(1.1);
            transform: scale(1.1); 
        }
        
        .parallax3 {
            background: rgb(86,198,95);
            background: linear-gradient(0deg, rgba(86,198,95,1) 0%, rgba(255,255,255,1) 50%, rgba(86,198,95,1) 100%);
            height: 460px;
            img{
                width: 200px;
            }
        }

        .parallax4 {
            background: url("asset/Group 45.png") center repeat;
            background-size: 100% 110%;

            .row{
                padding-top: 5%; 
                padding-bottom: 2%; 
                padding-left: 6%; 
                padding-right: 6%;
                h2{
                    font-weight: bolder;
                }
            }
            .flex-container {
                overflow-x: scroll; 
                display: flex;
                flex-direction: row;
                -webkit-scrollbar {display: none;}
                column-gap: 2em;
                .card{
                    width: 280px;
                    height: 390px;
                    transition: 1s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 280px !important;
                        height: 390px;
                        -ms-transform: scale(1.1);
                        transform: scale(1.1); 
                    }
                }
            }
            .flex-container::-webkit-scrollbar {display: none;}

            .flex-containerBerita {
                overflow-x: scroll; 
                display: flex;
                -webkit-scrollbar {display: none;}
                column-gap: 2em;
                .card{
                    width: 280px;
                    height: 310px;
                    transition: 1s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 280px !important;
                        height: 310px;
                        -ms-transform: scale(1.1);
                        transform: scale(1.1); 
                    }
                }
            }
            .flex-containerBerita::-webkit-scrollbar {display: none;}
        }

        .parallax5{
            display: flex;
            flex-direction: row;
            background: url("asset/light-trails-buildings 1.png") center repeat;
            background-size: 100% 100%;
            height: 500px;
            align-items: center;
            justify-content: center;
        }
        .parallax5 #puzzle #div-img{
            width: 289px;
            height: 289px;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("asset/Subtract.png");
            transition: 1s;
            &:hover{
                width: 289px;
                height: 289px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract2.png");
            }
        }
        .parallax5 .div-card{
            display: flex;
            width: 600px; 
            height: 289px;
            margin: 40px;
            background: rgb(255,255,255);
            background: linear-gradient(22deg, rgba(255,255,255,0.4542191876750701) 0%, rgba(255,255,255,0.67) 100%);
            border-radius: 15px;
            transition: 1s;
            &:hover{
                background: rgb(255,255,255);
                background: linear-gradient(22deg, rgba(255,255,255,0.7399334733893557) 0%, rgba(255,255,255,0.67) 100%);
                width: 600px; 
                height: 289px;
            }
            .card-body{
                padding-left: 5%;
                padding-top: 5%;
                padding-right: 5%;
            }
            .row{
                padding-top: 8%; 
            }
        }
        .parallax5 #puzzle{
            font-size:12px;
            width: 300px;
            height: 290px;
            position:relative;
            border-radius:15px;
            .atas{
                width:5.5em;
                height:5.5em;
                position:absolute;
                top:0em;
                left:18.5em;
                -webkit-border-radius:.5em;
                -moz-border-radius:.5em;
                border-radius:15px;
                background-color:#fff;
                transition: 1s;
            }
            #business{
                width: 465.5px;
                padding-right: 124px;
                transition: 1s;
                margin-left: -26px;
                margin-top: -29px;
            }
            #lamp{
                width: 4em;
                margin-top: 8px;
                transition: 1s;
                margin-left: 9px;
            }
            &:hover{
                .atas{
                    transform: translateY(-30px) translateX(-5px);
                    width:5.5em;
                    height:5.5em;
                    position:absolute;
                    top:0em;
                    left:19em;
                    -webkit-border-radius:4em;
                    -moz-border-radius:4em;
                    border-radius:4em;
                    background-color:#fff;
                }
                #business{
                    transform: translateX(-30px) translateY(-20px);
                    width: 487px;
                }
            }
        }
        .parallax5 #btn2{
            background-color: transparent; 
            border-width: 2px;
            border-color: #079c38;
            color: #079c38; 
            padding: 4px 20px; 
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
            padding: 4px 20px; 
            border-radius: 8px;
            background: linear-gradient(90deg, rgba(7,156,56,1) 0%, rgba(141,242,154,1));
            background-size: 300% auto;
            transition: .5s;
            &:hover {
                background-position: 50% 0;
            }
        }

        .parallax6{
            background: url("asset/Group-1.png") left bottom no-repeat, url("asset/Group.png") right top no-repeat, #006805;
            background-size: 200px, 200px, cover;
            height: auto;
            #headfoot{
                display: flex; 
                flex-direction: row;
                padding-top: 4%; 
                padding-bottom: 4%; 
                padding-left: 6%;
            }
        }

        @media screen and (min-width: 768px) AND (max-width: 990px) {
            nav{
                width: 100%;

            }

            .parallax2{
                background: url("asset/Snapinsta4.png") left bottom no-repeat, url("asset/Snapinsta3.png") right bottom no-repeat, url("asset/BG.png") no-repeat;
                background-size: 220px, 260px, cover;
                height: 550px;
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
                    width: 350px;
                    height: 200px;
                    transition: 0.5s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 370px !important;
                        height: 200px;
                        background: linear-gradient(0deg, rgba(14,227,47,0.67) 0%, rgba(14,227,47,0.67) 100%);
                        -ms-transform: scale(1.1);
                        transform: scale(1.1);
                    }
                    h1{
                        font-size: 65px;
                    }
                }
            }
            
            .parallax4{
                .flex-container {
                    overflow-x: scroll; 
                    display: flex;
                    /* flex-direction: column; */
                    -webkit-scrollbar {display: none;}
                    column-gap: 2em;
                    .card{
                        width: 300px;
                        height: 400px;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
                            height: 415px;
                            -ms-transform: scale(1.1);
                            transform: scale(1.1); 
                        }
                    }
                }
                .flex-container::-webkit-scrollbar {display: none;}
                
            }

            .parallax5{
                display: flex;
                background: url("asset/light-trails-buildings 1.png") center repeat;
                background-size: 100% 100%;
                height: 500px;
                align-items: center;
                justify-content: center;
            }
            .parallax5 #puzzle #div-img{
                width: 250px;
                height: 250px;
                margin: 10px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 250px;
                    height: 250px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("asset/Subtract2.png");
                }
            }
            .parallax5 .div-card{
                display: flex;
                width: 400px; 
                height: 250px;
                margin: 10px;
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
                padding-left: 10px;
                font-size:12px;
                width: 300px;
                height: 290px;
                position:relative;
                border-radius:15px;
                .atas{
                    width:5em;
                    height:5em;
                    position:absolute;
                    top:.7em;
                    left:17.7em;
                    -webkit-border-radius:.5em;
                    -moz-border-radius:.5em;
                    border-radius:15px;
                    background-color:#fff;
                    transition: 1s;
                }
                #business{
                    width: 423px;
                    padding-right: 124px;
                    transition: 1s;
                    margin-left: -26px;
                    margin-top: -29px;
                }
                #lamp{
                    width: 3em;
                    margin-top: 11px;
                    transition: 1s;
                    margin-left: 12px;
                }
                &:hover{
                    .atas{
                        transform: translateY(-30px) translateX(-5px);
                        width:5em;
                        height:5em;
                        position:absolute;
                        top:.5em;
                        left:18em;
                        -webkit-border-radius:4em;
                        -moz-border-radius:4em;
                        border-radius:4em;
                        background-color:#fff;
                    }
                    #business{
                        transform: translateX(-30px) translateY(-20px);
                        width: 445px;
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
                #btn-footer{
                    padding-top: 0%; 
                    padding-left: 6%;
                    padding-bottom: 2%;
                }
                #headfoot{
                    display: flex; 
                    flex-direction: column;
                    padding-top: 4%; 
                    padding-bottom: 4%; 
                    padding-left: 6%;
                }
            }

            footer #footer{
                #text-footer{
                    font-size: 12px;
                }
            }
            footer p{
                font-size: 10px;
            }

        }

        @media screen and (min-width: 615px) AND (max-width: 767px) {
            nav{
                width: 100%;
                button{
                    margin-right: 20px;
                }
            }
            h2{
                padding-bottom: 20px;
            }
            .parallax4{
                .flex-container {
                    overflow-y: scroll; 
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    height: 600px;
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
                    justify-content: center;
                    height: 450px;
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
                background: url("asset/light-trails-buildings 1.png") center repeat;
                background-size: 100% 100%;
                height: 500px;
                align-items: center;
                justify-content: center;
            }
            .parallax5 #puzzle #div-img{
                width: 250px;
                height: 250px;
                margin: 10px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 250px;
                    height: 250px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("asset/Subtract2.png");
                }
            }
            .parallax5 .div-card{
                display: flex;
                width: 400px; 
                height: 250px;
                margin: 10px;
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
                padding-left: 10px;
                font-size:12px;
                width: 300px;
                height: 290px;
                position:relative;
                border-radius:15px;
                .atas{
                    width:5em;
                    height:5em;
                    position:absolute;
                    top:.7em;
                    left:17.7em;
                    -webkit-border-radius:.5em;
                    -moz-border-radius:.5em;
                    border-radius:15px;
                    background-color:#fff;
                    transition: 1s;
                }
                #business{
                    width: 423px;
                    padding-right: 124px;
                    transition: 1s;
                    margin-left: -26px;
                    margin-top: -29px;
                }
                #lamp{
                    width: 3em;
                    margin-top: 11px;
                    transition: 1s;
                    margin-left: 12px;
                }
                &:hover{
                    .atas{
                        transform: translateY(-30px) translateX(-5px);
                        width:5em;
                        height:5em;
                        position:absolute;
                        top:.5em;
                        left:18em;
                        -webkit-border-radius:4em;
                        -moz-border-radius:4em;
                        border-radius:4em;
                        background-color:#fff;
                    }
                    #business{
                        transform: translateX(-30px) translateY(-20px);
                        width: 445px;
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
        }

        @media screen and (min-width: 426px) AND (max-width: 614px) {
            nav{
                width: 100%;
                button{
                    margin-right: 20px;
                }
            }
            .parallax1 {
                background-color: #006805;
                height: 100%;
                h1{
                    color: #ffffff;
                    font-weight: bolder ;
                    font-size: 20px;
                    margin-top: 40px
                }
                h6{
                    color: #ffffff;
                    margin-bottom: auto;
                    font-size: 15px;
                }
                
            }
            
            .parallax2{
                background: url("asset/Snapinsta4.png") left bottom no-repeat, url("asset/Snapinsta3.png") right bottom no-repeat, url("asset/BG.png") no-repeat;
                background-size: 150px, 180px, cover;
                height: 400px;
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
                    width: 250px;
                    height: 150px;
                    transition: 0.5s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 280px !important;
                        height: 150px;
                        background: linear-gradient(0deg, rgba(14,227,47,0.67) 0%, rgba(14,227,47,0.67) 100%);
                        -ms-transform: scale(1.1);
                        transform: scale(1.1);
                    }
                    h1{
                        font-size: 45px;
                    }
                    h5{
                        font-size: 15px;
                    }
                    p{
                        font-size: 13px;
                    }
                }
            }

            .parallax3 {
                background: rgb(86,198,95);
                background: linear-gradient(0deg, rgba(86,198,95,1) 0%, rgba(255,255,255,1) 50%, rgba(86,198,95,1) 100%);
                height: 300px;
                img{
                    width: 150px;
                }
            }
            
            .parallax4{
                .flex-container {
                    overflow-y: scroll; 
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    height: 600px;
                    -webkit-scrollbar {display: none;}
                    row-gap: 2em;
                    .card{
                        width: 300px;
                        height: auto;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
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
                    justify-content: center;
                    height: 450px;
                    -webkit-scrollbar {display: none;}
                    row-gap: 2em;
                    .card{
                        width: 300px;
                        height: auto;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
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
                width: 300px;
                height: 300px;
                margin: 10px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px;
                    height: 300px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("asset/Subtract2.png");
                }
            }
            .parallax5 .div-card{
                flex-direction: column;
                width: 300px; 
                height: auto;
                margin: 10px;
                margin-top: 50px;
                background: rgb(255,255,255);
                background: linear-gradient(22deg, rgba(255,255,255,0.4542191876750701) 0%, rgba(255,255,255,0.67) 100%);
                border-radius: 15px;
                transition: 1s;
                &:hover{
                    background: rgb(255,255,255);
                    background: linear-gradient(22deg, rgba(255,255,255,0.7399334733893557) 0%, rgba(255,255,255,0.67) 100%);
                    width: 300px; 
                    height: auto;
                }
            }
            .parallax5 #puzzle{
                display: flex;
                justify-content: center;
                font-size:12px;
                width: 440px;
                height: 290px;
                border-radius:15px;
                .atas{
                    width:6em;
                    height:6em;
                    position:absolute;
                    top:.7em;
                    left:24.8em;
                    -webkit-border-radius:.5em;
                    -moz-border-radius:.5em;
                    border-radius:15px;
                    background-color:#fff;
                    transition: 1s;
                }
                #business{
                    width: 477px;
                    padding-right: 124px;
                    transition: 1s;
                    margin-left: -26px;
                    margin-top: -29px;
                }
                #lamp{
                    width: 4em;
                    margin-top: 11px;
                    transition: 1s;
                    margin-left: 12.5px;
                }
                &:hover{
                    .atas{
                        transform: translateY(-30px) translateX(-5px);
                        width:6em;
                        height:6em;
                        position:absolute;
                        top:.5em;
                        left:25em;
                        -webkit-border-radius:4em;
                        -moz-border-radius:4em;
                        border-radius:4em;
                        background-color:#fff;
                    }
                    #business{
                        transform: translateX(-30px) translateY(-20px);
                        width: 498px;
                    }
                }
            }
            .parallax5 #btn2{
                background-color: transparent; 
                border-width: 2px;
                border-color: #079c38;
                color: #079c38; 
                padding: 8px 8px; 
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
                padding: 8px 8px; 
                border-radius: 8px;
                background: linear-gradient(90deg, rgba(7,156,56,1) 0%, rgba(141,242,154,1));
                background-size: 300% auto;
                transition: .5s;
                &:hover {
                    background-position: 50% 0;
                }
            }

            .parallax6{
                #btn-footer{
                    padding-top: 0%; 
                    padding-left: 6%;
                    padding-bottom: 2%;
                }
                h3{
                    font-size: 20px;
                }
            }

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

        @media screen and (min-width: 376px) AND (max-width: 425px) {
            nav{
                width: 100%;
                button{
                    margin-right: 20px;
                }
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
                .flex-container {
                    overflow-y: scroll; 
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    height: 600px;
                    -webkit-scrollbar {display: none;}
                    row-gap: 2em;
                    .card{
                        width: 300px !important;
                        height: auto;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
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
                    justify-content: center;
                    height: 450px;
                    -webkit-scrollbar {display: none;}
                    row-gap: 2em;
                    .card{
                        width: 300px !important;
                        height: auto;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
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
                width: 300px !important;
                height: 300px !important;
                margin: 10px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px !important;
                    height: 300px !important;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("asset/Subtract2.png");
                }
            }
            .parallax5 .div-card{
                flex-direction: column;
                width: 300px !important; 
                height: auto !important;
                margin: 10px !important;
                margin-top: 50px !important;
                background: rgb(255,255,255);
                background: linear-gradient(22deg, rgba(255,255,255,0.4542191876750701) 0%, rgba(255,255,255,0.67) 100%);
                border-radius: 15px;
                transition: 1s;
                &:hover{
                    background: rgb(255,255,255);
                    background: linear-gradient(22deg, rgba(255,255,255,0.7399334733893557) 0%, rgba(255,255,255,0.67) 100%);
                    width: 300px !important; 
                    height: auto;
                }
            }
            .parallax5 #puzzle{
                display: flex;
                justify-content: center;
                font-size:12px;
                width: 440px;
                height: 290px;
                border-radius:15px;
                .atas{
                    width:6em !important;
                    height:6em !important;
                    position:absolute;
                    top:.7em !important;
                    left:24.8em !important;
                    -webkit-border-radius:.5em;
                    -moz-border-radius:.5em;
                    border-radius:15px;
                    background-color:#fff;
                    transition: 1s;
                }
                #business{
                    width: 477px !important;
                    padding-right: 124px;
                    transition: 1s;
                    margin-left: -26px;
                    margin-top: -29px;
                }
                #lamp{
                    width: 4em !important;
                    margin-top: 11px !important;
                    transition: 1s;
                    margin-left: 12.5px !important;
                }
                &:hover{
                    .atas{
                        transform: translateY(-30px) translateX(-5px);
                        width:6em;
                        height:6em;
                        position:absolute;
                        top:.5em;
                        left:25em;
                        -webkit-border-radius:4em;
                        -moz-border-radius:4em;
                        border-radius:4em;
                        background-color:#fff;
                    }
                    #business{
                        transform: translateX(-30px) translateY(-20px);
                        width: 498px !important;
                    }
                }
            }
            .parallax5 #btn2{
                background-color: transparent; 
                border-width: 2px;
                border-color: #079c38;
                color: #079c38; 
                padding: 8px 8px !important; 
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
                padding: 8px 8px !important; 
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
                h3{
                    font-size: 20px;
                }
            }

            footer #footer{
                display: flex;
                flex-direction: column;
                h3{
                    font-size: 14px;
                }
                #text-footer{
                    margin-left: 20px;
                    font-size: 10px !important;
                }
            }

        }

        @media screen and (min-width: 321px) AND (max-width: 375px) {
            nav{
                width: 100%;
                button{
                    margin-right: 20px;
                }
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
                background-size: 100px, 130px, cover;
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
                .flex-container {
                    overflow-y: scroll; 
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    height: 600px;
                    -webkit-scrollbar {display: none;}
                    row-gap: 2em;
                    .card{
                        width: 300px !important;
                        height: auto;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
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
                    justify-content: center;
                    height: 450px;
                    -webkit-scrollbar {display: none;}
                    row-gap: 2em;
                    .card{
                        width: 300px !important;
                        height: auto;
                        transition: 1s;
                        transition-timing-function: ease-in-out;
                        &:hover{
                            width: 300px !important;
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
                width: 300px !important;
                height: 300px !important;
                margin: 10px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px !important;
                    height: 300px !important;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("asset/Subtract2.png");
                }
            }
            .parallax5 .div-card{
                flex-direction: column;
                width: 300px !important; 
                height: auto !important;
                margin: 10px !important;
                margin-top: 50px !important;
                background: rgb(255,255,255);
                background: linear-gradient(22deg, rgba(255,255,255,0.4542191876750701) 0%, rgba(255,255,255,0.67) 100%);
                border-radius: 15px;
                transition: 1s;
                &:hover{
                    background: rgb(255,255,255);
                    background: linear-gradient(22deg, rgba(255,255,255,0.7399334733893557) 0%, rgba(255,255,255,0.67) 100%);
                    width: 300px !important; 
                    height: auto;
                }
            }
            .parallax5 #puzzle{
                display: flex;
                justify-content: center;
                font-size:12px;
                width: 440px;
                height: 290px;
                border-radius:15px;
                .atas{
                    width:6em !important;
                    height:6em !important;
                    position:absolute;
                    top:.7em !important;
                    left:24.8em !important;
                    -webkit-border-radius:.5em;
                    -moz-border-radius:.5em;
                    border-radius:15px;
                    background-color:#fff;
                    transition: 1s;
                }
                #business{
                    width: 477px !important;
                    padding-right: 124px;
                    transition: 1s;
                    margin-left: -26px;
                    margin-top: -29px;
                }
                #lamp{
                    width: 4em !important;
                    margin-top: 11px !important;
                    transition: 1s;
                    margin-left: 12.5px !important;
                }
                &:hover{
                    .atas{
                        transform: translateY(-30px) translateX(-5px);
                        width:6em;
                        height:6em;
                        position:absolute;
                        top:.5em;
                        left:25em;
                        -webkit-border-radius:4em;
                        -moz-border-radius:4em;
                        border-radius:4em;
                        background-color:#fff;
                    }
                    #business{
                        transform: translateX(-30px) translateY(-20px);
                        width: 498px !important;
                    }
                }
            }
            .parallax5 #btn2{
                background-color: transparent; 
                border-width: 2px;
                border-color: #079c38;
                color: #079c38; 
                padding: 8px 8px !important; 
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
                padding: 8px 8px !important; 
                border-radius: 8px;
                background: linear-gradient(90deg, rgba(7,156,56,1) 0%, rgba(141,242,154,1));
                background-size: 300% auto;
                transition: .5s;
                &:hover {
                    background-position: 50% 0;
                }
            }

            .parallax6{
                h3{
                    font-size: 18px;
                }
                button{
                    font-size: 10px;
                }
            }

            footer #footer{
                display: flex;
                flex-direction: column;
                h3{
                    font-size: 14px;
                }
                #text-footer{
                    margin-left: 20px;
                    font-size: 10px !important;
                }
            }
            footer p{
                font-size: 6px;
            }
        }

        @media screen and (max-width: 320px){
            nav{
                width: 100%;
            }
            .parallax2{
                background: url("asset/Snapinsta4.png") left bottom no-repeat, url("asset/Snapinsta3.png") right bottom no-repeat, url("asset/BG.png") no-repeat;
                background-size: 100px, 120px, cover;
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
                    width: 170px;
                    height: 110px;
                    transition: 0.5s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 180px !important;
                        height: 110px;
                        background: linear-gradient(0deg, rgba(14,227,47,0.67) 0%, rgba(14,227,47,0.67) 100%);
                        -ms-transform: scale(1.1);
                        transform: scale(1.1);
                    }
                    h1{
                        font-size: 30px;
                    }
                    h5{
                        font-size: 10px;
                    }
                    p{
                        font-size: 8px;
                    }
                }
            }

            .parallax3 {
                background: rgb(86,198,95);
                background: linear-gradient(0deg, rgba(86,198,95,1) 0%, rgba(255,255,255,1) 50%, rgba(86,198,95,1) 100%);
                height: 180px;
                h2{
                    font-size: 15px;
                }
                img{
                    width: 70px;
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
                    -webkit-scrollbar {display: none;}
                    column-gap: 2em;
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
                    -webkit-scrollbar {display: none;}
                    column-gap: 2em;
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
                background: url("asset/light-trails-buildings 1.png") center no-repeat;
                background-size: 200% 100%;
                height: 600px;
            }
            .parallax5 #puzzle #div-img{
                width: 300px;
                height: 300px;
                margin-top: 20px;
                margin-left: 60px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px;
                    height: 300px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("asset/Subtract2.png");
                }
            }
            .parallax5 .div-card{
                flex-direction: column;
                width: 300px; 
                height: 180px;
                margin: 10px;
                margin-top: 50px;
                background: rgb(255,255,255);
                background: linear-gradient(22deg, rgba(255,255,255,0.4542191876750701) 0%, rgba(255,255,255,0.67) 100%);
                border-radius: 15px;
                transition: 1s;
                &:hover{
                    background: rgb(255,255,255);
                    background: linear-gradient(22deg, rgba(255,255,255,0.7399334733893557) 0%, rgba(255,255,255,0.67) 100%);
                    width: 300px; 
                    height: 180px;
                }
                h5{
                    font-size: 15px;
                }
                p{
                    font-size: 10px;
                }
                button{
                    font-size: 10px;
                }
            }
            .parallax5 #puzzle{
                font-size:12px;
                width: 440px;
                height: 290px;
                border-radius:15px;
                .atas{
                    width:6em;
                    height:6em;
                    position:absolute;
                    top:1.8em;
                    left:25em;
                    -webkit-border-radius:.5em;
                    -moz-border-radius:.5em;
                    border-radius:15px;
                    background-color:#fff;
                    transition: 1s;
                }
                #business{
                    width: 477px;
                    padding-right: 124px;
                    transition: 1s;
                    margin-left: -26px;
                    margin-top: -29px;
                }
                #lamp{
                    width: 4.5em;
                    margin-top: 9px;
                    transition: 1s;
                    margin-left: 8.5px;
                }
                &:hover{
                    .atas{
                        transform: translateY(-30px) translateX(-5px);
                        width:6em;
                        height:6em;
                        position:absolute;
                        top:.5em;
                        left:25em;
                        -webkit-border-radius:4em;
                        -moz-border-radius:4em;
                        border-radius:4em;
                        background-color:#fff;
                    }
                    #business{
                        transform: translateX(-30px) translateY(-20px);
                        width: 499px;
                    }
                }
            }
            .parallax5 #btn2{
                background-color: transparent; 
                border-width: 2px;
                border-color: #079c38;
                color: #079c38; 
                padding: 1px 9px; 
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
                padding: 1px 9px; 
                border-radius: 8px;
                background: linear-gradient(90deg, rgba(7,156,56,1) 0%, rgba(141,242,154,1));
                background-size: 300% auto;
                transition: .5s;
                &:hover {
                    background-position: 50% 0;
                }
            }

            .parallax6{
                h3{
                    font-size: 18px;
                }
                button{
                    font-size: 10px;
                }
            }

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
        <div>
        </div>
        <div class="parallax1" style="height:20%; text-align: center;" id="beranda">
            <h1>Selamat Datang Ikatan Alumni Akutansi <br> Universitas Negeri Jakarta</h1> 
            <!-- <br>
            <p>Ruang Koneksi, Kolaborasi & Kontribusi Alumni - Civitas Akademika Akuntansi Universitas Negeri Jakarta</p> -->
        </div>
        <div class="parallax2" id="organisasi">
            <div class="card" id="zoom-effect">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold;">Jumlah Alumni Terdaftar</h5>
                    <h1 class="card-text" style="font-weight: bolder; font-size: x-larger;">89.000</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
        <div class="parallax3">
            <h2 style="text-align: center; padding-top: 5%; font-weight: bolder;">PARTNERSHIP</h2>
            <div class="row" style="padding-left: 6%; padding-right: 6%; padding-top: 5%;">
                <div class="col-md-12">
                    <marquee behavior="scroll" loop="infinite"  direction="" scrollamount="15">
                        <img src="asset/Logo Sentral.png" alt="" style="width: 150px;">
                        <img src="asset/LOGO-AKP2I-square.png" alt="" style="margin-left: 100px;">
                    </marquee>
                </div>
            </div>
        </div>
        <div class="parallax4">
            <div class="row" id="acara">
                <div style="display: flex;">
                    <h2 style="text-align: left; flex-grow: 1;">ACARA SERU</h2>
                    <a href="<?= base_url() ?>acara" style="color: #000000; text-decoration: none;">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="flex-container" style="padding-left: 6%; padding-right: 6%; padding-bottom: 2%; padding-top: 2%;">
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</p>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row" id="berita">
                <div style="display: flex;">
                    <h2 style="text-align: left; flex-grow: 1;">BERITA UNTUKMU</h2>
                    <a href="<?= base_url() ?>berita" style="color: #000000; text-decoration: none;">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div class="flex-containerBerita" style="padding-left: 6%; padding-right: 6%; padding-bottom: 10%; padding-top: 3%;">
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4">
                    <div class="card-body">
                        <img src="asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax5">
            <div id="puzzle">
                <div id="div-img">
                    <img id="business" src="asset/business.png" alt="">
                </div>
                <span class="atas">
                    <img id="lamp" src="asset/image 16.png" alt="">
                </span>
            </div>
            <div class="card div-card">
                <div class="card-body">
                    <h5 style="text-align: justify;"><strong>Buat hidup lebih mudah, satu platform beragam informasi</strong></h5>
                    <p style="text-align: justify;">Bergabung dengan ikatan alumni akuntansi, temukan informasi, pekerjaan dengan mudah, tepat, dan terpercaya bersama kami!</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <button class="btn btn-light" id="btn1">Daftar Sekarang</button>
                            <button class="btn btn-outline-light" id="btn2">Selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax6">
            <div id="headfoot">
                <div style="color: #ffffff; flex-grow: .5;">
                    <h3>Daftarkan dirimu Dan Belajar Bersama!</h3>
                </div>
                <div>
                    <button class="btn btn-light" style="color: green; padding: 5px 30px;" type="button">Text</button>
                    <button class="btn btn-outline-light" style="padding: 5px 30px;" type="button">Text</button>
                </div>
            </div>
            <div class="horizontal_line">
                <div class="card">
                    
                </div>
            </div>
