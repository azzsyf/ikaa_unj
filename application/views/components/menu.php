<style>

    *{
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }

    a{
        color: #7f8db0;
        text-decoration: none;
    }

    .wrapper{
        width: 100%;
        height: 100%;
    }

    .navbar .navbar_right .profile,
    .navbar .navbar_right .notifications{
        position: relative;
    }

    .navbar .profile .profile_dd,
    .notification_dd{
        position: absolute;
        top: 90px;
        right: 15px;
        user-select: none;
        background: #fff;
        border: 1px solid #c7d8e2;
        width: 350px;
        height: auto;
        display: none;
        border-radius: 3px;
        box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
                    -10px -10px 35px rgba(0,0,0,0.125);
    }

    .navbar .profile .profile_dd:before,
    .notification_dd:before{
        content: "";
        position: absolute;
        top: -20px;
        right: 15px;
        border: 10px solid;
        border-color: transparent transparent #fff transparent;
    }

    .notification_dd li {
        border-bottom: 1px solid #f1f2f4;
        padding: 10px 20px;
        display: flex;
        align-items: center;
    }

    .notification_dd li .notify_icon{
        display: flex;
    }

    .navbar .navbar_right .profile .icon_wrap{
        display: flex;
        align-items: center;
    }

    .navbar .navbar_right .profile .name{
        display: inline-block;
        margin: 0 10px;
    }

    .navbar .navbar_right .icon_wrap:hover,
    .navbar .navbar_right .profile.active .icon_wrap,
    .navbar .navbar_right .notifications.active .icon_wrap{
        color: #3b80f9;
    }
    
    .navbar .profile .profile_dd{
        width: 225px;
        border-radius: 12px;
    }
    .navbar .profile .profile_dd:before{
        rigth: 10px;
    }

    .navbar .profile .profile_dd ul li {
        border-bottom: 1px solid #f1f2f4;
    }

    .navbar .profile .profile_dd ul li  a{
        display: block;
        padding: 15px 35px;
        position: relative;
    }

    .navbar .profile .profile_dd ul li  a .picon{
        width: 30px;
    }

    .navbar .profile .profile_dd ul li  a:hover{
    color: #3b80f9;
    background: #f0f5ff;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    }

    .navbar .profile .profile_dd ul li.profile_li a:hover {
        background: transparent;
        cursor: default;
        color: #7f8db0;
    }

    .navbar .profile .profile_dd ul li .btn{
        height: 32px;
        padding: 7px 10px;
        color: #fff;
        border-radius: 3px;
        cursor: pointer;
        text-align: center;
        background: #3b80f9;
        width: 125px;
        margin: 5px auto 15px;
    }

    .navbar .profile .profile_dd ul li .btn:hover{
        background: #6593e4;
    }

    .navbar .profile.active .profile_dd,
    .navbar .notifications.active .notification_dd{
        display: block;
    }

    .popup {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all 0.2s ease;
        display: none;
    }

    .popup .shadow {
        width: 100%;
        height: 100%;
        background: #000;
        opacity: 0.5;
    }

    .popup .inner_popup {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 100%;
        height: auto;
    }

    .popup .notification_dd{
        display: block;
        position: static;
        margin: 0 auto;
        height: 357px;
        overflow: auto;
    }

    .popup .notification_dd:before{
        display: none;
    }

    .popup .notification_dd li.title{
        font-weight: 700;
        color: #3b80f9;
        display: flex;
        justify-content: center;
        position: relative;
    }

    .popup .notification_dd li.title .close{
        position: absolute;
        top: 2px;
        right: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .popup .notification_dd li.title .close:hover{
        opacity: 0.5;
    }



    nav{
        width: 100%;
        z-index: 1;
    }
    .navbar-brand {
        padding-left: 50px;
        font-weight: bolder;
        font-size: 20px;
        color: #006805;
    }
    #navbarSupportedContent {
        padding-left: 10%;
    }

    .nav-link {
        display: inline-block;
        text-decoration: none;
        font-weight: bolder;
        font-size: 12px;
        color: #000000;
    }

    .nav-link::after {
        content: '';
        position: relative;
        display: block;
        width: 0;
        height: 2px;
        background: #006805;
        transition: width .3s;
    }

    .nav-link:hover::after {
        width: 100%;
        transition: width .3s;
    }

    .nav-link:after{
        left: 50%;
        transform: translateX(-50%);
    }

    ul, .nav-link{
        padding: 10px;
        /* color: #000000; */
        &:hover{
            color: #006805;
        }
    }

    
    .avatar {
        margin-right: 20px;
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 0px;
        background: url('<?= base_url() ?>asset/profil-anon.jpg');
        background-size: cover;
    }

    .avatar-profil{
        margin-right: 20px;
        vertical-align: middle;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 0px;
        background-color: #56C65F;
    }

    @media screen and (min-width: 768px) AND (max-width: 990px) {
        nav{
                width: 100%;

            }
    }

    @media screen and (min-width: 615px) AND (max-width: 767px) {
        nav{
            width: 100%;
            button{
                margin-right: 20px;
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
    }

    @media screen and (min-width: 376px) AND (max-width: 425px) {
        nav{
            width: 100%;
            button{
                margin-right: 20px;
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
    }

    @media screen and (min-width: 1024px){
        .navbar-brand {
            padding-left: 6%;
            font-weight: bolder;
            font-size: 30px;
            color: #006805;
        }

        .nav-link {
            font-size: 14px;
        }
    }

</style>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="position: fixed;">
        <a class="navbar-brand" href="#"><img src="<?= base_url() ?>asset/Logo IKA Akuntansi UNJ bulet.png" alt="" width="80px"> IKAA UNJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
                $data = $this->session->userdata('email');
            ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home') ?>">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('organisasi') ?>">ORGANISASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('alumni') ?>">DATA ALUMNI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('karir') ?>">KARIR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('acara') ?>">ACARA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('berita') ?>">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kontak') ?>">KONTAK</a>
                </li>
            </ul>
            <?php 
                $data = $this->session->userdata('email');
                $data2 = $this->db->get_where('profil', ['email' => $data])->row_array();
                // var_dump($data2);
            ?>
            <?php if(!empty($data)){ ?>
                <div class="profile">
                    <div class="icon_wrap">
                        <button alt="Avatar" class="avatar"></button>
                    </div>

                    <div class="profile_dd">
                        <ul class="profile_ul">
                            <div style="border: 1px solid; border-radius: 12px; width: 200px; padding: 10px;">
                                <div class="row">
                                    <div class="col-md-3">
                                        <?php if($this->session->userdata('email')){ ?>
                                            <?php 
                                                $data_cs = $this->db->get_where('profil', ['email' => $this->session->userdata('email')])->row_array(); 
                                                $explode = explode(' ', $data_cs['nama_lengkap']);
                                            ?>
                                            <?php if(count($explode) == 1) { ?>
                                                <button alt="Avatar" class="avatar-profil"></i><?= substr($explode[0], 0,1) ?></button>
                                            <?php }elseif(count($explode) >= 2){ ?>
                                                <button alt="Avatar" class="avatar-profil"></i><?= substr($explode[0], 0,1).substr($explode[1], 0,1) ?></button>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-9" style="font-size: 12px;">
                                        <span><?= $data2['nama_lengkap']; ?></span><br>
                                        <span><?= $data2['id_anggota']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <li><a class="profile" href="<?= base_url('profile') ?>"><span class="picon" style="margin-left: -15px;"><i class="fas fa-user-alt"></i></span> Profile</a></li>
                            <li><a class="logout" href="<?= base_url('auth/logout') ?>"><span class="picon" style="margin-left: -15px;"><i class="fas fa-sign-out-alt"></i></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            <?php }else{ ?>
                <form class="d-flex" role="login" action="<?= base_url('auth') ?>">
                    <button class="btn btn-outline-success" style="padding: 5px 10px; margin-right: 20px;" type="submit">MASUK</button>
                </form>
            <?php } ?>
        </div>
    </nav>

    <script>
		$(document).ready(function(){
			$(".profile .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			  $(".notifications").removeClass("active");
			});

			$(".notifications .icon_wrap").click(function(){
			  $(this).parent().toggleClass("active");
			   $(".profile").removeClass("active");
			});

			$(".show_all .link").click(function(){
			  $(".notifications").removeClass("active");
			  $(".popup").show();
			});

			$(".close").click(function(){
			  $(".popup").hide();
			});
		});
	</script>