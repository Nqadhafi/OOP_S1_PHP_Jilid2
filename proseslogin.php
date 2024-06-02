<?php
session_start();

$nim = $_POST['user'];
$password = $_POST['password'];

class Login{
    protected $pras = [
        'user' => 2212030454,
        'password' => 454
    ];
    protected $kevin = [
        'user' => 2212030458,
        'password' => 458
    ];

    public function proseslogin454($uid, $pwd){

            if($uid == $this->pras['user'] && $pwd == $this->pras['password']){
                $_SESSION['nama'] = "Pras";
                $_SESSION['nim'] = "2212030454";
                $_SESSION['link'] = "./bg/pras.jpg";
                header("Location: skynet.php");
                exit;
            }
            else {

              return false;
            }
    }

    public function proseslogin458($uid, $pwd){

        if($uid == $this->kevin['user'] && $pwd == $this->kevin['password']){
            $_SESSION['nama'] = "Kevin";
            $_SESSION['nim'] = "2212030458";
            $_SESSION['link'] = "./bg/kevin.jpeg";
            header("Location: skynet.php");
            exit;
           
        }
        else {

           $_SESSION['err'] = "User & Password salah";
           header("Location: login.php");
           exit;
        }
}
}

if(isset($_POST['user'])){
    $objek = new Login();
    if( $objek->proseslogin454($nim,$password) == false){
        $objek->proseslogin458($nim,$password);
    }
}
?>