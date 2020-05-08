<?php
session_start();
if (isset($_SESSION['googleCode'])):
    session_regenerate_id();
    unset($_SESSION['googleCode']);
    unset($_SESSION['email']);
    unset($_SESSION['secret']);

    session_unset();
	header("location:login.php");
endif;
?>
