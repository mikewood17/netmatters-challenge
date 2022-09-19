<?php

  $firstName = $_POST['firstName']; 
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

        
  //Database connection
     $conn = new mysqli('localhost' , 'root' , '' , 'phpcontactform');

  $regex = "/^[a-zA-Z\d\.]+@[a-zA-Z\d\.]+\.[a-zA-Z\d\.]{2,}+$/";
  if(isset($_POST['submit'])) {
  if(preg_match($regex, $_POST['email']))  {
    $output = "<span style='color:green'>Valid Email</span>";
  } else {
    $output = "<span style='color:red'>Invalid Email</span>";
    }
  }

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




