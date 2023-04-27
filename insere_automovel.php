<?php

include("connection.php");

$dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

if(!empty($dados['cadastrar'])){
    $insert = "INSERT INTO automoveis
                 (nome,
                  placa,
                  chassi,
                  montadora) values
                  (:nome,
                   :placa,
                   :chassi,
                   :montadora
                  )";
    $cad_veiculo = $connection->prepare($insert);
    $cad_veiculo->bindParam(':nome', $dados['nome']);
    $cad_veiculo->bindParam(':placa', $dados['placa']);
    $cad_veiculo->bindParam(':chassi', $dados['chassi']);
    $cad_veiculo->bindParam(':montadora', $dados['montadora']);
    $cad_veiculo->execute(); 
}else {
    echo "Erro";
}