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

    <div class="container" style="padding-top: 20px; width: 500px;">
        <div style="text-align: center; padding-bottom: 20px;">
            <img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" width="150px" alt="">
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <form id="form-login" method="post" action="<?= base_url() ?>auth" style="padding: 20px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); border-radius: 15px;">
            <div class="container">
                <h2 align="center" style="padding-bottom: 20px;">Login Form</h2>

                <div class="form-group">
                    <label for="email"><b>Email</b></label>
                    <input type="text" style="border-radius: 12px;" id="email" placeholder="Email" name="email" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" style="border-radius: 12px;" placeholder="Password" name="password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                    
                <button type="submit" style="border-radius: 12px;">Login</button>
            </div>
            <div style="text-align: center;">
                <span class="password"> Baru di platform kami? <a href="<?= base_url() ?>auth/registrasi" style="text-decoration: none;" name="remember"> Buat Akun</a></span>
            </div>
        </form>
    </div>

</body>
</html>

<script>
    $("#form-login").on("submit", function(e){
        e.preventDefault();

        var email = $("#email").val();
        var password = $("#password").val();
        // console.log(email);
        
        if (email != "" && password != "") {
            $.ajax({
                url : "<?= base_url(); ?>auth/login_user",
                method : "post",
                data : $("#form-login").serialize(),
                success : function (data) {
                    var response = JSON.parse(data);
                    if(response.success == true){
                        toastr.success(response.messages);
                        setTimeout(function() {
                            window.location.href = "<?= base_url(); ?>home";
                        }, 1000)
                    }else if(response.success == false){
                        toastr.warning(response.messages);
                    }
                }
            })
        }
    });
</script>
