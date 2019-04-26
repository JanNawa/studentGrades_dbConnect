<?php

try {
    $connection = new PDO
            (
            "mysql:host=localhost;dbname=chayopat_somedb",
            "username",
            "password"
    );
} catch (Exception $e) {
    die("ERROR: Couldn't connect. {$e->getMessage()}");
}

?>