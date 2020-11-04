


<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="style.css">
    <title>Lista de itens</title>
</head>
<body>


<div class="container" style="margin-top: 60px;">

<h2 class="text-center">
		Lista de itens <i class="fa fa-list"></i>
	</h2><br>

<h5 class="text-right">
		<a href="./cadastrar_venda.php" class="btn btn-primary btn-xs"> Adicionar
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>
<table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">Id</th>
      <th scope="col">id_venda</th>
      <th scope="col">id_servico</th>
      <th scope="col">Quantidade</th>
      <th scope="col">total</th>
  
      
      <th scope="col">Ação</th>
    </tr>
  </thead>
 
   
        <?php
                include '../conexao/conexao.php';
                $sql= "SELECT * FROM `itens_venda` ORDER  BY id DESC";
                $busca = mysqli_query($conexao, $sql);

                while ($array= mysqli_fetch_array($busca)){
                   $id= $array['id'];
                    $id_venda= $array['id_venda'];
                     $id_servico= $array['id_servico'];
                     $quantidade= $array['quantidade'];
                     $total= $array['total'];
                    
                     

                    

        ?>
        <tr> 
            <td><?php echo $id ?></td>
            <td><?php echo $id_venda ?></td>
            <td><?php echo $id_servico ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $total ?></td>
            
            <td></td>
             
            <td> <a class="btn btn-danger btn-sm" href="../controller/deletar_item.php?id=<?php echo $id?>" role="button"><i class="fa fa-ban"></i> &nbsp;Excluir</a>

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