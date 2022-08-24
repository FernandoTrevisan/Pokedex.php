<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista pokemon</title>

    <style>

    a[class="voltar"] {
        display: inline-block;
        margin-left: 10em;
    }

    table{
        margin-left: 1em;
        float: left;
        border:1px solid black;
        border-collapse: collapse;
        
    }


    

    th,td{

    border:1px solid black;
    padding:15px;
}
    </style>
</head>
<body>

    <a href="/pokemon/form" class="voltar">Voltar</a>


    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>nome</th>
            <th>sexo</th>
            <th>natureza</th>
            <th>habilidades_add</th>
            <th>alimentacao</th>
            
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/pokemon/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id?></td>

            <td>
                <a href="/pokemon/form?id=<?= $item->id ?>"><?= $item->nome ?></a>
            </td>

            <td><?= $item->sexo ?></td>
            
            <td><?= $item->natureza ?></td>

            <td><?= $item->habilidades_add ?> </td>
                
            <td><?= $item->alimentacao ?>  </td>
           
        </tr>
        
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="4">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>