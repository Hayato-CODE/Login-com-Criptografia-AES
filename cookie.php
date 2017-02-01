<?php
include('config.php');
include('class.php');

$Cookie_LOGIN = $Crypt->AES($_COOKIE['NOMEDOCOOKIE'], false); Altere o 'NOMEDOCOOKIE'
