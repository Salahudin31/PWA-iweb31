<?php

$config = array('host' => 'localhost','user' => 'id6534530_isalapp','pass' => 'salahudin31','dbname' => 'id6534530_b4' );

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['pass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>