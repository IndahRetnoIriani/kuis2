
<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
    <?php include "header.php" ?>
    <br><br>
        <h1>Hasil Pencarian Data Buku</h1>
        <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang</th>
                
            </tr>
            <?php 
                $id_buku = $_GET["carinama"];
                include "myconnection.php";

                $query = "SELECT * FROM buku WHERE id_buku LIKE '%$id_buku%'";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                <td><a href="detail.php?id_buku=<?=$row['id_buku']?>"><button>Detail</button></a></td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
        <br><br>
        <a href="homeCRUD.php"><button>Kembali</button></a>
        <?php include "footer.php" ?>
    </body>
</html>