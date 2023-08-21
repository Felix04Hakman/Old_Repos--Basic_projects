<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Formularz logowania</title>
</head>

<body>
	
   <a href="rejestracja.php" style="border: 2px solid blue;text-decoration:none; color:lightblue;padding:2px;"; type="submit">Rejestracja - załóż darmowe konto!</a>
   <br/><br/>
	
	<form action="formularz.php" method="post">
	
		Login: <br /> <input type="text" placeholder="Login" name ="login" style="text-align:center"/> <br />
		Hasło: <br /> <input type="password" placeholder="Hasło" name ="haslo" style="text-align:center"/> <br /><br />
		<input type="submit" value="Zaloguj się" />
	
	</form>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>