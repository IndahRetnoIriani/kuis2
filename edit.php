<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <?php include "header.php"; ?><br><br><br>
        <h1>Edit Data Buku</h1>
        <?php
        include "myconnection.php";
        $id_buku = $_GET['id_buku'];
        $query = "SELECT * FROM buku WHERE id_buku=$id_buku";
        $result = mysqli_query($connect, $query);
        ?>
        <form action="editProcess.php" method="GET">
            <table>
                <?php 
                    while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Kode Buku: </td>
                    <td><input type ="text" name="myid_buku" value="<?php echo $row['id_buku'];?>"> </td>
                </tr>
                <tr>
                    <td>Judul: </td>
                    <td><input type ="text" name="myjudul" value="<?php echo $row['judul'];?>"> </td>
                </tr>
                <tr>
                    <td>Pengarang: </td>
                    <td><input type ="text" name="mypengarang" value="<?php echo $row['pengarang'];?>"> </td>
                </tr>
                <tr>
                    <td>Penerbit: </td>
                    <td><input type ="text" name="mypenerbit" value="<?php echo $row['penerbit'];?>"> </td>
                </tr>
                <tr>
                    <td>Deskripsi: </td>
                    <td><input type ="text" name="mydeskripsi" value="<?php echo $row['deskripsi'];?>"> </td>
                </tr>
                <tr>
                    <td><input type="submit" name="save" value="Simpan"></td>
                </tr>
                <?php
                    }
                ?>
                <?php include "footer.php"; ?>
            </table>
        </form>    
        <?php include "footer.php"; ?>
    </body>
</html>