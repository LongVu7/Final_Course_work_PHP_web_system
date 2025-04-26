<?php if(isset($_POST['content'])){
try{
    include 'includes/DatabaseConnection.php';
    include 'includes/DatabaseFunctions.php';
    // include 'includes/uploadFile.php';

    

    insertQuestion($pdo, $_POST['content'],$_POST['image'],$_POST['authors'],$_POST['modules']);
    header('Location: ques.php');
    }
    catch(PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
else{
    include 'includes/DatabaseConnection.php';
    $title = 'Add new question';
    $query_1 = 'SELECT * FROM author';
    $authors = $pdo->query($query_1);
    $query_2= 'SELECT * FROM module';
    $modules = $pdo->query($query_2);
    ob_start();
    include 'templates/addques.html.php';
    $output = ob_get_clean();

}
include 'templates/layout.html.php';
?>