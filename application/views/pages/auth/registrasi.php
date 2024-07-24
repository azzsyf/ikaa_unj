<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 12px;
        }

        button {
            background-color: #006805;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            padding-top: 26px;
            font-size: 14px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
        }
    </style>
</head>
<body>

    <div class="container" style="padding-top: 20px; width: 500px;">
        <div style="text-align: center; padding-bottom: 20px;">
            <img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" width="150px" alt="">
        </div>
        <form action="<?= base_url() ?>login/login" method="post" style="padding: 20px;">
            <div class="container">
                <h2 align="center" style="padding-bottom: 40px;">Form Registrasi</h2>
                <!-- <span align="center" style="padding-bottom: 50px;">Buat akun baru</span> -->
                <div>
                    <label for="uname"><b>Nama Lengkap</b></label>
                    <input type="text" id="nama" placeholder="Nama Lengkap" name="uname" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Fakultas</b></label>
                    <input type="text" id="nama" placeholder="Fakultas" name="uname" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Program Studi</b></label>
                    <input type="text" id="nama" placeholder="Program Studi" name="uname" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" id="uname" onkeypress="return numb(event)" placeholder="Nomor Induk Mahasiswa" name="uname" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Tanggal Lahir : 1999/07/20" name="psw" required>
                </div>
                
                <button type="submit" style="border-radius: 12px;">Register</button>
            </div>

            <div style="padding-bottom: 30px; text-align: center;">
                <span class="psw"> Sudah punya akun? <a href="<?= base_url() ?>login/login" style="text-decoration: none;" name="remember"> Masuk</a></span>
            </div>
        </form>
    </div>

</body>
</html>
<script type="text/javascript">
    function numb(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script>
