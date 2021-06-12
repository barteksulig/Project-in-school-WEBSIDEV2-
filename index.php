<?php
session_start();
if(isset($_SESSION['ZALOGOWANO']))
{
	header('Location: glo.php');
	exit();
}

?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dzień dobry</title>
    <link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
  </head>
	<style>
  body{
		font-family: 'Open Sans Condensed', sans-serif;
	}
	.logo{
		text-align: center;
	}
	.rejest{
		background-color: green;
    font-size: 40px;
		padding: 6px;
		height: 60px;
		width: 230px;
		border: 4px solid black;
	}
	.footeri{
	  clear: both;
	  text-align: right;
	  background-color: gray;
	  padding: 20px;
	}
	.footeri a{
		color: white;
	  text-decoration: none;
	}

	</style>
  <body>
     <div class="logo">
     <h1>Witaj na stronie serwisu komputerowego <span style="color:red;">3K</span>!</h1>
		 <h3><span style="color:green;">Aby przejść dalej zaloguj się, to zajmie tylko chwilkę ;)</span></h3>
	 </div>
     <div class="container">
        <div id="panel">
         <form action="plikdolog.php" method="post">
         <label for="username">Nazwa użytkownika:</label>
         <input type="text" id="username" name="username">
         <label for="password">Hasło:</label>
         <input type="password" id="password" name="password">
           <div id="lower">
             <input type="submit" value="Login">
           </div>
         </form>
      </div>
      <div class="rej">
        <?php
         if(isset($_SESSION['error']))
         {
           echo $_SESSION['error'];
         }
         ?>
        <h4 class="rejest"><a href="rej.php"> []Zarejestruj się[]</a></h4>
      </div>
      </div>
      <footer>
      <div class="footeri">
        <a href="#">Zaloguj się jako administrator</a>


      </div>
      </footer>

  </body>
</html>
