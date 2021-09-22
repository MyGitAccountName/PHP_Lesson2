<form action="index.php" method="get">
    <label for="login">Логин:</label>
    <input type="text" id="login" name="login">
    <br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Войти" name="enter">
    <br>
</form>

<a href="index2.php">One more</a>

<?php
    if (isset($_GET['enter']))
    {
        $login = $_GET['login'];
        $password = $_GET['password'];
        setcookie('login', $login, time()+3600, '/', 'localhost', false);
        setcookie('password', $password, time()+3600);
    }
    if(isset($_COOKIE['login'])) {
        setcookie('login', $login, time()+3600);
        echo "Логин: ".$_COOKIE['login']."<br>";
    }
    else echo "Логин: ".$_GET['login']."<br>";

    if(isset($_COOKIE['password'])) {
        setcookie('password', $password, time()+3600);
        echo "Пароль: ".$_COOKIE['password']."<br>";
    }
    else echo "Пароль: ".$_GET['password']."<br>";

?>