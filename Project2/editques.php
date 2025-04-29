<?php
include 'includes/DatabaseConnection.php';
try{ if(isset($_POST['content'])){

    $query = 'UPDATE question SET content = :content WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':content', $_POST['content']);
    $stmt->bindValue(':id', $_POST['quesid']);
    $stmt->execute();
    header('location: ques.php');
} else {
    $query = 'SELECT * FROM question WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $question = $stmt->fetch();
    $title = 'Edit Question/Posts';
    ob_start();
    include 'templates/editques.html.php';
    $output = ob_get_clean();
}
}
catch (PDOException $e){
    $title = 'Some error has occurred';
    $output = 'Database error: ' . $e->getMessage();

}
include 'templates/layout.html.php';
?>