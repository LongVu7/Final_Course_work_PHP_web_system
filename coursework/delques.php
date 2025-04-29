<?php
try
{
    include 'includes/DatabaseConnection.php';

    $query = 'DELETE FROM question WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('location: ques.php');
}
catch (PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() ;
}

    include 'templates/layout.html.php';
  
