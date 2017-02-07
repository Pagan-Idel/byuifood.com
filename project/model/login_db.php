<?php

// Create a function to login the customer and retrieve the customer data 
// when the login is successful

function login_user($email, $password) {
    global $db;
    $query = 'SELECT * FROM User
              WHERE email = :email AND password = :password';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();
    
    return $user;
    
}
