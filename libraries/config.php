<?php
/* Configurações Necessarias */
class Config {
	public $Domain		= 'dominio.com'; //Altere para o seu domínio sem www.
	public $Crypt_Method	= 'AES-256-CBC';
	public $Crypt_Key	= 'AES|NOMEDACHAVE'; //Altere o 'NOMEDACHAVE'
	public $Crypt_IV	= '65SAF4156SAD165F'; //Altere mas mantenha 16 caracteres
	public $MySQLi_Host	= 'localhost'; //Altere para o servidor sql usado
	public $MySQLi_User	= 'sql_user'; //Altere para o usuário sql usado
	public $MySQLi_Pass	= 'sql_pass'; //Altere para o senha sql usada
	public $MySQLi_Bank	= 'sql_bank'; //Altere para o banco sql usado
}
$Config = new Config();
$MySQLi = new mysqli($Config->MySQLi_Host, $Config->MySQLi_User, $Config->MySQLi_Pass, $Config->MySQLi_Bank); //Altere os dados para o seu banco MySQLi
