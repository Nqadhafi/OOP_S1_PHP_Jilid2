<!-- index.html -->
<?php
session_start();
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
    <link rel="stylesheet" href="css/skynet.css">
    <link rel="stylesheet" href="./css/btsp/bootstrap.min.css">
</head>

<body>
    <header>
        <h1>SKY.NET WiFi Voucher</h1>
        
       
        
    </header>
    <main>
        <section class="intro">
            <h2>Welcome to <span>sky.net </span>WiFi Voucher</h2>
            <p>you can easily purchase WiFi vouchers for your events, conferences, or personal use.</p>
            
        </section>
        <?php
        if (isset($_SESSION['formerror'])) {
            echo "<div class='alert alert-danger' role='alert'>" . $_SESSION['formerror'] . "</div>";
            unset($_SESSION['formerror']);
        }
        ?>
<div class="card d-flex flex-col align-items-center align-self-center justify-content-center" style="width: 30rem;">
<h3 class="my-3">Selamat Datang!</h3>  
<div class="text-center w-50">
  <img src="<?php echo $_SESSION['link'] ?? ''?>" class="card-img-top" alt="...">
  </div>
  <div class="card-body ps-5">
    <h5 class="card-text">Nama : <?php echo $_SESSION['nama']; ?></h5>
    <h5 class="card-text">NIM : <?php echo $_SESSION['nim'];?></h5>
    <form action="proses.php" method="get">
        <input type="hidden" name="logout" value="<?php echo $_SESSION['nim'] ?>">
        <button class ="btn btn-danger" type="submit">Keluar</button>
        </form>
  </div>
</div>


        <!-- Form dengan method post untuk menigirim data -->
        <form action="proses.php" method="POST">

        <?php
                 if($_SESSION['nim'] == "2212030454"){
                     include ('454_cre.php');
                    }
        ?>
            <br>
        <?php
                if($_SESSION['nim'] == "2212030458"){
                     include ('458_reg.php'); 
                     }
?>
            <!-- Submit Order -->
            <div class="button">
                <button type="submit" class="btn ">Create Now</button>
            </div>
        </form>


        <section class="packages">
            <h2>BEST SELLER</h2>
            <table>
                <tr>
                    <th>TYPE</th>
                    <th>DURATION</th>
                    <th>SPEED</th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>Basic</td>
                    <td>1 hour</td>
                    <td>10 mbps</td>
                    <td>Rp. 5.000</td>
                </tr>
                <tr>
                    <td>Standard</td>
                    <td>3 hour</td>
                    <td>10 mbps</td>
                    <td>Rp. 10.000</td>
                </tr>
                <tr>
                    <td>Premium</td>
                    <td>7 hour</td>
                    <td>10 mbps</td>
                    <td>Rp. 15.000</td>
                </tr>
            </table>
        </section>


    </main>
    <script src="script.js"></script>
</body>

</html>