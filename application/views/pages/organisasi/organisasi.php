
    <style>
        .section1{
            background: #006805;
            width: 100%;
            height: 700px;
            #div-coba{
                display: flex;
                .logo1{
                    flex: 50%;
                    margin-top: 220px;
                    img{
                        width: 300px;
                    }
                }
                .text1{
                    width: 300px;
                    color: white;
                    padding-top: 300px;
                    margin-right: 40px;
                    text-align: right;
                    font-weight: bolder;
                }
            }
        }

        .section2{
            padding: 20px;
            padding-top: 40px;
            background: #fff;
            
            height: auto;
            text-align: justify;
            position: relative;
            .flex-container{
                display: flex;
                justify-content: center;
            }
            #card-head2{
                width: auto;
                border-radius: 20px;
                .card-body{
                    margin: 10px;
                }
            }
            #card-visi{
                height: 500px;
                border-radius: 20px;
                .card-body{
                    margin: 10px;
                }
            }

            #card-progul{
                height: 500px;
                border-radius: 20px;
                .card-body{
                    margin: 10px;
                }
            }
            #head2{
                text-align: center;
                h3{
                    font-weight: bolder;
                    position: relative;
                }
                h3:after {
                    content: "";
                    position: absolute;
                    left: 50%;
                    margin-left: -50px;
                    bottom: -4px;
                    width: 100px;
                    border-bottom: 2px solid #006805;
                }
            }
            h3{
                font-weight: bolder;
            }
            
            h5{
                border-top: solid 5px yellow; 
                border-bottom-right-radius: 20px; 
                padding: 15px; 
                margin-left: 10px; 
                background-color: #56C65F;
            }

            #div-isi2{
                display: flex; 
                padding: 5px;
                #isi2{
                    flex: 50%; 
                    padding: 20px;
                    h5{
                        font-weight: bolder;
                    }
                }
            }


        }

        .section8{
            #head8{
                text-align: center;
                h3{
                    font-weight: bolder;
                    position: relative;
                }
                h3:after {
                    content: "";
                    position: absolute;
                    left: 50%;
                    margin-left: -50px;
                    bottom: -4px;
                    width: 100px;
                    border-bottom: 2px solid #006805;
                }
            }

            .imgbagan{
                width: 100%; 
                height: auto;
                display:block; 
                margin-left: auto; 
                margin-right: auto;
            }
        }

        .section3{
            .avatar{
                background: url('<?= base_url() ?>asset/profil-anon.jpg'); 
                background-size: cover; 
                width: 50px; 
                height: 50px;
            }
            height: 1000px;
            padding-top: 50px;
            text-align: center;
            h3{
                font-weight: bolder;
                position: relative;
            }
            h3:after {
                content: "";
                position: absolute;
                left: 50%;
                margin-left: -50px;
                bottom: -4px;
                width: 100px;
                border-bottom: 2px solid #006805;
            }

            .box {
                background-color: transparent;
                border-radius: 25px;
                color: #000;
                position: absolute;
                top: 200px;
                left: 300px;
                transform: translate(-50%, -50%);
                width: 400px;
                height: 300px;
                transform-style: preserve-3d;
                perspective: 2000px;
                transition: .4s;
                text-align: center;
                &:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: transparent;
                    border-top: 20px solid #56C65F;
                    border-left: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                &:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-bottom: 20px solid #56C65F;
                    border-right: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                .fas {
                    font-size: 25px;
                    height: 50px;
                    width: 50px;
                    line-height: 50px !important;
                    background-color: #56C65F;
                    color: #2C3A47;
                }
                .fa2 {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    z-index: 1;
                }
                .text {
                    position: absolute;
                    top: 30px;
                    left: -30px;
                    width: calc(100% + 60px);
                    height: calc(100% - 60px);
                    background-color: #bcbcbc;
                    border-radius: 13px;
                    transition: .4s;
                    .fa1 {
                        position: absolute;
                        top: 0;
                        left: 0;
                    }
                    div {
                        position: absolute;
                        top: 50%;
                        left: 0;
                        transform: translateY(-50%);
                        text-align: center;
                        width: 100%;
                        padding: 30px 60px;
                        line-height: 1.5;
                        box-sizing: border-box;
                        h3 {
                            font-size: 30px;
                            margin-bottom: 5px;
                        }
                        p {
                            font-size: 15px;
                        }
                    }
                }
                &:hover {
                    .text {
                        transform: rotateY(20deg) skewY(-3deg)
                    }
                    transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                }
            }

            .box2 {
                /* padding-top: 40px; */
                background-color: transparent;
                border-radius: 3px;
                color: #000;
                position: absolute;
                top: 200px;
                left: 450px;
                transform: translate(-50%, -50%);
                width: 400px;
                height: 300px;
                transform-style: preserve-3d;
                perspective: 2000px;
                transition: .4s;
                text-align: center;
                &:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: transparent;
                    border-top: 20px solid #56C65F;
                    border-left: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                &:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-bottom: 20px solid #56C65F;
                    border-right: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                .fas {
                    font-size: 25px;
                    height: 50px;
                    width: 50px;
                    line-height: 50px !important;
                    background-color: #56C65F;
                    color: #2C3A47;
                }
                .fa2 {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    z-index: 1;
                }
                .text {
                    position: absolute;
                    top: 30px;
                    left: -30px;
                    width: calc(100% + 60px);
                    height: calc(100% - 60px);
                    background-color: #bcbcbc;
                    border-radius: 13px;
                    transition: .4s;
                    .fa1 {
                        position: absolute;
                        top: 0;
                        left: 0;
                    }
                    div {
                        position: absolute;
                        top: 50%;
                        left: 0;
                        transform: translateY(-50%);
                        text-align: center;
                        width: 100%;
                        padding: 30px 60px;
                        line-height: 1.5;
                        box-sizing: border-box;
                        h3 {
                            font-size: 30px;
                            margin-bottom: 5px;
                        }
                        p {
                            font-size: 15px;
                        }
                    }
                }
                &:hover {
                    .text {
                        transform: rotateY(20deg) skewY(-3deg)
                    }
                    transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                }
            }

            .box3 {
                /* padding-top: 40px; */
                background-color: transparent;
                border-radius: 3px;
                color: #000;
                position: absolute;
                top: 500px;
                left: 300px;
                transform: translate(-50%, -50%);
                width: 400px;
                height: 300px;
                transform-style: preserve-3d;
                perspective: 2000px;
                transition: .4s;
                text-align: center;
                &:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: transparent;
                    border-top: 20px solid #56C65F;
                    border-left: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                &:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-bottom: 20px solid #56C65F;
                    border-right: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                .fas {
                    font-size: 25px;
                    height: 50px;
                    width: 50px;
                    line-height: 50px !important;
                    background-color: #56C65F;
                    color: #2C3A47;
                }
                .fa2 {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    z-index: 1;
                }
                .text {
                    position: absolute;
                    top: 30px;
                    left: -30px;
                    width: calc(100% + 60px);
                    height: calc(100% - 60px);
                    background-color: #bcbcbc;
                    border-radius: 13px;
                    transition: .4s;
                    .fa1 {
                        position: absolute;
                        top: 0;
                        left: 0;
                    }
                    div {
                        position: absolute;
                        top: 50%;
                        left: 0;
                        transform: translateY(-50%);
                        text-align: center;
                        width: 100%;
                        padding: 30px 60px;
                        line-height: 1.5;
                        box-sizing: border-box;
                        h3 {
                            font-size: 30px;
                            margin-bottom: 5px;
                        }
                        p {
                            font-size: 15px;
                        }
                    }
                }
                &:hover {
                    .text {
                        transform: rotateY(20deg) skewY(-3deg)
                    }
                    transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                }
            }

            .box4 {
                /* padding-top: 40px; */
                background-color: transparent;
                border-radius: 3px;
                color: #000;
                position: absolute;
                top: 500px;
                left: 450px;
                transform: translate(-50%, -50%);
                width: 400px;
                height: 300px;
                transform-style: preserve-3d;
                perspective: 2000px;
                transition: .4s;
                text-align: center;
                &:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: transparent;
                    border-top: 20px solid #56C65F;
                    border-left: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                &:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border-bottom: 20px solid #56C65F;
                    border-right: 20px solid #56C65F;
                    box-sizing: border-box;
                }
                .fas {
                    font-size: 25px;
                    height: 50px;
                    width: 50px;
                    line-height: 50px !important;
                    background-color: #56C65F;
                    color: #2C3A47;
                }
                .fa2 {
                    position: absolute;
                    bottom: 0;
                    right: 0;
                    z-index: 1;
                }
                .text {
                    position: absolute;
                    top: 30px;
                    left: -30px;
                    width: calc(100% + 60px);
                    height: calc(100% - 60px);
                    background-color: #bcbcbc;
                    border-radius: 13px;
                    transition: .4s;
                    .fa1 {
                        position: absolute;
                        top: 0;
                        left: 0;
                    }
                    div {
                        position: absolute;
                        top: 50%;
                        left: 0;
                        transform: translateY(-50%);
                        text-align: center;
                        width: 100%;
                        padding: 30px 60px;
                        line-height: 1.5;
                        box-sizing: border-box;
                        h3 {
                            font-size: 30px;
                            margin-bottom: 5px;
                        }
                        p {
                            font-size: 15px;
                        }
                    }
                }
                &:hover {
                    .text {
                        transform: rotateY(20deg) skewY(-3deg)
                    }
                    transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                }
            }
        }

        /* @media screen and (max-width: 1024px){
            .section1{
                background: #006805;
                width: 100%;
                height: 600px;
                .logo{
                    transform: translateY(100px);
                    width: 250px;
                    height: 250px;
                    background: rgb(223, 209, 209);
                    border-radius: 50%;
                    margin: 40px;
                    margin-top: 120px;
                    text-align: center;
                    font-weight: bolder;
                    position: absolute;
                }
                .text{
                    transform: translateX(80px) translateY(90px);
                }
                .text1{
                    transform: translateX(700px) translateY(250px);
                    width: 300px;
                    height: 300px;
                    color: white;
                    margin-right: 40px;
                    text-align: right;
                    font-weight: bolder;
                    flex-grow: 1;
                }
            }

            .section3{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi3{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi3{
                        flex: 60%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img3{
                        flex: 45%;
                        align-self: center;
                        padding-left: 300px;
                        padding-top: 100px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img3{
                        transform: translateX(-190px) translateY(-170px);
                        width: 300px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi3{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img3 #circelhover{
                        transform: translateX(-300px) translateY(-300px) !important;
                        width: 750px !important;
                        height: 750px !important;
                    }
                    #img3{
                        transform: translateX(-50px) translateY(90px) !important;
                        width: 520px !important;
                        height: 570px !important;
                    }
                }
            }

            .section4{
                background: rgb(0,104,5);
                background: linear-gradient(270deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                position: relative;
                overflow: hidden;
                #div-isi4{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi4{
                        flex: 40%; 
                        padding-left: 20px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 0px;
                        color: #fff;
                        text-align: justify;
                        transition: 1s;                    
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img4{
                        flex: 50%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 200px;
                        #circelhover4{
                            transform: translateX(-30px) translateY(-90px);
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    img{
                        transform: translateX(-160px) translateY(-150px);
                        width: 450px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi4{
                        padding-left: 0px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }  
                    #div-img4 #circelhover4{
                        transform: translateX(-650px) translateY(-400px) !important;
                        width: 950px !important;
                        height: 950px !important;
                    }
                    #img4{
                        transform: translateX(400px) translateY(115px);
                        width: 700px;
                        height: auto;
                    }
                }
            }

            .section5{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi5{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi5{
                        flex: 55%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img5{
                        flex: 45%;
                        align-self: center;
                        padding-left: 300px;
                        padding-top: 100px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img5{
                        transform: translateX(-190px) translateY(-170px);
                        width: 350px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi5{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img5 #circelhover{
                        transform: translateX(-300px) translateY(-300px) !important;
                        width: 750px !important;
                        height: 750px !important;
                    }
                    #img5{
                        transform: translateX(-50px) translateY(90px) !important;
                        width: 570px !important;
                        height: 570px !important;
                    }
                }
            }

            .section6{
                background: rgb(0,104,5);
                background: linear-gradient(270deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                position: relative;
                overflow: hidden;
                #div-isi6{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi6{
                        flex: 40%; 
                        padding-left: 20px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 0px;
                        color: #fff;
                        text-align: justify;
                        transition: 1s;                    
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img6{
                        flex: 50%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 200px;
                        #circelhover4{
                            transform: translateX(-30px) translateY(-90px);
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    img{
                        transform: translateX(-160px) translateY(-150px);
                        width: 450px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi6{
                        padding-left: 0px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }  
                    #div-img6 #circelhover4{
                        transform: translateX(-650px) translateY(-400px) !important;
                        width: 950px !important;
                        height: 950px !important;
                    }
                    #img6{
                        transform: translateX(400px) translateY(115px);
                        width: 700px;
                        height: auto;
                    }
                }
            }

            .section7{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi7{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi7{
                        flex: 55%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img7{
                        flex: 45%;
                        align-self: center;
                        padding-left: 300px;
                        padding-top: 100px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img7{
                        transform: translateX(-190px) translateY(-170px);
                        width: 350px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi7{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img7 #circelhover{
                        transform: translateX(-300px) translateY(-300px) !important;
                        width: 750px !important;
                        height: 750px !important;
                    }
                    #img7{
                        transform: translateX(-50px) translateY(90px) !important;
                        width: 570px !important;
                        height: 570px !important;
                    }
                }
            }
        } */

        @media screen and (min-width: 750px) AND (max-width: 1024px){

            .section1{
                background: #006805;
                width: 100%;
                height: 600px;
                #div-coba{
                    display: flex;
                    .logo1{
                        flex: 50%;
                        margin-top: 220px;
                        img{
                            width: 250px;
                        }
                    }
                    .text1{
                        transform: translateX(0px) translateY(60px);
                        width: 400px;
                        color: white;
                        padding-top: 220px;
                        text-align: right;
                        font-weight: bolder;
                        flex-grow: 1;
                    }
                }
                
            }

            .section2{
                padding: 20px;
                padding-top: 40px;
                background: #fff;
                /* background: linear-gradient(
                    to left,
                    #56C65F 0%,
                    #fff 50%,
                    #fff 50%,
                    #56C65F 100%
                ); */
                height: auto;
                text-align: justify;
                position: relative;
                #card-head2{
                    width: auto;
                    border-radius: 20px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #card-visi{
                    height: 600px;
                    border-radius: 20px;
                    font-size: 13px;
                    .card-body{
                        margin: 10px;
                    }
                }

                #card-progul{
                    height: 600px;
                    border-radius: 20px;
                    font-size: 13px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #head2{
                    text-align: center;
                }
                h3{
                    font-weight: bolder;
                }

                #div-isi2{
                    display: flex; 
                    padding: 30px;
                    #isi2{
                        flex: 50%; 
                        padding: 20px;
                        h5{
                            font-weight: bolder;
                        }
                    }
                }


            }

            .section3{
                height: 1000px;
                padding-top: 50px;
                text-align: center;
                h3{
                    font-weight: bolder;
                    position: relative;
                }
                h3:after {
                    content: "";
                    position: absolute;
                    left: 50%;
                    margin-left: -50px;
                    bottom: -4px;
                    width: 100px;
                    border-bottom: 2px solid #006805;
                }

                .box {
                    background-color: transparent;
                    border-radius: 25px;
                    color: #000;
                    position: absolute;
                    top: 200px;
                    left: 230px;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 300px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 25px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 30px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 15px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box2 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 200px;
                    left: 400px;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 300px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 25px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 30px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 15px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box3 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 500px;
                    left: 230px;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 300px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 25px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 30px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 15px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box4 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 500px;
                    left: 400px;
                    transform: translate(-50%, -50%);
                    width: 400px;
                    height: 300px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 25px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 30px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 15px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }
            }

            .section4{
                background: rgb(0,104,5);
                background: linear-gradient(270deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                position: relative;
                overflow: hidden;
                #div-isi4{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi4{
                        flex: 55%; 
                        padding-left: 20px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 0px;
                        color: #fff;
                        text-align: justify;
                        transition: 1s; 
                        .name4{
                            font-size: 16px;
                        }       
                        .jabatan4{
                            font-size: 14px;
                        }  
                        .text-pkj4{
                            font-size: 13px;
                        }    
                        .pkj4{
                            font-size: 12px;
                        }  
                        .text-po4{
                            font-size: 13px;
                        }
                        .po4{
                            font-size: 12px;
                        }
                    }
                    #div-img4{
                        flex: 45%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 200px;
                        #circelhover4{
                            transform: translateX(-30px) translateY(-90px);
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    img{
                        transform: translateX(-230px) translateY(-300px);
                        width: 300px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi4{
                        padding-left: 0px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }  
                    #div-img4 #circelhover4{
                        transform: translateX(-780px) translateY(-500px) !important;
                        width: 920px !important;
                        height: 920px !important;
                    }
                    #img4{
                        transform: translateX(380px) translateY(-30px);
                        width: 600px;
                        height: auto;
                    }
                }
            }

            .section5{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi5{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi5{
                        flex: 55%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img5{
                        flex: 45%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 0px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img5{
                        transform: translateX(-190px) translateY(-170px);
                        width: 350px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi5{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img5 #circelhover{
                        transform: translateX(-230px) translateY(-300px) !important;
                        width: 780px !important;
                        height: 780px !important;
                    }
                    #img5{
                        transform: translateX(-50px) translateY(100px) !important;
                        width: 480px !important;
                        height: 480px !important;
                    }
                }
            }

            .section6{
                background: rgb(0,104,5);
                background: linear-gradient(270deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                position: relative;
                overflow: hidden;
                #div-isi6{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi6{
                        flex: 40%; 
                        padding-left: 20px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 0px;
                        color: #fff;
                        text-align: justify;
                        transition: 1s;                    
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img6{
                        flex: 50%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 200px;
                        #circelhover4{
                            transform: translateX(-30px) translateY(-90px);
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    img{
                        transform: translateX(-190px) translateY(-150px);
                        width: 450px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi6{
                        padding-left: 0px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }  
                    #div-img6 #circelhover4{
                        transform: translateX(-780px) translateY(-500px) !important;
                        width: 950px !important;
                        height: 950px !important;
                    }
                    #img6{
                        transform: translateX(470px) translateY(190px);
                        width: 650px;
                        height: auto;
                    }
                }
            }

            .section7{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi7{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi7{
                        flex: 55%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img7{
                        flex: 45%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 0px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img7{
                        transform: translateX(-190px) translateY(-170px);
                        width: 350px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi7{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img7 #circelhover{
                        transform: translateX(-230px) translateY(-300px) !important;
                        width: 780px !important;
                        height: 780px !important;
                    }
                    #img7{
                        transform: translateX(-50px) translateY(100px) !important;
                        width: 480px !important;
                        height: 480px !important;
                    }
                }
            }

            .section9{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi9{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi9{
                        flex: 55%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img9{
                        flex: 45%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 0px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img9{
                        transform: translateX(-190px) translateY(-140px);
                        width: 350px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi9{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img9 #circelhover{
                        transform: translateX(-230px) translateY(-300px) !important;
                        width: 780px !important;
                        height: 780px !important;
                    }
                    #img9{
                        transform: translateX(-50px) translateY(130px) !important;
                        width: 480px !important;
                        height: 480px !important;
                    }
                }
            }
        }

        @media screen and (max-width: 991px){
            .section3{
                .avatar{
                    background: url('<?= base_url() ?>asset/profil-anon.jpg'); 
                    background-size: cover; 
                    width: 40px; 
                    height: 40px;
                }
                height: 1000px;
                padding-top: 50px;
                text-align: center;
                h3{
                    font-weight: bolder;
                    position: relative;
                }
                h3:after {
                    content: "";
                    position: absolute;
                    left: 50%;
                    margin-left: -50px;
                    bottom: -4px;
                    width: 100px;
                    border-bottom: 2px solid #006805;
                }

                .box {
                    background-color: transparent;
                    border-radius: 25px;
                    color: #000;
                    position: absolute;
                    top: 200px;
                    left: 120px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box2 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 200px;
                    left: 350px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box3 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 500px;
                    left: 120px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box4 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 500px;
                    left: 350px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }
            }

        }

        @media screen and (min-width: 601px) AND (max-width: 749px){
            .section2{
                padding: 0px;
                padding-top: 40px;
                background: #ffff;
                width: 100%;
                height: auto;
                text-align: justify;
                position: relative;
                #card-head2{
                    width: auto;
                    border-radius: 20px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #card-visi{
                    height: auto;
                    border-radius: 20px;
                    font-size: 12px;
                    .card-body{
                        margin: 10px;
                    }
                }

                #card-progul{
                    height: auto;
                    border-radius: 20px;
                    font-size: 12px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #head2{
                    text-align: center;
                    font-size: 12px;
                }
                h3{
                    font-weight: bolder;
                    font-size: 18px;
                }

                #div-isi2{
                    display: flex; 
                    flex-wrap: wrap;
                    padding: 30px;
                    #isi2{
                        flex: 100%; 
                        padding: 20px;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                            text-align: center;
                        }
                    }
                }
            }

            .section3{
                .avatar{
                    background: url('<?= base_url() ?>asset/profil-anon.jpg'); 
                    background-size: cover; 
                    width: 40px; 
                    height: 40px;
                }
                height: 1500px;
                padding-top: 50px;
                text-align: center;
                h3{
                    font-weight: bolder;
                    position: relative;
                }
                h3:after {
                    content: "";
                    position: absolute;
                    left: 50%;
                    margin-left: -50px;
                    bottom: -4px;
                    width: 100px;
                    border-bottom: 2px solid #006805;
                }

                .box {
                    background-color: transparent;
                    border-radius: 25px;
                    color: #000;
                    position: absolute;
                    top: 200px;
                    left: 200px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box2 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 500px;
                    left: 60px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box3 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 750px;
                    left: 200px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box4 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 1050px;
                    left: 60px;
                    transform: translate(-50%, -50%);
                    width: 350px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 20px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 13px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }
            }

            .section5{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi5{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi5{
                        flex: 60%; 
                        padding-left: 40px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 40px;
                        color: #fff;
                        transition: 1s;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img5{
                        flex: 50%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 0px;
                        #circelhover{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img5{
                        transform: translateX(-190px) translateY(-170px);
                        width: 350px;
                        height: 350px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi5{
                        padding-left: 60px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img5 #circelhover{
                        transform: translateX(-230px) translateY(-300px) !important;
                        width: 780px !important;
                        height: 780px !important;
                    }
                    #img5{
                        transform: translateX(-50px) translateY(100px) !important;
                        width: 480px !important;
                        height: 480px !important;
                    }
                }
            }

            .section6{
                background: rgb(0,104,5);
                background: linear-gradient(270deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 350px;
                position: relative;
                overflow: hidden;
                #div-isi6{
                    display: flex; 
                    padding-left: 30px;
                    position: relative;
                    #isi6{
                        flex: 40%; 
                        padding-left: 20px;
                        padding-top: 40px;
                        padding-bottom: 40px;
                        padding-right: 0px;
                        color: #fff;
                        text-align: justify;
                        transition: 1s;                    
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                        }
                        span{
                            font-size: 13px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 12px;
                        }
                    }
                    #div-img6{
                        flex: 50%;
                        align-self: center;
                        padding-left: 200px;
                        padding-top: 200px;
                        #circelhover6{
                            transform: translateX(-150px) translateY(-90px);
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    img{
                        transform: translateX(-150px) translateY(-150px);
                        width: 450px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi6{
                        padding-left: 0px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }  
                    #div-img6 #circelhover6{
                        transform: translateX(-850px) translateY(-500px) !important;
                        width: 950px !important;
                        height: 950px !important;
                    }
                    #img6{
                        transform: translateX(500px) translateY(190px);
                        width: 650px;
                        height: auto;
                    }
                }
            }
        }
        
        @media screen and (min-width: 501px) AND (max-width: 600px){
            .section2{
                padding: 0px;
                padding-top: 40px;
                background: #ffff;
                width: 100%;
                height: auto;
                text-align: justify;
                position: relative;
                #card-head2{
                    width: auto;
                    border-radius: 20px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #card-visi{
                    height: auto;
                    border-radius: 20px;
                    font-size: 12px;
                    .card-body{
                        margin: 10px;
                    }
                }

                #card-progul{
                    height: auto;
                    border-radius: 20px;
                    font-size: 12px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #head2{
                    text-align: center;
                    font-size: small;
                }
                h3{
                    font-weight: bolder;
                    font-size: 15px;
                }

                #div-isi2{
                    display: flex; 
                    flex-wrap: wrap;
                    padding: 30px;
                    #isi2{
                        flex: 100%; 
                        padding: 20px;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                            text-align: center;
                        }
                    }
                }
            }

            .section3{
                .avatar{
                    background: url('<?= base_url() ?>asset/profil-anon.jpg'); 
                    background-size: cover; 
                    width: 40px; 
                    height: 40px;
                }
                height: 1500px;
                padding-top: 50px;
                text-align: center;
                h3{
                    font-weight: bolder;
                    position: relative;
                    font-size: 15px;
                }
                h3:after {
                    content: "";
                    position: absolute;
                    left: 57%;
                    margin-left: -57px;
                    bottom: -4px;
                    width: 50px;
                    border-bottom: 2px solid #006805;
                }

                .box {
                    background-color: transparent;
                    border-radius: 25px;
                    color: #000;
                    position: absolute;
                    top: 200px;
                    left: 200px;
                    transform: translate(-50%, -50%);
                    width: 300px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 15px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 12px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box2 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 500px;
                    left: 40px;
                    transform: translate(-50%, -50%);
                    width: 300px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 15px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 12px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box3 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 750px;
                    left: 200px;
                    transform: translate(-50%, -50%);
                    width: 300px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 15px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 12px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }

                .box4 {
                    /* padding-top: 40px; */
                    background-color: transparent;
                    border-radius: 3px;
                    color: #000;
                    position: absolute;
                    top: 1050px;
                    left: 40px;
                    transform: translate(-50%, -50%);
                    width: 300px;
                    height: 250px;
                    transform-style: preserve-3d;
                    perspective: 2000px;
                    transition: .4s;
                    text-align: center;
                    &:before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: transparent;
                        border-top: 20px solid #56C65F;
                        border-left: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    &:after {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border-bottom: 20px solid #56C65F;
                        border-right: 20px solid #56C65F;
                        box-sizing: border-box;
                    }
                    .fas {
                        font-size: 15px;
                        height: 50px;
                        width: 50px;
                        line-height: 50px !important;
                        background-color: #56C65F;
                        color: #2C3A47;
                    }
                    .fa2 {
                        position: absolute;
                        bottom: 0;
                        right: 0;
                        z-index: 1;
                    }
                    .text {
                        position: absolute;
                        top: 30px;
                        left: -30px;
                        width: calc(100% + 60px);
                        height: calc(100% - 60px);
                        background-color: #bcbcbc;
                        border-radius: 13px;
                        transition: .4s;
                        .fa1 {
                            position: absolute;
                            top: 0;
                            left: 0;
                        }
                        div {
                            position: absolute;
                            top: 50%;
                            left: 0;
                            transform: translateY(-50%);
                            text-align: center;
                            width: 100%;
                            padding: 30px 60px;
                            line-height: 1.5;
                            box-sizing: border-box;
                            h3 {
                                font-size: 15px;
                                margin-bottom: 5px;
                            }
                            p {
                                font-size: 12px;
                            }
                        }
                    }
                    &:hover {
                        .text {
                            transform: rotateY(20deg) skewY(-3deg)
                        }
                        transform: translate(-50%, -50%) rotateY(-20deg) skewY(3deg)
                    }
                }
            }

            .section8{
                #head8{
                    text-align: center;
                    h3{
                        font-weight: bolder;
                        position: relative;
                        font-size: 15px;
                    }
                    h3:after {
                        content: "";
                        position: absolute;
                        left: 50%;
                        margin-left: -25px;
                        bottom: -4px;
                        width: 50px;
                        border-bottom: 2px solid #006805;
                    }

                    span{
                        font-size: 13px;
                    }
                }
            }
        }

        @media screen and (min-width: 400px) AND (max-width: 500px) {
            .section1{
                background: #006805;
                width: 100%;
                height: 500px;
                #div-coba{
                    display: flex;
                    .logo1{
                        flex: 50%;
                        margin-top: 220px;
                        img{
                            width: 150px;
                        }
                    }
                    .text1{
                        width: 400px;
                        color: white;
                        padding-top: 240px;
                        text-align: right;
                        font-weight: bolder;
                        flex-grow: 1;
                        h1{
                            font-size: 25px;
                        }
                        p{
                            font-size: 12px;
                        }
                    }
                }
                
            }
            .section2{
                padding: 0px;
                padding-top: 40px;
                background: #ffff;
                width: 100%;
                height: auto;
                text-align: justify;
                position: relative;
                #card-head2{
                    width: auto;
                    border-radius: 20px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #card-visi{
                    height: auto;
                    border-radius: 20px;
                    font-size: 12px;
                    .card-body{
                        margin: 10px;
                    }
                }

                #card-progul{
                    height: auto;
                    border-radius: 20px;
                    font-size: 12px;
                    .card-body{
                        margin: 10px;
                    }
                }
                #head2{
                    text-align: center;
                    font-size: small;
                }
                h3{
                    font-weight: bolder;
                    font-size: 15px;
                }

                #div-isi2{
                    display: flex; 
                    flex-wrap: wrap;
                    padding: 30px;
                    #isi2{
                        flex: 100%; 
                        padding: 20px;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                            text-align: center;
                        }
                    }
                }
            }
            .section8{
                #head8{
                    text-align: center;
                    h3{
                        font-weight: bolder;
                        position: relative;
                        font-size: 15px;
                    }
                    h3:after {
                        content: "";
                        position: absolute;
                        left: 50%;
                        margin-left: -25px;
                        bottom: -4px;
                        width: 50px;
                        border-bottom: 2px solid #006805;
                    }

                    span{
                        font-size: 13px;
                    }
                }
            }
        }

        @media screen and (min-width: 320px) AND (max-width: 399px){
            nav{
                width: 100%;
                button{
                    margin-right: 20px;
                }
            }

            .section1{
                background: #006805;
                width: 100%;
                height: 250px;
                #div-coba{
                    display: flex;
                    .logo1{
                        flex: 50%;
                        transform: translateY(70px);
                        margin-top: 30px;
                        text-align: center;
                        font-weight: bolder;
                        position: absolute;
                        img{
                            width: 100px;
                        }
                    }

                    .text1{
                        transform: translateY(120px);
                        color: white;
                        margin-right: 20px;
                        text-align: right;
                        font-weight: bolder;
                        h1{
                            font-size: 15px;
                        }
                        p{
                            font-size: 8px;
                        }
                    }
                }
            }

            .section2{
                padding: 20px;
                padding-top: 40px;
                background: #ffff;
                width: 100%;
                height: auto;
                text-align: justify;
                position: relative;
                #head2{
                    text-align: center;
                    font-size: small;
                }
                h3{
                    font-weight: bolder;
                    font-size: 15px;
                }
                span{
                    font-size: 10px;
                }

                #div-isi2{
                    display: flex; 
                    flex-wrap: wrap;
                    padding: 30px;
                    #isi2{
                        flex: 100%; 
                        padding: 20px;
                        h5{
                            font-weight: bolder;
                            font-size: 15px;
                            text-align: center;
                        }
                        p{
                            font-size: 13px;
                        }
                        .row{
                            font-size: 13px;
                        }
                    }
                }
            }

            .section3{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 300px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi3{
                    display: flex; 
                    flex-direction: column;
                    position: relative;
                    #isi3{
                        display: flex;
                        padding: 20px;
                        padding-top: 40px;
                        color: #fff;
                        transition: 1s;
                        #coverIsi3{
                            width: 70%;
                        }
                        h5{
                            font-weight: bolder;
                            font-size: 12px;
                        }
                        span{
                            font-size: 12px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 11px;
                        }
                    }
                    #div-img3{
                        display: flex;
                        align-self: center;
                        padding-left: 350px;
                        padding-top: 0px;
                        #circelhover{
                            width: 0px;
                            height: 0px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img3{
                        transform: translateX(-150px) translateY(-200px);
                        width: 250px;
                        height: 250px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi3{
                        padding: 20px !important;
                        padding-top: 40px !important;
                    }
                    #div-img3 #circelhover{
                        transform: translateX(-180px) translateY(-80px) !important;
                        width: 300px !important;
                        height: 300px !important;
                    }
                    #img3{
                        transform: translateX(-60px) translateY(-110px) !important;
                        width: 350px !important;
                        height: 350px !important;
                    }
                }
            }

            .section4{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 300px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi4{
                    display: flex; 
                    flex-direction: column;
                    position: relative;
                    #isi4{
                        display: flex;
                        padding: 20px;
                        padding-top: 40px;
                        color: #fff;
                        transition: 1s;
                        #coverIsi4{
                            width: 70%;
                        }
                        h5{
                            font-weight: bolder;
                            font-size: 12px;
                        }
                        span{
                            font-size: 12px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 11px;
                        }
                    }
                    #div-img4{
                        display: flex;
                        align-self: center;
                        padding-left: 350px;
                        padding-top: 0px;
                        #circelhover4{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                            transform: translateX(-50px) translateY(230px);
                        }
                    }
                    #img4{
                        transform: translateX(-155px) translateY(-155px) scaleX(-1);
                        width: 285px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi4{
                        padding: 20px !important;
                        padding-top: 40px !important;
                    }
                    #div-img4 #circelhover4{
                        transform: translateX(-180px) translateY(190px) !important;
                        width: 300px !important;
                        height: 300px !important;
                    }
                    #img4{
                        transform: translateX(-100px) translateY(-100px) scaleX(-1) !important;
                        width: 380px !important;
                        height: auto !important;
                    }
                }
            }

            .section5{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 300px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi5{
                    display: flex; 
                    flex-direction: column;
                    position: relative;
                    #isi5{
                        display: flex;
                        padding: 20px;
                        padding-top: 40px;
                        color: #fff;
                        transition: 1s;
                        #coverIsi5{
                            width: 70%;
                        }
                        h5{
                            font-weight: bolder;
                            font-size: 12px;
                        }
                        span{
                            font-size: 12px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 11px;
                        }
                    }
                    #div-img5{
                        display: flex;
                        align-self: center;
                        padding-left: 350px;
                        padding-top: 0px;
                        #circelhover{
                            width: 0px;
                            height: 0px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                        }
                    }
                    #img5{
                        transform: translateX(-150px) translateY(-200px);
                        width: 250px;
                        height: 250px;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi5{
                        padding: 20px !important;
                        padding-top: 40px !important;
                    }
                    #div-img5 #circelhover{
                        transform: translateX(-180px) translateY(-80px) !important;
                        width: 300px !important;
                        height: 300px !important;
                    }
                    #img5{
                        transform: translateX(-60px) translateY(-110px) !important;
                        width: 350px !important;
                        height: 350px !important;
                    }
                }
            }

            .section6{
                background: rgb(0,104,5);
                background: linear-gradient(80deg, rgba(0,104,5,1) 0%, rgba(86,198,95,1) 100%);
                width: 100%;
                height: 300px;
                overflow: hidden;
                text-align: justify;
                position: relative;
                transition: 1s;
                #div-isi6{
                    display: flex; 
                    flex-direction: column;
                    position: relative;
                    #isi6{
                        display: flex;
                        padding: 20px;
                        padding-top: 40px;
                        color: #fff;
                        transition: 1s;
                        #coverIsi6{
                            width: 70%;
                        }
                        h5{
                            font-weight: bolder;
                            font-size: 12px;
                        }
                        span{
                            font-size: 12px;
                        }
                        p{
                            padding-top: 10px;
                            font-size: 11px;
                        }
                    }
                    #div-img6{
                        display: flex;
                        align-self: center;
                        padding-left: 350px;
                        padding-top: 0px;
                        #circelhover6{
                            width: 50px;
                            height: 50px;
                            background: #006805;
                            border-radius: 50%;
                            transition: 1s;
                            position: absolute;
                            transform: translateX(-50px) translateY(230px);
                        }
                    }
                    #img6{
                        transform: translateX(-155px) translateY(-155px) scaleX(-1);
                        width: 285px;
                        height: auto;
                        transition: 1s;
                    }
                }
                &:hover{
                    #isi6{
                        padding: 20px !important;
                        padding-top: 40px !important;
                    }
                    #div-img6 #circelhover6{
                        transform: translateX(-180px) translateY(190px) !important;
                        width: 300px !important;
                        height: 300px !important;
                    }
                    #img6{
                        transform: translateX(-100px) translateY(-100px) scaleX(-1) !important;
                        width: 380px !important;
                        height: auto !important;
                    }
                }
            }
            
        }
    </style>

    <div class="section1">
        <div id="div-coba">
            <div class="container">
                <div class="logo1">
                    <img src="asset/Logo IKA Akuntansi UNJ bulet.png" alt="">
                </div>
            </div>
            <div class="text1">
                <h1>Struktur<br>Organisasi</h1>
                <p>Ikatan Alumni Akuntansi UNJ</p>
            </div>
        </div>
    </div>
    <div class="section2">
        <div class="flex-container">
            <div class="card" id="card-head2" style="border: 0px;">
                <div class="card-body">
                    <div id="head2">
                        <h3>VISI, MISI & PROGRAM UNGGULAN</h3>
                        <span>Ikatan Alumni Akuntansi Universitas Negeri Jakarta</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="div-isi2">
            <div id="isi2">
                <div class="card" id="card-visi" style="border: 0px;">
                    <div class="card-body">
                        <h5>VISI</h5>
                        <p style="border-left: solid 5px yellow; padding-left: 20px; padding: 15px; margin-left: 10px;">
                            Menjadikan IKAA UNJ sebagai wadah dalam membangun jaringan wirausaha, karir serta pengembangan ilmu dan wawasan.
                        </p>
                        <h5>PROGRAM UNGGULAN</h5>
                        <div class="row" style="border-left: solid 4px yellow; padding-left: 10px; margin-left: 10px;">
                            <div class="col-md-1">1.</div>
                            <div class="col-md-11">
                                <p>
                                    Membuat sistem terpadu berbasis WEB dan WhatsApp grup sebagai wadah bertukar informasi lowongan kerja dan bisnis.
                                </p>
                            </div>
                        </div>
                        <div class="row" style="border-left: solid 4px #56C65F; padding-left: 10px; margin-left: 10px;">
                            <div class="col-md-1">2.</div>
                            <div class="col-md-11">
                                <p>
                                    Membuat program pengembangan seperti Brevet, Bootcamp, dan mentoring bisnis.
                                </p>
                            </div>
                        </div>
                        <div class="row" style="border-left: solid 4px yellow; padding-left: 10px; margin-left: 10px;">
                            <div class="col-md-1">3.</div>
                            <div class="col-md-11">
                                <p>
                                    Mempererat tali silaturahmi dengan pengadaan olahraga bersama.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="isi2">
                <div class="card" id="card-progul" style="border: 0px;">
                    <div class="card-body">
                        <h5>MISI</h5>
                        <div class="row" style="border-left: solid 4px yellow; padding-left: 10px; margin-left: 10px;">
                            <div class="col-md-1">1.</div>
                            <div class="col-md-11">
                                <p>
                                    Memperluas jaringan wirausaha dalam lingkup interal seperti membangun sistem yang terpadu, 
                                    serta dalam ruang lingkup eksternal seperti berkolaborasi dengan organisasi pengusaha lainnya.
                                </p>
                            </div>
                        </div>
                        <div class="row" style="border-left: solid 4px #56C65F; padding-left: 10px; margin-left: 10px;">
                            <div class="col-md-1">2.</div>
                            <div class="col-md-11">
                                <p>
                                    Mempererat jaringan karir baik dalam ruang lingkup internal seperti pemberitahuan lowongan 
                                    pekerjaan dari sistem terpadu, dan mengembangkan jaringan karir dalam lingkup eksternal sperti berkolaborasi 
                                    dengan organisasi profesi dan pihak eksternal lainnya.
                                </p>
                            </div>
                        </div>
                        <div class="row" style="border-left: solid 4px yellow; padding-left: 10px; margin-left: 10px;">
                            <div class="col-md-1">3.</div>
                            <div class="col-md-11">
                                <p>
                                    Mengaktifkan IKAA UNJ sebagai pusat pengembangan ilmu pengetahuan dan wawasan sesuai dengan kebutuhan
                                    dan tantangan zaman.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section8">
        <div class="container" style="margin-top: 20px;">
            <div id="head8">
                <h3>STRUKTUR ORGANISASI</h3>
                <span>Ikatan Alumni Akuntansi Universitas Negeri Jakarta</span>
            </div>
            <div style="padding: 40px;">
                <img class="imgbagan" src="<?= base_url() ?>asset/Bagan Struktur Organisasi IKAA UNJ.png" alt="">
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="container" style="padding-bottom: 20px;">
            <h3>KOMENTAR</h3>
            <div style="padding-top: 50px; display: flex;">
                <div class="col-md-4">
                    <div class="box">
                        <i class="fas fa-quote-left fa2"></i>
                        <div class="text">
                            <i class="fas fa-quote-right fa1"></i>
                            <div>
                                <button alt="Avatar" class="avatar"></button>
                                <h3>Quote</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum velit repudiandae sed aspernatur enim hic? Totam nam quidem tenetur velit doloremque esse, repellat accusantium ducimus at dignissimos sunt, qui facilis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box2">
                        <i class="fas fa-quote-left fa2"></i>
                        <div class="text">
                            <i class="fas fa-quote-right fa1"></i>
                            <div>
                                <button alt="Avatar" class="avatar"></button>
                                <h3>Quote</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum velit repudiandae sed aspernatur enim hic? Totam nam quidem tenetur velit doloremque esse, repellat accusantium ducimus at dignissimos sunt, qui facilis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding-top: 50px; display: flex;">
                <div class="col-md-4">
                    <div class="box3">
                        <i class="fas fa-quote-left fa2"></i>
                        <div class="text">
                            <i class="fas fa-quote-right fa1"></i>
                            <div>
                                <button alt="Avatar" class="avatar"></button>
                                <h3>Quote</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum velit repudiandae sed aspernatur enim hic? Totam nam quidem tenetur velit doloremque esse, repellat accusantium ducimus at dignissimos sunt, qui facilis.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box4">
                        <i class="fas fa-quote-left fa2"></i>
                        <div class="text">
                            <i class="fas fa-quote-right fa1"></i>
                            <div>
                                <button alt="Avatar" class="avatar"></button>
                                <h3>Quote</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum velit repudiandae sed aspernatur enim hic? Totam nam quidem tenetur velit doloremque esse, repellat accusantium ducimus at dignissimos sunt, qui facilis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>
<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("navbarSupportedContent");
    var btns = header.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
