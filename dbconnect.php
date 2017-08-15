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
}