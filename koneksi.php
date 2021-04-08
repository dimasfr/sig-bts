<?php  
$host = 'localhost';
$db = 'sig_bts';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try{
    $koneksi = new PDO($dsn, $user, $pass);
   }catch(PDOException $error) {
	 echo "<center>Connection Fail!".$error->getMessage();
}
?>