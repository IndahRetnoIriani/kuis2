<html>
    <head>
        <title>Tambah Data Buku</title>
    </head>
    <body>
    <?php include "header.php"; ?>
    <br><br><br> <h1>Tambah Data Buku</h1>
        <form action="insertProcess.php" method="get">
            <table>
                <tr>
                    <td>Kode Buku : </td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Judul : </td>
                    <td>
                        <textarea name="judul" rows="5" cols="20"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Pengarang : </td>
                    <td>
                        <textarea name="pengarang" rows="5" cols="20"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Penerbit : </td>
                    <td>
                        <textarea name="penerbit" rows="5" cols="20"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Deskripsi : </td>
                    <td>
                        <textarea name="deskripsi" rows="5" cols="20"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><input type=submit name=send value=Tambah></td>
                </tr>
            </table>
        </form>
        <?php include "footer.php"; ?>
    </body>
</html>