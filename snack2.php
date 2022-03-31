<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso
negato” -->

<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];


    if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '.') && strpos($mail, '@')) { //regolare i dettagli dell'if per il nome, eta' e mail
        echo 'ACCESS VERIFIED!!!';
    } else {    // dare accesso negato se non soddisatti i parametri dell'IF
        echo 'ACCESS DENIED... ';
    };




?>
