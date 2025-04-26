<?php
    include '../includes/DatabaseConnection.php';
    include '../includes/DatabaseFunctions.php';
    try {
        if (isset($_POST['moduleName']) ) {
            updateModule($pdo, $_POST['moduleid'], $_POST['moduleName']);
            header('location: module.php');

        } else {
            $query = 'SELECT * FROM module WHERE id = :id';
            $stmt = $pdo->prepare($query);
            $stmt->bindValue(':id', $_GET['id']);
            $stmt->execute();
            $module = $stmt->fetch();
            $title = 'Edit User';
            ob_start();
            include '../templates/admin/editmodule.html.php';
            $output = ob_get_clean();
        }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../templates/admin/layout.html.php';
?>