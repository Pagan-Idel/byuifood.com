<?php

// Get all the products for the registration dropdown list
function get_products() {
    global $db;

    $query = 'SELECT *
          FROM products';
    $statement = $db->prepare($query);
    $statement->execute();
    $pnames = $statement->fetchAll();
    $statement->closeCursor();


    return $pnames;
}
