<?php

define("dns", "mysql:host=localhost;dbname=test"); // database name
define("username", "user"); // Username
define("password", "123"); // Password

$query = "SELECT * FROM `login_table` WHERE 1;";

try {
    $db = new PDO(dns, username, password);

    //prepare statement
    $statement = $db->prepare($query);

    //Execute query
    $statement->execute();
} catch (Exception $e) {
    $error_message = $e->getMessage();
    echo "<p>Error Message: $error_message</p>";
}
