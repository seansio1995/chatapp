<?php
 include('../config.php');
    switch($_REQUEST['action']){
      case "sendMessage":
        // echo "sending message from";
          session_start();
          $query=$db->prepare("INSERT into messages SET user=?,message=?");
          $run=  $query->execute([$_SESSION['username'],$_REQUEST['message']]);
            if($run){
              echo 1;
              exit;
            }
        break;



    }

 ?>
