</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device=width">
    <meta name="description" content="PlaNergy Wallet">
    <meta name="keywords" content="Log in, Sign up">
    <meta name="author" content="PlaNergy Technologies">

    <title> My PlaNergy Wallet </title>
    <link rel="stylesheet" href="statics/wallet.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1> My PlaNergy Wallet </h1>
        </div>
          <nav>
          <ul>
            <li class="current"> <a href="index.html">Home</a></li>
          </ul>
          </nav>
      </div>
      </header>
      <section id ="showcase">
        <div class="container">
          <h1>Kindly sign in to continue</h1>
        </div>
      </section>

      <section id="hi">
<div class="hello">
<div class="login-wrap">
<div class="login-html">
<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
<div class="login-form">
<div class="sign-in-htm">
<div class="group">
<form class="" action="login.php" method="post">
  <label for="username" class="label">Username</label>
  <input id="username" type="text" class="input" name="username" required>
  </div>
  <div class="group">
  <label for="pass" class="label">Password</label>
  <input id="pass" type="password" class="input" data-type="password" name="password" required>
  </div>
  <div class="group">
  <input id="check" type="checkbox" class="check" checked>
  <label for="check"><span class="icon"></span> Keep me Signed in</label>
  </div>
  <div class="group">
  <input type="submit" class="button" value="Sign In">
  </div>
</form>
<div class="hr"></div>
<div class="foot-lnk">
<a href="#forgot">Forgot Password?</a>
</div>
</div>
<div class="sign-up-htm">
  <div id="msg" style="color:aliceblue; padding:10px; font-style: italic">
  </div>
<div class="group">
<label for="user" class="label">Username</label>
<input id="user" type="text" class="input">
</div>
<div class="group">
<label for="pass" class="label">Password</label>
<input id="pass1" type="password" class="input" data-type="password" required>
</div>
<div class="group">
<label for="pass" class="label">Repeat Password</label>
<input id="pass2" type="password" class="input" data-type="password" required>
</div>
<div class="group">
<label for="email" class="label">Email Address</label>
<input id="email" type="email" class="input">
</div>
<div class="group">
<input id="signup" type="submit" class="button" value="Sign Up" name="signup">



</div>
<div class="hr"></div>
<div class="foot-lnk">
<label for="tab-1">Already Member?</a>
</div>
</div>
</div>
</div>
</div>
</div>
      </section>
      <section id="signup">
         <h1>Or sign up if you do not have an account </h1>

      </section>
  </body>

  <footer>
    <p>PlaNergy| The plastic money maker </p>
    <p>Powered by PlaNergy Technologies, Copyright &copy;2019 </p>
  </footer>
  <script src="statics/jquery.js"></script>
    <script>
      $("document").ready(function(){
        $("#signup").on("click", function(){
          var user = $("#user").val();
          var pass1 = $("#pass1").val();
          var pass2 = $("#pass2").val();
          var email = $("#email").val();

          var form = {
            user: user,
            pass1:pass1,
            pass2:pass2,
            email:email
          }

          $.ajax({
            url: "signup.php",
            type: "POST",
            data: form,
            success: function(data, status){
              if(status == 'success'){
                var msg = 'Sign up successful. Go to sign in';
                $("#msg").text(msg);
              }
            }
          });

        });
      });
    </script>
</html>
