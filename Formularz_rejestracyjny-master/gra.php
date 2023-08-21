<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css"/>

</head>

<body>
<div id="box">
<?php

	echo "<center><b><p>Witaj ".$_SESSION['user'].'!</b> <button> <a href="logout.php">Wyloguj się!</a></button> </p></center>';
	echo "|<p><b>Drewno</b>: ".$_SESSION['drewno'];
	echo "| <b>Kamień</b>: ".$_SESSION['kamien'];
	echo "| <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	echo "<center><p><b>E-mail</b>: ".$_SESSION['email'];
	echo "</br><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p></center>";
	
?>
</div>
</body>
</html>