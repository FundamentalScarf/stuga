<?php

// Förstör/nollställ sessionen (måste vara startad)

session_start();
session_destroy();

// Starta den igen (nu tom)

session_start();

// Sätt ett meddelande att det gick bra att logga ut och skicka till formuläret

$_SESSION['messages'] = array(
    array('status' => 'green', 'text' => 'Du är utloggad'),
);

header('Location: form.php');
