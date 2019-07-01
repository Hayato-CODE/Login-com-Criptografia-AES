<?php
/* Caso não saiba PHP Orientado a Objeto não altere este arquivo ou altere por conta e risco */

/* Criptografia AES Própria */
class crypt {
	public function aes($data, $encrypt){
		$config = new config();
		if ($encrypt == true) {
			$data = bin2hex($data);
			$return = openssl_encrypt($data, $config->crypt_method, $config->crypt_key, false, $config->crypt_iv);
		} elseif ($encrypt == false) {
			$data = openssl_decrypt($data, $config->crypt_method, $config->crypt_key, false, $config->crypt_iv);
			$return = hex2bin($data);
		}
		return $return;
	}
}
$Crypt = new Crypt();

/* Proteção contra Injeção SQL */
class sql {
	public function injection($data){
		$data = addslashes($data);
		$replace = array(
			'SELECT' => '',
			'select' => '',
			'UPDATE' => '',
			'update' => '',
			'INSERT' => '',
			'insert' => '',
			'DELETE' => '',
			'delete' => '',
			'DROP' => '',
			'drop' => '',
			'TABLES => '',
			'tables' => ''
		);
		$return = str_replace(array_keys($replace), $replace, $data);
		return $return;
	}
}
$sql = new sql();
