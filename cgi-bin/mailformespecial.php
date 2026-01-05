#!/usr/bin/php8

<?php
//if "email" is filled out, send email
if (isset($_REQUEST['email']))
{
	   //let's send email to the client to check if he input a valid email ID
	  $email = $_REQUEST['email'];
	  $subject = "Thanks for contacting me!"; //$_REQUEST['subject'];
	  $message = "I wanted to let you know that our system has received your message and that I will respond within 24 hours.\n";
	  $message .= "Also wanted to say Congratulations!  You have taken a positive step toward achieving your goals! \n\n";
	  $message .= "Through the co-creative partnership and thought provoking process of coaching, you will attain insight, \n";
	  $message .= "inspiration, and move forward with the actions that will culminate in happiness and success in every facet of your life.\n\n";
	  $message .= "I look forward to talking with you and to helping you realize your breakthrough perspectives! \n\n";
	  $message .= "All My Best,\n\n";
	  $message .= "Odilia \n"; //$_REQUEST['message'];
	  $from = "odilia@breakthroughperspectives.com";
	  $headers = "From:" . $from;
	  if (mail($email, $subject, $message, $headers))
	  {
		  //now send feedback email to Odilia
		  $date_time = date("l dS \of F Y h:i:s A");
		  $to = "juan.rivera1000@gmail.com"; //"juan.rivera1000@gmail.com"; //
		  $subject = "You've got feedback";
		  $message = "Hello Odilia,\n\nOn ";
		  $message .= $date_time . ", \n";
		  $message .= "You have received feedback. \n";
		  $message .= "The following data has been submitted; \n\n";
		  $message .= "Name:    " . $_REQUEST['givenname'] . " ";
		  $message .= $_REQUEST['name'] . "\n";
		  $message .= "Email:   " . $_REQUEST['email'] . "\n";
		  $message .= "Phone:   " . $_REQUEST['phone'] . "\n";
		  $message .= "City:    " . $_REQUEST['city'] . "\n";
		  $message .= "Coments: " . $_REQUEST['comment'] . "\n";
		  $from = $_REQUEST['email'];
		  $headers = "From:" . $from;
		  if (mail($to, $subject, $message, $headers))
		  {
			  echo "You have sent email to Breakthrough Perspectives. Thanks! \n\n<a href='http://www.breakthroughperspectives.com/index.html'><br><br>Click here </a>to go back to Breakthrough Perspectives home page.";
		  }
		  else
		  {
			   echo "We couldn't send email to Breakthrough Perspectives, \n problems with the mail server, please try again later. Thanks!  \n\n<a href='http://www.breakthroughperspectives.com/index.html'><br><br>Click here </a>to go back to Breakthrough Perspectives home page.";
	      }
	  }
	  else
	  {
		  $message = "We couldn't send email to Breakthrough Perspectives, \n please check your email address " . $from;
		  $message .= " and try again. Thanks! \n\n<a href='Contact_Odilia.html'><br><br>Click here </a>to go back to Breakthrough Perspectives contact form page.";
		  echo $message;
      }
}
else
{
	echo "Please enter a valid email address. Thanks! \n\n<a href='http://www.breakthroughperspectives.com/Contact_Odilia.html'><br><br>Click here </a>to go back to Breakthrough Perspectives contact form page.";
}

?>