<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 
session_start();
if (empty($_SESSION["name"]) ) {
echo"ur not logged";

}else {

    echo"ur logged as ".$_SESSION['name'];
}

?>
</body>
</html>