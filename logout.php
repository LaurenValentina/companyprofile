<?php
session_start();
unset($_SESSION['login']);
echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";
