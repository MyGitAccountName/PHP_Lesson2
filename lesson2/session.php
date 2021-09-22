<?php
    session_start();
?>

<form action="session.php" method="get">
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
    if(isset($_GET['enter'])) {
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['password'] = $_GET['password'];
    }
    if(isset($_SESSION['login'])) {
        echo "Логин: " . $_SESSION['login'] . "<br>";
    }
    if(isset($_SESSION['password'])) {
        echo "Пароль: ".$_SESSION['password']."<br>";
    }
?>
