<?php
// Needed: a function to get a customer by their email address
function get_customer_by_email($email) {
    global $db;
    $query = 'SELECT * FROM customers
              WHERE email = :email';    
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();    
    $names = $statement->fetchAll(PDO::FETCH_ASSOC);
    $statement->closeCursor();    
   
    return $names;
    
}