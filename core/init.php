<?php
     // check if session has been started if not start session
    if (!isset($_SESSION)) { 
        session_start();
    }

    // Declare some constants 
    define('DS', DIRECTORY_SEPARATOR);
    define('RD', dirname(__DIR__) . DS);

    // Including necessary files
    require_once RD . "core" . DS . "database" . DS . "connect.php";
    require_once RD . "core" . DS . "load_classes.php";
    require_once RD . "core" . DS . "helpers.php";

    // Object Instance
    $subscriber = new Subscriber();

    // Error collector
    $errors = [];

    $currentPage = basename($_SERVER["PHP_SELF"]);    

