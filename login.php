<?php
/* Includes Necessario */
include('libraries/config.php');
include('libraries/class.php');

/* Checagem de Conexão MySQLi */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Checagem do $_POST do Formulário */
if(isset($_POST)){
	if($_POST['inputFORM'] === 'LoginSQL'){ // Insira o campo no seu formulário <input type="hidden" name="inputFORM" value="LoginSQL">
		$Username = $SQL->Injection($_POST['username']);
		$Password = $SQL->Injection($_POST['password']);
		/* Checagem se a conta existe */
		$Username_Query = 'SELECT * FROM login WHERE `username` LIKE `' . $Username . '` LIMIT 1';
		$Username_Result = $mysqli->query($Username_Query);
		$Username_Row = $Username_Result->fetch_array(MYSQLI_ASSOC);
		if($Username_Row > 0){
			/* Checagem se a senha é a mesma do banco de dados */
			$Password_Query = 'SELECT * FROM login WHERE `username` = "' . $Username . '" AND `password` = "' . $Password . '" LIMIT 1';
			$Password_Result = $mysqli->query($Password_Query);
			$Password_Row = $Password_Result->fetch_array(MYSQLI_ASSOC);
			if($Password_Row > 0){
				setcookie('Account', $Crypt->AES($Username, true), strtotime('+1 mouth'), '/', $Config->Domain, 1, 1);
				header('Location: /');
			}else{
				$Error_Password = true;
			}
		}else{
			$Error_Username = true;
		}
	}
}
$MySQLi->close();
