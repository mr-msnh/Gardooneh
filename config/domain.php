<?php
define("SUB_PATH", "gardooneh/");
define("PATH_URL", "http://".$_SERVER["HTTP_HOST"]."/".SUB_PATH);
define("PATH_URL_PUBLIC", PATH_URL."public/");
define("PATH_URL_ASSET", PATH_URL_PUBLIC."asset/");
define("ERROR_CONTROLLER", "./application/controller/errors.php");

date_default_timezone_set("Asia/Tehran");