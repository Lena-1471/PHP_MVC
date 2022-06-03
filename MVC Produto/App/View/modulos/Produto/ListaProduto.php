<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produto</title>
</head>
<body>
   

<table>

<tr>
    <th></th>
    <th>id</th>
    <th>Produto</th>
    <th>Estoque</th>
    <th>Preco</th>
    <th>ID_categoria</th>


</tr>

<?php foreach($model->rows as $item): ?>
<tr>
<td>
       <a href="/produto/delete?id=<?= $item->id ?>">x</a>
    </td>

    <td><?= $item->id ?></td>
    
   
    <td>
       <a href="/produto/form?id=<?= $item->id ?>"><?= $item->Produto ?></a>
    </td>

    <td><?= $item->Estoque ?></td>
    <td><?= $item->Preco ?></td>
    <td><?= $item->ID_categoria ?></td>




</tr>
<?php endforeach ?>

<?php if(count($model->rows)==0): ?>
    <tr>
        <td colspan="5">Nenhum registro encontrado. </td>
    </tr>
    <?php endif ?>

</table>

</table>




</body>
</html>