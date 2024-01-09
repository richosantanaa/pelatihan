<!DOCTYPE html>
<?php
    require("config/koneksi.php");
    $db->connect();

    $qry = "select * from tb_buku";
    $res = $db->query($qry);
    
    $db->disconn();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERPUSTAKAAN UNPAM</title>
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
            <!-- Start sidebar -->
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
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        <li class="breadcrumb-item active">Buku</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-12 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header bg-warning text-dark">Daftar Peminjaman Buku</h5>
                            <div class="card-body">
                                <a class="btn btn-warning btn-sm" href="tambahbuku.php">
                                    Tambah Buku
                                </a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Buku</th>
                                                <th>Judul Buku</th>
                                                <th>Kategori</th>
                                                <th>Pengarang</th>
                                                <th>Penerbit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
<?php
    if($res->num_rows > 0) {
        $no = 1;
        while($row = $res->fetch_assoc()) {
?>
                                            <tr>
                                                <th><?php echo $no;?>.</th>
                                                <td><?php echo $row["id_buku"];?></td>
                                                <td><?php echo $row["judul_buku"];?></td>
                                                <td><?php echo $row["Kategori"];?></td>
                                                <td><?php echo $row["pengarang"];?></td>
                                                <td><?php echo $row["penerbit"];?></td>
                                                <td>
                                                    <a href="editbuku.php?id=<?php echo $row["id_buku"];?>" class="btn btn-sm btn-outline-success">Edit</a>
                                                    <a href="prosesbuku.php?id=<?php echo $row["id_buku"];?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                                </td>
                                            </tr>
<?php
            $no++;
        }
    }
?>
                                           
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