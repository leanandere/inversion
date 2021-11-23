<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Inversiones - Mis Inversiones</title>
	<link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">
  </head>
  <header>
  <?php $this->load->view("componentes/barra");?>
	</header>
  <body class="bg-primary text-dark"> <br><br>
  <center>
  	<div class="text-white">
    
		<img src="<?php echo base_url("assets/img/logo.png"); ?>" class="card-img-top w-25" alt="...">
    	<h1>
          Mis Inversiones
      	</h1>
	
  	</div><br><br>
     
   		<?php if ($inversiones)  { 
      
        foreach ($inversiones as $i) { ?>
            
    		<div class="container">
						
				<div class="row">
					<div class="col-md-12 ">
					<h1>Estado de inversion <?php echo $i["nombre"];?>: </h1>
					<br>
						
						<form class="form-inline offset-md-4" action="<?php echo site_url("main/inversiones/").$i["id_inversion"];?>" method="post" action="">
							<div class="input-group mb-2 mr-sm-2">
								<div class="input-group-prepend">
									<div class="input-group-text">$

									</div>
								</div>
								<input type="text" placeholder="Monto" class="form-control" id="monto" name="monto">
						
							</div>
					
				
							<button type="submit" class="btn btn-success mb-2">Actualizar</button>
						</form>
						<?php echo form_error("monto","<small class=\"text-danger\">","</small>")?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
					<br>
						
						<div class="table-responsive text-light offset-3 ">
							
							<table class="table table-bordered text-center">
								<tbody>
								<?php foreach($montos as $m){ 
								if ($m["id_inversion"]==$i["id_inversion"]) {?>
									<tr>
										
										<td class="text-light"><?php echo $m["fecha"];?> </td>
										<td class=" text-light">$<?php echo $m["monto"];?></td>
										
										<td class=" text-light">
										
										<?php if($m["diferencia"]){?>
											<?php echo $m["diferencia"];?>
											<?php if($m["diferencia"]<=0){?>
												<i class="bi bi-caret-down-fill text-danger"></i>
											<?php }else{ ?>
												<i class="bi bi-caret-up-fill text-success"></i>
											<?php } ?>
										<?php } ?>
										</td>
										<td class="col-sm-1"><a href="<?php echo site_url("main/borrar/".$m["monto_id"]); ?>" class="text-danger"><i class="bi bi-x-circle"></i></a></td>
									</tr>
								<?php }} ?>
								</tbody>
							</table>
							
						</div>
						 
					</div>
				</div>
				<div class="row">
					<div class="col ">
						
						<h4>Total acumulado desde el principio <strong>$<?php echo $i["resultado"]; ?></strong></h4><br>
					<hr class="bg-light">
					<br>
					</div>	
				</div>
			</div>
		

		
        
        <?php   } } else { ?>
        
		<div class="row">
        	<div class="col">
           		<div>
           			No se encontraron inversiones realizadas
            	</div>
        	</div>
    	</div>
		
    <?php   } ?>
	
	
	
	

	
    
	</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


  </body>
</html>