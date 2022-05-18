<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
    <?php include "header.php" ?>
    <br><br>
        <h1>Selamat Datang Administrator</h1>
        <form action = "search.php" method = "get">
            Cari data buku berdasarkan kode buku:
            <input type = "text" name = "carinama">
            <input type = "submit" value = "Cari">
        </form>
        <br>
        <a href = "insertForm.php"><button>Tambah Data</button></a>
        
               <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th></th>
 
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                <td><a href="detail.php?id_buku=<?=$row['id_buku']?>"><button>Detail</button></a></td>
                <td> 
                    <a href = "edit.php?id=<?php echo $row["id_buku"]; ?>">
                    <button>Edit</button> </a>
                    <a href = "delete.php?id=<?php echo $row["id_buku"]; ?>">
                    <button>Hapus</button> </a>
                </td>
            </tr>
            <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </table>
        <br>
        <a href = "cetak.php"><button>Cetak Laporan</button></a>
        <?php include "footer.php" ?>
    </body>
</html>