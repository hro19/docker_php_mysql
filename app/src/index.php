<?php

// 接続
$dsn = 'mysql:dbname=test_db;host=run-php-db;';
$user = 'test';
$password = 'test';

try {
    $pdo = new PDO($dsn, $user, $password);
    $sth = $pdo->query("SELECT * FROM users");
    $users = $sth->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
} catch (PDOException $e) {
    print('Error:'.$e->getMessage());
    exit;
}