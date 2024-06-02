<!-- Output Hasil berupa card -->
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>


    <link rel="stylesheet" href="./css/ho.css">
    <link rel="stylesheet" href="./css/btsp/bootstrap.min.css">
    
</head>

<body>
    <div class="container bg-light my-5 py-4 rounded mx-auto">
        <div class="py-3 text-center bg-primary rounded text-white">
            <h4>Voucher Generated!</h4>
        </div>
        <!-- Card Voucher -->
        <div>
            <div class="card border-success mb-3 mx-auto my-5" style="max-width: 30rem;">
                <div class="card-header bg-transparent border-success">Your Voucher Information</div>
                <div class="card-body">
                <?php
                if($_SESSION['nim'] == "2212030454" ){
                // <!-- id cstmr -->
                echo "<span class='d-flex justify-content-between'>
                    <h6 class='card-text'>ID Customer</h6>
                    <p>" .  $orderInfo_454['customer_id'] ."</p>
                </span>";
                // <!-- voucher -->
                echo "<span class='d-flex justify-content-between'>
                    <h6 class='card-text'>Kode Voucher</h6>
                    <p>".  $orderInfo_454['voucher'] . "</p>
                </span>";
                // <!-- speed -->
               echo "<span class='d-flex justify-content-between'>
                    <h6 class='card-text'>Speed</h6>
                    <p>".   $orderInfo_454['speed'] ."Mbps</p>
                </span>";
                // <!-- durasi -->
               echo " <span class='d-flex justify-content-between'>
                    <h6 class='card-text'>Durasi</h6>
                    <p>" . $orderInfo_454['duration'] ."H</p>
                </span>";
                // <!-- Tipe Paket -->
              echo "  <span class='d-flex justify-content-between'>
                    <h6 class='card-text'>Tipe Paket</h6>
                    <p>" .
                         $orderInfo_454['tipe'] . "
                    </p>
                </span>";
                echo "<h5 style='background-color:yellow; color:red;'>" . $overloading . "</h5>";
            }

            else if($_SESSION['nim'] == "2212030458"){
                // <!-- Nama Customer -->
                 echo   "<span class='d-flex justify-content-between'>
                        <h6 class='card-text'>Nama Customer</h6>
                        <p>" . $orderInfo_458['nama'] ."</p>
                    </span>";
                    // <!-- ID/Nickname -->
                  echo  "<span class='d-flex justify-content-between'>
                        <h6 class='card-text'>ID</h6>
                        <p>" . $orderInfo_458['user_id']. "</p>
                    </span>";
                    // <!-- Password -->
                   echo "<span class='d-flex justify-content-between'>
                        <h6 class='card-text'>Password</h6>
                        <p>".  $orderInfo_458['password'] ."</p>
                    </span>";
                    // <!-- alamat -->
                    echo "<span class='d-flex justify-content-between'>
                        <h6 class='card-text'>Alamat</h6>
                        <p>" . $orderInfo_458['alamat'] ."</p>
                    </span>";
                    // <!-- Nomor HP -->
                    echo "<span class='d-flex justify-content-between'>
                        <h6 class='card-text'>Nomor HP</h6>
                        <p>" . $orderInfo_458['nohp'] ."</p>
                    </span>";
                    echo "<h5 style='background-color:yellow; color:red;'>" . $overloading . "</h5>";

            }
            else{
                header("Location: skynet.php");
                exit;
            }
                ?>

                    
                    

                </div>


            </div>
            <div class="d-flex justify-content-center">
            <a href="skynet.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</body>
<script src="./css/bootstrap.bundle.min.js"></script>

</html>