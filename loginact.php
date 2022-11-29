<?php session_start();
if (empty($_COOKIE['user'])){
	echo "<body>
        	<script>
            alert('akun tidak terdaftar')
            window.location.replace('login.php')
            </script>
        </body>";
}
$set = json_decode($_COOKIE['user'], true);
$get_email = $_POST['email'];
$get_pws = $_POST['password'];

function set_sesssion(){
	global $get_email,$set;
	$_SESSION['email']= $get_email;
	$_SESSION['another']= $set;
}
if (isset($_POST['login'])){
	if(in_array($get_email, $set)&& in_array($get_pws, $set)){
		set_sesssion();
		header('location:index1.php');
	}
	else {
		echo "<body>
        	<script>
            alert('email atau password salah')
            window.location.replace('login.php')
            </script>
        </body>";
	}
}
?>
