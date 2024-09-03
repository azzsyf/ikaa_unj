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
        <form action="<?= base_url() ?>auth/save_registrasi" method="post" style="padding: 20px; border-radius: 12px;">
            <div class="container">
                <h2 align="center" style="padding-bottom: 40px;">Form Registrasi</h2>
                <!-- <span align="center" style="padding-bottom: 50px;">Buat akun baru</span> -->
                <div>
                    <label for="nama"><b>Nama Lengkap</b></label>
                    <div id="passwordHelpBlock" class="form-text">
                        (Sesuai KTP)
                    </div>
                    <input class="form-control" type="text" id="nama" name="nama" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Tempat Lahir</b></label>
                    <input class="form-control" type="text" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Tanggal Lahir</b></label>
                    <input class="form-control" type="date" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Alamat</b></label>
                    <textarea class="form-control" type="text" id="alamat" name="alamat" required></textarea>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Angkatan</b></label>
                    <input class="form-control" type="text" id="angkatan" name="angkatan" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Program Studi</b></label>
                    <input class="form-control" type="text" id="prodi" name="prodi" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>No. Hp</b></label>
                    <input class="form-control" type="text" id="no_hp" name="no_hp" onkeypress="return numb(event)" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Email</b></label>
                    <input class="form-control" type="email" id="email" placeholder="email@example.com" name="email" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Pekerjaan saat ini</b></label>
                    <input class="form-control" type="text" id="pekerjaan" name="pekerjaan" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="uname"><b>Jabatan</b></label>
                    <input class="form-control" type="text" id="jabatan" name="jabatan" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="instansi"><b>Nama Instansi</b></label>
                    <input class="form-control" type="text" id="instansi" name="instansi" required>
                </div>
                <div style="padding-top: 10px;">
                    <label class="form-label" for="username"><b>Username</b></label>
                    <input class="form-control" type="text" id="username" name="username" required>
                </div>
                <div style="padding-top: 10px;">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" id="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
                
                <button type="submit" style="border-radius: 12px;">Register</button>
            </div>

            <div style="padding-bottom: 30px; text-align: center;">
                <span class="psw"> Sudah punya akun? <a href="<?= base_url() ?>auth" style="text-decoration: none;" name="remember"> Masuk</a></span>
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
