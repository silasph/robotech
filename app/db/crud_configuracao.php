<?php
require_once "crud.class.php";

$crud = new crud();
$crud->dsn = "mysql:dbname=".DB_NAME.";host=".DB_HOST."";
$crud->username = DB_USER;
$crud->password = DB_PASS;