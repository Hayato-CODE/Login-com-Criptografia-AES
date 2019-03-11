# Login com Criptografia AES
Script de Login com Criptografia **OpenSSL** com **AES** e **Bin2Hex**

## Cuidados a serem tomados
> Quando colocar uma chave, que seja uma fixa, pois a mesma chave é usada para decodificar os dados, caso necessário modifique posteriormente somente por segurança.

## Adicione este código em seu Formulário HTML
```html
<input type="hidden" name="inputFORM" value="LoginSQL">
```

## Modo SSL e Non-SSL
O script esta programado para setar cookie em _**SSL**_, então como faço pra colocar ele em _**Non-SSL**_, quando não tenho um `https://` no meu domínio?
Simples, basta mudar o valor da chave `SSL` para `0` no arquivo `libraries/config.php`.

Modo SSL:

```php
<?php
class config {
	public $ssl			= 1;
}
```

Modo Non-SSL:

```php
<?php
class config {
	public $ssl			= 0;
}
```

## Arquivos
* libraries/config.php ([Código-Fonte](libraries/config.php))
* libraries/class.php ([Código-Fonte](libraries/class.php))
* login.php ([Código-Fonte](login.php))
* cookie.php ([Código-Fonte](cookie.php))

## Download
Login-com-Criptografia-AES-0.17.201.zip ([Baixar](https://github.com/hayato-code/Login-com-Criptografia-AES/releases/download/0.17.201/Login-com-Criptografia-AES-0.17.201.zip))

## Colaboradores
Criado por **Hayato** ([Twitter](https://twitter.com/hayato_code))
