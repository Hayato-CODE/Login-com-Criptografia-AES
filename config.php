<?php
class Config {
	public $Crypt_Method		= 'AES-256-CBC';
	public $Crypt_Key			= 'AES|NOMEDACHAVE'; //Altere o 'NOMEDACHAVE'
	public $Crypt_IV			= '65SAF4156SAD165F'; //Altere mas mantenha 16 caracteres
}
$Config = new Config();
