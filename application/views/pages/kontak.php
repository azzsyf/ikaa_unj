<style>
    .section1{
        background: #006805;
        width: 100%;
        height: 350px;
        #head{
            padding-top: 160px;
            text-align: center;
            color: #fff;
        }
        #head h1{
            position: relative;
            z-index: 1;
            font-family: "Wittgenstein", serif;
            font-size: 70px;
        }
        h1:after {
            content: "";
            position: absolute;
            left: 50%;
            margin-left: -50px;
            bottom: 0;
            width: 100px;
            border-bottom: 2px solid #fff;
        }
    }

    .section2{
        padding-top: 10px;
    }
</style>
<div class="section1">
    <div id="head">
        <h1>Kontak Info</h1>
        <p>Ikatan Alumni Akuntansi UNJ</p>
    </div>
</div>
<div class="section2">
    <!-- <div class="container" >
        <span style="font-size: 18px;"><a style="text-decoration: none; color: #000;" href="<?= base_url() ?>home"><b>Beranda</b></a>/<a style="text-decoration: none;" href="<?= base_url() ?>kontak"><b>Kontak</b></a>/</span>
    </div>
    <div class="container" style="background: grey; padding-top: 20px;">
        <span>Kantor IKAA UNJ</span>
    </div> -->
    <div class="container" style="padding-top: 20px;">
        <div style="font-family: Wittgenstein, serif;">
            <b>Kantor Ikatan Alumni Akuntansi</b>
        </div>
        <div style="font-family: Wittgenstein, serif;">
            <b>Universitas Negeri Jakarta</b>
        </div>
        <div style="padding-top: 20px;">
            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. <br>
                The passage is attributed to an unknown typesetter in the 15th century who is thought
                to have scrambled parts <br> of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book. 
            </p>
        </div>
        <div style="padding-top: 20px;">
            <a href="https://wa.me/" style="color: #000; text-decoration: none;"><i class="fab fa-whatsapp" style="padding-right:10px;"></i>: +6285777888999</a>
        </div>
        <div class="mail">
            <a href="https://haloalumni@ikaaunj.id" style="color: #000; text-decoration: none;"><i class="fas fa-envelope" style="padding-right: 8px;"></i>: haloalumni@ikaaunj.id</a>
        </div>
    </div>
</div>