<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Inversiones - Principal</title>
    <link rel="icon" href="<?=base_url()?>/favicon.ico" type="image/gif">
  </head>
  <header>
  <?php $this->load->view("componentes/barra");?>
</header>
  <body class="bg-primary">
  <br><br>
  <div class="text-white">
     <center>
     <h1 class="text-dark">
          Cotización criptomonedas. 
      </h1>
    </center> 
  </div>

  <div class="bg-dark">

  <iframe src="https://criptolatino.com/cryptowidgets/top-criptomonedas/?theme=midnight" style="border:none;width:100%;height:600px;" frameBorder="0" scrolling="no sandbox="allow-same-origin" onload="this.style.height=(this.contentWindow.document.body.scrollHeight)+'px';""></iframe>
  </div>

  
  <footer>
  
  </footer>
  <br><br>
    
     
     

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>