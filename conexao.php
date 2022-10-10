<?php

    try {
        $conn = new PDO('mysql:host=localhost;dbname=fichaAlunosDB', 'root', ''); //string de conexão        
    } catch (PDOExcection $erro) {
        $erro->getMessage();
    }
    ?>