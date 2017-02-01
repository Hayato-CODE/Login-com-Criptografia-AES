<?php
/* Includes Necessario */
include('libraries/config.php');
include('libraries/class.php');

/* Leitura do Cookie */
$Cookie_LOGIN = $Crypt->AES($_COOKIE['NOMEDOCOOKIE'], false); //Altere o 'NOMEDOCOOKIE'
