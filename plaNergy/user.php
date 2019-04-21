<?php
if(!isset($_SESSION['username']) && !isset($_SESSION['private_key'])){
  header("Location: http://localhost/plaNergy/index.php");
  exit();
}else{

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width">
    <meta name="description" content="PlaNergy Wallet">
    <meta name="keywords" content="Log in, Sign up">
    <meta name="author" content="PlaNergy Technologies">

    <title> My PlaNergy </title>
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1> <span class="highlight">My PlaNergy</span> Wallet </h1>
        </div>
          <nav>
          <ul>
            <li class="current"> <a href="index.html">Home</a></li>
            <li> <a href="profile.html">My profile</a></li>
            <li> <a href="logout.html">Log out</a></li>
          </ul>
          </nav>
      </div>
    </header>

    <section id ="showcase">
      <div class="container">
        <h1>welcome to your wallet</h1>
        <p>
          your My PlaNergy wallet balance is .....
         </p>
      </div>
    </section>


    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/cashout.jpg" />
          <h3> <a href="fuels.html">Cash out</a> </h3>
        </div>
        <div class="box">
          <img src="./img/pickup.jpg" />
          <h3> <a href="collectionpoint.html">Order Pick up</a> </h3>
        </div>
        <div class="box">
          <img src="./img/hand.jpg" />
          <h3> <a href="wallet.html">Transactions Histories</a> </h3>
        </div>
      </div>
    </section>




<footer>
  <p>PlaNergy | The plastic money maker </p>
  <p>Powered by PlaNergy Technologies, Copyright &copy;2019 </p>
</footer>
  </body>
</html>
<?php
}

?>
