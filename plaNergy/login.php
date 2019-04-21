<?php
if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  require_once("db.conn");
  $query = "SELECT * FROM users WHERE username = '{$username}' AND hash = md5($password)";
  $res = mysqli_query($conn, $query) or die("Failed to fetch user");
  if($row = mysqli_fetch_assoc($res)){
    echo $row;
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['private_key'] = $row['private_key'];

  /*  header("Location: http://localhost/plaNergy/user.php");
    exit(); */
  }
}else{
  echo "Failed";
/*  header("Location: http://localhost/plaNergy/index.php");
  exit(); */
}


?>
