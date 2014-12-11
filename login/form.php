<?php
session_start();

// Kontrollera om det finns meddelanden att visa
if (isset($_SESSION['messages'])) {
    // Om det finns, visa dem och töm listan
    foreach ($_SESSION['messages'] as $msg) {
        echo '<p style="color:'.$msg['status'].'">'.$msg['text'].'</p>';
    }
    unset($_SESSION['messages']);
}

// Om besökaren redan är inloggad ge dom uppmaningen
// att besöka profilen direkt istället. (Kan ersättas med header Location)
if (isset($_SESSION['namn'])) {
    echo '<p>Du är redan inloggad, gå till din <a href="profile.php">profil</a>.</p>';
    die;
}

?>
<form action="login.php" method="post">
    Namn <input type="text" name="namn" /><br/>
    L&ouml;senord <input type="password" name="pwd" /><br/>
    <input type="submit" value="Login">
</form> 
