<?php
require_once "./config/db.php";
require_once "./config/createTables.php";

require_once './model/user.php';

$createTable = new CreateTables;
$user = new User($conn);

$createTable->createUsersTable($conn);

if (isset($_GET["page"])) {
    $page = $_GET["page"];
}else{
    $page = "home";
}

switch ($page) {
    case 'home':
        require_once "views/index.php";
        break;

    case 'login':
        require_once "views/login.php";
        break;

    case 'profile':
        require_once "views/profile.php";
        break;
        
    default:
        # code...
        break;
}