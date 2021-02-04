<?php

$pdo = new PDO('mysql:host=myssql;dbname=geek_garage;host=127.0.0.1','root', 'toortoor', [

    PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION

]);

$pdo->query ("SELECt  adresse_centre from centres");



