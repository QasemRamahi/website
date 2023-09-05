<?php
session_start();

if (isset($_SESSION['isAuthenticated']) && $_SESSION['isAuthenticated']) {
    
    session_destroy();
    header("Location: signin.php");
    exit();
} else {
   
    header("Location: signin.php");
    exit();
}
?>