<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="/styles/login.css">

<title>Document sans titre</title>
</head>

<body>



	<form id="authentification" name="authentification" method="post" action="/cmd/login.html">

		{if isset($page['connexion-erreur'])}<p class="rouge">{$page['connexion-erreur']}</p>{/if}
		<label>Login				
		<input name="email-login" type="text" value="" /></label>
		<label>Mot de passe			<input name="mdp-login" type="password" value="" /></label>
		<label>					<input name="submit-login" type="submit" value="Valider" class="bouton" /></label>
			

	</form>

</body>
</html>