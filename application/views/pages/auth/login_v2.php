<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            color: #000;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 12px; 
            background-color: transparent; 
            /* border: 1px solid #000; */
            font-weight: bolder;
            transition: transform .5s;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 1);
        }

        button:hover {
            background-color: #bebebe;
            /* color: #fff; */
            font-weight: bolder;
            transform: scale(1.02);
            /* opacity: 0.8; */
        }

        h4{
            padding-bottom: 10px;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        .container {
            padding: 16px;
        }

        span.password {
            padding-top: 26px;
            font-size: 14px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.password {
                display: block;
                float: none;
            }
        }
    </style>
</head>
<body>
    <div class="container" style="padding-top: 160px; width: 500px;">
        <?= $this->session->flashdata('message'); ?>
        
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <form id="form-login" method="post" action="" style="padding: 20px; border-radius: 15px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);">
            <div class="container">
                <h3 align="center" style="font-weight: bold; padding-bottom: 30px;">Selamat Datang</h3>
                <div style="text-align: center; padding-bottom: 30px;">
                    <img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" width="150px" alt="">
                </div>
                <h4 align="center" style="font-weight: bold; padding-bottom: 30px;">Masuk Akun</h4>
                <button type="submit">Lanjutkan Dengan <img src="<?= base_url() ?>asset/Logo-v2.png" width="150px;" style="padding-left: 20px;" alt=""></button>
            </div>
        </form>
    </div>
</body>
</html>
