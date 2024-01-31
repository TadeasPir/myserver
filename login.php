<?php

echo"<pre>";
//print_r($_POST);

if(empty($_POST["name"]|| empty($_POST["password"]))) {
    echo"missing password or name";
    exit();
}
?>