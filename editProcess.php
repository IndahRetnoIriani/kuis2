<?php
    include "myconnection.php";

    $id_buku = $_GET["myid_buku"];
    $judul = $_GET["myjudul"];
    $pengarang = $_GET["mypengarang"];
    $penerbit = $_GET["penerbit"];
    $deskripsi = $_GET["deskripsi"];

    $query = "UPDATE buku SET 
    id_buku='$id_buku, judul='$judul', pengarang='$pengarang', penerbit='$penerbit', 
    deskripsi='$deskripsi' WHERE id_buku=$id_buku";

    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }
    else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>