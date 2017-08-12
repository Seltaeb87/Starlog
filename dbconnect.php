<?php
/**
 * Created by PhpStorm.
 * User: Bastiaan
 * Date: 12-8-2017
 * Time: 0:05
 *
 * Notice: This is for testing now! Do not use this in a live environment.
 *
 */

/**
 * Connect to database starlog
 */
$name = 'root';
$password = '';
$host = 'localhost';
$database = 'starlog';

$connection = mysqli_connect($host, $name, $password, $database);

/**
 * Check if connection is established
 */
if ($connection != true) {
    echo 'error';
}else{
    echo 'database connected succesfully!';
}

/**
 * Select all rows from table 'Logs'
 */
$sql = "SELECT * from logs";
$result = $connection->query($sql);

/**
 * Get the results and store them in an array. Print array or select the output you want.
 */
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "Object: "          . utf8_encode($row['object']) . "<br />";
        echo "Object location: " . utf8_encode($row['object_location']) . "<br />";
        echo "Type object: "     . utf8_encode($row['object_type']) . "<br />";
        echo "Magnitude: "       . utf8_encode($row['magnitude']) . "<br />";
        echo "Equipment: "       . utf8_encode($row['equipment']) . "<br />";
        echo "Observing site: "  . utf8_encode($row['observing_location']) . "<br />";
        echo "Observing date: "  . utf8_encode($row['observing_date']) . "<br />";
        echo "Notes: "           . utf8_encode($row['notes']) . "<br />";
    }
}

/**
 * CLose the database
 */
mysqli_close($connection);