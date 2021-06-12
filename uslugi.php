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
    .pom{
      width: 90%;
      padding: 20PX;
      height: 2500px;

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
    <div class="pom">
      <h4>$ Konserwacja / czyszczenie wentylatorów, wymiana pasty termo-przewodzącej: <span style="color:gold;">od 70zł do 150zł</span></h4>
      <h4>$ Złożenie komputera z części klienta:                                      <span style="color:gold;">od 70zł do 150zł</span></h4>
      <h4>$ Wymiana płyty głównej:                                                    <span style="color:gold;"> od 100zł do 170zł</span></h4>
      <h4>$ Wymiana / dodanie karty graficznej:                                       <span style="color:gold;">od 50zł</span></h4>
      <h4>$ Wymiana zasilacza:                                                        <span style="color:gold;">od 70zł</span></h4>
      <h4>$ Wymiana procesora:                                                        <span style="color:gold;">od 70zł</span></h4>
      <h4>$ Wymiana / dodanie pamięci RAM:                                            <span style="color:gold;">od 30zł</span></h4>
      <h4>$ Wymiana / dodanie karty rozszerzeń (np.: karta tv, karta sieciowa, karta dźwiękowa, kontroler usb): <span style="color:gold;">od 30zł</span></h4>
      <h4>$ Wymiana / dodanie dysku twardego:                                         <span style="color:gold;">od 30zł</h4>
      <h4>$ Wymiana / dodanie napędów optycznych:                                     <span style="color:gold;">od 30zł</span></h4>
      <h4>$ Czyszczenie czytnika napędu optycznego: <span style="color:gold;">od 60zł</span></h4>
      <h4>$ Wymiana baterii dla układu CMOS (BIOS):<span style="color:gold;">od 30zł</span></h4>
      <h4>$ Wymiana / modernizacja układu chłodzenia: <span style="color:gold;">od 40zł</span></h4>
      <h4>$ Wymiana / przełożenie podzespołów do nowej obudowy: <span style="color:gold;">od 100zł do 170zł</span></h4>
      <h4>$ Prace związane ze sprzętem (laptopy, netbooki):<span style="color:gold;">różnie</span></h4>
      <h4>$ Wymiana płyty głównej:<span style="color:gold;">od 120zł</span></h4>
      <h4>$ Konserwacja układu chłodzenia, wymiana pasty i czyszczenie laptopa:<span style="color:gold;">od 80zł do 150zł</span></h4
      <h4>$ Wymiana klawiatury:<span style="color:gold;">od 60zł do 120zł</span></h4>
      <h4>$ Wymiana inwertera:<span style="color:gold;">od 70zł do 100zł</span></h4>
      <h4>$ Wymiana / dodanie pamięci RAM:<span style="color:gold;">od 30zł do 60zł</span></h4>
      <h4>$ Wymiana dysku twardego:<span style="color:gold;">od 30zł do 50zł</span></h4>
      <h4>$ Wymiana uszkodzonej matrycy LCD:<span style="color:gold;">od 80zł do 120zł</span></h4>
      <h4>$ Wymiana taśmy matrycy:<span style="color:gold;">od 80zł do 150zł</span></h4>
      <h4>$ Wymiana karty WIFI:<span style="color:gold;"></span>od 50zł</h4>
      <h4>$ Wymiana układu chłodzenia:<span style="color:gold;">od 80zł do 120zł</span></h4>
      <h4>$ Wymiana procesora:<span style="color:gold;">od 80zł do 120zł</span></h4>
      <h4>$ Wymiana napędu optycznego:<span style="color:gold;">od 40zł</span></h4>
      <h4>$ Wymiana baterii dla układu CMOS (BIOS):<span style="color:gold;">od 80zł</span></h4>
      <h4>$ Czyszczenie klawiatury: od 70zł do 130zł<span style="color:gold;">od 70zł do 130zł</span></h4>
      <h4>$ Czyszczenie czytnika napędu optycznego: od 40zł<span style="color:gold;">od 40zł</span></h4>
      <h4>$ Prace związane z oprogramowaniem (komputery stacjonarne, laptopy, netbooki):<span style="color:gold;">rożnie</span></h4>
      <h4>$ Optymalizacja systemu, usuwanie wirusów, trojanów, dialerów, adware, spyware, zbędnego oprogramowania: <span style="color:gold;"></span></h4>
      <h4>$ Rozwiązanie problemu z uruchomieniem systemu Windows:<span style="color:gold;">od 70zł do 90zł</span></h4>
      <h4>$ Resetowanie hasła dla konta administrator (tylko systemy Windows):<span style="color:gold;">od 100zł do 150zł</span></h4>
      <h4>$ Rozwiązanie problemu z uruchomieniem systemu Windows:<span style="color:gold;">od 130zł do 170zł</span></h4>
      <h4>$ Podstawowa instalacja systemu operacyjnego Windows 95/98/2000/ME/XP/Vista/7/8/8.1/10:<span style="color:gold;">od 50zł do 70zł</span></h4>
      <h4>$ Aktualizacja oprogramowania lub systemu operacyjnego:<span style="color:gold;">od 40zł</span></h4>
      <h4>$ Podział dysku twardego na partycje i formatowanie:<span style="color:gold;">od 30zł</span></h4>
      <h4>$ Przenoszenie danych i archiwizacja na płytach CD, DVD, pamięciach typu pendrive lub dyskach zewnętrznych<span style="color:gold;">od 30zł do 300zł</span></h4>
      <h4>$ Odzyskanie utraconych  danych z dysku twardego, pamięci typu pendrive lub kraty pamięci:<span style="color:gold;">od 50zł do 5000zł</span></h4>
      <h4>$ Stworzenie kopii bezpieczeństwa „recovery” – kopia zapasowa systemu:<span style="color:gold;">od 30zł</span></h4>
      <h4>$ Przywrócenie kopii bezpieczeństwa „recovery” – kopia zapasowa systemu:<span style="color:gold;">od 50zł</span></h4>
      <h4>$ Instalacja aplikacji, oprogramowania, sterowników:<span style="color:gold;">od 30zł do 100zł</span></h4>
      <h4>$ Konfiguracja oprogramowania:<span style="color:gold;">od 30zł</span></h4>
      <h4>$ Konfiguracja urządzeń sieciowych (modemy, switche, routery):<span style="color:gold;">od 50zł do 150zł</span></h4>
      <h4>$ Instalacja i konfiguracja urządzeń sieciowych (modemy, switche, routery):<span style="color:gold;">od 80zł do 200zł</span></h4>
      <h4>$ Odzyskiwanie parametrów dostępowych do Internetu operatorów takich jak: Orange, Netia:<span style="color:gold;">od 30zł</span></h4>
      <h4>$ Rozwiązanie problemu z dostępem do internetu:<span style="color:gold;">od 60zł</span></h4>
      <h1>Inne:</h1>
      <h4>$ Ogólna diagnostyka sprzętu komputerowego:<span style="color:gold;">od 30zł do 60zł</span> (opłata nie pobierana przy naprawie usterki!)</h4>
      <h4>$ Instalacja peryferii komputerowych (drukarki, skanery, kamery, itp.):<span style="color:gold;">od 50zł do 100zł</span></h4>
      <h4>$ Podłączanie do Internetu dodatkowych urządzeń typu: TV, konsola do gier, smartfon, tablet, drukarka sieciowa:<span style="color:gold;">od 50zł do 100zł</span></h4>
    </div>

	</main>
	<footer>
		<div class="footer">
    <h5>Jesteśmy profesjonalistami !!! </h3>
		</div>

	</footer>

</body>
</html>
