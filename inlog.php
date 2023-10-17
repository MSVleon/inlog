<?php

session_start();
$_SESSION = array();

$gebruikers = array(
    array('naam' => 'leon', 'wachtwoord' =>'1234'),
    array('naam' => 'piet', 'wachtwoord' =>'2345'),
    array('naam' => 'jan', 'wachtwoord' =>'3456')
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Inloggen</title>
    <link rel="stylesheet" href="inlog.css">
</head>

<body>
    <dialog id="sign-in-dialog">

        <form method="post" action="multi_array.php">
            <div id="inlog_hd">
                <h1> <b>Header </b> </h1>
            </div>

            <div id="inlog_cn">
                Username: <input type="text" name="login"> <br> <br>
                Password: <input type="password" name="wachtwoord"> <br> <br>
            </div>
           
            <div id="inlog_ft">
                <button type="submit" name="knop">Sign In</button>
                <button type="button" onclick="closeDialog()">Cancel</button>
            </div>
        </form>
        
  </dialog>

<button id="open-btn" onclick="openSignInDialog()">Sign In</button>


<script>
     //dialog
function openSignInDialog() {
  document.getElementById('sign-in-dialog').showModal();
}
function closeDialog() {
  document.getElementById('sign-in-dialog').close();
}
</script>

</body>
</html>
