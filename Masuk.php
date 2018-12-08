<!DOCTYPE html>
<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/desain.css">
  <link rel="stylesheet" type="text/css" href="style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
   <script src="asset/js/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  <script type="text/javascript">
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
  </script>
  <link rel="stylesheet" type="text/css" href="login.css">
<script src="facebook.js"></script>
    <script src="google.js"></script>
     <script src="https://apis.google.com/js/platform.js" async defer></script>
     <meta name="google-signin-client_id" content="461756483368-h9g4jv5n75e2ra0kugm46recdaicblou.apps.googleusercontent.com">
  </head>
  <body ng-app="">
  <?php  
    include "header.php";
?>
  <div class="form">
    <form class="login-form" >
      <input type="text" placeholder="username" required="" id="username"  name="username" />
      <input type="password" placeholder="password" required="" id="password" name="password" />
      <button onclick="pasuser(this.form)">Login</button>
      <p class="message">Not registered? <a href="Daftar.html">Create an account</a></p>
    </form>
   <br>
   <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
  </fb:login-button>
   <br>
   <br>
  <center>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    
  </center>
    
  </div>

  
</div>

<?php include "footer.php"; ?>

<script type="text/javascript">
  function pasuser(form) {
if (form.username.value=="admin") { 
if (form.password.value=="admin") {              
location="index.html" 
} else {
alert("Invalid Password")
}
} else {  alert("Invalid UserID")
}
}
</script>






</body>
</html>