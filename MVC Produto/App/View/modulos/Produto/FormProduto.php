<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa </title>
    <style>
        label, input {display: block; }
    </style>    

</head>



<body>
    <fieldset>
        <!--criando cadastro-->
       <legend>Cadastro Produto </legend>

       <form method="post" action="/produto/form/save">

           <label for="Produto">Produto:</label>
           <input id="Produto" name="Produto" type="text"/>
           
           
           <label for="Estoque">Estoque</label>
           <input id="Estoque" name="Estoque" type="number"/>


           <label for="Preco">Preco</label> 
           <input id="Preco" name="Preco" type="date"/>

           <label for="ID_categoria">ID_categoria</label> 
           <input id="ID_categoria" name="ID_categoria" type="date"/>


         <button type="submit">Salvar</button>


       </form>    



    </fieldset>        
</body>
</html>