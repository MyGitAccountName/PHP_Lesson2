<?php
    session_start();
    echo "Логин: ".$_SESSION['login']."<br>";
    echo "Пароль: ".$_COOKIE['password']."<br>";
?>