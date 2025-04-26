<?php
try
{
    include '../includes/DatabaseConnection.php';
    

    $query = 'DELETE FROM module WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('location: module.php');
}
catch (PDOException $e){
    $title = 'An error has occurred';
    $output = 'An error database has occurred: ' . $e->getMessage() ;
}

    include '../templates/admin/layout.html.php';
  
