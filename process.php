<?php
include("conn.php");
  $message_alert = '';
  
  if(isset($_POST['submit'])) {

    $fullName = ($_POST['fullName']);
    $email = ($_POST['email']);
    $cont = ($_POST['cont']);
    $event = ($_POST['event']);
    $address = ($_POST['address']);
    $confirmaddress = ($_POST['confirmaddress']);
    $state = ($_POST['state']);
    $city = ($_POST['city']);
    $zip = ($_POST['zip']);
    $eventd = ($_POST['eventd']);
      
    // if(!empty($_POST['languages'])) {
    //     $language = "";
    //     foreach($_POST['languages'] as $lang) {
    //         $language .= $lang." "; 
    //     }
    // }
      
    $deco = ($_POST['deco']);
    $sug = ($_POST['sug']);
    $food = ($_POST['food']);
    $drink = ($_POST['drink']);
    $guest = ($_POST['guest']);
    $bio = ($_POST['bio']);
   

    $insert = "INSERT INTO dbs(fullName,email,cont,event,address, state,city,zip,eventd,deco,sug,food,drink,guest,bio) VALUES('$fullName','$email',$cont,'$event','$address','$state','$city','$zip','$eventd','$deco','$sug','$food','$drink','$guest','$bio')";

    if($address==$confirmaddress) 
    {
        if (mysqli_query($con, $insert))
         {
            $message_alert = '
            <div class="alert alert-success">
              <strong>Success!</strong> User Registered<br>
            </div>';
        } 
        else 
        {
          $message_alert = '
          <div class="alert alert-danger">
            <strong>Failed!</strong> Not Registered!
          </div>';
        }
    } else {
        $message_alert = '
          <div class="alert alert-warning">
            <strong>Failed!</strong> address does not match!
          </div>';
    }
  }


?>