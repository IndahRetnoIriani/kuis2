<!DOCTYPE HTML>
<html>
    <head>
        <title>Cetak Laporan</title>
        <link rel = "stylesheet" type = "text/css" href = "style.css"/>
    </head>
    <body>
        <h1 align = "center">DATA BUKU</h1>
        <br>
        <table>
            <tr>
                <th>Kode Buku </th>
                <th>Judul </th>
                <th>Pengarang </th>
                <th>Penerbit </th>
            <tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect, $query);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row["id_buku"]; ?></td>
                <td><?php echo $row["judul"]; ?></td>
                <td><?php echo $row["pengarang"]; ?></td>
                <td><?php echo $row["penerbit"];?></td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
            <script>
                widow.print();
            </script>
    </body>
</html>

