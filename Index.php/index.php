<?php

  // I attempted to get the regex version of email validation to work but was unsuccessful
  /*$regex = "/^[a-zA-Z\d\.]+@[a-zA-Z\d\.]+\.[a-zA-Z\d\.]{2,}+$/";
  if(isset($_POST['submit'])) {
  if(preg_match($regex, $_POST['email']))  {
    $output = "<span style='color:green'>Valid Email</span>";
  } else {
    $output = "<span style='color:red'>Invalid Email</span>";
    }
  }*/
  

  if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
    { 
  
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
  }

  try{ 
      
    
      if ($conn->query($insertQuery)
        == TRUE){echo "<p>Thank you for contacting us, we'll be in touch shortly!</p>";
         } else {
            echo "<p>Something went wrong, please try again</p>";
        }
    }catch (Exception $e){
          echo $e->getMessage();
      }
      $conn->close();
    
    } else {
      echo "<p>Email is invalid!</p>";
    }
  } 

        
?>