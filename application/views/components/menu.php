<style>
    nav{
        width: 100%;
        z-index: 1;
    }
    .navbar-brand {
        padding-left: 6%;
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
        color: #006805;
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

    .nav-link:active{
        color: #006805;
    }

    ul, .nav-link{
        padding: 10px;
        color: #000000;
        &:hover{
            color: #006805;
        }
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
        <a class="navbar-brand" href="#">IKAA UNJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home') ?>">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('organisasi') ?>">ORGANISASI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#anggota">DATA ALUMNI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#karir">KARIR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#acara">ACARA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#berita">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">KONTAK</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <button class="btn btn-outline-success" style="padding: 5px 10px; margin-right: 20px;" type="submit">MASUK</button>
            </form>
        </div>
    </nav>