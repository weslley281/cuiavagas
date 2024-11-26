<?php
require_once "./config/db.php";
require_once "./config/CreateTables.php";

require_once './models/User.php';

$createTable = new CreateTables;
$user = new User($conn);

$createTable->createUsersTable($conn);