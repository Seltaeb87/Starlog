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
$user = 'root';
$password = '';

$connection = new PDO('mysql:host=127.0.0.1:3306;dbname=starlog', $user, $password);