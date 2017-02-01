<?php
/* Caso não saiba PHP Orientado a Objeto não altere este arquivo ou altere por conta e risco */

/* Criptografia AES Própria
class Crypt {
	public function AES($data, $function){
		$Config = new Config();
		if($function == true){
			$data = bin2hex($data);
			$return = openssl_encrypt($data, $Config->Crypt_Method, $Config->Crypt_Key, false, $Config->Crypt_IV);
		}elseif($function == false){
			$data = openssl_decrypt($data, $Config->Crypt_Method, $Config->Crypt_Key, false, $Config->Crypt_IV);
			$return = hex2bin($data);
		}
		return $return;
	}
}
$Crypt = new Crypt();

/* Proteção contra Injeção SQL */
class SQL {
	public function Injection($data){
		$data = addslashes($data);
		$data_Array = array(
			'SELECT' => '',
			'UPDATE' => '',
			'INSERT' => '',
			'DROP' => ''
		);
		$return = str_replace(array_keys($data_Array), $data_Array, $data);
		return $return;
	}
}
$SQL = new SQL();
