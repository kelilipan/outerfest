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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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

            #dashboard nav {
                width: 20%;
            }

            #dashboard .dashboard-container {
                width: 80%;
                float: right;
                padding: 32px;
            }
        }

        .event {
            padding: 0 !important;
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

        .card {
            padding: 1em;
            flex-direction: row;
            justify-content: space-between;
            margin: 0;
        }

        .card>h4 {
            margin: 0;
        }
    </style>
</head>

<body id="dashboard">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-nav-primary dashboard-nav">
        <div class="mesh"></div>
        <!-- <a class="navbar-brand" href="#">
            <img src="<?= base_url() ?>assets/img/outerfest_logo_sml.png" alt="logo">
        </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin') ?>">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin/peserta') ?>">PESERTA</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin/transaksi') ?>">TRANSAKSI</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="<?= base_url('admin/pengumuman') ?>">PENGUMUMAN</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AKUN
                    </a>
                    <div class="dropdown-menu dashboard-dropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Ganti Password</a>
                        <a class="dropdown-item" href="<?= base_url('admin/logout') ?>">Logout</a>
                    </div>
                </li>
                <li class="nav-item ">
                </li>
            </ul>
        </div>
    </nav>
    <!-- end head -->
    <!-- start body -->

    <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">
            <div class="alert alert-secondary">
                Selamat datang, <b><?= $this->session('namaAdmin') ?></b> !
            </div>
            <div class="container">
                <div class="mt-4">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Dashboard</h3>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 card text-white bg-primary">
                            <h4>Total Peserta</h4>
                            <h4><?= $total ?></h4>
                        </div>
                        <div class="col-lg-3 col-md-3 card text-white bg-success">
                            <h4>Terdaftar</h4>
                            <h4><?= $terdaftar ?></h4>
                        </div>
                        <div class="col-lg-3 col-md-3 text-white bg-warning card">
                            <h4>Need Approval</h4>
                            <h4><?= $approve ?></h4>
                        </div>
                        <div class="col-lg-3 col-md-3 card text-white bg-danger">
                            <h4>Closed</h4>
                            <h4><?= $closed ?></h4>
                        </div>
                    </div>
                </div>
                <h3 class="title mt-4">Need Approval</h3>
                <hr>
                <span>Silahkan cek pembayaran melalui bank. Jika sudah,tekan tombol approve</span>
                <table class="table table-hover table-responsive-sm mt-3" id="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Event</th>
                            <th scope="col">Bukti Pembayaran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($peserta as $d) { ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $d['nama'] ?></td>
                                <td><?= strtoupper($this->Events->getEventNameById($d['id_event'])) ?></td>
                                <td>
                                    <span>Rp. 50.001,-</span>
                                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#buktiTransferModal" data-url="<?= $d['url'] ?>" data-idpeserta="1">view</button></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <?php
                                        if ($d['status'] == 3) {
                                            echo '<button type="button" class="btn btn-success" disabled>Approved</button>';
                                        } else {
                                            echo '<a href=' . base_url('admin/approve/') . $d['id_peserta'] . ' class="btn btn-warning">Approve</a>';
                                        }
                                        ?>
                                        <!-- <button type="button" class="btn btn-primary">Detail</button> -->
                                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#detailPeserta" data-id="<?= $d['id_peserta'] ?>" data-nama="<?= $d['nama'] ?>" data-email="<?= $d['email'] ?>" data-instansi="<?= $d['instansi'] ?>" data-asal="<?= $d['asal'] ?>" data-nohp="<?= $d['nohp'] ?>" data-idline="<?= $d['idline'] ?>" data-status="<?= $d['status'] ?>" data-event="<?= strtoupper($this->Events->getEventNameById($d['id_event'])) ?>" data-identitas="<?= $d['identitas'] ?>">Detail</button> -->
                                    </div>
                                </td>
                            </tr>
                        <?php
                    }; ?>
                    </tbody>
                </table>
                <div class="modal fade" id="buktiTransferModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span id='ex1'>
                                    <img src='<?= base_url() ?>assets/img/a.png' width='100%' alt='buktiTransfer'>
                                </span>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="detailPeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nama">Ubah Peserta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" srcset="" id="identitas">
                    <ul class="info mt-2">
                        <li>
                            <div class="row">
                                <div class="col-3 ">Email</div>
                                <div class="col-9" id="email"></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 ">Telp</div>
                                <div class="col-9" id="nohp"></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 ">ID Line</div>
                                <div class="col-9" id="idline"></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 ">Instansi</div>
                                <div class="col-9" id="instansi"></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 ">Asal</div>
                                <div class="col-9" id="asal"></div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-3 ">Kategori</div>
                                <div class="col-9" id="event"></div>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
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
    <script src="<?= base_url() ?>assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/css3-animate-it.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#ex1').zoom();
            $('#table').DataTable();
            $('#ex1')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom();
        });

        $('#buktiTransferModal').on('show.bs.modal', function(event) {
            // console.log('asu')
            var button = $(event.relatedTarget) // Button that triggered the modal
            var file = button.data('url') // Extract info from data-* attributes
            var id = button.data('idpeserta')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(id)
            modal.find('.modal-body img').attr('src', file)
        })
        $('#detailPeserta').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_peserta = button.data('id') // Extract info from data-* attributes
            var nama = button.data('nama') // Extract info from data-* attributes
            var email = button.data('email')
            var instansi = button.data('instansi')
            var asal = button.data('asal')
            var nohp = button.data('nohp')
            var idline = button.data('idline')
            var event = button.data('event')
            var identitas = button.data('identitas')
            var status = button.data('status') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            console.log('asdsa')
            // modal.find('.modal-body #id_peserta').attr('value', id_peserta)
            modal.find('.modal-body #identitas').attr('src', "<?= base_url('uploads/identitas/') ?>" + identitas)
            modal.find('#nama').html(nama)
            modal.find('.modal-body #email').html(": " + email)
            modal.find('.modal-body #instansi').html(": " + instansi)
            modal.find('.modal-body #asal').html(": " + asal)
            modal.find('.modal-body #nohp').html(": " + nohp)
            modal.find('.modal-body #idline').html(": " + idline)
            modal.find('.modal-body #status').html(": " + status)
            modal.find('.modal-body #event').html(": " + event)
        })
    </script>
</body>

</html>