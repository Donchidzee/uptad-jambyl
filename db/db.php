<?php

// Для локалки
// define('MYSQL_SERVER', 'localhost');
// define('MYSQL_USER', 'root');
// define('MYSQL_PASSWORD', '');
// define('MYSQL_DB', 'uptad-jambyl');

// Для сервера 
define('MYSQL_SERVER', 'localhost:3306');
define('MYSQL_USER', 'p-16743');
define('MYSQL_PASSWORD', '1zDJ13');
define('MYSQL_DB', 'uptad-jambyl');

function db_connect() {
    $connection = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
    or die ("Error: " . mysqli_error($connection));

    if (!mysqli_set_charset($connection, "utf8")) {
        printf("Error: " . mysqli_error($connection));
    }

    return $connection;

}


