<?php
/**
 * Created by PhpStorm.
 * User: Али
 * Date: 21.02.2017
 * Time: 11:43
 */

$dsn = 'mysql:host=localhost; dbname=practice_db; charset=UTF8';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $sth = $dbh->prepare('SELECT Name, President FROM country WHERE Name = :Name AND President = :President');
    $params = array(
        'Name' => 'Алжир',
        'President' => 'Абдель Азиз Бутефлика'

    );
    $sth->execute($params);
    $country = $sth->fetchAll(PDO::FETCH_ASSOC);
    print_r($country);

    echo '<br>';

    $sth->execute( array('Name' => 'Боливия', 'President' => 'Эво Моралес'));
    $country = $sth->fetchAll(PDO::FETCH_ASSOC);
    print_r($country);

} catch (PDOException $e) {
    echo $e->getMessage();
}