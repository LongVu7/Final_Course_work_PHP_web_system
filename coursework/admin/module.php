<?php
try{
    include '../includes/DatabaseConnection.php';

    $query = 'SELECT moduleName, module.id FROM module';
    $modules = $pdo->query($query);
    $title = 'List of Modules';
    ob_start();
    include '../templates/admin/module.html.php';
    $output = ob_get_clean();
    
}
catch(PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include '../templates/admin/layout.html.php';
?>