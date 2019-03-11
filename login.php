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
if (isset($_POST)) {
	if ($_POST['inputFORM'] === 'LoginSQL'){ // Insira o campo no seu formulário <input type="hidden" name="inputFORM" value="LoginSQL">
		$username = $sql->injection($_POST['username']);
		$password = $sql->injection($_POST['password']);
		/* Checagem se a conta existe */
		$username_query = 'SELECT * FROM login WHERE `username` LIKE `' . $Username . '` LIMIT 1';
		$username_result = $mysqli->query($username_query);
		$username_row = $username_result->fetch_array(MYSQLI_ASSOC);
		if ($username_row > 0) {
			/* Checagem se a senha é a mesma do banco de dados */
			$password_query = 'SELECT * FROM login WHERE `username` = "' . $username . '" AND `password` = "' . $password . '" LIMIT 1';
			$password_result = $mysqli->query($password_query);
			$password_row = $password_result->fetch_array(MYSQLI_ASSOC);
			if ($password_row > 0) {
				setcookie('account', $crypt->aes($username, true), strtotime('+1 mouth'), '/', $config->domain, 1, 1);
				header('Location: /');
			} else {
				$error_password = true;
			}
		} else {
			$error_username = true;
		}
	}
}
$mysqli->close();
