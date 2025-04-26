<?php
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';

    $query = 'SELECT author.id, author.name, author.password, author.email, author.firstname, author.lastname  FROM author';
    $users = $pdo->query($query);
    $totalUser = totalUser($pdo);
    $title = 'List of Users';
    ob_start();
    include '../templates/admin/user.html.php';
    $output = ob_get_clean();
    
}
catch(PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/admin/layout.html.php';
?>