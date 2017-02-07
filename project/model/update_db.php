 <?php
function update_price($id, $price ){
    global $db;
$query = 'UPDATE Item SET itemPrice = :price WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}