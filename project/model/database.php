<?php
//    $dsn = 'mysql:host=localhost;dbname=tech_support_start';
//    $username = 'unitexam2';
//    $password = 'unitexam2';

    $dsn = 'mysql:host=byuifoodcom.fatcowmysql.com;dbname=byuifood';
    $username = 'project';
    $password = 'project';
    $db = new PDO($dsn, $username, $password);
    try {
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
    
    
?>

