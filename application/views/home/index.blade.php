
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SYSTEM GROUP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
  {{HTML::style('css/vendors/bootstrap.css')}}
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  {{HTML::style('css/vendors/bootstrap-responsive.css')}}
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{HTML::link_to_route('home','SYSTEM GROUP','',array('class'=>'brand'))}}
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li> {{HTML::link_to_route('home','Ventas','','')}}</li>
              <li>{{HTML::link_to_route('mari','MARI','','')}}</li>
              <li><a href="#contact">EMA y MARI</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
    	<div class='row-fluid'>
	    	  <div class='span2'>
	    	  	<ul class='nav nav-list' >
				    <li class="nav-header">Seleccione Gráfico<li>
	    			<li class="">{{HTML::link_to_route('home','Productos')}}</li>
	    			<li class="">{{HTML::link_to_route('congresos','Congresos')}}</li>
	    			<li class="">{{HTML::link_to_route('consultoria','Consultoría')}}</li>
	    			<li class="">{{HTML::link_to_route('todos','Todos')}}</li>
			    </ul>
	    </div>

	    	  <div class='span10' style='margin-left:-10px;' >

	    	  		<div id='visualization' style='width:1000px; height:700px;'>

	    	  		</div>

	    	  </div>
	    </div>  




    </div> <!-- /container -->
  </body>
    {{ HTML:: script('js/vendors/jquery.js')}}
 
  </html> 

<?php
$productos = "<script type='text/javascript'>
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type='text/javascript'>
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
    ['Year', 'Kit computadoras', 'Libro Optimizacion', 'Celular', 'Protector Satelital', 'Kit vehiculos', 'Termo-Cava', 'Carcasas', 'Teclado'],
    ['2012-1',  8100,     900,      38000,    27000,    6750,     12000,  25500,   24460],
    ['2012-2',  8032.5,   1260,     35125,    16537.5,  4725,     11340,  33075,   25200],
    ['2012-3',  6945.75,  2315.25,  28940,    39690,    4961.25,  11970,  23152.5, 31950],
    ['2012-4',  8334.9,   2951.94,  17364.38, 26046.56, 10418.62, 9724.5, 17364,   27678],
  ]);
      
        // Create and draw the visualization.
        new google.visualization.BarChart(document.getElementById('visualization')).
            draw(data,
                 {title:'Ingreso Neto por Consultoria',
                  width:1000, height:600,
                  vAxis: {title: 'Trimestre'},
                  hAxis: {title: 'Ingresos'}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>";

 $congresos = "
    <script type='text/javascript'>
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type='text/javascript'>
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', ' Business Intelligence', 'Congreso Mercadotecnia', 'Congreso Ing. de Sistemas', 'Cursos Toma decisiones', 'Cursos Logistica', 'Cursos Linux', 'Cursos Seguridad Ind.'],
          ['2012-1',  1800,    3000,    1500,  960, 480,  2400, 1350],
          ['2012-2',  1300,    3600,    600,   720, 960,  1920, 1080],
          ['2012-3',  1700,    2850,    1200,  850, 800,  200,  810],
          ['2012-4',  900,     3100,    950,   860, 1150, 1800, 1080],
        ]);
      
        // Create and draw the visualization.
        new google.visualization.BarChart(document.getElementById('visualization')).
            draw(data,
                 {title:'Ingreso Neto por Congresos y Cursos',
                  width:1000, height:600,
                  vAxis: {title: 'Trimestre'},
                  hAxis: {title: 'Ingresos'}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>";

$consultoria = "
<script type='text/javascript'>
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type='text/javascript'>
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Ingenieria de Sistemas', 'Logistica Empresarial', 'Gerencia de Proyectos'],
          ['2012-1',  6000,     0,   3600],
          ['2012-2',  9000,  2700,     0],
          ['2012-3',  3000,  5400,  7200],
          ['2012-4',  6000,  5400,  3600],
        ]);
      
        // Create and draw the visualization.
        new google.visualization.BarChart(document.getElementById('visualization')).
            draw(data,
                 {title:'Ingreso Neto por Consultoria',
                  width:1000, height:600,
                  vAxis: {title: 'Trimestre'},
                  hAxis: {title: 'Ingresos'}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>"; 

$todos = "
<script type='text/javascript'>
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type='text/javascript'>
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Productos', 'Congresos y Cursos', 'Consultorias'],
          ['2012-1',  262250,    9600,    15000],
          ['2012-2',  237355,    12900,    6000],
          ['2012-3',  251535,    12000,    12000],
          ['2012-4',  211671,    15000,    9500],
        ]);
      
        // Create and draw the visualization.
        new google.visualization.BarChart(document.getElementById('visualization')).
            draw(data,
                 {title:'Ingresos Netos',
                  width:1000, height:600,
                  vAxis: {title: 'Trimestre'},
                  hAxis: {title: 'Ingresos'}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>";          

if($grafico == 'productos'){
	echo $productos;
} else if($grafico == 'congresos'){
	echo $congresos;
} else if($grafico == 'consultoria'){
	echo $consultoria;
} else if($grafico == 'todos'){
	echo $todos;
}

 ?>


