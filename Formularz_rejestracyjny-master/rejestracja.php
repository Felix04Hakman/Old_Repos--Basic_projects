<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana wadalizacja?Załóżmy,że  tak!
		$wszytko_OK=true;

		//Sprawdź poprawność nickname`a
		$nick = $_POST['nick'];

		//Sprawdzenie długości nicka
		if (strlen($nick)<3|| (strlen($nick)>20)){
			$wszytko_OK=false;
			$_SESSION['e_nick']="Nick musi  posiadać  od  3 do  20 znaków!";
		}
		if ($wszytko_OK==true){
			//Hurra, wszytkie testy zaliczone, dodajemy gracza do bazy
		}
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<title>Osadnicy-załóż darmowe  konto!</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>



	<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
</head>

<body>
	<form method="post">

	 Nickname:<br/> <input type = "text" name="nick" /><br/>

	 <?php


if (isset($_SESSION['e_nick']))
{
	echo'<div class="error">'.$_SESSION['e_nick'].'</div>';
	unset($_SESSION['e_nick']);
}
	 ?>


	 E-mail:<br/> <input type = "text" name="nick" /><br/>
	 Twoje hasło:<br/> <input type = "password" name="haslo1" /><br/>
	 Powtórz hasło:<br/> <input type = "password" name="haslo2" /><br/><br/>
	 <label> <input type="checkbox" name="regulamin" /> Akceptuję regulamin</label>
	 <br/>
	 <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
     </script>
	 <br/>
	  <!--<form action="rejestracja.php" method="POST" id="recapcha">
	
      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
      <br/>
      <input type="submit" value="Submit" class="recapch">
    </form>-->
	 <input type="submit" value="Zarejestruj się!" />
      
	</form>

 
	
	
</body>
</html>