<?php
class Config {
	public $Domain					= 'dominio.com'; //Altere para o seu domínio sem www.
	public $Crypt_Method			= 'AES-256-CBC';
	public $Crypt_Key				= 'AES|NOMEDACHAVE'; //Altere o 'NOMEDACHAVE'
	public $Crypt_IV				= '65SAF4156SAD165F'; //Altere mas mantenha 16 caracteres
}
$Config = new Config();
$MySQLi = new mysqli("localhost", "my_user", "my_password", "my_bank"); //Altere os dados para o seu banco MySQLi
