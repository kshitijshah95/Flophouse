<?php
   include('config.php');
   session_start();

        $sql = "SELECT outpassleft FROM outpass WHERE username = ".$_SESSION['login_user'];
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);

      if($row['outpassleft']>0) {
            $counting=$row['outpassleft'];
            $counting--;
            $sql1="UPDATE outpass SET outpassleft='$counting' WHERE username=".$_SESSION['login_user'];
             $result1 = mysqli_query($db,$sql1);
            
              $row1 = mysqli_fetch_array($result1);
                $_SESSION['flag']=1;
              for($i=$_SESSION['srno'];$i<60;$i++) {
                $_SESSION['srno']+=1;
                $_SESSION['success']="Outpass Generated : ".$_SESSION['srno'];
                header("location:welcome.php");
                break;
              }
       
      }
?>