<?php
 include '../conexao/conexao.php';
 
 $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include_once 'dependencias.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura</title>
</head>
<body>
<h2 class="text-center" >
	Bem-Vindo! <i class="fa fa-door-open"></i>
</h2><hr>


	
<div class="container" style= "margin-top: 60px;
    width: 500px;" >



<form action="./controller/_edit_abertura.php" method="post" style= " margin-top: 20px;">


<?php

        $sql= "SELECT * FROM `abertura` WHERE id = $id";
        $buscar = mysqli_query($conexao, $sql);
        while ($array = mysqli_fetch_array($buscar)){
            
            $id= $array['id'];
            $valor= $array['valor'];
            $data= $array['data'];
           
        

?>

<h4>Informe o valor de abertura</h4><br>
<div class="form-group">
                <label for="">Adicionar valor: <i class="fa fa-money-check-alt"></i></label><br>
                
			
			<input class="form-control" type="text" name="valor"  id= "valor" placeholder="00,00" autocomplete="off" required value= "<?php echo $valor ?>">
    
  </div>

 

  <button class="btn btn-primary btn-sm">
  
				
  Salvar alteração  <i class="fa fa-file-invoice-dollar"></i> 

			</button>
            <?php }?>


</form>
<br>

<a href="lista_abertura.php">	<i class="fa fa-chevron-left"></i> Voltar</a>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#valor").mask("0000,00",  {reverse: true});
		
	});
</script>


</body>
</html>