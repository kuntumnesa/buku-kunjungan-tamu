<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buku Kunjungan Tamu | RSUD dr. DARSONO PACITAN</title>

    <!-- Custom fonts for this template-->
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">
    <!-- Head -->
    <div class="head text-center">
        <img src="assets/img/Logo-RSUD dr.Darsoono.png" width="150">
        <h2 class="text-white">SISTEM INFORMASI BUKU TAMU <br> RSUD dr. DARSONO PACITAN</h2>
    </div>
    <!-- end Head -->

    <!-- awal row -->
    <div class="row mt-2">
        <!-- col-lg-7 -->
        <div class="col-7 mb-3">
            <div class="card shadow bg-gradient-light">
                <!-- card-body -->
                <div class="card-body">
                <!-- <div class="p-5"> -->
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Pengunjung"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="instansi" placeholder="Asal Instansi"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="kontak" placeholder="No. HP"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tujuan" placeholder="Keperluan Berkunjung"></input>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="tanggal" placeholder="Tanggal Kunjungan"></input>
                                </div>

                                
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Simpan
                                </a>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">By MAGANG SIMRS Kuntum Khairunnesa | 2024 - <?=date('Y')?></a>
                            </div>
                            
                        <!-- </div> -->
                </div>
                <!-- end card-body -->
            </div>
        </div>
        <!-- end col-lg-7 -->

        <!-- col-lg-5 -->
        <div class="col-5 mb-3">
            <!-- card -->
            <div class="card shadow">
                <!-- card-body -->
                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td>Hari Ini</td>
                            <td>: 0</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Minggu Ini</td>
                            <td>: 0</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Bulan Ini</td>
                            <td>: 0</td>
                        </tr>
                        <br>
                        <tr>
                            <td>Keseluruhan</td>
                            <td>: 0</td>
                        </tr>
                    </table>
                </div>
                <!-- ned card-body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col-lg-5 -->

    </div>
    <!-- end row -->

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>