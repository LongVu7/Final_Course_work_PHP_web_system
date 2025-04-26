<?php if(isset($_POST['moduleName'])){
try{
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    
    insertModule($pdo, $_POST['moduleName']);

    header('location: module.php');
    $modules = $pdo->query($query);
    $title = 'List of Users';
    ob_start();
    include '../templates/admin/module.html.php';
    $output = ob_get_clean();
    
    }
    catch(PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
else{
    include '../includes/DatabaseConnection.php';
    $title = 'Add a new module';


    $title1 = 'List of Questions';
    $query_1= 'SELECT * FROM question';
    $questions = $pdo->query($query_1);
    ob_start();
    include '../templates/admin/addmodule.html.php';
    $output = ob_get_clean();

}
include '../templates/admin/layout.html.php';
?>