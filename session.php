<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select nombre from usuarios where nombre = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['nombre'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>