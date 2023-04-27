<?php

include("connection.php");

$select = "SELECT
                codigo,
                nome,
                placa,
                chassi,
                montadora
            FROM
                conssessionaria.automoveis
            ORDER BY
                codigo";

$result = $connection->query($select);

print_r($result);