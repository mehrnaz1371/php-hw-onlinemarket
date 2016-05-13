<?php
require 'functions.php';
$db=new mysqli("localhost","root","","market_db");
$db->query("SET NAMES 'UTF8'");
spl_autoload_register(function($class){
    require __DIR__."/$class.php";   
});


