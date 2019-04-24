<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register - OUTERFEST(an Interfest 2.0)</title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css" />
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animations.css">
    <link rel="stylesheet" type="text/css" href="https://schematics.its.ac.id/css/materialform.css">
    <style>
        .form {
            position: relative;
            z-index: 99;
        }

        #register .form {
            width: 70%;
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

        /* .form-container {
            border: 2px solid white;
            border-radius: 2px;
            padding: 5em;
            padding-top: 3em;
        } */

        h1 {
            color: white;
            font: 100% SFProBold;
            font-size: 3rem;
            z-index: 1;
        }

        .custom-radio {
            margin-top: 1em;
            margin-bottom: 1.5em;
        }

        .custom-control-label {
            color: white;
        }

        .custom-file-uploader {
            position: relative;
        }

        .custom-radio {
            margin-top: 1em;
            margin-bottom: 1.5em;
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

        .form-control {
            background-color: transparent !important;
        }
    </style>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url(); ?>assets/img/outerfest_logo_sml.png" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="<?= base_url(); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        EVENT
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">NPC</a>
                        <a class="dropdown-item" href="#">NLC</a>
                        <a class="dropdown-item" href="#">NST</a>
                        <a class="dropdown-item" href="#">REEVA</a>
                    </div>
                </li>
                <li class="nav-item nav-login">
                    <a class="scroll nav-link" href="<?= base_url('home/login'); ?>">
                        <?php
                        if ($this->session->userdata('email')) {
                            echo "DASHBOARD";
                        } else
                            echo "LOGIN";
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- end head -->
    <!-- start body -->
    <section id="register" class="animatedParent d-flex flex-column justify-content-center">
        <div class="mesh"></div>
        <div class="form-container animated fadeInUpShort">
            <?php
            if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-dark" role="alert">
                    ', $this->session->flashdata('message'), '
                </div>';
            } ?>
            <h1>Register NPC</h1>
            <form class="form" action="register_npc" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="material-form npc">
                    <input type="text" class="material-input" name="nama" value="<?= set_value('nama'); ?>" required>
                    <label class="material-label">Nama</label>
                </div>
                <div class="material-form npc">
                    <input type="text" class="material-input" name="instansi" value="<?= set_value('instansi'); ?>" required>
                    <label class="material-label">Sekolah/Instansi</label>
                </div>
                <div class="material-form npc">
                    <input type="text" class="material-input" name="email" value="<?= set_value('email'); ?>" required>
                    <label class="material-label">Email</label>
                </div>
                <?= form_error('email', '<div class="text-danger">', '</div>') ?>
                <div class="material-form npc">
                    <input type="text" class="material-input" name="asal" value="<?= set_value('asal'); ?>" required>
                    <label class="material-label">Asal Daerah</label>
                </div>
                <div class="material-form npc">
                    <input type="text" class="material-input" name="nohp" value="<?= set_value('nohp'); ?>" required>
                    <label class="material-label">No. HP</label>
                </div>
                <div class="material-form npc">
                    <input type="text" class="material-input" name="idline" value="<?= set_value('idline'); ?>">
                    <label class="material-label">IDLine</label>
                </div>
                <div class="material-form npc">
                    <input type="password" class="material-input" name="password" required>
                    <label class="material-label">Password</label>
                </div>
                <?= form_error('password', '<div class="text-danger">', '</div>') ?>
                <div class="material-form npc">
                    <input type="password" class="material-input" name="re-password" required>
                    <label class="material-label">Re-type password</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="senior" name="category" class="custom-control-input" value="2" checked>
                    <label class="custom-control-label" for="senior">Senior NPC</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="junior" name="category" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="junior">Junior NPC</label>
                </div>
                <div class="input-group">
                    <input type="text" name="identitas" class="form-control" placeholder="Upload Kartu Pelajar/Mahasiswa" readonly>
                    <span class="input-group-btn">
                        <div class="btn btn-dark custom-file-uploader">
                            <input type="file" name="file_identitas" onchange="this.form.identitas.value = this.files.length ? this.files[0].name : ''" />
                            Select a file
                        </div>
                    </span>
                </div>
                <?= form_error('identitas', '<div class="text-danger">', '</div>') ?>
                <button type="submit" class="btn event btn-npc">Register</button>
            </form>
        </div>
    </section>
    <!-- end main -->
    <!-- start footer -->
    <section id="footer">
        <div class="mesh"></div>
        <div class="logo">
            <img src="<?= base_url(); ?>assets/img/sp.png" alt="logo">
        </div>
        <div class="sosmed">
            <a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_line.png" alt="line"></a>
            <a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_ig.png" alt="ig"></a>
            <a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_fb.png" alt="fb"></a>
            <a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_tw.png" alt="twitter"></a>
            <a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_yt.png" alt="youtube"></a>
            <a href="#" target="_blank"><img src="https://schematics.its.ac.id/img/ic_ask.png" alt="ask"></a>
        </div>

        <div class="copyright">&copy; Schematics 2018</div>
    </section>
    </div>

    <div id="sponsor">
        <div class="sponsor1">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor1child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor1child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor1child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor1child">
        </div>
        <div class="sponsor2">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor2child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor2child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor2child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor2child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor2child">
        </div>
        <div class="sponsor3">
            <a href="https://idcloudhost.com/" target="_blank">
                <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor3child">
            </a>
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor3child">
            <img src="<?= base_url(); ?>assets/img/sp.png" class="sponsor3child">
        </div>
    </div>
    <!-- SCRIPT HERE -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/css3-animate-it.js"></script>

</body>

</html>