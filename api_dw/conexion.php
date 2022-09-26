<?php
try {
    $mbd = new PDO('mysql:host=localhost;dbname=posts', 'root', 'admin');
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
