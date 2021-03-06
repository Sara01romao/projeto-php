<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- icones -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>Lista de item</title>
</head>
<body>


<div class="container" style="margin-top: 60px;">

<h2 class="text-center">
		Lista de item<i class="fa fa-list"></i>
	</h2><br>

<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">id_servico</th>
      <th scope="col">quantidade</th>
      <th scope="col">Total</th>
     
      <th scope="col">Ação</th>
    </tr>
  </thead>
 
   
        <?php
                include '../conexao/conexao.php';
                // $sql= "SELECT * FROM `itens_venda` ORDER BY id ASC";
                $sql= "SELECT itens_venda.id as id, servico.nome as nome, itens_venda.quantidade as quantidade ,itens_venda.quantidade * servico.preco as total
                FROM `itens_venda` inner JOIN `servico`on (servico.id=itens_venda.id_servico) ORDER BY id DESC ";

                $busca = mysqli_query($conexao, $sql);

                while ($array= mysqli_fetch_array($busca)){
                    $id= $array['id'];
                    $id_servico= $array['nome'];
                    $quantidade= $array['quantidade'];
                    $total= $array['total'];

                   
                    

        ?>
        <tr> 
            <td><?php echo $id ?></td>
            <td><?php echo $id_servico ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $total ?></td>
          
            
            <td><a class="btn btn-danger btn-sm" href="../controller/deletar_venda2.php?id=<?php echo $id?>" role="button"><i class="fa fa-trash"></i> &nbsp;Excluir</a>
            </td>
        </tr>
        <?php } ?>
   
    
  
</table>



</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>