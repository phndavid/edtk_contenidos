<!DOCTYPE html>
<html ng-app="app">
<head>
    <meta charset="latin1_swedish_ci">
    <meta charset="utf-8">    
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Eduteka - Contenidos</title>
	<!--Import materialize.css-->
	<link rel="shortcut icon" href="http://eduteka.icesi.edu.co/favicon.ico">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
	<base href="/">
</head>
<body>
	<nav style="background-color: #bdbdbd;">
		<div class="container">
		    <div class="nav-wrapper">
		      <a href="#/" class="brand-logo"><img src="./images/logoNewEdutekaSmall.png" style="width: 200px;"></a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="sass.html">Sass</a></li>
		        <li><a href="badges.html">Components</a></li>
		        <li><a href="collapsible.html">JavaScript</a></li>
		      </ul>
		    </div>
	    </div>
	  </nav>
	<div style="padding-bottom: 100px;" ng-view></div>
	<footer  class="txt-footer">
		<div class="container">
			<a href="index.php">Inicio</a> |
			<a href="area.php">Docentes Área</a> |
			<a href="informatica.php">Docentes Informática</a> |
			<a href="directivos.php">Directivos</a> |
			<a href="quienes.php3">Quiénes Somos</a> |
			<a href="archivo.php3">Archivo</a> |
			<a href="PoliticaUso.php">Políticas uso</a> |
			<a href="politica_de_tratamiento_de_datos_personales.php">Uso de Datos Personales</a> |
			<a href="RSS.php">RSS</a> |
			<a href="http://www.linkedin.com/in/borisegx" target="_blank">Diseño y Desarrollo</a>
			<p>Copyright: eduteka  2016 | Desarrollado por <a href="http://www.linkedin.com/in/borisegx" target="_blank">Nelson David Padilla H</a></p>
		</div>
	</footer>
	 <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="libs/materialize.min.js"></script>
	<!-- AngularJS -->
    <script type="text/javascript" src="libs/angular.min.js"></script>
    <script type="text/javascript" src="libs/angular-route.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>