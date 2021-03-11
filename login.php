<?php 

//permettre la configuration
define('__CONFIG__',true);
//permettre le required fichier
require_once"Inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/uikit.css">
</head>
<body>

    <div class="uk-section uk-container ">
    <?php echo"Hello World.Today is :".date('yy/mm/dd');?>
    <p>
        <a href="index.php">LOGIN</a>
        <a href="register.php">REGISTER</a>
    </p>
    </div>
    <script src="js/jquery.min.js"></script> 
<script src="js/uikit.js"></script>
</body>
</html>