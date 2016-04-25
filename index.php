<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/bootstrap.css">
  <link rel="stylesheet" href="estilos/miestilo.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="script/jquery-2.2.3.js"></script>
  <script type="text/javascript" src="script/bootstrap.js"></script>
</head>
<body background="fondo.jpg">

  <?php include 'menu.php'; ?>

<br>
<br>
<br>


	<div class="container">
	<div class="row">
      <div class="col-md-12">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="m.jpg" alt="" class="pepito">
                <div class="carousel-caption">
                  Imagen 1
                </div>
              </div>
              <div class="item">
                <img src="m.jpg" alt="...">
                <div class="carousel-caption">
                  Imagen 2
                </div>
              </div>
              ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>        
      </div>
      <div class="col-xs-12 col-md-12 col-sm-12">
      	<center> <img  src= "m.jpg"  height="200"> </center>
      	<h1> M&DS</h1>
      	<P> SISTEMA DE INFORMACION QUE PERMITE LA TRASAVILIDAD DE REGISTRO DE CLIENTES, VENTAS Y PRODUCTOS.
      	<br>
      	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <div class="well">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam eveniet fugiat impedit a, commodi saepe ad, sit quod placeat excepturi voluptatem ut quisquam veniam laborum voluptas fuga eaque sed delectus.
          </p>
        </div>
      		
      </div>
      
	</div>
	
</div>

	
<script>
    // alert("hola");
    $('.dropdown-toggle').dropdown();
</script>

</body>
</html>