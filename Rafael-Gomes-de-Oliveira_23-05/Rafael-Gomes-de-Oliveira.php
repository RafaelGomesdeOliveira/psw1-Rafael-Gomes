<?php
error_reporting(E_ALL);
ini_set("display_erros", 1);

$cpf = $_POST['cpf'] ?? null;
$nome = $_POST['nome'] ?? null;
$telefone = $_POST['tel'] ?? null;
$endereco = $_POST['end'] ?? null;

if ($cpf != null && $nome != null && $telefone != null && $endereco != null) {
    guardarUsuarios($cpf, $nome, $telefone, $endereco);

}

// cpf vai referenciar os usuários

function guardarUsuarios($cpf, $nome, $telefone, $endereco)
{
    $usuario = array(
        $cpf => [
            "Nome" => $nome,
            "Endereço" => $endereco,
            "Telefeone" => $telefone
        ]
    );

    $arquivo = 'usuario.txt';
    $usuarioString = json_encode($usuario);

    file_put_contents($arquivo, $usuarioString, FILE_APPEND);


    //file_put_contents(primeiro o nome do arquivo, o array em string use o json_encode para isso, FILE_APPEND serve para escrever no arquivo)

}


//echo "$cpf $nome $telefone $endereco";


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @charset "UTF-8";

        * {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            box-sizing: border-box;

        }

        /* ESSE CÓDIGO CSS NÃO É DE MINHA AUTORIA */

        /* ELEMENTOS DA INTERFACE */

        body {
            background-color: #15142b;
            background-image: linear-gradient(180deg, #372991, #15142b);
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;

            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
        }

        header,
        main,
        section,
        article {
            max-width: 700px;

        }

        header>h1 {
            color: white;
            text-shadow: 3px 3px 0px black;
            padding: 20px;

        }

        main,
        section,
        article {
            background-color: white;
            padding: 13px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.502);
        }

        footer {
            display: block;
            width: 100vw;
            background-color: #291f6c;
            color: white;
            text-align: center;
            margin-top: auto;
            padding: 5px;
        }

        p {
            text-align: justify;
            line-height: 1.5em;
        }

        h2,
        h3,
        h4 {
            color: #372991;
            margin: 0 0 10px 0;
        }

        a {
            color: #15142b;
            background-color: rgba(55, 41, 145, 0.1);
            padding: 0 3px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 10px;
            padding: 5px;
            margin: 10px 0px 0px 0px;
        }

        a:hover {
            color: #372991;
            border-bottom: 1px solid #372991;

        }

        div.center {
            display: flex;
            justify-content: flex-end;
        }



        /* TABELAS E LISTAS */

        table {
            min-width: 400px;
            border-spacing: 0px;
            border: 0.5px solid #372991;
            margin: 10px auto;
        }

        table th {
            background-color: #372991;
            color: white;
            padding: 5px;
            text-align: left;
        }

        table td {
            padding: 5px;
        }

        table tr {
            background-color: rgba(55, 41, 145, 0.05);
        }

        table tr:nth-child(odd) {
            background-color: rgba(55, 41, 145, 0.3);
        }

        table.divisao {
            border: 1px solid white;
        }

        table.divisao td {
            background-color: white;
            padding: 20px;
            text-align: center;
            font-size: 2.5em;
        }

        table.divisao tr:nth-child(1) td:nth-child(2) {
            border-bottom: 3px solid black;
            border-left: 3px solid black;
        }

        table.divisao tr:nth-child(2) td:nth-child(2) {
            border-left: 3px solid black;
        }

        table.divisao tr:nth-child(2) td:nth-child(1) {
            text-decoration: underline;
        }

        ul>li::marker {
            color: #372991;
        }

        /* ELEMENTOS DE FORMULÁRIO */

        form {
            background-color: rgba(55, 41, 145, 0.2);
            padding: 15px;
            border-radius: 10px;

        }

        form label {
            display: block;
            width: fit-content;
            font-size: 0.8em;
            font-weight: 100;
            background-color: rgba(55, 41, 145, 0.2);
            padding: 3px 7px;
            margin-top: 10px;
            margin-bottom: 0px;
            border-radius: 5px;
        }


        input[type=text],
        [type=number],
        select,
        input[type=date],
        input[type=date],
        input[type=datetime],
        input[type=email],
        input[type=month],
        input[type=password],
        input[type=range],
        input[type=tel],
        input[type=time],
        input[type=week] {
            width: 100%;
            padding: 12px 20px;
            font-size: 1em;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            font-size: 1em;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        input[type=reset] {
            width: 100%;
            background-color: #eb9903;
            font-size: 1em;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=reset]:hover {
            background-color: #c27013;
        }

        input[type=button],
        button {
            width: 100%;
            background-color: #372991;
            font-size: 1em;
            color: white;
            padding: 10px 20px;
            margin: 5px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=button]:hover,
        button:hover {
            background-color: #291f6c;
        }

        fieldset {
            border: 0.5px dotted #372991;
        }

        fieldset>legend {
            font-size: 0.8em;
            font-weight: 100;
            background-color: rgba(55, 41, 145, 0.2);
            padding: 3px 7px;
            border-radius: 5px;
        }

        input[type=radio]+label,
        input[type=checkbox]+label {
            display: inline-block;
            font-size: 1em;
            background-color: rgba(0, 0, 0, 0);
        }
    </style>

</head>

<body>
    <main>
        <h1>Cadastre-se</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="icpf">CPF:</label>
            <input type="number" name="cpf" id="icpf" required>

            <label for="inome">Nome:</label>
            <input type="text" name="nome" id="inome" required>

            <label for="itel">Telefone:</label>
            <input type="number" name="tel" id="itel" required>

            <label for="iend">Endereço:</label>
            <input type="text" name="end" id="iend" required>


            <input type="submit" value="Enviar">
        </form>



    </main>


</body>

</html>