<?php
require_once "config.php";

    //:::::SIDEBAR, NAVBAR AND HEADER::::::::
    //include_once "views/layouts/header.php";
    //include_once "views/layouts/navbar.php";
    //include_once "views/layouts/sidebar.php";
    //:::::END OF SIDEBAR, NAVBAR AND HEADER:::::
        //:::::::ROUTES ARE ADDED
        require_once "includes/routes.php";
        //::::::END OF ROUTES:::::

    route('/', function () {
        include "views/home.php";
    });
    route('/home', function () {
        include "views/home.php";
    });

   $action = $_SERVER['REQUEST_URI'];
    dispatch($action);
//:::FOOTER:::
//include_once "views/layouts/footer.php";
//:::END OF FOOTER :::

