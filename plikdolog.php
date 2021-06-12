<?php
require_once "polaczenie.php";

session_start();

$lacze = @new mysqli($host,$db_user,$db_password,$db_name);

if($lacze->connect_errno!=0)
{
  echo "Error ".$lacze->connect_errno;
}
else
{
  $username=$_POST['username'];
  $password=$_POST['password'];
  $username = htmlentities($username, ENT_QUOTES, "UTF-8");
  if ($udana = @$lacze->query(sprintf("SELECT * FROM klient WHERE usern='%s'",mysqli_real_escape_string($lacze,$username)))){
    $irek = $udana->num_rows; //irek- ILE REKORDÓW

    if($irek>0)
    {
          $wiersz= $udana->fetch_assoc();

          if(password_verify($password,$wiersz['pass'])) {
          $_SESSION['ZALOGOWANO']                    = true;
          $_SESSION ['username']          = $wiersz['usern'];
          $udana->free_result();
          header('Location: glo.php');
          }
          else {

             $_SESSION['error'] = "<h3>Nie poprawny login lub ha222slo</h3>";
             header('Location:index.php');
          }
    }
    else {

         $_SESSION['error'] = "<h3>Nie poprawny login lub hasl3333o</h3>";
         header('Location:index.php');

   }
  $lacze->close();
  }
}


 ?>
