<?php
session_start();

if(empty($_POST["name"]|| empty($_POST["password"] || empty($_POST["inlineRadioOptions"])))) {
    echo"missing password or name or gender";
    header('Location: index.php');

    exit();
}
echo"<pre>";
print_r($_POST);
$_SESSION['name'] = $_POST['name'];
echo($_SESSION['name']." ".$_POST['password']);
header('Location: welcome.php');

?>