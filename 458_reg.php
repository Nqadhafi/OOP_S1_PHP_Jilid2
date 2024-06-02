<?php
if(!isset($_SESSION['nim'])){
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>REGISTER</title>
    <link rel="stylesheet" type="text/css" href="css/458.css">
</head>

<body>

    <div class="form-container">

        <div class="form-field">
            <label for="namacs_458">Nama:</label>
            <input type="text" id="name_458" name="namacs_458" required>
        </div>
        <div class="form-field">
            <label for="idcs_458">ID:</label>
            <input type="text" id="id_458" name="idcs_458" required>
        </div>
        <div class="form-field">
            <label for="passwordcs_458">Password:</label>
            <input type="password" id="password_458" name="passwordcs_458" required>
        </div>
        <div class="form-field">
            <label for="alamatcs_458">Alamat:</label>
            <textarea id="address_458" name="alamatcs_458" required></textarea>
        </div>
        <div class="form-field">
            <label for="nohpcs_458">No. HP:</label>
            <input type="number" id="nohp_458" name="nohpcs_458" required>
        </div>
        <label class="form-check-label" for="subscribe_458"> Apakah anda ingin berlangganan?</label>
        <div class="form-check">
        <label class="form-check-label" for="subscribe_458">Ya </label>
            <input class="form-check-input" type="radio" value="Yes" name="subscribe_458">
        </div>
        <div class="form-check">
        <label class="form-check-label" for="subscribe_458">Tidak </label>
            <input class="form-check-input" type="radio" value="No" name="subscribe_458">
        </div>

    </div>
</body>

</html>