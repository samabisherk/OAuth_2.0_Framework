<!––Logout page -->
<?php
session_start();

session_unset();
session_destroy();
require 'login.php';
header('Location:login.php');
?>