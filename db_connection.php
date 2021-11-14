<?php

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

  //Database Connection
  $connection = new mysqli('localhost', 'root', '','registrationinfo');
  if ($connection->connect_error){
    die('Connection Failed : '. $connection->connect_error);
  }

  else {
      $statement = $connection->prepare("INSERT INTO usersinfo (firstName, lastName, email, password, confirmPassword) values(?, ?, ?, ?, ?)");
	  $statement->bind_param("sssss", $firstName, $lastName, $email, $password, $confirmPassword);
      $execval = $statement->execute();
      echo $execval;
      echo "Registration successful...";
      $statement->close();
      $connection->close();
  }

  ?>
