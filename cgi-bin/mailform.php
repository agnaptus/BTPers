#!/usr/bin/php5

<?php
if (isset($_REQUEST['email']))
   //if "email" is filled out, send email
 {
  //send email
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $message = $_REQUEST['message'];
  $from = "odilia@breakthroughperspectives.com";
  $headers = "From:" . $from;
  mail($email, $subject, $message, $headers);
  echo "Thank you for using our mail form";
  }
else
  //if "email" is not filled out, display the form
  {
  echo "<form method='post' action='mailform.php'>
  Email: <input name='email' type='text'></input><br>
  Subject: <input name='subject' type='text'></input><br>
  Message:<br>
  <textarea name='message' rows='15' cols='40'></textarea><br>
  <input type='submit'></input>
  </form>";
  }
?>