<?php if(isset($_POST['username'] , $_POST['password'] , $_POST['email'], $_POST['firstname'], $_POST['lastname'])){
try{
    include '../includes/DatabaseConnection.php';

   

    $query = 'INSERT INTO author SET
        name = :name,
        password = :password,
        email = :email,
        firstname = :firstname,
        lastname = :lastname';
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':name', $_POST['username']);
        $stmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_DEFAULT));
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':firstname', $_POST['firstname']);
        $stmt->bindValue(':lastname', $_POST['lastname']);
        $stmt->execute();
        header('location: user.php');
    $questions = $pdo->query($query);
    $title = 'List of Users';
    ob_start();
    include '../templates/ques.html.php';
    $output = ob_get_clean();
    
    }
    catch(PDOException $e){
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage();
    }
}
else{
    include '../includes/DatabaseConnection.php';
    $title = 'Add a user';
    $query_1 = 'SELECT * FROM author';
    $authors = $pdo->query($query_1);
    ob_start();
    include '../templates/admin/adduser.html.php';
    $output = ob_get_clean();

}
include '../templates/admin/layout.html.php';
?>