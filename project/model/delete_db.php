<?php

function delete_user($id) {
    global $db;

    $query = 'DELETE FROM User
              WHERE id = :id;';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}
