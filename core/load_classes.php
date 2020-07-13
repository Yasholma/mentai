<?php
    spl_autoload_register(function ($classname) {
        require_once RD . "core/class/" . strtolower($classname) . ".class.php";
    });