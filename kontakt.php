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
    .pic{
      float: right;
      padding: 40px;
    }
    img{
      width: 400px;
      height: 300px;
    }
    .kontakt{
      text-align: center;
      padding: 20px;
      float: left;
    }
    .info{
      float: left;
      width: 50%;
      height: 600px;
    }
    .fb{
      font-size: 100px;
      width: 100px;
      height: 100px;
      text-decoration: none;
      text-align: center;
      background-color: blue;
      border: 3px solid blue;
      transition: 2s;

      padding: 20px;
    }
    .fb a{
      color: white;
      text-decoration: none
    }
    .fb a:hover{
      color: black;
      text-decoration: none
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
<div class="kontakt">
     <label class="fb"><a href="#">f</a></label> <h1></h1>
     <label class="fb"><a href="#">f</a></label><h1></h1>
     <label class="fb"><a href="#">f</a></label><h1></h1>
</div>
<div class="info">
  <h3>Kontakt telefoniczny : <span style="color:red;">+48 999 999 999</span> </h3>
  <h3>Adres : <span style="color:green;">Szydłowiec ul.Polna 26 </span> 26-500 </h3>
  <h3>E-mail: <span style="color:lightblue;">3kservis@gmail.com</span> </h3>
  <h1>Zapraszamy do kontaktu na fb !</h1>


</div>
<div class="pic">
  <img src="home3.jpg" alt="">

</div>
	</main>
	<footer>
		<div class="footer">
    <h5>W razie problemów zawsze możesz do nas napisać ! </h3>
		</div>

	</footer>

</body>
</html>
