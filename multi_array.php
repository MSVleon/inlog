<?php

session_start();

$gebruikers = array(
    array('naam' => 'leon', 'wachtwoord' =>'1234'),
    array('naam' => 'piet', 'wachtwoord' =>'2345'),
    array('naam' => 'jan', 'wachtwoord' =>'3456')
);

foreach ($gebruikers as $gebruiker) {
    if($_POST['login'] == $gebruiker['naam'] && $_POST['wachtwoord'] == $gebruiker['wachtwoord']) {
        $_SESSION['is_ingelogd'] = $gebruiker['naam'];
        $_MESSAGE = "Welkom " . $_SESSION["is_ingelogd"];
    }
}

if(isset($_SESSION['is_ingelogd'])) {
    header("Location: http://localhost/basis%20webprogammeren/PHP%20basis/inlog/toegang.php"); 
} else {
    header("Location: geen_toegang.php");
}

?>
