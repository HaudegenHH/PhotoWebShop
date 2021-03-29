<?php
error_reporting(-1);
ini_set('display_errors', 'On');

define('CONFIG_DIR', __DIR__ .'/config');

require_once __DIR__ . '/functions/database.php';

//$db = getDB();

$sql = "SELECT id, title, description, price FROM products";
$stmt = getDB()->query($sql);

require __DIR__ . '/templates/main.php';
