<?php

// autoload non composer
require_once "../app/config/config.php";
require_once "../app/core/Database.php";
require_once "../app/core/Auth_controller.php";


// autoload composer
require_once __DIR__ . "/../vendor/autoload.php";

use core\App;

new App();
