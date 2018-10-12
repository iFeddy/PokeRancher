<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	 crossorigin="anonymous"></script>
	<script src="semantic/semantic.min.js"></script>
</head>

<body>
	<div class="ui menu">
		<div class="header item">
			PokeRancher
		</div>
		<a class="item active">
			Inicio
		</a>
		<div class="ui simple dropdown item">
        Comunidad <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="#">Link Item</a>
          <a class="item" href="#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="#">Link Item</a>
              <a class="item" href="#">Link Item</a>
            </div>
          </div>
          <a class="item" href="#">Link Item</a>
        </div>
      </div>
		<a class="item">
			Descargas
		</a>
		<a class="item">
			Acerca de
		</a>
		
		<div class="item right floated">
			<div class="ui primary labeled icon button">
				Iniciar Sesión
				<i class="lock icon"></i>
			</div>
			<div class="ui button">
				Registrarse
			</div>
		</div>

	</div>
</body>