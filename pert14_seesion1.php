?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus
ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada
setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();
if (isset ($_POST['Login'])) {
$user = $_POST['user'];
$pass = $_POST['pass'];//periksa login
if ($user == "febri" && $pass = "400265") {
//menciptakan session
$_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
echo "<h1>Anda berhasil LOGIN</h1>";
echo "<h2>Klik <a href='pert14_session2.php'>di sini
(per14_sesion2.php)</a>
untuk menuju ke halaman pemeriksaan session";
}
} else {
  
}
?>
<html>
<head>
<title>Login here...</title>
</head>
<body>
<form action="" method="post">
<h2> Silahkan Login...</h2>
Username : <input type="text" name="febri"><br>
Password : <input type="password" name="400265"><br>
<input type="submit" name="Login" value="Log In">
</form>
</body>
</html>