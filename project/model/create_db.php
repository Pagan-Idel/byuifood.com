<?php

function add_user($email, $password, $username) {
    global $db;
   
    $query = 'INSERT INTO User
                 (email, password, userName)
              VALUES
                 (:email, :password, :userName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':userName', $username);
    $statement->execute();    
    $statement->closeCursor();

}