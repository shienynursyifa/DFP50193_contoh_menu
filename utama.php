<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedai Tudung</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama System</td>
            <td>
                Home:: Product :: About :: Login
                <a href="utama.php?menu=home">Home</a>
                ::
                <a href="utama.php?menu=product">Product</a>
                ::
                <a href="utama.php?menu=about">About</a>
                ::
                <a href="utama.php?menu=login">Login</a>
            </td>
        </tr>
    </table>
    <h3>Senarai Tudung Yang Kami Jual</h3>
    <?php
    $menu = $_GET['menu'];
    include $menu . '.php';
    ?>
</body>
</html>