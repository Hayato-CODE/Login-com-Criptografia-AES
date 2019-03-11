<?php
/**
 * Configurações Necessarias
 */
class config {
	public $domain		= 'dominio.com'; //Altere para o seu domínio sem www.
	public $crypt_method	= 'AES-256-CBC';
	public $crypt_key	= 'AES|NOMEDACHAVE'; //Altere o 'NOMEDACHAVE'
	public $crypt_iv	= '65SAF4156SAD165F'; //Altere mas mantenha 16 caracteres
	public $mysqli_host	= 'localhost'; //Altere para o servidor sql usado
	public $mysqli_user	= 'sql_user'; //Altere para o usuário sql usado
	public $mysqli_pass	= 'sql_pass'; //Altere para o senha sql usada
	public $mysqli_bank	= 'sql_bank'; //Altere para o banco sql usado
}
$config = new config();
$mysqli = new mysqli($config->mysqli_host, $config->mysqli_user, $config->mysqli_pass, $config->mysqli_bank);
