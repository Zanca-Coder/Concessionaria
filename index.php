<?php 

include("connection.php"); 
include("listaautomoveis.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Tela de Cadastro de Automóveis</title>
    <meta charset="UTF-8">
    <style>
        form{
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Veículos</h1>
    <form method="post" action="insere_automovel.php">
        <label>Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label>Placa:</label><br>
        <input type="text" id="placa" name="placa"><br><br>

        <label>Chassi:</label><br>
        <input type="number" id="chassi" name="chassi"><br><br>

        <select id="montadora" name="montadora">
            <option value="0" selected disabled>Selecione a montadora:</option>
            <?php
                $query = $connection->query("SELECT
                                                codigo,
                                                nome
                                            from
                                                conssessionaria.montadoras
                                            order by
                                                codigo");
                $registros = $query->fetchAll(PDO::FETCH_ASSOC);

                foreach($registros as $option) {
                ?>
                    <option value="<?php echo $option['codigo']?>">
                        <?php echo $option['nome']?>
                    </option>
            <?php
                }
            ?>
        </select><br><br>

        <button type="submit" value="cadastrar" name="cadastrar">Cadastrar</button>
    </form>
    <br><br>
    <table>
        <tr>
            <th>Nome</th>
            <th>Placa</th>
            <th>Chassi</th>
            <th>Montadora</th>
        </tr>
           <?php
                while($user_data = $result->fetchAll(PDO::FETCH_ASSOC))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['codigo']."</td>";
                }
           ?>
</table>
</body>
</html>