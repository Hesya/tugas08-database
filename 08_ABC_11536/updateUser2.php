<?php
require_once 'koneksi.php';

$id=$_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

		$sqr = "update user set username='$username', level='$level', password='$password' where id='$id'";
$input = "UPDATE user(username, password, level) values ('$username', '$password', '$level')";
if ($username == "" or $password == "") {
    echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
    window.location = "updateUser.php";
    </script>';
} else {
	$hasil = mysqli_query($conn, $input);    
	header('location:index.php?update=1');    
}
?>