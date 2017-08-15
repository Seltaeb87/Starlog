<?php
/**
 * Created by PhpStorm.
 * User: Bastiaan
 * Date: 12-8-2017
 * Time: 11:26
 */

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

$input = ['Username', 'Firstname', 'Lastname', 'Password', 'Location'];

if (isset($_POST['submit'])){
    foreach ($input AS $item){
        if (!isset($_POST[$item]) || empty($_POST[$item])){
            echo 'Field ' . $item . ' is missing. Please fill in the form.<br />';
        }
    }
}
