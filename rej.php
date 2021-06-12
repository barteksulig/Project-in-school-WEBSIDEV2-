<?php
session_start();
if(isset($_POST['email'])){
   $status=true;

   $username=$_POST['username'];
   if((strlen($username)<5) || (strlen($username)>10)){
     $status=false;
     $_SESSION['error_username']="Nick musi mieć długość od 5 do 10 znaków!";
   }
   if(ctype_alnum($username)==false) {
     $status=false;
     $_SESSION['error_username']="Nick ma zawierac litery alfanumeryczne!(bez ąęłżźó)";
   }

   $email=$_POST['email'];

   $password1 = $_POST['password1'];
   $password2 = $_POST['password2'];

   if((strlen($password1)<8) || (strlen($password2)>14)){
     $status=false;
     $_SESSION['error_password']="Hasło musi posiadać od 5 do 10 znaków!";
   }
   if(ctype_alnum($password1)==false) {
     $ok=false;
     $_SESSION['error_password'] = "Hasło ma zawierac litery alfanumeryczne!(bez ąęłżźó)";
   }
   if($password1!=$password2){
     $status=false;
      $_SESSION['error_haslo'] = "Hasła nie są identyczne!";
   }

   $password_hash = password_hash($password1,PASSWORD_DEFAULT);


   require_once "polaczenie.php";
   mysqli_report(MYSQLI_REPORT_STRICT);

   try
   {
    $lacze = new mysqli($host,$db_user,$db_password ,$db_name);
    if($lacze->connect_errno!=0)
    {
    throw new Exception(mysqli_connect_errno());
    }
    else
    {
      $udana= $lacze->query("SELECT id_u FROM klient WHERE email='$email'");

      if (!$udana) throw new Exception($lacze->error);

      $iloscmail = $udana->num_rows;
      if($iloscmail>0){
        $status=false;
        $_SESSION['error_email']="Taki e-mail jest już w bazie";
      }
      $udana= $lacze->query("SELECT id_u FROM klient WHERE usern='$username'");

      if (!$udana) throw new Exception($lacze->error);

      $ilosclog = $udana->num_rows;
      if($ilosclog>0){
        $status=false;
        $_SESSION['error_username']="Taki nick jest zajęty";
      }
      if($status==true){
        if($lacze->query("INSERT INTO klient VALUES(NULL,'$username','$password_hash','$email',DEFAULT)"))
        {
          $_SESSION['udanarej']=true;
          header('Location:index.php');
        }
      else
      {
        throw new Exception($lacze->error);
      }
      $lacze->close();
    }
   }
 }
   catch (Exception $e)
   {
     echo "Wystąpił błąd przepraszamy";
   }
 }
 ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dzień dobry</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
  </head>
  <body>
     <div class="logo">
     <h1>Zarejestruj się !</h1>
     </div>
     <div class="container">
        <div id="panel">
         <form method="post">
         <label for="username">Podaj swój login:</label>
         <input type="text" id="username" name="username">
         <label for="password">Hasło:</label>
         <input type="password" id="password" name="password1">
         <label for="password">Powtórz Hasło:</label>
         <input type="password" id="password" name="password2">
         <label for="email">Podaj email</label>
         <input type="email" id="username" name="email">

           <div id="lower">
             <input type="submit" value="Register">
           </div>
         </form>
      </div>
      <div class="rej">
        <?php
         if(isset($_SESSION['errorl']))
         {
           echo $_SESSION['errorl'];
         }
         ?>
      </div>
      </div>
      <footer>
      <div class="footeri">
       <h3 style="text-align: center;">Witaj na naszej stronie !</h3>


      </div>
      </footer>

  </body>
</html>
