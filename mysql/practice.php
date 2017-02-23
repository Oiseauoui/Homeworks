<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 21.02.2017
 * Time: 8:49
 */
//header('Content-Type: text/html; charset=utf-8');
$dsn = 'mysql:host=localhost; dbname=practice_db; charset=UTF8';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
    var_dump($dbh); // object(PDO)#1 (0) { }
} catch (PDOException $e) {
    echo $e->getMessage();
}
// procedure style:
//mysqli_query($dbh, "SET NAMES UTF8");
//mysqli_query($dbh, "SET NAMES 'utf8'");
//mysqli_query($dbh, "SET CHARACTER SET 'utf8'");
//mysqli_query($dbh, "SET SESSION collation_connection = 'utf8_general_ci'");
//mysqli_query($dbh, "SET NAMES 'cp1251'");
//mysqli_query($dbh, "SET CHARACTER SET 'cp1251'");

// oo-style
//$mysqli->query("SET NAMES UTF8");


$sth = $dbh->query('SELECT * FROM country LIMIT 3');
$countries = $sth->fetchAll(PDO::FETCH_ASSOC);

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sth = $dbh->query('SELECT * FROM country LIMIT 3');
    $countries = $sth->fetchAll(PDO::FETCH_OBJ);
    echo '<pre>';
    print_r($countries);
    echo '<pre>';

} catch (PDOException $e) {
    echo $e->getMessage();
}
