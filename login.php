<?php
session_start();
session_destroy();
if(isset($_SESSION['nim'])){
    header("Location: skynet.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/btsp/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/454.css">
    <link rel="stylesheet" type="text/css" href="css/458.css">
    <link rel="stylesheet" href="css/skynet.css">
</head>
<body>

    <div class="form-container">
       
        <h2 class="intro">Client Area</h2>
        <form action="proseslogin.php" method="POST">
        <div class="form-field">
        <?php
        if (isset($_SESSION['err'])) {
            echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['err'] . "</div>";
            unset($_SESSION['err']);
        }
        ?>
        <label for=""><h4>User :</h4></label>
        <input type="text" name="user" required>
        </div>
        <div class="form-field">
        <label for=""><h4>Password :</h4></label>
        <input type="password" name="password"  required>
        </div>  
        <button type="submit">Masuk</button>
        </form>
    </div>
</body>
</html>
