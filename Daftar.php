<!DOCTYPE html>
<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/desain.css">
  <link rel="stylesheet" type="text/css" href="asset/style.css">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="facebook.js"></script>
    <script src="google.js"></script>
     <script src="https://apis.google.com/js/platform.js" async defer></script>
     <meta name="google-signin-client_id" content="461756483368-h9g4jv5n75e2ra0kugm46recdaicblou.apps.googleusercontent.com">
  <script src="asset/js/jquery.min.js"></script>

  <style type="text/css">
  .container1 {
    display: flex;
    flex-direction: row;
    margin-left: 10%;
  }
    .line {
      width: 2px;
      height:500px;
      color:black;
      background-color: black;
      margin-left: 5%;
   
      
    }
    .daftar {
      width: 30%;
      height: 400px;
      background-color: red;
    }
    .sosmed {
      margin-left: 5%;
      background-color: none;
      width: 200px;
      height: 100px;
      display: flex;
      flex-direction: row;
    }
    .deskripsi {
      margin-top: 100px;
      width: 400px;
      height: 300px;
      margin-left: 5%
    }
    .kanan {
      width: 400px;
      height: 600px;
      
      display: flex;
      flex-direction: column;
    }
  </style>
  </head>
  <body ng-app="">
    <?php include "header.php"; ?>
     
<div class="container1">
      <div class="row">
          <h5>Silahkan Daftar untuk mempermudah 
          <br>
        transaksi dan raih poin anda</h5>
          <form class="" method="post" action="akun.html">
            
            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Nama Lengkap</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input required type="text" class="form-control" name="name" id="name"  placeholder="Masukkan Nama Anda"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="name" class="cols-sm-2 control-label">Gender</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="radio" name="gender" value="male" required> Pria
                  <input type="radio" name="gender" value="female" required style="margin-left: 20px;"> Wanita
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="email" class="cols-sm-2 control-label">Email</label>
              <div class="cols-sm-10">
                <div class="input-group">
                 <input required type="email" class="form-control" name="email" id="email"  placeholder="Masukkan Email"/>
                </div>
              </div>
            </div>

          <div class="form-group">
              <label for="username" class="cols-sm-2 control-label">Tanggal Lahir</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input required type="text" class="form-control" name="username" id="username"  placeholder="Format: 19/05/1997"/>
                </div>
              </div>
            </div>



            <div class="form-group">
              <label for="password" class="cols-sm-2 control-label">Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                 <input type="password" required id="pw1" placeholder="Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"/>
            
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm" class="cols-sm-2 control-label">Konfirmasi Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
            <input type="password" id="pw2" placeholder="Konfirmasi Password"/>
                </div>
              </div>
            </div>
            <button class="btn btn-primary" style="width: 200px;" onSubmit="alert('Submitted.');return false;">Daftar</button>
            
          </form>
        </div>
        <div class="line"></div>
        <div class="kanan">
          <div class="sosmed">
         
          <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin-right: 5%""></div>
  <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">

</fb:login-button> 

        </div>

        <div class="deskripsi">
          -Email Harus Valid
          <br>
          -Password berisi minimal 8 karakter
          <br>
          -Password kombinasi dari karakter A-Z, a-z, 0-9
           dan simbol 
           <br>
          -Konfirmasi password harus sama dengan password
        </div>
        </div>
        
         
      </div>

     

     <?php include "footer.php" ?>
          
<script type="text/javascript">
            window.onload = function () {
                document.getElementById("pw1").onchange = validatePassword;
                document.getElementById("pw2").onchange = validatePassword;
            }
            function validatePassword(){
                var pass2=document.getElementById("pw2").value;
                var pass1=document.getElementById("pw1").value;
                if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                else
                    document.getElementById("pw2").setCustomValidity('');
            }
        </script> 
       
    


</body>
</html>