<?php
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';


    $query = 'SELECT question.id, content,author.name, author.email, `date`, moduleName, `image` FROM question
    INNER JOIN author ON authorid = author.id
    INNER JOIN module ON question.moduleid = module.id';
    $questions = $pdo->query($query);
    
    $totalQuestion = totalQuestion($pdo);
    $title = 'List of Questions';
    ob_start();
    include 'templates/ques.html.php';
    $output = ob_get_clean();
    
}
catch(PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';
?>