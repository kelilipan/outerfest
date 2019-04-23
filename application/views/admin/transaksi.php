<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard - OUTERFEST(an Interfest 2.0)</title>
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../../../assets/css/main.css" />
    <link rel="stylesheet" href="../../../assets/css/animations.css">
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
            <img src="../../../assets/img/outerfest_logo_sml.png" alt="logo">
        </a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">PESERTA</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">TRANSAKSI</a>
                </li>
                <li class="nav-item">
                    <a class="scroll nav-link" href="#">PENGUMUMAN</a>
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
    </nav>
    <!-- end head -->
    <!-- start body -->

    <div class="dashboard-container">
        <div style="min-height: 100%;padding-bottom: 5rem;">
            <div class="alert alert-secondary">
                Selamat datang, <b>Anvaqta Tangguh Wisesa</b> !
            </div>
            <div class="container">
                <div class="mt-4">
                    <div class="row">
                        <div class="col">
                            <h3 class="title">Daftar Transaksi</h3>
                            <hr>
                        </div>
                    </div>
                </div>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Waluyo bin walidi</td>
                            <td>NPC</td>
                            <td>
                                <span>Rp. 50.001,-</span>
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#buktiTransferModal" data-url="1.jpg" data-idpeserta="1">view</button></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success btn-disabled">Approved</button>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-primary">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Waluyo bin walidi</td>
                            <td>NPC</td>
                            <td>
                                <span>Rp. 50.002,-</span>
                                <button type="button" class="btn btn-sm btn-success">view</button></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">Approve</button>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-primary">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Waluyo bin walidi</td>
                            <td>NPC</td>
                            <td>
                                <span>Rp. 50.003,-</span>
                                <button type="button" class="btn btn-sm btn-success">view</button></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">Approve</button>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-primary">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Waluyo bin walidi</td>
                            <td>NPC</td>
                            <td>
                                <span>Rp. 50.004,-</span>
                                <button type="button" class="btn btn-sm btn-success">view</button></td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-warning">Approve</button>
                                    <button type="button" class="btn btn-primary">Edit</button>
                                    <button type="button" class="btn btn-primary">Detail</button>
                                </div>
                            </td>
                        </tr>
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
                                    <img src='../../../assets/img/a.png' width='100%' alt='buktiTransfer'>
                                </span>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed nesciunt, voluptatem quam nisi magnam culpa doloribus tempora sequi tempore deserunt quas facilis nemo eveniet. Aliquid labore consectetur qui id dicta!
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
    <!-- end main -->
    <!-- start footer -->

    <!-- end footer -->
    <!-- SCRIPT HERE -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../../../assets/js/main.js"></script>
    <script src="../../../assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="../../../assets/js/css3-animate-it.js"></script>
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
            var button = $(event.relatedTarget) // Button that triggered the modal
            var file = button.data('url') // Extract info from data-* attributes
            var id = button.data('idpeserta')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-title').text(id)
            modal.find('.modal-body img').attr('src', '../../../assets/img/' + file)
        })
    </script>
</body>

</html>