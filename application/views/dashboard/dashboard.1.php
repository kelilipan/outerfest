<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - OUTERFEST(an Interfest 2.0)</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animations.css">
    <link rel="stylesheet" type="text/css" href="https://schematics.its.ac.id/css/materialform.css">
    <style>
        .form {
             position: relative;
            z-index: 99;
        }

        #register .form {
            width: 80%;
        }

        #nav-tab a {
            display: flex;
            height: 50px;
            align-items: center;
            justify-content: center;
            flex: 1 1 auto;
            color: #777;
            text-decoration: none;
            font: 100% SFProBold;
            font-size: 1.5rem;
        }

        #nav-tab .active {
            border-bottom: 3px solid #a73e5c;
            color: #fff;
        }

        .nav-tabs {
            width: 60%;
            border: 0;
        }

        html,
        body {
            height: 100%;
        }

        .dashboard-container {
            min-height: 100%;
            position: relative;
            padding-bottom: 0 !important;
        }


        @media only screen and (min-width: 992px) {
            #sponsor {
                margin-left: -32px;
            }
        }


        .title {
            color: black !important;
        }

        .subtitle {
            font-family: SFProRegular;
            font-size: .7em;
        }

        #header {
            height: unset;
            background: white;
            padding: 0;
        }

        .nama {
            font-size: 1.1rem;
        }

        ul.info {
            list-style-type: none;
            padding-left: 16px;
        }

        p {
            color: black !important;
        }

        .bukalapak {
            color: black !important;
            padding-left: 0.5rem !important;
            display: inline-block !important;
        }

        .bukalapak img {
            height: 3rem;
            margin-left: 6px;
        }

        .npclogo {
            display: inline-block;
        }

        .center {
            text-align: center;
        }

        .material-input {
            color: black;
        }

        .btn.event {
            font: 100% SFProRegular;
            margin: 0;
            padding: 0.5em !important;
        }

        .custom-file-uploader {
            position: relative;
        }

        input[type='file'] {
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 5;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: default;
        }

        #price {
            font-size: 1.5em;
        }
    </style>
</head>

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <div class="mesh"></div>
        <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>assets/img/outerfest_logo_sml.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">PENGUMUMAN</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">TIMELINE</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AKUN
                    </a>
                    <div class="dropdown-menu dashboard-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ganti Password</a>
                        <a class="dropdown-item" href="#logout">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">

                </li>
            </ul>
        </div>
        <div class="footer">&copy; Schematics 2018</div>
    </nav>
    <!-- end head -->
    <!-- start body -->

    <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">
            <div class="alert alert-secondary">
                Selamat datang, <b>Anvaqta Tangguh Wisesa</b> !
            </div>

            <section id="header" class="mt-5">
                <div class="mx-auto mb-4 center">
                    <div class="title-event npc npclogo">NPC</div>
                </div>
            </section>
            <section class="event">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <div class="title">ANVAQTA TANGGUH WISESA <span class="subtitle">&lt;NPC0001640&gt;</span></div>
                            <div class="bottom-line npc mx-auto mt-1"></div>
                        </div>
                    </div>
                    <hr class="mt-5">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="title">Data Diri</div>
                            <div class="bottom-line npc mt-1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-danger">
                                <b>Mohon selesaikan proses pembayaran.</b>
                            </div>
                            <div class="alert alert-success">
                                <div>
                                    Transfer sebesar <span id="price"><b>Rp. 50.</b><b class="text-dark bg-success">640</b><b>,-</b></span>
                                    <br>Ke rekening
                                    <li style="margin-top:1em;">Mandiri</li>
                                    A.n : santoso <br>
                                    No.Rekening : 69696969
                                    <li style="margin-top:1em;">BNI</li>
                                    A.n : santoso <br>
                                    No.Rekening : 69696969
                                    <br><br>
                                    Kemudian Lakukan konfrimasi dengan mengunggah bukti pembayaran pada form dibawah
                                </div>
                            </div>
                            <form class="form" action="#" method="POST">
                                <!-- <p>Kartu Pelajar/Mahasiswa </p> -->
                                <div class="form-group">
                                    <label for="file" class="sr-only">File</label>
                                    <div class="input-group">
                                        <input type="text" name="filename2" class="form-control" placeholder="Upload Bukti Pembayaran" readonly>
                                        <span class="input-group-btn">
                                            <div class="btn btn-light custom-file-uploader">
                                                <input type="file" name="filebukti" onchange="this.form.filename2.value = this.files.length ? this.files[0].name : ''" />
                                                Select a file
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <button type="submit" class="btn event btn-npc">Simpan</button>
                            </form>
                            <br>
                            <div class="nama"><b>Anvaqta Tangguh Wisesa</b></div>
                            <ul class="info mt-2">
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Email</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;kak.tangguh@gmail.com</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Telp</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;082226808866</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">ID Line</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;anvaqta</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Asal Universitas</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;Telkom University</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Asal Daerah</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;Grobogan</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-3 col-sm-2">Kategori</div>
                                        <div class="col-9 col-sm-10">:&nbsp;&nbsp;&nbsp;Senior</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="title">Informasi</div>
                            <div class="bottom-line npc mt-1"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <a href="https://schematics.its.ac.id/download/rulebook_npc_senior.pdf" class="btn btn-info mt-3 mt-sm-0">Download Rulebook NPC Senior</a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <p>Untuk pertanyaan lebih lanjut, hubungi :
                                <div class="row">
                                    <div class="col-2">Rahandi</div>
                                    <div class="col-10">:&nbsp;&nbsp;08124989477 (telp) / rahandi (line)</div>
                                </div>
                                <div class="row">
                                    <div class="col-2">Ghisa</div>
                                    <div class="col-10">:&nbsp;&nbsp;Ghifarozarrr (line)</div>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="sponsor">
            <div class="sponsor1">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor1child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor1child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor1child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor1child">
            </div>
            <div class="sponsor2">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor2child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor2child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor2child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor2child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor2child">

            </div>
            <div class="sponsor3">
                <a href="https://idcloudhost.com/" target="_blank">
                    <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor3child">
                </a>
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor3child">
                <img src="<?= base_url() ?>assets/img/sp.png" class="sponsor3child">
            </div>
        </div>
    </div>
    <!-- end main -->
    <!-- start footer -->

    <!-- end footer -->
    <!-- SCRIPT HERE -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/css3-animate-it.js"></script>

</body>

</html>