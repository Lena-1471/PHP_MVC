<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria </title>
    <style>
        label, input {display: block; }
    </style>    

</head>



<body>
    <fieldset>
        <!--criando cadastro-->
       <legend>Cadastro Categoria </legend>

       <form method="POST" action="/categoria/form/save">

           <label for="Categoria">Categoria:</label>
           <input id="Categoria" name="Categoria" value="<?= $model->Categoria ?>" type="text"/>
           
           
           <label for="Descricao">Descrição</label>
           <input id="Descricao" name="Descricao" value="<?= $model->Descricao ?>" type="text"/>



         <button type="submit">Salvar</button>


       </form>    



    </fieldset>        
</body>
</html>