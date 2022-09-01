<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1>Cadastro</h1>
    <br>
    <div id="dMsg"></div> <!-- Área para Mensagens de Validação -->
    <br>
    <form id="Cadastro" action="salvar_cadastro.php" method="post">
        <label for="Nome">Nome do motorista:</label>
        <input id="Nome" name="Nome" type="input" value="">
        <br>
        <label for="Carro_modelo">Modelo do veículo:</label>
        <input id="Carro_modelo" name="Carro_modelo" type="input" value="">
        <br>
        <label for="Placa">Placa do veículo:</label>
        <input id="Placa" name="Placa" type="input" value="">
        <br>
        <label for="Local_origem">Local de origem:</label>
        <select id="Local_origem" name="Local_origem"> <!--Esse será alterado-->
            <option value="SE">Selecionar</option>
            <option value="sc">Santa Catarina</option>
        </select>
        <br>
        <label for="sCidade">Cidade:</label>
        <select id="sCidade" name="sCidade"> <!--Esse será alterado-->
            <option value="00">Selecionar</option>
            <option value="1212112">Rio do Sul</option>
        </select>
        <br>
        <label for="Local_destino">Local de origem:</label>
        <select id="Local_destino" name="Local_destino"> <!--Esse será alterado-->
            <option value="SE">Selecionar</option>
            <option value="sc">Santa Catarina</option>
        </select>
        <br>
        <label for="sCidade">Cidade:</label>
        <select id="sCidade" name="sCidade"> <!--Esse será alterado-->
            <option value="00">Selecionar</option>
            <option value="1212112">Rio do Sul</option>
        </select>
        <br><br>
        <input id="bLimpar" type="reset" value="Limpar">&nbsp;|&nbsp;
        <input id="bSalvar" name="bGravar" type="submit" value="Gravar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
<!-- Chamada Biblioteca JS do JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Chamada Biblioteca JS da Aplicação -->
<script language="JavaScript" src="lib/funcoes.js"></script>
</html>