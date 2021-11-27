<?php 
//whether the user log in or not
if(!isset($_SESSION['user'])){//if user session is not set or user is not log in
    $_SESSION['no-login-message']="<div class='error text-center'>Please login to access Admin Panel.</div>";
    header('location:'.SITEURL.'admin/login.php');


}
?>
