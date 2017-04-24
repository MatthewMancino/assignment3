<?php

  $sql = "CREATE DATABASE newDB";
  if($db->query($sql) === TRUE){
    echo "database created successfully";
  }

  #Create a new table
  $sql = "CREATE TABLE MyBuildings (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    address VARCHAR(40) NOT NULL,
    square_feet INT(15,1),
    original_price DOUBLE(21,2),
    interest FLOAT(15,2),
    balance DOUBLE(21,2)
    )";

    #Make new request to the database
    if($db->query($sql) === TRUE){
      echo "Table MyBuildings created successfully";
    }

  $sql = "INSERT INTO MyBuildings(id,address,sqfeet,price,interest,balance)
  VALUES ('A','3369 Parkview','1100','200000')";

  $sql .= "INSERT INTO MyBuildings(id,address,sqfeet,price,interest,balance)
  VALUES ('B','407 Semple Street','1100','150000')";

  $sql .= "INSERT INTO MyBuildings(id,address,sqfeet,price,interest,balance)
  VALUES ('C','3369 Parkview','1100','150000')";

  $sql .= "INSERT INTO MyBuildings(id,address,sqfeet,price,interest,balance)
    VALUES ('D','3369 Parkview','1100','150000')";

  if($db->$query($sql) === TRUE){
    echo "Building has successfully added";
  } else{
    echo "Error: " . $sql . "<br>" . $db->error;
   }

?>
