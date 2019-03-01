<!-- 
_   _   /\/|  ____               
| \ | | |/\/  / __ \              
|  \| |  / \ | |  | |             
| . ` | / _ \| |  | |             
| |\  |/ ___ \ |__| |             
|_|_\_/_/___\_\____/__            
|__   __|  ____|  \/  |           
| |  | |__  | \  / |           
| |  |  __| | |\/| |           
| |  | |____| |  | |           
_ |_|  |______|_|__|_|           
| \ | |   /\   |  __ \   /\       
|  \| |  /  \  | |  | | /  \      
| . ` | / /\ \ | |  | |/ /\ \     
| |\  |/ ____ \| |__| / ____ \    
|_| \_/_/ ___\_\_____/_/____\_\   
/\   / __ \| |  | |_   _|     
/  \ | |  | | |  | | | |       
/ /\ \| |  | | |  | | | |       
/ ____ \ |__| | |__| |_| |_      
/_/____\_\___\_\\____//\/|__|___  
|  ____| \ | |__   __|/\/  / __ \ 
| |__  |  \| |  | |   / \ | |  | |
|  __| | . ` |  | |  / _ \| |  | |
| |____| |\  |  | | / ___ \ |__| |
|______|_| \_|  |_|/_/   \_\____/ 
\ \    / /\    |___  /   /\       
\ \  / /  \      / /   /  \      
\ \/ / /\ \    / /   / /\ \     
\  / ____ \  / /__ / ____ \    
\/_/    \_\/_____/_/    \_\   
         
-->


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROCESSAMENTO DE DADOS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jszip.js"></script>
	<script src="js/xlsx.js"></script>

</head>
<body>
	<?php 
	session_start()
	 ?>
	<div class="tela-inteira">
		<h1 class="loading-processando">PROCESSANDO</h1>
		<div class="lds-ripple"><div></div><div></div></div>
	</div>
	<div class="inteiro">
		<h1 class="center-text bold">PROCESSAMENTO DE DADOS</h1>
		<h2 class="center-text black">SISTEMA DE PROCESSAMENTO DE PLANILHAS</h2>
	</div>
	<form>

		<div class="input-file-container-center">
			<div class="input-file-container">
				<img class="img-excel" src="img/excel.png" alt="">
				<h3 class="h3-arraste">Arraste o arquivo .xlsx aqui<br>ou</h3>

				<input class="input-file" type="file" id="my-file" name="files[]" accept=".xlsx" >

				<label for="my-file" class="input-file-click">Selecione o arquivo no seu computador</label>		
				<!-- <p class="arquivo-selecionado">Nenhum arquivo selecionado</p> -->
								<!-- LOADING TEST -->
				
			</div>
		</div>

<!-- <div class="container-final">
<p class="p-titulo">Desenvolvido por:</p>
<p class="p-nomes">nome1<br>nome1<br>nome1<br>nome1<br>nome1<br></p>
</div> -->
</form>
<div class="output-json">
	<p style="color:#fff">olá</p>
</div>


<div class="bnt-center">
	<button id="btn-enviar">PROCESSAR</button>	
</div>



</body>
</html>