<?php
/**
 * Created by PhpStorm.
 * User: Bastiaan
 * Date: 12-8-2017
 * Time: 0:01
 */

require('dbconnect.php');

echo "<b>Welcome to StarLog! this is the first setup, quick and dirty. Will refactor/update/refine after first things work!</b><br /><br />";

try {
    foreach($connection->query('SELECT * from logs') as $row) {
        echo "Object: "          . $row['object'] . "<br />";
        echo "Object location: " . $row['object_location'] . "<br />";
        echo "Type object: "     . $row['object_type'] . "<br />";
        echo "Magnitude: "       . $row['magnitude'] . "<br />";
        echo "Equipment: "       . $row['equipment'] . "<br />";
        echo "Observing site: "  . $row['observing_location'] . "<br />";
        echo "Observing date: "  . $row['observing_date'] . "<br />";
        echo "Notes: "           . $row['notes'] . "<br />";
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
}