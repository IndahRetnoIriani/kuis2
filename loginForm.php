<!DOCTYPE HTML>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <?php include "header.php" ?>
        <br><br><br>
        <h1>Mohon Login Terlebih Dahulu</h1>
        <?php
            if(isset($_GET["error"])){
                $error = $_GET["error"];
            } else {
                $error = "";
            }

            $message = "";
            if($error == "gagal"){
                $message = "Gagal login, silahkan coba kembali";
            }
        ?>
        <p style = "color:red"><?php echo $message;?></p>
        <form action = "prosesLogin.php" method = "POST">
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type = "text" name = "username" size = "20"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type = "password" name = "password" size = "20"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type = "submit" name = "login" value = "Login"></td>
                </tr>
            </table>
        </form>
        <?php include "footer.php" ?>
    </body>
</html>