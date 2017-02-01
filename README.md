# Login com Criptografia AES
Script de Login com Criptografia OpenSSL com AES e Bin2Hex

## Cuidados a serem tomados
Quando colocar uma chave, que seja uma fixa, pois a mesma chave é usada para decodificar os dados, caso necessário modifique posteriormente somente por segurança.

## Adicione este código em seu Formulário HTML
```html
<input type="hidden" name="inputFORM" value="LoginSQL">
```

## Modo SSL e Non-SSL
O script esta programado para setar cookie em SSL, então como faço pra colocar ele em Non-SSL, quando não tenho um `https://` no meu domínio?
Simples, basta mudar o penúltimo valor da função `setcookie` para `0` no arquivo `login.php`.

Modo SSL:

```php
<?php
setcookie('Account', $Crypt->AES($Username, true), strtotime('+1 mouth'), '/', $Config->Domain, 1, 1);
```

Modo Non-SSL:

```php
<?php
setcookie('Account', $Crypt->AES($Username, true), strtotime('+1 mouth'), '/', $Config->Domain, 0, 1);
```

## Arquivos
* libraries/config.php ([Código-Fonte](libraries/config.php))
* libraries/class.php ([Código-Fonte](libraries/class.php))
* login.php ([Código-Fonte](login.php))
* cookie.php ([Código-Fonte](cookie.php))

## Download
Login-com-Criptografia-AES-0.17.201.zip ([Baixar](https://github.com/joaopauloCODE/Login-com-Criptografia-AES/releases/download/0.17.201/Login-com-Criptografia-AES-0.17.201.zip))

## Colaboradores
Criado por Hayato ([Twitter](https://twitter.com/joaopauloCODE))
