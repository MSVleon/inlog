<?php
session_start();

    if(!isset($_SESSION['is_ingelogd'])) {
        
    }
    else {
        echo "Welkom " . $_SESSION["is_ingelogd"];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
