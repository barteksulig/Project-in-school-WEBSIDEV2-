<?php
session_start();
if(!isset($_SESSION['ZALOGOWANO']))
{
	header('Location: index.php');
	exit();
}
 ?>

<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<title>Witamy gorąco</title>
	<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
	<style media="screen">
		.footer{
			  clear: both;
				font-size: 20px;
			  text-align: center;
			  background-color: black;
			  padding: 3px;
		}
 .tło{
   padding: 20px;
   margin-left: auto;
   margin-right: auto;
   text-align: center;
   height : 1000px;
 }
	</style>

</head>

<body>

	<header>

		<h1 class="logo">Serwis komputerowy <span style="color: red;">3K</span></h1>

		<nav id="topnav">


			<ul class="menu">
        <li><a href="glo.php">Strona główna</a></li>
				<li><a href="uslugi.php">Usługi</a></li>
				<li><a href="pomoc.php">Pomoc</a></li>
				<li><a href="onas.php">O autorach</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
	      <?php
         echo '<li><a href="#">'.$_SESSION['username'].'</a></li>';
				 echo '<li><a href="wylog.php">WYLOGUJ</a></li>';

				 ?>

			</ul>

		</nav>

	</header>
	<main>
    <div class="tło">


    <h1>W razie problemów:</h1> <br>
    <h4>1.Napisz na email do nas</h4>
    <h4>2.Poczekaj do 24h</h4>
    <h4>Postaramy się rozwiazać twoje problemy !</h4>
    <h3>Możesz napisać na fb ! </h3>
</div>
	</main>
	<footer>
		<div class="footer">
      <h5>Jesteśmy ratownikami medycznymi dla komputerów !!! </h3>
		</div>

	</footer>

</body>
</html>
