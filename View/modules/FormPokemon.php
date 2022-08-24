<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionario</title>
    <style>
        label, input { display: block;}


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
        
        button{
            margin-top: 25px;
                
            cursor: pointer;
                
            
            border: 1px solid black;

                width: 87px ;
                height: 55px;


        }









    </style>
</head>
<body>
    <form action="/pokemon/save" method="post">
        <center>
            <legend>Cadastro do Pokemon</legend>
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input name="nome" value="<?= $model->nome ?>" id="nome" type="text" />

            <label for="sexo">sexo:</label>
            <input name="sexo" value="<?= $model->sexo ?>" id="sexo" type="text" />

            <label for="natureza">natureza:</label>
            <input name="natureza" value="<?= $model->natureza ?>" id="natureza" type="text" />

            <label for="habilidades_add">habilidades_add:</label>
            <input name="habilidades_add" value="<?= $model->habilidades_add ?>" id="habilidades_add" type="text" />

            <label for="alimentacao">alimentacao:</label>
            <input name="alimentacao" value="<?= $model->alimentacao ?>" id="alimentacao" type="text" />







            <button type="submit">Enviar</button>

        </center>
    </form>    
</body>
</html>