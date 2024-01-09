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
            <a href="#" class="navbar-brand"> PERPUSTAKAAN UNPAM</a>
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
                    <a href="#" class="list-group-item list-group-item-action">dashboard</a>
                    <a href="#" class="list-group-item list-group-item-action">Mahasiswa</a>
                    <a href="#" class="list-group-item list-group-item-action">Matakuliah</a>
                    <a href="#" class="list-group-item list-group-item-action">Nilai</a>
                    <a href="#" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </nav>
            <!-- Akhir sidebar -->

            <!-- Awal konten -->
            <main class="col-md-9 col-lg-10 px-md-4 py-3 ml-sm-auto">
               <div class="row">
                    <div class="col-12 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header bg-warning text-dark">Tambah Buku</h5>
<?php
    require("config/koneksi.php");
    $db->connect();

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $sql = "SELECT * FROM tb_buku WHERE id_buku='$id'";
        $result = $db->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
?>
                            <form action="prosesbuku.php" method="post">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">ID Buku</label>
                                            <input type="text" class="form-control" name="id_buku" value="<?php echo $row['id_buku'];?>" required>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Judul Buku</label>
                                            <input type="text" class="form-control" name="judul_buku" value="<?php echo $row['judul_buku'];?>" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label class="form-label">Kategori</label>
                                            <input type="text" class="form-control" name="Kategori" value="<?php echo $row['Kategori'];?>" required>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="form-label">Pengarang</label>
                                            <input type="text" class="form-control" name="pengarang" value="<?php echo $row['pengarang'];?>" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label class="form-label">Penerbit</label>
                                            <input type="text" class="form-control" name="penerbit" value="<?php echo $row['penerbit'];?>" required>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer">
                                    <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                                    <button type="submit" name="ubah" class="btn btn-success">Simpan</button>
                                </div>
                            </form>

<?php 
        }}
?>
                        </div>
                    </div>
                </div>
            </main>
            <!-- Akhir konten -->
        </div>
    </div>
</body>
</html>