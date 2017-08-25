<?php
/**
 * Created by PhpStorm.
 * User: Bastiaan
 * Date: 12-8-2017
 * Time: 11:26
 */

require('dbconnect.php');

?>

<form action ="register.php" method="POST">
    <label>
        Username:
        <input type="text" name="username">
    </label><br />
    <label>
        Firstname:
        <input type="text" name="firstname">
    </label><br />
    <label>
        Lastname:
        <input type="text" name="lastname">
    </label><br />
    <label>
        Choose Password:
        <input type="password" name="password">
    </label><br />
    <label>
        Location:
        <input type="text" name="location">
    </label><br />
    <input type="submit" value="Submit" name="submit">
</form>

<?php

//$input = ['Username', 'firstname', 'lastname', 'Password', 'Location'];
//
//if (isset($_POST['submit'])){
//    foreach ($input AS $item){
//        if (!isset($_POST[$item]) || empty($_POST[$item])){
//            echo 'Field ' . $item . ' is missing. Please fill in the form.<br />';
//        }
//    }
//}

$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$location = $_POST['location'];

try {
    $stmt = $connection->prepare("INSERT INTO users (username, firstname, lastname, password, location) VALUES (:username, :firstname, :lastname, :password, :location)");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':location', $location);

    $stmt->execute();
}catch (PDOException $e){
    echo $e;
}