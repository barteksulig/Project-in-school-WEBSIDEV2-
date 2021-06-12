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
		.context1{
			width: 80%;
			height: 1000px;
			float:left;
			padding: 20px;
			font-size: 20px;
		}
		.context2{
			width: 15%;
			height: 1000px;
			float:left;
			padding: 20px;
			font-size: 15px;
		}
		.context1 a{
			text-decoration: none;
			color: grey;
		}
		.jed{
			padding-right: 10px;	}
		img{
			height: 300px;
			width: 500px;
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
   <div class="context1">
		 <h2>Witamy na naszej skromnej stronie!</h1>
			 <p>Poznaj <span style="color: red;">3K</span> – najskuteczniejszy serwis komputerowy w Szydłowcu. W chwili awarii laptopa, błędów systemu lub utraty ważnych danych zapisanych na uszkodzonym dysku powinieneś zgłosić się właśnie do nas. Jesteśmy profesjonalistami, którzy skupieni są na satysfakcji klienta. Oferujemy szybką i skuteczną naprawę laptopów każdego modelu i marki, a także serwis komputerów stacjonarnych i obsługę informatyczną firm. Zapraszamy do pozostawiania zgłoszeń, na które niezwłocznie odpowiadamy w każdym przypadku. Zadzwoń do nas i doświadcz wysokiej jakości usług w serwisie „3k”!!!</p>

			 <p>Możesz też napisać do nas w wiadomości za pomocą naszej strony ! (dostępne po 14.06.2020) spróbujemy się z toba jak najszybciej skontaktować ! Nasza strona ma również możliwość zobaczenia galerii naszych usług araz cennik!</p>
			 <p>Jeśli chcesz się dowiedzieć wiecej o autorach stony kliknij w zakładkę <a href="#">o autorach</a> <span style="color: yellow;">gorąco polecamy ! </span> </p>
			 <div style="text-align: center;"><img src="1.jpg" class="jed"><img src="2.jpg" class="jed"><img src="home2.jpg" class="dwa"></div>

			 <h4>Masz wybór</h4>
       1. Przynieś osobiście swój komputer do siedziby naszej firmy w celu zdiagnozowania usterki. Dowiesz się co jest uszkodzone i jakie są koszty ewentualnej naprawy. <br>
			 2. Wyślij do nas komputer po wcześniejszym kontakcie telefonicznym lub mailowym z opisem usterki oraz swoimi danymi teleadresowymi

<h2> <span style="color: pink;">DANE DO WYSYŁKI W ZAKŁADCE KONTAKT !</span> </h2>

   </div>
	 <div class="context2">
		 <h4>Profesjonalizm to nasze <span style="color: red;">Motto</span></h4>
 <p>Posiadamy wiedzę oraz doświadczenie zdobyte przez wieloletnie pogłębianie wiedzy na temat rozwiązań informatycznych. Jesteśmy młodym, dynamicznym zespołem składającym się ze specjalistów branży IT oraz instalatorskiej. Szanujemy czas oraz finanse naszych kooperantów, dlatego też, jesteśmy bardzo zaangażowani w prowadzone działania. Staramy się również, aby były one jak najbardziej efektywne. Ważnym elementem działalności firmy jest serwisowanie i naprawa sprzętu komputerowego (komputery PC, notebooki, monitory, telewizory, projektory, itp.)</p>

<p>Posiadamy największy w Polsce magazyn z częściami serwisowymi, przez co naprawy odbywają się błyskawicznie.</p>

Od początku istnienia naszej firmy naprawiliśmy tysiące laptopów , komputerów i innego sprzętu. Oddając sprzęt w nasze ręce możesz być pewien profesjonalnie przeprowadzonej usługi serwisowej.

<p>Oferujemy pomoc zarówno w przypadku awarii sprzętowej jak i zainstalowanego oprogramowania. Rozwiązujemy wszelkie problemy związane z elektroniką.
Wiedza, doświadczenie, park maszynowy, dostęp do części zamiennych podczas napraw komputerów to podstawa od której trzeba zacząć. Na tym polu posiadamy możliwości, umiejętności oraz ogromne doświadczenie, z którego korzystamy podczas różnorodnych napraw.</p>

<p>Jeżeli Twój komputer uległ uszkodzeniu nie zwlekaj i skorzystaj z usług naszego profesjonalnego serwisu. Nasi serwisanci mają duże doświadczenie w naprawach sprzętu większości marek istniejących na rynku.</p>

	 </div>
	</main>
	<footer>
		<div class="footer">
    <h5>Klient nasz pan!!!</h3>
		</div>

	</footer>

</body>
</html>
