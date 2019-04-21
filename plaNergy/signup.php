<?php
if(!empty($_POST['pass1'])){
  $user = $_POST['user'];
  $pwd1 = $_POST['pass1'];
  $pwd2= $_POST['pass2'];
  $email = $_POST['email'];

  if($pwd1 != $pwd2){
    header("Location: http://localhost/plaNergy/wallet.php");
    exit();
  }else{
    $host = 'localhost';
    $root = "root";
    $pass = "";
    $db = "planergy";
    $pwd = md5($pwd1);


    $conn = mysqli_connect($host, $root, $pass, $db) or die("Failed to connect to database");
    $query = "INSERT INTO users (username,hash,public_key,email,phone) VALUES('{$user}', '{$pwd}','ugf8o7g38orgf8o5rgwf8our','{$email}', '09876532345678')";
    $res = mysqli_query($conn, $query) or die("Failed to query database".mysqli_error($conn));
    if($res){
      echo "success";

    }else{
      echo "Failed";
    }
  }
}

?>
