<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="style.css">

    <title>Contact Form</title>
    <h1> Contact Us</h1>
</head>

<body>
<form action="mail.php" method="POST">
        <section>
            <label>First Name</label>
            <br>
            <input type="text" name="firstname" id="firstname" required>
        </section>
        <br>
        <section>
            <label>Last Name</label>
            <br>
            <input type="text" name="lastname" id="lastname" required>
        </section>

        <br>

        <section>
            <label>Email Address</label>
            <br>
            <input type="text" name="email" id="email" required>
        </section>

        <br>

        <section>

            <label>Telephone number</label>
            <br>
            <input type="text" name="telephonenumber" id="telephonenumber" maxlength="11" required>
        </section>

        <br>


        <label for="subject">Subject</label>
        <br>
        <select name="subject" id="subject" required>
            <option value="enquiry">Enquiry</option>
            <option value="callBack">Call back</option>
            <option value="complaint">Complaint</option>
        </select>
        <br>
        <br>
        <label>Message</label>
        <br>
        <textarea name="message" id="message" rows="6" cols="25"></textarea>
        <br>
        <input type="submit" name="submit" value="submit"><input type="reset" value="Clear" required>
        </section>
    
</form>
<?php

if(isset($_POST["submit"])) {
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$telephonenumber = $_POST["telephonenumber"];
$subject = $_POST["subject"];
$message = $_POST["message"];

    
}
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
}
?>
</body>   
</html>






