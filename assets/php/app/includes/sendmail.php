<?php
      $to = 'chrisrafe019@gmail.com';
      $subject = 'Pest Control Service Order';
      $message = 'User input will be show here!';
      $headers = "From: customer-1@gmail.com\r\n";
      if (mail($to, $subject, $message, $headers)) {
         echo "SUCCESS";
      } else {
         echo "ERROR";
}