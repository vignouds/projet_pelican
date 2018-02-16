<?php 
session_start();

$_SESSION = array();
session_destroy();

echo 'Vous avez été déconnecté. <br> <a href="index.php">Retourner à l\'acceuil</a>';