<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Categoria</title>
</head>
<body>
   

<table>

<tr>
    <th>id</th>
    <th>Categoria</th>
    <th>Descricao</th>


</tr>

<?php foreach($model->rows as $item): ?>
<tr>
    <td><?= $item->id ?></td>
    <td>
    <td>
       <a href="/categoria/form?id=<?= $item->id ?>"><?= $item->Categoria ?></a>
    </td>
    <td><?= $item->Descricao ?></td>





</tr>
<?php endforeach ?>

</table>




</body>
</html>