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
      $stmt = $conn->prepare("insert into registration(firstName, lastName, email, phoneNumber, subject, message) value(?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sssssi",$firstName, $lastName, $email, $phoneNumber, $subject, $message);
      $stmt->execute();
      echo "registration successful";
      $stmt->close();
      $conn->close();
    }
        
?>




