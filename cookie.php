<?php
/* Includes Necessario */
include('libraries/config.php');
include('libraries/class.php');

/* Leitura do Cookie */
$cookie_login = $crypt->aes($_COOKIE['NOMEDOCOOKIE'], false); //Altere o 'NOMEDOCOOKIE'
