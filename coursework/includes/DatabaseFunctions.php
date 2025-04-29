<?php
function totalQuestion($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM question');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}

function totalUser($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM author');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}

function totalModule($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM module');
    $query->execute();
    $row = $query->fetch();
    return $row[0];
}

function allModules($pdo){
    $modules = query($pdo, 'SELECT * FROM module');
    return $modules->fetchAll();
}
function insertQuestion($pdo, $content, $fileToUpLoad, $authorid, $moduleid){
    $query = 'INSERT INTO question (content, `date`, `image`,authorid,moduleid) 
    VALUES (:content, CURDATE(), :fileToUpLoad,:authorid, :moduleid)';
    $parameters = [':content' => $content,'fileToUpLoad' =>$fileToUpLoad ,':authorid' => $authorid, ':moduleid' => $moduleid];
    query($pdo, $query, $parameters);
}

function insertModule($pdo, $moduleName){
    $query = 'INSERT INTO module (moduleName) 
    VALUES (:moduleName)';
    $parameters = [':moduleName' => $moduleName,];
    query($pdo, $query, $parameters);
}

function updateUser($pdo, $userid, $name, $password, $email, $lastname, $firstname){
    $query ='UPDATE author SET name = :name, password = :password, email = :email, firstname = :firstname, lastname =:lastname WHERE id = :id';
    $parameters = [':id' => $userid,':name' => $name, ':password' => $password,':email' => $email, ':firstname' => $firstname,':lastname' => $lastname];
    query($pdo, $query, $parameters);
}





function updateModule($pdo, $moduleid, $moduleName){
    $query ='UPDATE module SET moduleName = :moduleName WHERE id = :id';
    $parameters = [':id' => $moduleid, ':moduleName' => $moduleName];
    query($pdo, $query, $parameters);
}
function editModule($pdo, $moduleName, $moduleid){
    $query ='UPDATE module SET moduleName = :moduleName WHERE id = :id';
    $parameters = [':moduleName' => $moduleName, ':id' => $moduleid];
    query($pdo, $query, $parameters);
}
function addModule($pdo, $moduleName){
    $query = 'INSERT INTO module (moduleName) VALUES (:moduleName)';
    $parameters = [':moduleName' => $moduleName];
    query($pdo, $query, $parameters);
}

function deleteModule($pdo, $id){
    $parameters = [':id' => $id];
    query($pdo, 'DELETE FROM module WHERE id = :id', $parameters);}




function query($pdo, $sql, $parameters = []){
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function allAuthors($pdo){
    $authors = query($pdo, 'SELECT * FROM author');
    return $authors->fetchAll();
}




?>