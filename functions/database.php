<?php

function getDB(){

    // wie ein singleton / behält ihren wert auch wenn fkt. mehrfach aufgerufen
    // wird also nicht jedes Mal neu angelegt
    static $db;  

    // beim ersten Mal hat $db noch den WErt null daher kann man überprüfen:
    if($db instanceof PDO){
        return $db;
    }

    require_once CONFIG_DIR . '/database.php';

    $dsn = sprintf("mysql:host=%s;dbname=%s;charset=utf8", DB_HOST, DB_NAME);

    $db = new PDO($dsn, DB_USER, DB_PASS);

    return $db;
}
