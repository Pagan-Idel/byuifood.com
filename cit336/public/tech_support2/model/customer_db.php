<?php

// Create a function to login the customer and retrieve the customer data 
// when the login is successful

function login_customer($email, $password) {
    global $db;
    $query = 'SELECT * FROM customers
              WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $customer = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $customer;
    
}
