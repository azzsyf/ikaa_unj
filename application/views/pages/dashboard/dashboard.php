
    <style>
        .parallax1 {
            padding-top: 200px;
            padding-bottom: 60px;
            background-color: #006805;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            .card{
                background-color: transparent;
                height: 400px;
                border: 0px;
                #logo-unj{
                    padding-right: 30px;
                }
                #logo-ikaa{
                    padding-left: 20px;
                }
            }
            .img-logo-unj{
                padding-top: 20px;
                width: 230px;
            }
            .img-logo-ikaa{
                width: 270px;
            }
            #text-welcome{
                padding-left: 40px;
            }
            h1{
                padding-top: 70px;
                color: #ffffff;
                margin-bottom: auto;
                font-weight: bolder ;
                font-size: 35px;
            }
            h6{
                color: #ffffff;
                margin-bottom: auto;
                font-size: 20px;
                padding-top: 10px;
            }
        }
        .parallax2 {
            background: url("<?= base_url() ?>asset/UNJ_profile.jpg") no-repeat;
            background-size: cover;
            height: 750px;
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
            height: 550px;
            /* img{
                padding-left: 10px;
                padding-right: 10px;
            } */
            #logo-sentral{
                width: 180px;
            }
            #logo-akp2i{
                width: 200px;
            }
        }

        .parallax7{
            background: url("<?= base_url() ?>asset/Group 45.png") center repeat;
            background-size: 100% 110%;
            height: 550px;
        }

        .parallax4 {
            background: url("<?= base_url() ?>asset/Group 45.png") center repeat;
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
                    min-width: 280px;
                    height: 390px;
                    transition: 1s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        min-width: 280px !important;
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
                    min-width: 280px;
                    height: 310px;
                    transition: 1s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        min-width: 280px !important;
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
            background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center repeat;
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
            background-image: url("<?= base_url() ?>asset/Subtract.png");
            transition: 1s;
            &:hover{
                width: 289px;
                height: 289px;
                background-repeat: no-repeat;
                background-size: cover;
                background-image: url("<?= base_url() ?>asset/Subtract2.png");
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

        @media screen and (min-width: 990px) AND (max-width: 1200px) {
            .parallax1 {
                padding-top: 200px;
                background-color: #006805;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
                .card{
                    background-color: transparent;
                    height: 300px;
                    border: 0px;
                    #logo-unj{
                        padding-right: 20px;
                        padding-left: 30px;
                    }
                    #logo-ikaa{
                        padding-left: 10px;
                    }
                }
                /* #text-welcome{
                    padding-left: 10px;
                } */
                .img-logo-unj{
                    padding-left: 10px;
                    padding-top: 20px;
                    width: 180px;
                }
                .img-logo-ikaa{
                    width: 210px;
                }
                h1{
                    padding-top: 70px;
                    color: #ffffff;
                    margin-bottom: auto;
                    font-weight: bolder ;
                    font-size: 25px;
                }
                h6{
                    color: #ffffff;
                    margin-bottom: auto;
                    font-size: 15px;
                    padding-top: 10px;
                }
            }
        }

        @media screen and (min-width: 750px) AND (max-width: 990px) {
            nav{
                width: 100%;

            }

            .parallax1 {
                padding-top: 200px;
                background-color: #006805;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
                .card{
                    background-color: transparent;
                    height: 300px;
                    border: 0px;
                    #logo-unj{
                        padding-right: 20px;
                        padding-left: 30px;
                    }
                    #logo-ikaa{
                        padding-left: 10px;
                    }
                }
                #text-welcome{
                    padding-left: 20px;
                }
                .img-logo-unj{
                    padding-left: 10px;
                    padding-top: 20px;
                    width: 150px;
                }
                .img-logo-ikaa{
                    width: 180px;
                    padding-right: 10px;
                }
                h1{
                    padding-top: 70px;
                    color: #ffffff;
                    margin-bottom: auto;
                    font-weight: bolder ;
                    font-size: 18px;
                }
                h6{
                    color: #ffffff;
                    margin-bottom: auto;
                    font-size: 13px;
                    padding-top: 10px;
                }
            }

            .parallax2{
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
                background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center repeat;
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
                background-image: url("<?= base_url() ?>asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 250px;
                    height: 250px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("<?= base_url() ?>asset/Subtract2.png");
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

        @media screen and (min-width: 615px) AND (max-width: 749px) {
            nav{
                width: 100%;
                button{
                    margin-right: 20px;
                }
            }
            h2{
                padding-bottom: 20px;
            }

            .parallax1 {
                padding-top: 150px;
                background-color: #006805;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                .card{
                    background-color: transparent;
                    height: 200px;
                    border: 0px;
                    #logo-unj{
                        padding-right: 0px;
                        padding-left: 0px;
                    }
                    #logo-ikaa{
                        padding-left: 0px;
                    }
                }
                #text-welcome{
                    padding-left: 0px;
                }
                .img-logo-unj{
                    padding-left: 0px;
                    padding-top: 0px;
                    width: 150px;
                }
                .img-logo-ikaa{
                    width: 180px;
                    padding-right: 0px;
                }
                h1{
                    padding-top: 50px;
                    color: #ffffff;
                    margin-bottom: auto;
                    font-weight: bolder ;
                    font-size: 20px;
                }
                h6{
                    color: #ffffff;
                    margin-bottom: auto;
                    font-size: 15px;
                    padding-top: 10px;
                }
            }

            .parallax2{
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
                background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center repeat;
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
                background-image: url("<?= base_url() ?>asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 250px;
                    height: 250px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("<?= base_url() ?>asset/Subtract2.png");
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
                padding-top: 150px;
                background-color: #006805;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                .card{
                    background-color: transparent;
                    height: 200px;
                    border: 0px;
                    #logo-unj{
                        padding-right: 0px;
                        padding-left: 0px;
                    }
                    #logo-ikaa{
                        padding-left: 0px;
                    }
                }
                #text-welcome{
                    padding-left: 0px;
                }
                .img-logo-unj{
                    padding-left: 0px;
                    padding-top: 0px;
                    width: 150px;
                }
                .img-logo-ikaa{
                    width: 180px;
                    padding-right: 0px;
                }
                h1{
                    padding-top: 50px;
                    color: #ffffff;
                    margin-bottom: auto;
                    font-weight: bolder ;
                    font-size: 17px;
                }
                h6{
                    color: #ffffff;
                    margin-bottom: auto;
                    font-size: 14px;
                    padding-top: 10px;
                }
            }
            
            .parallax2{
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
                height: 250px;
                img{
                    padding-left: 10px;
                    padding-right: 10px;
                }
                #logo-sentral{
                    width: 80px;
                }
                #logo-akp2i{
                    width: 100px;
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
                background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center repeat;
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
                background-image: url("<?= base_url() ?>asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px;
                    height: 300px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("<?= base_url() ?>asset/Subtract2.png");
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
                padding-top: 150px;
                background-color: #006805;
                background-size: cover;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                .card{
                    background-color: transparent;
                    height: 180px;
                    border: 0px;
                    #logo-unj{
                        padding-right: 0px;
                        padding-left: 0px;
                    }
                    #logo-ikaa{
                        padding-left: 0px;
                    }
                }
                #text-welcome{
                    padding-left: 0px;
                }
                .img-logo-unj{
                    padding-left: 0px;
                    padding-top: 0px;
                    width: 150px;
                }
                .img-logo-ikaa{
                    width: 180px;
                    padding-right: 0px;
                }
                h1{
                    padding-top: 50px;
                    color: #ffffff;
                    margin-bottom: auto;
                    font-weight: bolder ;
                    font-size: 15px;
                }
                h6{
                    color: #ffffff;
                    margin-bottom: auto;
                    font-size: 10px;
                    padding-top: 10px;
                }
            }
            
            .parallax2{
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
                    width: 180px;
                    height: 115px;
                    transition: 0.5s;
                    transition-timing-function: ease-in-out;
                    &:hover{
                        width: 190px !important;
                        height: 120px;
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
                height: 230px;
                img{
                    width: 100px;
                }
                #logo-sentral{
                    width: 100px;
                }
                #logo-akp2i{
                    width: 120px;
                }
                h2{
                    font-size: 15px;
                }
            }

            .parallax4{
                #acara h2{
                    font-size: 15px;
                }
                #acara a{
                    font-size: 13px;
                }
                #berita h2{
                    font-size: 15px;
                }
                #berita a{
                    font-size: 13px;
                }
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
                background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center repeat;
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
                background-image: url("<?= base_url() ?>asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px !important;
                    height: 300px !important;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("<?= base_url() ?>asset/Subtract2.png");
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

            /* footer #footer{
                display: flex;
                flex-direction: column;
                h3{
                    font-size: 14px;
                }
                #text-footer{
                    margin-left: 20px;
                    font-size: 10px !important;
                }
            } */

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
                background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center repeat;
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
                background-image: url("<?= base_url() ?>asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px !important;
                    height: 300px !important;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("<?= base_url() ?>asset/Subtract2.png");
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

            /* footer #footer{
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
            } */
        }

        @media screen and (max-width: 320px){
            nav{
                width: 100%;
            }
            .parallax2{
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
                background: url("<?= base_url() ?>asset/light-trails-buildings 1.png") center no-repeat;
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
                background-image: url("<?= base_url() ?>asset/Subtract.png");
                transition: 1s;
                &:hover{
                    width: 300px;
                    height: 300px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-image: url("<?= base_url() ?>asset/Subtract2.png");
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

            /* footer #footer{
                h3{
                    font-size: 10px;
                }
                #text-footer{
                    font-size: 7px;
                }
            }
            footer p{
                font-size: 5px;
            } */
            
        }


    </style>
    <?php 
        function tgl_indo($tanggal){
            $bulan = array (
                1 =>   'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecahkan = explode('-', $tanggal);
            
            // variabel pecahkan 0 = tanggal
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tahun
        
            return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
        }
    ?>
        <div class="parallax1" style="height:20%; text-align: center;" id="beranda">
            <div class="card" id="logo-unj">
                <div class="card-body">
                    <img class="img-logo-unj" src="<?= base_url() ?>asset/logo-unj.png" alt="">
                </div>
            </div>
            <div class="card" id="text-welcome">
                <div class="car-body">
                    <h1>Selamat Datang Ikatan Alumni Akutansi <br> Universitas Negeri Jakarta</h1> 
                    <h6>Ruang Koneksi, Kolaborasi & Kontribusi Alumni - Civitas Akademika Akuntansi <br> Universitas Negeri Jakarta</h6>
                </div>
            </div>
            <div class="card" id="logo-ikaa">
                <div class="card-body">
                    <img class="img-logo-ikaa" src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" alt="">
                </div>
            </div>
        </div>
        <div class="parallax2" id="organisasi">
            <div class="card" id="zoom-effect">
                <?php 
                    $data1 = $this->db->get('profil')->result_array();
                ?>
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold; padding-bottom: 10px; padding-top: 25px;">Jumlah Alumni Terdaftar</h5>
                    <h1 class="card-text" style="font-weight: bolder; font-size: x-larger;"><?= count($data1); ?></h1>
                </div>
            </div>
        </div>
        <div class="parallax3">
            <h2 style="text-align: center; padding-top: 5%; font-weight: bolder;">PARTNERSHIP</h2>
            <div class="row" style="padding-left: 6%; padding-right: 6%; padding-top: 5%;">
                <div class="col-md-12" align="center">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" style="padding-bottom: 70px;">
                            <div class="carousel-item active">
                                <div style="display: flex; width: 900px; justify-content: center; padding-left: 20px; padding-right: 20px;">
                                    <div>
                                        <a href="<?= base_url() ?>home/sentral"><img style="width: 130px;" src="<?= base_url() ?>asset/Logo Sentral.png"></a>
                                    </div>
                                    <div style="padding-left: 25px;">
                                        <a href="<?= base_url() ?>home/akp2i"><img style="width: 180px;" src="<?= base_url() ?>asset/LOGO-AKP2I-square.png"></a>
                                    </div>
                                    <div style="padding-left: 25px;">
                                        <a href="<?= base_url() ?>home/digifile"><img style="width: 180px;" src="<?= base_url() ?>asset/logo-df.png"></a>
                                    </div>
                                    <div style="padding-left: 25px;">
                                        <a href="<?= base_url() ?>home"><img style="width: 130px;" src="<?= base_url() ?>asset/Logo Sentral.png"></a>
                                    </div>
                                    <div>
                                        <a href="<?= base_url() ?>home"><img style="width: 130px;" src="<?= base_url() ?>asset/Logo Sentral.png"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div style="display: flex; width: 240px; justify-content: center;">
                                    <img style="width: 180px;" src="<?= base_url() ?>asset/LOGO-AKP2I-square.png" alt="Second slide">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div style="display: flex; width: 240px; justify-content: center;">
                                    <img style="width: 180px;" src="<?= base_url() ?>asset/logo-df.png" alt="Third slide">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!-- <marquee behavior="scroll" loop="infinite"  direction="" scrollamount="15">
                        <img src="<?= base_url() ?>asset/Logo Sentral.png" id="logo-sentral" alt="">
                        <img src="<?= base_url() ?>asset/LOGO-AKP2I-square.png" id="logo-akp2i" alt="">
                    </marquee> -->
                </div>
            </div>
        </div>
        <div class="parallax7" style="display: flex; justify-content: center; align-items: center;">
            <div class="card" style=" width: 800px; height: 450px; background: #a6a6a6;">
                <div class="card-body">
                    <h3 style="text-align: center; margin: 200px;">Space Video</h3>
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
            <div style="display: flex;">
                <div class="card col-md-4" style="cursor: pointer; width: 280px; height: 390px; margin-top: 3%; margin-left: 6%; margin-right: 2%;">
                    <div class="card-body">
                        <img src="<?= base_url() ?>asset/flayer.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p style="text-align: justify; font-weight: bold;">Nama Acara</p>
                            <p class="card-text" style="text-align: justify; font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="post-date" style="color: #a6a6a6; font-size: 12px; position: absolute; bottom: -8px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</p>
                        </div>
                    </div>
                </div>
                <div class="flex-container" style="padding-right: 6%; padding-bottom: 10%; padding-top: 3%;">
                <?php foreach($acara as $key) : ?>
                    <?php if($key['status'] == 1){ ?>
                        <div class="card col-md-4" style="cursor: pointer; ">
                            <a href="<?= base_url() ?>acara/view/<?= $key['id']; ?>" style="text-decoration: none;">
                                <div class="card-body">
                                    <img src="<?= base_url() ?>asset/images/acara/<?= $key['gambar'] ?>" style="height: 220px;" class="card-img-top" alt="...">
                                    <div style="padding-top: 10px;">
                                        <p style="text-align: justify; font-weight: bold; weight: 20px;"><?= $key['judul'] ?></p>
                                        <p class="card-text" style="text-align: justify; font-size: 12px;"><?= $key['deskripsi'] ?></p>
                                        <p class="post-date" style="color: #a6a6a6; font-size: 12px; position: absolute; bottom: -8px;"><i class="far fa-clock" style="margin-right: 5px;"></i><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                    </div>
                                </div>
                            </a> 
                        </div>
                    <?php } ?>
                <?php endforeach ?>
                </div>
            </div>
            
            <div class="row" id="berita">
                <div style="display: flex;">
                    <h2 style="text-align: left; flex-grow: 1;">BERITA UNTUKMU</h2>
                    <a href="<?= base_url() ?>berita" style="color: #000000; text-decoration: none;">Selengkapnya <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <div style="display: flex;">
                <div class="card col-md-4" style="width: 280px; height: 310px; margin-left: 6%; margin-top: 3%; margin-right: 2%;">
                    <div class="card-body">
                        <img src="<?= base_url() ?>asset/news.jpg" class="card-img-top" alt="...">
                        <div style="padding-top: 10px;">
                            <p class="card-text" style="text-align: justify; font-weight: bold;">Some quick example text to build on the card title and make up.</p>
                            <span class="post-date" style="color: #a6a6a6; font-size: 12px; position: absolute; bottom: 8px;"><i class="far fa-clock" style="margin-right: 5px;"></i>01 Mei 2024 - 01 Mei 2025</span>
                        </div>
                    </div>
                </div>
                <div class="flex-containerBerita" style="padding-right: 6%; padding-bottom: 10%; padding-top: 3%;">
                <?php foreach($berita as $key) : ?>
                    <div class="card col-md-4" style="cursor: pointer;">
                            <div class="card-body">
                                <img src="<?= base_url() ?>asset/images/berita/<?= $key['gambar'] ?>" style="width: 230px; height: 145px;" class="card-img-top" alt="...">
                                <div style="padding-top: 10px;">
                                    <p style="text-align: justify; font-weight: bold; weight: 20px;"><?= $key['judul'] ?></p>
                                    <!-- <p class="card-text" style="text-align: justify; font-size: 12px;"><?= $key['deskripsi'] ?></p> -->
                                    <p class="post-date" style="color: #a6a6a6; font-size: 12px; position: absolute; bottom: -8px;"><i class="far fa-clock" style="margin-right: 5px;"></i><?= tgl_indo(date("Y-m-d",strtotime($key['date_created']))); ?></p>
                                </div>
                            </div>
                        </a> 
                    </div>
                <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="parallax5">
            <div id="puzzle">
                <div id="div-img">
                    <img id="business" src="<?= base_url() ?>asset/business.png" alt="">
                </div>
                <span class="atas">
                    <img id="lamp" src="<?= base_url() ?>asset/image 16.png" alt="">
                </span>
            </div>
            <div class="card div-card">
                <div class="card-body">
                    <h5 style="text-align: justify;"><strong>Mari bergabung untuk berjejaring dalam platform IKAA UNJ</strong></h5>
                    <p style="text-align: justify;">Dengan kamu bergabung dalam platform ini kamu dapat mencari atau memberikan informasi 
                        seputar lowongan kerja, pelatihan, bisnis, acara, berita terkini dan program-program kerjasama lainnya.</p>
                    <div class="row">
                    <?php 
                        $data = $this->session->userdata('email');
                    ?>
                    <?php if(!empty($data)){ ?>
                        <div class="col-sm-12">
                            <!-- <a class="btn btn-light" href="<?= base_url()?>registrasi/" id="btn1">Daftar Sekarang</a>
                            <button class="btn btn-outline-light" id="btn2">Selengkapnya</button> -->
                        </div>
                    <?php }else{ ?>
                        <div class="col-sm-12">
                            <a class="btn btn-light" href="<?= base_url()?>registrasi" id="btn1">Daftar Sekarang</a>
                            <!-- <button class="btn btn-outline-light" id="btn2">Selengkapnya</button> -->
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
