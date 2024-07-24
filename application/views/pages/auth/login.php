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
        }
    </style>
</head>
<body>

    <div class="container" style="padding-top: 20px; width: 500px;">
        <div style="text-align: center; padding-bottom: 20px;">
            <img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" width="150px" alt="">
        </div>
        <form action="<?= base_url() ?>home" method="post" style="padding: 20px;">
            <div class="container">
                <h2 align="center" style="padding-bottom: 20px;">Login Form</h2>
                <label for="uname"><b>Username</b></label>
                <input type="text" style="border-radius: 12px;" id="uname" placeholder="Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" style="border-radius: 12px;" placeholder="Password" name="psw" required>
                    
                <button type="submit" style="border-radius: 12px;">Login</button>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                <span style="float: right;">Lupa <a href="#">password?</a></span>
            </div>
            <div style="text-align: center;">
                <span class="psw"> Baru di platform kami? <a href="<?= base_url() ?>registrasi" style="text-decoration: none;" name="remember"> Buat Akun</a></span>
            </div>
        </form>
    </div>

</body>
</html>
<!-- <script type="text/javascript">
    function numb(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
</script> -->
