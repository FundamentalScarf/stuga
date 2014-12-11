<?php

session_start();

// Kontrollera om besökaren är inloggad. 
// Är de inte det så skicka dem till login-formuläret.
if (!isset($_SESSION['namn'])) {
    $_SESSION['messages'] = array(
        array('status'=>'red', 'text'=>'OMG skärp dig.'),
    );
    header('Location: form.php');
    die;
}

// När vi försäkrat oss om att användaren är inloggad kan vi fortsätta.

?>
<h1>Välkommen <?= $_SESSION['namn'] ?></h1>
<p><a href="logout.php">Logga ut</a></p>
