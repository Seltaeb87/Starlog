<?php
/**
 * Created by PhpStorm.
 * User: Bastiaan
 * Date: 12-8-2017
 * Time: 0:01
 */

require('dbconnect.php');

echo "<b>Welcome to StarLog! this is the first setup, quick and dirty. Will refactor/update/refine after first things work!</b><br /><br />";


/**
 * Select all rows from table 'Logs'
 */
$sql = "SELECT * from logs";
$result = $connection->query($sql);

/**
 * Get the results from observations list
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