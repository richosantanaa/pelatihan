<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: My Unpam :.</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
</head>
<body>
    <!-- start header -->
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
            <!-- Awal sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky">
                    <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="mahasiswa.php" class="list-group-item list-group-item-action active">Mahasiswa</a>
                    <a href="matakuliah.php" class="list-group-item list-group-item-action">Matakuliah</a>
                    <a href="nilai.php" class="list-group-item list-group-item-action">Nilai</a>
                    <a href="logout.php" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </nav>
            <!-- Akhir sidebar -->

            <!-- Awal konten -->
            <main class="col-md-9 col-lg-10 px-md-4 py-3 ml-sm-auto">
               <div class="row">
                    <div class="col-12 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header bg-warning text-dark">Kelola Mahasiswa</h5>
                            <form action="mahasiswa.php" method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">NIM</label>
                                            <input type="text" class="form-control" name="nim" required>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Nama Mahasiswa</label>
                                            <input type="text" class="form-control" name="nama_mahasiswa" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">Program Studi</label>
                                            <input type="text" class="form-control" name="program_studi" required>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Angkatan</label>
                                            <input type="text" class="form-control" name="angkatan" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                                    <button type="submit" name="tambah" class="btn btn-success">Simpan</button>
                                </div>
                            </form>

                            <!-- Table for displaying existing student records -->
                            <div class="card-body">
                                <h5 class="card-header bg-warning text-dark">Daftar Mahasiswa</h5>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Program Studi</th>
                                                <th>Angkatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Populate this section with PHP to fetch and display existing student records -->
                                            <!-- Example: -->
                                            <tr>
                                                <td>191011450045</td>
                                                <td>Richo</td>
                                                <td>Teknik Informatika</td>
                                                <td>2019</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Akhir konten -->
        </div>
    </div>
</body>
</html>
