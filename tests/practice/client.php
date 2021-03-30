<?php

define('DB_CONFIG', 'mysql:host=localhost;dbname=eshop;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

try {

    $db = new PDO(DB_CONFIG, DB_USER, DB_PASSWORD);
    $sql = "INSERT INTO test_table VALUES (null, 'demo text for insert')";
    $count = $db->exec($sql);
    echo $count . '<hr>';

    $sql = "UPDATE test_table SET text = 'update demo text record from pdo' WHERE id = 1";

    if ($count = $db->exec($sql)) {

        echo $count . ' row is updated!' . '<hr>';

    }

    $sql = "DELETE FROM test_table WHERE id = 1";

    if ($db->exec($sql)) {

        echo 'Row deleted!';

    }

} catch (PDOException $perr) {

}