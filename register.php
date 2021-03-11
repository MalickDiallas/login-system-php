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
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <form class="uk-form-stacked js-register">
                <h1>REGISTER</h1>
                <div class="uk-margin">
                    <label for="form-stack-text" class="uk-form-label">EMAIL</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="email"
                        id="form-stacked-text" placeholder="email@email.com"required="required">
                    </div>
                    
                </div>

                <div class="uk-margin">
                    <label for="form-stack-text" class="uk-form-label">PASSWORD</label>
                    <div class="uk-form-controls">
                        <input class="uk-input"type="password" 
                        id="form-stacked-text"placeholder="Your password"required="required">
                    </div>
                    
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-default" type="submit">REGISTER</button>
                </div>
                
        
        
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script> 
    <script src="js/uikit.js"></script>
</body>
</html>