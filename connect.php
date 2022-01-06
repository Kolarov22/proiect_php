<?php

    $conectare = mysqli_connect('localhost', 'mircea', '123', 'autentificare');
    if (!$conectare){
        die('Conectarea nu a reusit!');
    }

?>