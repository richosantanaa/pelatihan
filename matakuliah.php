<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Unpam </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>
    <!-- Start header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"> PERPUSTAKAAN UNPAM </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End header -->

    <div class="container-fluid">
        <div class="row">
            <!-- Start sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="mahasiswa.php" class="list-group-item list-group-item-action">Mahasiswa</a>
                    <a href="matakuliah.php" class="list-group-item list-group-item-action active">Mata Kuliah</a>
                    <a href="nilai.php" class="list-group-item list-group-item-action">Nilai</a>
                    <a href="#" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </nav>
            <!-- End sidebar -->

            <!-- Start content -->
            <main class="col-md-9 col-lg-10 px-md-4 py-3 ml-sm-auto">
               <div class="row">
                    <div class="col-12 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header bg-warning text-dark">Menu Mata Kuliah</h5>
                            <div class="card-body">
                                <p>ini menu Mata Kuliah. Anda dapat menambahkan tautan, informasi, atau konten apa pun yang terkait dengan pelajaran anda di sini.</p>
                                <!-- Example: Links to specific courses -->
                                <ul>
                                    <li><a href="course1.php">Etika Profesi</a></li>
                                    <li><a href="course2.php">Basis Data</a></li>
                                    <li><a href="course3.php">Fisika Dasar II</a></li>
                                    <li><a href="course4.php">Komputer Grafik</a></li>
                                    <li><a href="course5.php">Jaringan Komputer</a></li>
                                    <!-- Add more courses as needed -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- End content -->
        </div>
    </div>
</body>
</html>
