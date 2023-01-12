<?php
// Database connection info 
define("dns", "mysql:host=localhost;dbname=test"); // host and database name
define("username", "user"); // database username change value for your needs
define("password", "123"); // database password change value for your needs

$db = new PDO(dns, username, password);

function userLogin($db, $username, $password)
{
    // SQL syntax query for search login table
    $query = "SELECT * FROM `login_table`;";

    // Prepare query statement
    $statement = $db->prepare($query);

    // $statement->bindValue(':username', $username, PDO::PARAM_STR);
    // $statement->bindValue(':password', $password, PDO::PARAM_STR);

    // Execute query statement
    $statement->execute();
    while ($userInfo = $statement->fetch()) {
        if ($userInfo['USERNAME'] == $username) {
            if ($userInfo['PASSWORD'] == $password) {
                echo "hello there";
            } else {
                echo "wrong info";
            }
        }
    }

    // close database connection
    $statement->closeCursor();
}
