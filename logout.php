<?php 

session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['mensaje']);
unset($_SESSION['type']);

header('location: index.php');