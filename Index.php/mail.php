<?php

  $firstName = $_POST['firstName']; 
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  //Database connection
     $conn = new mysqli('localhost' , 'root' , '' , 'phpcontactform');


     if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error);
    } else {
    
    $insertQuery = "insert into contactformdata (firstName, lastName, email, phoneNumber, subject, message) values('". $firstName ."', '". $lastName ."', '". $email ."', '". $phoneNumber ."', '". $subject ."', '". $message ."')";
      
try{ 
      
    
      if ($conn->query($insertQuery)
        == TRUE){echo "registration successful";} else {
            echo "Something went wrong, please try again";
        }
    }catch (Exception $e){
          echo $e->getMessage();
      }
      $conn->close();
    }
        
?>




