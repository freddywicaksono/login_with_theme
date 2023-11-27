
<?php
session_start();
/*
Filename : logout.php
Tools : SimplePHPBot
Author : Freddy Wicaksono, M.Kom
*/

unset($_SESSION['nama']);
unset($_SESSION['email']);

// Destroy the entire session
session_destroy();

// Redirect to a login page or wherever you want the user to go after logging out
header("Location: http://localhost/loginmultiuser/login.php");
exit();
?>
