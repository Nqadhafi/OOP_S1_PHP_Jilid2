<?php
//Menangkap inputan dari form customer & produk ke dalam variable
session_start();
// form register
$nama_458 = $_POST['namacs_458'] ?? '';  //dari isi form yang diambil value akan dimasukkan ke dalam variabel nama id dll
$id_458 = $_POST['idcs_458'] ?? '';
$password_458 = $_POST['passwordcs_458'] ?? '';
$alamat_458 = $_POST['alamatcs_458'] ?? '';
$nohp_458 = $_POST['nohpcs_458'] ?? '';
$subscribe_458 = $_POST['subscribe_458'] ?? '';
//form create voucher
$id_454 = $_POST['idcs_454'] ?? 0;
$voucher_454 = $_POST['vouchercs_454'] ?? 0;
$speed_454 = $_POST['speedcs_454'] ?? 0;
$duration_454 = $_POST['durationcs_454'] ?? 0;
$type_454 = $_POST['typecs_454'] ?? '';

// kepinn

class register_458
{
    protected $reg458_nama;  //properti yg terenkapsulasi protec
    protected $reg458_id;
    protected $reg458_password;
    protected $reg458_alamat;
    protected $reg458_nohp;

    public function __construct($nama, $uid, $password, $alamat, $nohp) //untuk mengisi prperti menggunakan, dengan parameter
    {
        $this->reg458_nama = $nama; //ubtuk mendeklarasikan prperti yang ada diatas agar dapat masuk dalam parameter
        $this->reg458_id = $uid;
        $this->reg458_password = $password;
        $this->reg458_alamat = $alamat;
        $this->reg458_nohp = $nohp;
    }

    public function __set($name, $value) {
        if ($name === 'subscribe') {
          $this->subscribe = $value;
        }
      }
      
      //percabangan untuk menampilkan output berdasarkan input
      public function __get($name) {
        if ($name === 'subscribe') {
          if ($this->subscribe == "Yes") {
            return "Selamat, anda berhak mendapat diskom 5%. Silahkan hubungi 08123456789!";
          }  else if ($this->subscribe == "No"){
            return "Jadilah member untuk mendapatkan benefit-benefit seru!";
          }
        }
        return "";
      }
}
class pesan_458 extends register_458 {
// Method protected hanya bisa di akses di class turunan atau class itu sendiri
protected function setvoucherInfo_458()
{

    return [
        'nama' => $this->reg458_nama,
        'user_id' => $this->reg458_id,
        'password' => $this->reg458_password,
        'alamat' => $this->reg458_alamat,
        'nohp' => $this->reg458_nohp,



    ];
}
// Mengakses method protected setOrderInfo dengan method public di class yang sama
public function getOrderInfo_458()
{
    // Mendapatkan data berupa array ke dalam variabel $orderInfo_458 dari method protected setvoucherInfo_454

    $filtered_458 = "kevin123"; // data yang akan di filter
    $orderInfo_458 = $this->setvoucherInfo_458(); //menangkap method protected setOrderInfo ke dalam variabel $orderInfo_454
    // Jika salah satu data array di variable $orderInfo_458 bernilai kosong maka meredirect ke skynet.php
    if (in_array($filtered_458, $orderInfo_458)) {
        $_SESSION['formerror'] = "username " . $filtered_458 . " sudah digunakan";
        header('Location: skynet.php');
        exit;
   
    }
    // jika data ada, maka langsung mengembalikan nilai $orderInfo_458 untuk ditampilkan
    return $orderInfo_458;
}

public function logout_458(){
    session_start();
    session_destroy();
    session_unset();
    header("Location: login.php");
}

}



// prass

//Class Voucher, mewarisi porperti & Construct method yang ada di Class Customer
class voucher_454
{
    protected $voc454_id;    //properti yg terenkapsulasi protec
    protected $voc454_voucher;
    protected $voc454_speed;
    protected $voc454_duration;
    protected $voc454_type;


    public function __construct($uidvc, $vc, $speed, $duration, $type_454)
    {
        
        //Construct class saat ini
        $this->voc454_id = $uidvc;
        $this->voc454_voucher = $vc;
        $this->voc454_speed = $speed;
        $this->voc454_duration = $duration;
        $this->voc454_type = $type_454;
    }

    //overloading data jumlah jam durasi
public function __set($name, $value) {
    if ($name === 'durasi') {
      $this->durasi = $value;
    }
  }
  
  //percabangan untuk menampilkan output berdasarkan input
  public function __get($name) {
    if ($name === 'durasi') {
      if ($this->durasi == '3') {
        return "Selamat, anda berhak mendapat bonus durasi selama 30 menit!";
      }  else {
        return "Anda tidak dapat bonus :(";
      }
    }
    return "null";
  }
}
class pesan_454 extends voucher_454
{

    // Method protected hanya bisa di akses di class turunan atau class itu sendiri
    protected function setvoucherInfo_454()
    {

        return [
            'customer_id' => $this->voc454_id,
            'voucher' => $this->voc454_voucher,
            'speed' => $this->voc454_speed,
            'duration' => $this->voc454_duration,
            'tipe' => $this->voc454_type,


        ];
    }
    // Mengakses method protected setOrderInfo dengan method public di class yang sama
    public function getOrderInfo_454()
    {
        // Mendapatkan data berupa array ke dalam variabel $orderInfo_454 dari method protected setvoucherInfo_454

        $filtered_454 = "4rGRXGsmEV"; // data yang akan di filter
        $orderInfo_454 = $this->setvoucherInfo_454(); //menangkap method protected setOrderInfo ke dalam variabel $orderInfo_454
        // Jika salah satu data array di variable $orderInfo_454 bernilai kosong maka meredirect ke skynet.php
        if (in_array($filtered_454, $orderInfo_454)) {
            $_SESSION['formerror'] = "voucher " . $filtered_454 . " sudah digunakan";
        header('Location: skynet.php');
        exit;
        }
        // jika data ada, maka langsung mengembalikan nilai $orderInfo_454 untuk ditampilkan
        return $orderInfo_454;
    }

    public function logout_454(){
        session_start();
        session_destroy();
        session_unset();
        header("Location: login.php");
    }
}
//kevin
if($_SESSION['nim'] == '2212030458'){
$hasilOrder_458 = new pesan_458(
$nama_458,
$id_458,
$password_458,
$alamat_458,
$nohp_458
);
// membuat dan menetapkan nilai property baru sehingga nilai $name __set adalah memberType dan $value = $duration_458
$hasilOrder_458->subscribe = $subscribe_458 ?? '';
$overloading = $hasilOrder_458->__get('subscribe');

$orderInfo_458 = $hasilOrder_458->getOrderInfo_458();
}

//prass
else if($_SESSION['nim'] == '2212030454'){
$hasilOrder_454 = new pesan_454(
    $id_454,
    $voucher_454,
    $speed_454,
    $duration_454,
    $type_454
);
// membuat dan menetapkan nilai property baru sehingga nilai $name __set adalah memberType dan $value = $duration_454
$hasilOrder_454->durasi = $duration_454 ?? '';
$overloading = $hasilOrder_454->__get('durasi');

$orderInfo_454 = $hasilOrder_454->getOrderInfo_454();
}
else if (!isset($_SESSION['nim'])){
    header('Location: login.php');
    exit;
}

if(isset($_GET['logout']) && $_GET['logout'] == '2212030454'){
    $hasilOrder_454->logout_454();
}

if(isset($_GET['logout'])&& $_GET['logout'] == '2212030458'){
    $hasilOrder_458->logout_458();
}
include('hasil_order.php');
