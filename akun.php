<html><head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                
                                
                                <style></style>
                                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
                                
                                <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
                                <script type="text/javascript">


         $(document).ready(function()
      {
        $("#profil-edit").hide();
        $("#alamat-edit").hide();
        $("#no_telp_edit").hide();

        $("#btn-profil-edit").on("click",function() {
          $("#profil").hide();
          $("#profil-edit").show();
        })

        $("#btn-alamat-edit").on("click", function() {
          $("#alamat").hide();
          $("#alamat-edit").show();
        })

        $("#btn-telp-edit").on("click", function() {
          $("#no_telp").hide();
          $("#no_telp_edit").show();
        })

        var navItems = $('.admin-menu li > a');
        var navListItems = $('.admin-menu li');
        var allWells = $('.admin-content');
        var allWellsExceptFirst = $('.admin-content:not(:first)');
        allWellsExceptFirst.hide();
        navItems.click(function(e)
        {
            e.preventDefault();
            navListItems.removeClass('active');
            $(this).closest('li').addClass('active');
            allWells.hide();
            var target = $(this).attr('data-target-id');
            $('#' + target).show();
        });
        });

      </script>
      
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
                            </head>
                            <body ng-app="">
                            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<div ng-app="">
 <?php include "header.php" ?>
  
</div>
</div>
<div class="container">
  
        <div class="row">

            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu">
                    <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-user"></i>&nbsp;Profil</a></li>
                    <li><a href="" data-target-id="order"><i class="glyphicon glyphicon-list"></i>&nbsp;Riwayat Pemesanan</a></li>
                    <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i>&nbsp;Ganti Password</a></li>
                    <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i>&nbsp;Pengaturan</a></li>
                    <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i>&nbsp;Keluar</a></li>
                </ul>
            </div>

            <div class="col-md-9  admin-content" id="profile">
                <div class="panel panel-info" style="margin: 1em;" id="profil">           
                <div class="panel-heading">
                        <h3 class="panel-title">Identitas <i class="glyphicon glyphicon-edit" id="btn-profil-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      <pre>
                        Nama          : Arif Cahyo Prasetyo
                        Gender        : Pria
                        Tanggal-lahir : 1 Mei 1996
                        
                      </pre>
                    </div>
                </div>

                <div class="panel panel-info" style="margin: 1em;" id="profil-edit"> 
                 <div class="panel-heading">
                        <h3 class="panel-title">Identitas <i class="glyphicon glyphicon-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      <pre>
                        <form  action="akun.html">
                        Nama          : <input type="text" name="" required="" >
                        Gender        : <input type="text" name="" required="">
                        Tanggal-lahir : <input type="text" name="" required="">                   
                        </pre>
                        <button class="btn btn-primary" style="margin-left: 35%">Save</button>
                         
                        </form>
                        <button class="btn btn-danger" onclick="window.location='akun.html'">Cancel</button>
                    </div>
                </div>

                 <div class="panel panel-info" style="margin: 1em;" id="alamat">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat <i class="glyphicon glyphicon-edit" id="btn-alamat-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      <pre>
                        Provinsi  : Yogyakarta
                        Kabupaten : Depok
                        Kecamatan : Sleman
                        Desa      : CondongCatur
                        Alamat    : Jl. Nusa Indah No 170B
                        Kode Pos  : 12345
                        </pre>
                        
                    </div>
                </div>              

                <div class="panel panel-info" style="margin: 1em;" id="alamat-edit">
                    <div class="panel-heading">
                        <h3 class="panel-title">Alamat <i class="glyphicon glyphicon-edit" id="btn-alamat-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                      <pre>
                        <form  action="akun.html">
                        Provinsi  : <input type="text" name="" required="" >
                        Kabupaten : <input type="text" name="" required="" >
                        Kecamatan : <input type="text" name="" required="" >
                        Desa      : <input type="text" name="" required="" >
                        Alamat    : <input type="text" name="" required="" >
                        Kode Pos  : <input type="text" name="" required="" >
                        </pre>
                        <button class="btn btn-primary" style="margin-left: 35%">Save</button>
                         
                        </form>
                        <button class="btn btn-danger" onclick="window.location='akun.html'">Cancel</button>
                        <!-- arif.0009@students.amikom.ac.id -->
                    </div>
                </div>              



                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Email</h3>
                    </div>
                    <div class="panel-body">
                        arif.0009@students.amikom.ac.id
                    </div>
                </div>


                <div class="panel panel-info" style="margin: 1em;" id="no_telp">
                    <div class="panel-heading">
                        <h3 class="panel-title">No Telepon <i class="glyphicon glyphicon-edit" id="btn-telp-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                        085334190466
                    </div>
                </div>

                   <div class="panel panel-info" style="margin: 1em;" id="no_telp_edit">
                    <div class="panel-heading">
                        <h3 class="panel-title">No Telepon <i class="glyphicon glyphicon-edit" id="btn-telp-edit"></i></h3>
                    </div>
                    <div class="panel-body">
                        <form>
                        <input type="text" name="" placeholder="08xxxxxxxxxxxx" required=""> 
                    </div>
                    <button class="btn btn-primary" style="margin-bottom: 20px;margin-left: 15px;">Verifikasi</button>
                    </form>
                    <button class="btn btn-danger" style="margin-bottom: 20px;" onclick="window.location='akun.html'">Cancel</button>
                </div>

                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Perubahan Password terakhir</h3>

                    </div>
                    <div class="panel-body">
                        Tidak Pernah
                    </div>
                </div>

            </div>
            <div class="col-md-9  admin-content" id="order" style="display: none; margin-bottom:20%;">
                <div class="panel panel-info" style="margin: 1em;">
                   <div class="container" >
  <div class="row">
    <div class="table-responsive" >
      <table class="table table-bordered" style="width: 70%" >
        <thead >
          <tr >
            <th ">#</th>
            <th >Nama Produk</th>
            
            
            <th>Tanggal Pesan</th>
            <th>Harga</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td><a href="http://www.mirchu.net/mobiles/apple-iphone-6/" target="_blank">Apple iphone 6</a></td>
            
            
            <td>11/6/2014</td>
            <td>$899.00</td>
            <td><span class="label label-info">Processing</span></td>
          </tr>
          <tr>
            <td>2</td>
            <td><a href="http://www.mirchu.net/mobiles/lg-g3/" target="_blank">LG G3</a></td>
            
            
            <td>10/6/2014</td>
            <td>$621.00</td>
            <td><span class="label label-success">Shipped</span></td>
          </tr>
          <tr>
            <td>3</td>
            <td><a href="http://www.mirchu.net/mobiles/samsung-galaxy-s5/" target="_blank">Samsung Galaxy S5</a></td>
            
            
            <td>11/9/2013</td>
            <td>$640.00</td>
            <td><span class="label label-info">Processing</span></td>
          </tr>
          <tr>
            <td>4</td>
            <td><a href="http://www.mirchu.net/rook-bootstrap-app-landing-page/" target="_blank">Rook Landing Page</a></td>
            
            <td>11/6/2014</td>
            <td>$12.00</td>
            <td><span class="label label-primary">Completed</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
                </div>

            </div>





   <div class="col-md-9  admin-content" id="settings" style="display: none; margin-bottom:30%;">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Notification</h3>
                    </div>
                    <div class="panel-body">
                        <div class="label label-success">allowed</div>
                    </div>
                </div>

            </div>

            <div class="col-md-9  admin-content" id="change-password" style="display: none;">
                <form action="akun.html" method="post">

                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="new_password" class="control-label panel-title">Password Lama</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="new_password" required="">
                                </div>
                            </div>

                        </div>
                    </div>
           
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="new_password" class="control-label panel-title"> Password Baru</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="pw1" required=""
                                     pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                                    >
                                    <br>
          -Password berisi minimal 8 karakter
          <br>
          -Password kombinasi dari karakter A-Z, a-z, 0-9
           dan simbol 
          
                                </div>
                            </div>

                        </div>
                    </div>

             
                    <div class="panel panel-info" style="margin: 1em;">
                        <div class="panel-heading">
                            <h3 class="panel-title"><label for="confirm_password" class="control-label panel-title">Konfirmasi Password</label></h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password_confirmation" id="pw2" required="">
                                     <br>
          -Konfirmasi password harus sama dengan password
                                </div>
                            </div>
                        </div>

                    </div>
                     <button class="btn btn-primary" style="width: 200px;" onSubmit="alert('Submitted.');return false;">Submit</button>
                  



                    <!-- <div class="panel panel-info border" style="margin: 1em;">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="pull-left">
                                    <input type="submit" class="form-control btn btn-primary" name="submit" id="submit">
                                </div>
                            </div>
                        </div>
                    </div> -->

                </form>
            </div>

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
            <div class="col-md-9  admin-content" id="settings" style="display: none;"></div>

            <div class="col-md-9  admin-content" id="logout" style="display: none; margin-bottom:30%;">
                <div class="panel panel-info" style="margin: 1em;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Logout</h3>
                    </div>
                    <div class="panel-body">
                        Do you really want to logout ?&nbsp;&nbsp;
                        <a href="#" class="label label-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span>&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;</span>
                        </a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="#" class="label label-success">&nbsp;<span>&nbsp;&nbsp;No&nbsp;&nbsp;&nbsp;</span></a>
                    </div>
                    <form id="logout-form" action="index.html" method="POST" style="display: none;">
                    </form>



                </div>
            </div>
        </div>
</div>
                  
<div ng-include="'footer.html'">
    
</div>
                            
                        </body>


                        </html>