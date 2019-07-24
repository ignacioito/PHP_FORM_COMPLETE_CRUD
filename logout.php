<?php session_start(); 
session_unset();
session_destroy();
echo ("<script language='JavaScript'>window.location='index.php';</script>");
?>
