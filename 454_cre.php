<?php
if(!isset($_SESSION['nim'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKY.NET</title>
    <link rel="stylesheet" type="text/css" href="css/454.css">
</head>

<body>

    <div class="vg_454">
        <?php
        // Generate a random voucher code
        function generate_voucher_code()
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $voucher_code = '';
            for ($i = 0; $i < 10; $i++) {
                $voucher_code .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
            return $voucher_code;
        }

        // Generate a new voucher code
        $voucher_code = generate_voucher_code();

        //show voucher 
        echo "<h1>Your Voucher Code:</h1>";
        echo "<p>" . $voucher_code . "</p>";
        ?>
    </div>

    <div class="form-create-454">

        <div class="form-field">
            <label for="idcs_454">ID:</label>
            <input type="text" id="idcs_454" name="idcs_454" required>
        </div>
        <div class="form-field">
            <label for="vouchercs_454">Voucher</label>
            <input type="text" id="vouchercs_454" name="vouchercs_454" required>
        </div>
        <div class="form-field">
            <label for="speedcs_454">Speed:</label>
            <input type="text" id="speedcs_454" name="speedcs_454" required>
        </div>
        <div class="form-field">
            <label for="durationcs_454">Duration:</label>
            <select  id="durationcs_454" name="durationcs_454" required>
                <option value="1">1 hour</option>
                <option value="3">3 hour</option>
                <option value="4">7 hour</option>
            </select>
        </div>
        <div class="form-field">
            <label for="typecs_454">Typee:</label>
            <input type="text" id="typecs_454" name="typecs_454" required>
        </div>


    </div>
</body>

</html>