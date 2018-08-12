<?php
$msg = '';

if (!empty($_POST['username'])
    && !empty($_POST['password'])) {

    if ($_POST['username'] == 'toppay' &&
        $_POST['password'] == '1234') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'tutorialspoint';

        header("Location: dashboard.php");

        exit();
    }else {
        header("Location: login.php");

        exit();
    }
}
?>