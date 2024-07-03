
    <style>
        body{
            width: 100%;
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }

        .section1{
            background: #006805;
            width: 100%;
            height: 600px;
            #div-coba{
                display: flex;
                .logo1{
                    flex: 50%;
                    transform: translateY(70px);
                    margin-top: 120px;
                    text-align: center;
                    font-weight: bolder;
                    position: absolute;
                    img{
                        width: 250px;
                    }
                }
                .text1{
                    transform: translateY(250px);
                    width: 300px;
                    height: 300px;
                    color: white;
                    margin-right: 40px;
                    text-align: right;
                    font-weight: bolder;
                    flex-grow: 1;
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
                    flex: 55%; 
                    padding-left: 40px;
                    padding-top: 30px;
                    padding-bottom: 40px;
                    padding-right: 40px;
                    color: #fff;
                    transition: 1s;
                    #coverIsi3{
                        width: 80%;
                    }
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
                    /* padding-top: 100px; */
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
                    transform: translateX(-120px) translateY(-150px);
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
                    transform: translateX(-320px) translateY(-320px) !important;
                    width: 950px !important;
                    height: 950px !important;
                }
                #img3{
                    transform: translateX(30px) translateY(115px) !important;
                    width: 450px !important;
                    height: 520px !important;
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
                    #coverIsi4{
                        width: 80%;
                    }                  
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
                    transform: translateX(-190px) translateY(-200px);
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
                    transform: translateX(-550px) translateY(-400px) !important;
                    width: 950px !important;
                    height: 950px !important;
                }
                #img4{
                    transform: translateX(250px) translateY(25px);
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
                    flex: 50%; 
                    padding-left: 40px;
                    padding-top: 40px;
                    padding-bottom: 40px;
                    padding-right: 40px;
                    color: #fff;
                    transition: 1s;
                    #coverIsi5{
                        width: 80%;
                    }
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
                    transform: translateX(-120px) translateY(-170px);
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
                    transform: translateX(-320px) translateY(-320px) !important;
                    width: 950px !important;
                    height: 950px !important;
                }
                #img5{
                    transform: translateX(-0px) translateY(115px) !important;
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
                    #coverIsi6{
                        width: 80%;
                    }                  
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
                #div-img6 #circelhover6{
                    transform: translateX(-550px) translateY(-400px) !important;
                    width: 950px !important;
                    height: 950px !important;
                }
                #img6{
                    transform: translateX(300px) translateY(115px);
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
                    #coverIsi7{
                        width: 80%;
                    }
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
                    transform: translateX(-120px) translateY(-170px);
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
                    transform: translateX(-320px) translateY(-320px) !important;
                    width: 950px !important;
                    height: 950px !important;
                }
                #img7{
                    transform: translateX(-0px) translateY(115px) !important;
                    width: 570px !important;
                    height: 570px !important;
                }
            }
        }

        .section8{
            #head8{
                text-align: center;
                h3{
                    font-weight: bolder;
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

        @media screen and (max-width: 1024px){
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
                .text2{
                    transform: translateX(700px) translateY(60px);
                    width: 300px;
                    height: 300px;
                    color: white;
                    margin-right: 40px;
                    text-align: right;
                    font-size: 20px;
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
        }

        @media screen and (min-width: 750px) AND (max-width: 1023px){

            .section1{
                background: #006805;
                width: 100%;
                height: 600px;
                #div-coba{
                    display: flex;
                    .logo{
                        flex: 50%;
                        transform: translateY(100px);
                        width: 200px;
                        height: 200px;
                        background: rgb(223, 209, 209);
                        border-radius: 50%;
                        margin: 40px;
                        margin-top: 120px;
                        text-align: center;
                        font-weight: bolder;
                        position: absolute;
                    }
                    .text{
                        transform: translateX(53px) translateY(65px);
                    }
                    .text1{
                        transform: translateY(250px);
                        width: 300px;
                        height: 300px;
                        color: white;
                        /* margin-right: 40px; */
                        text-align: right;
                        font-weight: bolder;
                        flex-grow: 1;
                    }
                    .text2{
                        transform: translateX(430px) translateY(60px);
                        width: 300px;
                        height: 300px;
                        color: white;
                        margin-right: 40px;
                        text-align: right;
                        font-size: 20px;
                        flex-grow: 1;
                    }
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
                        flex: 70%; 
                        padding-left: 40px;
                        padding-top: 30px;
                        padding-bottom: 40px;
                        padding-right: 0px;
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
                        flex: 30%;
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
                        padding-right: -20px !important;
                        transition: all 1s ease-in-out;
                    }
                    #div-img3 #circelhover{
                        transform: translateX(-230px) translateY(-300px) !important;
                        width: 780px !important;
                        height: 780px !important;
                    }
                    #img3{
                        transform: translateX(-50px) translateY(100px) !important;
                        width: 430px !important;
                        height: 480px !important;
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
                        transform: translateX(-190px) translateY(-150px);
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
                        transform: translateX(-780px) translateY(-500px) !important;
                        width: 950px !important;
                        height: 950px !important;
                    }
                    #img4{
                        transform: translateX(470px) translateY(190px);
                        width: 650px;
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
                #head2{
                    text-align: center;
                    font-size: small;
                }
                h3{
                    font-weight: bolder;
                    font-size: 20px;
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
                    #img3{
                        transform: translateX(-190px) translateY(-170px);
                        width: 350px;
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
                        transform: translateX(-230px) translateY(-300px) !important;
                        width: 780px !important;
                        height: 780px !important;
                    }
                    #img3{
                        transform: translateX(-50px) translateY(100px) !important;
                        width: 480px !important;
                        height: 480px !important;
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
                    #isi4{
                        padding-left: 0px !important;
                        padding-right: 20px !important;
                        transition: all 1s ease-in-out;
                    }  
                    #div-img4 #circelhover4{
                        transform: translateX(-850px) translateY(-500px) !important;
                        width: 950px !important;
                        height: 950px !important;
                    }
                    #img4{
                        transform: translateX(500px) translateY(190px);
                        width: 650px;
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
                #head2{
                    text-align: center;
                    font-size: small;
                }
                h3{
                    font-weight: bolder;
                    font-size: 20px;
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
                        transform: translateX(-135px) translateY(-188px);
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
                        transform: translateX(-120px) translateY(-80px) !important;
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
                            transform: translateX(-10px) translateY(230px);
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
                        transform: translateX(-140px) translateY(190px) !important;
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
                        transform: translateX(-135px) translateY(-188px);
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
                    #div-img5 #circelhover{
                        transform: translateX(-120px) translateY(-80px) !important;
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
                            transform: translateX(-10px) translateY(230px);
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
                        transform: translateX(-140px) translateY(190px) !important;
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

        @media screen and (min-width: 400px) AND (max-width: 500px) {
            .section2{
                padding: 0px;
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
                    font-size: 20px;
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
                <p>Ikatan Alumni Akuntansu UNJ</p>
            </div>
        </div>
    </div>
    <div class="section2">
        <div id="head2">
            <h3>VISI, MISI & PROGRAM UNGGULAN</h3>
            <span>Ikatan Alumni Akuntansi Universitas Negeri Jakarta</span>
        </div>
        <div id="div-isi2">
            <div id="isi2">
                <h5>VISI</h5>
                <p>
                    Menjadikan IKAA UNJ sebagai wadah dalam membangun jaringan wirausaha, karir serta pengembangan ilmu dan wawasan.
                </p>
                <h5>MISI</h5>
                <p>
                    Memperluas jaringan wirausaha dalam lingkup interal seperti membangun sistem yang terpadu, 
                    serta dalam ruang lingkup eksternal seperti berkolaborasi dengan organisasi pengusaha lainnya.
                </p>
                <p>
                    Mempererat jaringan karir baik dalam ruang lingkup internal seperti pemberitahuan lowongan 
                    pekerjaan dari sistem terpadu, dan mengembangkan jaringan karir dalam lingkup eksternal sperti berkolaborasi 
                    dengan organisasi profesi dan pihak eksternal lainnya.
                </p>
                <p>
                    Mengaktifkan IKAA UNJ sebagai pusat pengembangan ilmu pengetahuan dan wawasan sesuai dengan kebutuhan
                    dan tantangan zaman.
                </p>

            </div>
            <div id="isi2">
                <h5>PROGRAM UNGGULAN</h5>
                <div class="row">
                    <div class="col-md-1">1.</div>
                    <div class="col-md-11">
                        Membuat sistem terpadu berbasis WEB dan WhatsApp grup sebagai wadah bertukar informasi lowongan kerja dan bisnis.
                    </div>
                    <div class="col-md-1">2.</div>
                    <div class="col-md-11">
                        Membuat program pengembangan seperti Brevet, Bootcamp, dan mentoring bisnis.
                    </div>
                    <div class="col-md-1">3.</div>
                    <div class="col-md-11">
                        Mempererat tali silaturahmi dengan pengadaan olahraga bersama.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section3">
        <div id="div-isi3">
            <div id="isi3">
                <div id="coverIsi3">
                    <div style="font-size: 16px;">
                        <b>Muzaki Andriawan P., S.E., BKP., CTAP.</b>
                    </div>
                    <div style="font-size: 14px;">
                        Ketua IKA Akuntansi UNJ
                    </div>
                    <div id="text-pkj3" style="font-size: 13px; padding-top: 15px; padding-bottom: 5px;">
                        <b>PEKERJAAN</b>
                    </div>
                    <div id="pkj3" style="font-size: 12px;">
                        <li>Managing Partner (CEO) - PT. Jawara Mitra Consulting, Oktober 2015 - Sekarang</li>
                        <li>Tax Manager - PT. Zona Mitra Solution, Februari 2017 - Oktober 2019</li>
                        <li>Tax Leader - PT. Japan Asia Consultans, Juni 2012 - Januari 2017</li>
                        <li>Managing Partner PT. Cakra Ragheda Mustika (CRM) Business Strategic Consulting</li>
                        <li>CFO Digifile (Startup Technology)</li>
                    </div>
                    <div id="text-po3" style="font-size: 13px; padding-top: 15px; padding-bottom: 5px;">
                        <b>PENGALAMAN ORGANISASI</b>
                    </div>
                    <div id="po3" style="font-size: 12px;">
                        <li>Ketua Asosiasi Konsultan Pajak Publik Indonesia Cabang Depok,</li>
                        <li>Ketua kompartmen perpajakan SENTRAL (Semangat Enterpreuner Nasional).</li>
                    </div>
                    <div style="padding-top: 15px;">
                        <span><i class="fab fa-whatsapp"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tiktok"></i> <i class="fab fa-linkedin"></i> </span>
                    </div>
                </div>  
            </div>
            <div id="div-img3">
                <div id="circelhover">
                    <img id="img3" src="asset/pak_muzaki.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section4">
        <div id="div-isi4">
            <div id="div-img4">
                <div id="circelhover4">
                    <img id="img4" src="asset/mas_canda.png" alt="">
                </div>
            </div>
            <div id="isi4">
                <div id="coverIsi4">
                    <h5>R.M. Canda Hadipta Janapriya S.E., Ak, CPA.</h5>
                    <span>Wakil Ketua 1 IKA Akuntansi UNJ</span>
                    <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out 
                        print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century 
                        who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                    </p>
                    <span><i class="fab fa-whatsapp"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tiktok"></i> <i class="fab fa-linkedin"></i> </span>
                </div>
                
            </div>
        </div>
    </div>
    <div class="section5">
        <div id="div-isi5">
            <div id="isi5">
                <div id="coverIsi5">
                    <h5>Safier Ramdani</h5>
                    <span>Wakil Ketua 2 IKA Akuntansi UNJ</span>
                    <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out 
                        print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century 
                        who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                    </p>
                    <span><i class="fab fa-whatsapp"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tiktok"></i> <i class="fab fa-linkedin"></i> </span>
                </div>  
            </div>
            <div id="div-img5">
                <div id="circelhover">
                    <img id="img5" src="asset/man1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section6">
        <div id="div-isi6">
            <div id="div-img6">
                <div id="circelhover6">
                    <img id="img6" src="asset/man2.png" alt="">
                </div>
            </div>
            <div id="isi6">
                <div id="coverIsi6">
                    <h5>Hananto Haryadi</h5>
                    <span>Bendahara IKA Akuntansi UNJ</span>
                    <p>
                        Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out 
                        print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century 
                        who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.
                    </p>
                    <span><i class="fab fa-whatsapp"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tiktok"></i> <i class="fab fa-linkedin"></i> </span>
                </div>
            </div>
        </div>
    </div>
    <div class="section7">
        <div id="div-isi7">
            <div id="isi7">
                <div id="coverIsi7">
                    <h5>Rahman Wahyudi</h5>
                    <span>Sekretaris IKA Akuntansi UNJ</span><br>
                    <div id="text-pkj7" style="padding-top: 5px; padding-bottom: 5px;">
                        <b>PEKERJAAN</b>
                    </div>
                    <div id="pkj7" style="font-size: 12px;">
                        <li>Managing Partner (CEO) - PT. Jawara Mitra Consulting, Oktober 2015 - Sekarang</li>
                        <li>Tax Manager - PT. Zona Mitra Solution, Februari 2017 - Oktober 2019</li>
                        <li>Tax Leader - PT. Japan Asia Consultans, Juni 2012 - Januari 2017</li>
                        <li>Managing Partner PT. Cakra Ragheda Mustika (CRM) Business Strategic Consulting</li>
                        <li>CFO Digifile (Startup Technology)</li>
                    </div>
                    <div id="text-po7" style="padding-top: 5px; padding-bottom: 5px;">
                        <b>PENGALAMAN ORGANISASI</b>
                    </div>
                    <div id="po7" style="font-size: 12px;">
                        <li>Ketua Asosiasi Konsultan Pajak Publik Indonesia Cabang Depok,</li>
                        <li>Ketua kompartmen perpajakan SENTRAL (Semangat Enterpreuner Nasional).</li>
                    </div>
                    <span><i class="fab fa-whatsapp"></i> <i class="fab fa-instagram"></i> <i class="fab fa-tiktok"></i> <i class="fab fa-linkedin"></i> </span>
                </div>  
            </div>
            <div id="div-img7">
                <div id="circelhover">
                    <img id="img7" src="asset/man1.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section8">
        <div class="container" style="margin-top: 40px;">
            <div id="head8">
                <h3>STRUKTUR ORGANISASI</h3>
                <span>Ikatan Alumni Akuntansi Universitas Negeri Jakarta</span>
            </div>
            <div style="padding: 40px;">
                <img class="imgbagan" src="asset/Bagan Struktur Organisasi IKAA UNJ.png" alt="">
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
