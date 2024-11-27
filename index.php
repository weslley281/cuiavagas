<?php
require_once "./config/db.php";
require_once "./config/createTables.php";

require_once './model/user.php';

$createTable = new CreateTables;
$user = new User($conn);

$createTable->createUsersTable($conn);