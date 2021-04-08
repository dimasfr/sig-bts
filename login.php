<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<?php
require_once 'koneksi.php';
#jika ditekan tombol login 
if(isset($_POST['login'])) {
$user = $_POST['user']; 
$password = $_POST['password'];
$sql = $koneksi->prepare("SELECT * FROM user WHERE user='$user' and  password='$password'");
$sql->execute();
$data = $sql->fetch();
$nama=$data['user'];
$tipe=$data['tipe'];
$pass=$data['password'];

if($nama==$user && $pass==$password)
	{
	session_start();
		$_SESSION['user']=$nama;
		$_SESSION['password']=$password; 
		$_SESSION['tipe'] = $tipe; 
		echo "<h3> Anda Berhasil Login</h3><br>
			  Browser Anda akan secara otomatis menuju ke halaman selanjutnya . Jika tidak silahkan klik
			  <a href='index.php'>di sini</a>
			  <br><br><br>";
		echo "<script>window.location.href='index.php';</script>";
	}
	else
	{
	// jika login salah //  
		echo "<h3> Username atau password Anda salah</h3><br>
			  Browser Anda akan secara otomatis menuju ke halaman sebelumnya dalam 3 detik. Jika tidak silahkan klik
			  <a href='home.php'>di sini</a>
			  <br><br><br>";
		header("refresh: 3;home.php");
	} 
}
?>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="#" method="post" name="login">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" name="user" class="form-control" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password">
		            
		            <button class="btn btn-theme btn-block" href="index.html" type="submit" name="login"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		          
		            
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>

  </body>
</html>