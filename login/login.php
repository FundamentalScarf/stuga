<?php
session_start();

// Hårdkodade användaruppgifter, använd databas
$correct_username = 'root';
$correct_password = 'root';

// Kontrollera om namn och lösenord matchar en användare i databasen
// Bör ersättas med en funktion som gör SELECT på username/pwd.
if ($_POST['namn'] == $correct_username && $_POST['pwd'] == $correct_password) {
    // Om det matchar, logga in användaren och gå till profilen
    $_SESSION['namn'] = $_POST['namn'];
    header('Location: profile.php');
    // Gå till sidan personen kom ifrån: header('Location: '.$_SERVER['HTTP_REFERER']);
} else {
    // Om användaruppgifterna inte stämmer, skicka tillbaka till login-sidan
    // med ett felmeddelande (status=red).
    $_SESSION['messages'] = array(
        array('status' => 'red', 'text' => 'Ogiltigt login.'),
    );
    header('Location: form.php');
}
