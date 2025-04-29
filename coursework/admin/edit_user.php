<?php
include '../includes/DatabaseConnection.php';
include '../includes/DatabaseFunctions.php';
try {
    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])&& isset($_POST['firstname'])&& isset($_POST['lastname'])) {
        updateUser($pdo, $_POST['userid'], $_POST['name'], $_POST['password'], $_POST['email'], $_POST['firstname'], $_POST['lastname']);
        header('location: user.php');
 
    } else {
        $query = 'SELECT * FROM author WHERE id = :id';
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':id', $_GET['id']);
        $stmt->execute();
        $user = $stmt->fetch();
        $title = 'Edit User';
        ob_start();
        include '../templates/admin/edituser.html.php';
        $output = ob_get_clean();
    }
} catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}

include '../templates/admin/layout.html.php';
?>