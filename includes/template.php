<?php
include (__DIR__ . "/header.php");
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="style/js/header.js"></script>

<link rel="stylesheet" type="text/css" href="style/css/main.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">         
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,500,600,700&display=swap" rel="stylesheet"> 



<div class="mainContainer">
    <div class="mainContent">
        <?= $content ?>
    </div>    

    <script src="/quantumz/vendor/myNotificationHandler/inputValidation.js"></script>
    <script src="/quantumz/vendor/myNotificationHandler/notificationGenerator.js"></script>
    <script src="/quantumz/vendor/myNotificationHandler/formControl.js"></script>
    <script src="/quantumz/vendor/myNotificationHandler/myNotificcationHandlerConfig.js"> </script>

        <?php
    include(__DIR__ . "/footer.php");
    ?>

</div>
