<?php 
include"koneksi.php";
$user=$_POST['username'];
$pass=$_POST['password'];

//echo $user,$pass;

$sql=mysqli_query($koneksi, "Select * from admin where username = '$user' 
                    and password = '$pass' ");

$cek=mysqli_num_rows($sql);

if ($cek >0){
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['password']=$password;
    //echo "<center>Selamat <b>$user</b>Berhasil Login <br>";
    //echo "Silahkan <a href=logout.php>Logout</a></center>";
    header('location:media.php');
}else{
    echo "<center>Username dan Password Anda Salah <br>";
    echo "Silahkan  <a href=index.php>Login</a> Kembali</center>";
}

?> 