<?php

session_start();

if(!isset($_SESSION['id'])){
    $_SESSION['erro'] = "Você não tem permissão para acessar essa página!";
    header("Location: ..\index.php");
    exit();
}