<?php
session_start();
?>

<?php
  include "../general/conexion.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM mex_usuarios WHERE nombre = '$username' and password = '$password'";

$result = $con->query($sql);


if ($result->num_rows == 1) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);

    header("Location: ../../");
    die();

 } else {
   echo "Username o Password estan incorrectos.";

   echo "<br><a href='login.html'>Volver a Intentarlo</a>";
 }

 ?>
