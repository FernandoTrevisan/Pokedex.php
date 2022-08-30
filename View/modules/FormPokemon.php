<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pokemon</title>
    <style>
        label,
        input {
            display: block;
        }

        input {
            border: none;
            -webkit-appearance: none;
            -ms-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: #f2f2f2;
            padding: 12px;
            border: 1px solid black;
            border-radius: 3px;
            width: 250px;
            outline: none;
        }

        button {
            margin-left: 26.5em;

            cursor: pointer;

            border-radius: 100px;
            border: 1px solid black;

            width: 87px;
            height: 55px;

        }

        #pokedex {
            background: red url('/View/img/pokedex.png');
            background-repeat: no-repeat;
            background-position: top;
            width: 1900px; height: 1900px;
        }

        form {
            margin-top: 27em;
            margin-left: 57em;;
            display: inline-block;
            font-family: Arial;
        }


    </style>


    




</head>

<body>

    <div id="pokedex">

        <form action="/pokemon/save" method="post">
            <center>
                <legend style="font-size: 40px">Cadastro do Pokémon</legend>
                <input type="hidden" value="<?= $model->id ?>" name="id" />

                <label for="nome">Nome:</label>
                <input name="nome" value="<?= $model->nome ?>" id="nome" type="text" />

                <label for="sexo">Sexo:</label>
                <input name="sexo" value="<?= $model->sexo ?>" id="sexo" type="text" />

                <label for="natureza">Natureza:</label>
                <input name="natureza" value="<?= $model->natureza ?>" id="natureza" type="text" />

                <label for="habilidades_add">Habilidades:</label>
                <input name="habilidades_add" value="<?= $model->habilidades_add ?>" id="habilidades_add" type="text" />

                <label for="alimentacao">Alimentação:</label>
                <input name="alimentacao" value="<?= $model->alimentacao ?>" id="alimentacao" type="text" />
                
            </center>
        </form>

        <button type="submit">Enviar</button>

    </div>

    

</body>

</html>