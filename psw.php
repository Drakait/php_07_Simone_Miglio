<?php

require('index.php');

do {
    $password = readline("Inserisci la password: ");
    $errors = [];

    if (!checkLenght($password)) {
        $errors[] = "La password deve essere lunga almeno 8 caratteri.";
    }

    if (!checkNumber($password)) {
        $errors[] = "La password deve contenere almeno un numero.";
    }

    if (!checkUppercase($password)) {
        $errors[] = "La password deve contenere almeno una lettera maiuscola.";
    }

    if (!checkSpecial($password)) {
        $errors[] = "La password deve contenere almeno un carattere speciale.";
    }

    if (!empty($errors)) {
        echo "\nPassword non valida. Errori:\n";
        foreach ($errors as $err) {
            echo "- $err\n";
        }
        echo "\nRiprova. \n\n";
    }

} while (!empty($errors));

echo "\n Password accettata!\n";

?>
