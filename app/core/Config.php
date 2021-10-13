<?php

define('WEBSITE_TITLE', "My Website");

define('DB_NAME','notes');
define('DB_USER','root');
define('DB_PASS','');
define('DB_HOST','localhost');

define('PROTOCAL','http');

$path = str_replace("\\", "/",PROTOCAL ."://" . $_SERVER['SERVER_NAME'] . __DIR__  . "/");

$path = str_replace($_SERVER['DOCUMENT_ROOT'], "/", $path);

define('ROOT', str_replace("app/core", "public", $path));
define('ASSETS', str_replace("app/core", "public/assets", $path));

define('DEBUG',true);

if(DEBUG)
{
    ini_set("display_errors",1);
}else{
    ini_set("display_errors",0);
}