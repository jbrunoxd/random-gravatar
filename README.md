random-gravatar
===============

Projeto original: https://github.com/ruddfawcett/random-gravatar

Muda o seu Gravatar para um avatar aleatório de uma lista pré-selecionada.

##Uso
**Atenção: O programa deleta todos os seus gravatares anteriores ao usar!

###API Key
Obtenha uma API key no [Askimet](https://public-api.wordpress.com/oauth2/authorize/?client_id=973&response_type=code&blog_id=0&state=e4e530dd6d63fe7fa7fdacb5f2fabd4211cd309562b4d0358fde7038c5325114&redirect_uri=https%3A%2F%2Fakismet.com%2Fsignup%2F%3Fconnect%3Dyes%26action%3Drequest_access_token%26plan%3Dpersonal&variation=original&jetpack-code&jetpack-user-id=0&action=oauth2-login), use seu login no Gravatar para entrar.

###Setup
Crie um arquivo chamado secrets.php dentro da pasta classes/ seguindo o exemplo:

```php
<?php 
	const AKISMET_API_KEY = 'sampleapykey123';
	const GRAVATAR_EMAILS = [
		0 => 'primary_gravatar@email.com',
		1 => 'any_other_secondary@emails.com'
	];
?>
```

###Cron Job
Atualmente não fiz nada relacionado, só visitando o index.php já troca a imagem, talvez para um TODO no futuro.

##Attribuição
- [Gravatar XML-RPC API Wrapper](http://www.phpclasses.org/package/5700-PHP-Send-requests-to-the-Gravatar-API-about-images.html) - Implementaçãp PHP por [Wouter van Vilet](http://www.interpotential.com).
- Usa [XML_RPC](http://pear.php.net/package/XML_RPC) por [Stig Bakken](http://pear.php.net/user/ssb) e [Daniel Convissor](http://pear.php.net/user/danielc).
