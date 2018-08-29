<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   $ses_sql1 = mysqli_query($db,"select firstname from profile where username = '$user_check' ");
   
   $row1 = mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);

   $firstname_session = $row1['firstname'];

   $ses_sql2 = mysqli_query($db,"select lastname from profile where username = '$user_check' ");
   
   $row2 = mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);

   $lastname_session = $row2['lastname'];
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>