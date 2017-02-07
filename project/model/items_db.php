<?php

function get_items() {
    global $db;
   
    $query = 'SELECT *
                  FROM Item
                  ORDER BY id';

$statement = $db->prepare($query);
$statement->execute();
$items = $statement->fetchAll();
$statement->closeCursor();

return $items;
}
