<?php
    require("config/koneksi.php");
    $db->connect();

    if(isset($_POST["tambah"])){
        $id         = $_POST["id_buku"];
        $judul_buku       = $_POST["judul_buku"];
        $Kategori         = $_POST["Kategori"];
        $pengarang     = $_POST["pengarang"];
        $penerbit     = $_POST["penerbit"];

        $qry = "INSERT INTO tb_buku VALUES('$id', '$judul_buku', '$Kategori', '$pengarang', '$penerbit')";
        $result = $db->query($qry);

        if($result === true){
            header("location: dashboard.php");
        }else{
            echo "Error: ". $db->$connection->error;
        }

    }else if(isset($_POST["ubah"])){
        $id         = $_POST["id_buku"];
        $judul_buku       = $_POST["judul_buku"];
        $Kategori         = $_POST["Kategori"];
        $pengarang     = $_POST["pengarang"];
        $penerbit     = $_POST["penerbit"];

        $qry = "UPDATE tb_buku SET id_buku='$id', judul_buku='$judul_buku', Kategori='$Kategori', pengarang='$pengarang', penerbit='$penerbit' WHERE 
                id_buku = '$id'";
        $result = $db->query($qry);

        if($result === true){
            header("location: dashboard.php");
        }else{
            echo "Error: ". $db->$connection->error;
        }
    }else if(isset($_GET["id"])){
        $id = $_GET["id"];

        $qry = "DELETE FROM tb_buku WHERE id_buku='$id'";
        $result = $db->query($qry);

        if($result === true){
            header("location: dashboard.php");
        }else{
            echo "Error: ". $db->$connection->error;
        }
    }


    $db->disconn();
?>