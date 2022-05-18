<?php include "header.php"; ?><br><br><br>
<?php 
    include "myconnection.php";

    $id_buku = $_GET["id_buku"];

    $query = "DELETE FROM buku WHERE id_buku=$id_buku";

    if(mysql_query($connect, $query)){
        header('Location:homeCRUD2.php');
    }
    else{
        echo "Data gagal dihapus <br>";
        mysql_error($connect);
    }
    mysql_close();
?>
<?php include "footer.php"; ?>