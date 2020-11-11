<?php
session_start();
ob_start();

define('URL', 'http://localhost/celke/');
define('URLADM', 'http://localhost/celke/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASS', '123456');
define('DBNAME', 'celke');
