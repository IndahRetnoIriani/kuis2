<?php
    include "myconnection.php";

    $id_buku = $_GET["id_buku"];
    $judul = $_GET["judul"];
    $pengarang = $_GET["pengarang"];
    $penerbit = $_GET["penerbit"];
    $deskripsi = $_GET["deskripsi"];


    $query = "INSERT INTO buku(id_buku, judul, pengarang, penerbit, deskripsi)
                VALUE('$id_buku', '$judul', '$pengarang', '$penerbit', '$deskripsi')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    } else {
        echo "Data baru gagal ditambahkan" .  mysqli_error($connect);
    }

    mysqli_close($connect);
?>