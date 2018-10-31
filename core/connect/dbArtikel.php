<?php

$config = array('host' => 'localhost','user' => 'id6534530_iweb31','pass' => 'salahudin31','dbname' => 'id6534530_iweb31_art' );

$dbArtikel = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['user'], $config['pass']);
$dbArtikel->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>