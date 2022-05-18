<html>
<head>
    <title>Details</title>
</head>
<body>
    <?php include "header.php"; ?>
<?php
    if(isset($_GET['id_buku'])){
        $id_buku    =$_GET['id_buku'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    include "myconnection.php";
    $query    =mysqli_query($connect, "SELECT * FROM buku WHERE id_buku='$id_buku'");
    $result    =mysqli_fetch_array($query);
?>
<br><br><br>
    <h2>Detail Data Buku</h2>
    <p><i>Note: Dibawah ini Detail Informasi Buku dengan Kode: </i> <b><?php echo $id_buku?></b></p>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">Judul Buku</td>
            <td>: <?php echo $result['judul']?></td>
        </tr>
        <tr>
            <td>Pengarang</td>
            <td>: <?php echo $result['pengarang']?></td>
        </tr>
        <tr>
            <td>Penerbit</td>
            <td>: <?php echo $result['penerbit']?></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>: <?php echo $result['deskripsi']?></td>
        </tr>
        <tr height="40">
            <td></td>
            <td><a href="home.php">
            <button>Kembali</button></a></td>
        </tr>
    </table>
    <?php include "footer.php"; ?>
</body>
</html>