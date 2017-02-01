<?php
/* Includes Necessario */
include('config.php');
include('class.php');

/* Leitura do Cookie */
$Cookie_LOGIN = $Crypt->AES($_COOKIE['NOMEDOCOOKIE'], false); //Altere o 'NOMEDOCOOKIE'
