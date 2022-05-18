<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
    
    <?php include "header.php" ?>
    <br><br>
        <h1>HOME</h1>
        <form action = "search2.php" method = "get">
            Masukkan kode buku untuk mencari
            <input type = "text" name = "carinama">
            <input type = "submit" value = "Cari">
        </form>
        <br>
        
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
                <td><a href="detail.php?id_buku=<?=$row['id_buku']?>">
                <button>Detail</button></a></td> 
            </tr>
            <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
        </table><br><br>
           <?php include "footer.php" ?>
    </body>
</html>