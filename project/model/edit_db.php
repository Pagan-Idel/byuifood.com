<?php
function get_item($id) {
    global $db;
   
    $query = 'SELECT *
                  FROM Item
                  WHERE id = :id';

$statement = $db->prepare($query);
$statement->bindValue(':id', $id);
$statement->execute();
$items = $statement->fetch();
$statement->closeCursor();

return $items;
}
