<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
	<header>
			<!-- -barre de navigation -->
			<div id="nav">
			  <div id="menu" class="navbar navbar-fixed-top">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
			          </button>
			          <a class="navbar-brand bsbrand hidden-xs" href="<?php echo base_url(); ?>">
			            <p class="logotop" ></p> 
			          </a>
			          
			        </div>
			        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav navbar-right">
			            <li class="hidden-sm hidden-xs">
			              <a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
			            </li>        
			            <li><a href="#">Annonces</a>
			            </li>
			            <li><a href="#">Conseil</a>
			            </li>
			            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Mon Espace</a>
			            </li>
						<li id="passAnn"><a href="#">Passer une annonce</a></li>          
					  </ul>
			        </div>
			        <!--/.nav-collapse -->
			      </div>
			      <!--/.contatiner -->
			</div>

			<!-- recherche locations-->
			<div id="head-rech" class="container-fluid">
				<div id="ligne_rech" class="row">
					<div id="rech-bar" class="col-md-4 col-md-offset-2">
						<h3>Recherche rapide: </h3>
						<div class="row">
							<div class="col-md-12 form-group">
								<label>Mots clés: </label>
								<input type="text" class="form-control" placeholder="Exemple: hôtel, piscine, bretagne, ...">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-12">
								<input type="text" class="form-control" placeholder="recherche par référence">
							</div>
						</div>
						<div class="row">
							<a class="col-md-4" href="">Rercherche avancée</a>
							<div class="col-md-2 col-md-offset-5">
								<button type="submit" class="btn btn-default" id="btn-rech">Rechercher</button>

							</div>

						</div>
						

					</div>

					<div id="rech-map" class="col-md-4 ">
						<h3>Rechercher par régions: </h3>
						<div class="row">
							<div id="cmap" class="col-md-6 col-sm-12"></div>
							<div class="col-md-6 col-xs-12">
								<ul class="list-unstyled">
						          <li><a href="<?php echo site_url('recherche');?>?region=6&alsace" class="alsace">Grand Est</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=10&aquitaine"  class="aquitaine">Nouvelle Aquitaine</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=1&auvergne" class="auvergne">Auvergne-Rhône-Alpes</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=2&bourgogne" class="bourgogne">Bourgogne-Franche-Comté</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=3&bretagne" class="bretagne">Bretagne</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=4&centre" class="centre">Centre-Val de Loire</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=5&corse" class="corse">Corse</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=8&ile-de-france" class="ile">Île-de-France </a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=11&languedoc" class="languedoc">Occitanie</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=7&hauts-de-france" class="nord">Hauts de France</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=9&normandie" class="normandie">Normandie</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=12&pays-de-loire" class="loire">Pays de la Loire</a></li>
						          <li><a href="<?php echo site_url('recherche');?>?region=13&provence" class="provence">Provence-Alpes-Côte d'Azur</a></li>
						          <br>
						          <li><a href="<?php echo site_url('recherche');?>?region=14&dom-tom" class="domtom">Dom-Tom</a></li>
						          <br>
						          <li><a href="<?php echo site_url('recherche');?>?locations-vacances" class="domtom">Voir toutes</a></li>
						        </ul>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		
	</header>