<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	
	<!-- recherche locations-->
	<div id="head-rech" class="row">
		<div  id="rech-bar" class="col-lg-4 col-md-6 col-lg-offset-2">
			<div class="row">
				<div class="col-md-12">
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
						<a class="col-md-4" href="<?php echo site_url("Annonces")?>">Recherche avancée</a>
							<div class="col-md-2 col-lg-offset-5 col-md-offset-3">
								<button type="submit" class="btn btn-default" id="btn-rech">Rechercher</button>

							</div>

					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>

		<div id="rech-map" class="col-lg-4 col-md-6">
			<h3>Rechercher par régions: </h3>
			<div class="row">

				<div class="col-md-6">
					<div id="cmap"></div>
				</div>
				<div class="col-md-4 col-lg-offset-1 col-md-offset-2">
					<ul class="list-unstyled">
						<li><a href="<?php echo site_url('annonces');?>?region=6&alsace" class="alsace">Grand Est</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=10&aquitaine"  class="aquitaine">Nouvelle Aquitaine</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=1&auvergne" class="auvergne">Auvergne-Rhône-Alpes</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=2&bourgogne" class="bourgogne">Bourgogne-Franche-Comté</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=3&bretagne" class="bretagne">Bretagne</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=4&centre" class="centre">Centre-Val de Loire</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=5&corse" class="corse">Corse</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=8&ile-de-france" class="ile">Île-de-France </a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=11&languedoc" class="languedoc">Occitanie</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=7&hauts-de-france" class="nord">Hauts de France</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=9&normandie" class="normandie">Normandie</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=12&pays-de-loire" class="loire">Pays de la Loire</a></li>
						<li><a href="<?php echo site_url('annonces');?>?region=13&provence" class="provence">Provence-Alpes-Côte d'Azur</a></li>
						
						<br>
										         
					 	<li><a href="<?php echo site_url('annonces');?>?region=14&dom-tom" class="domtom">Dom-Tom</a></li>
										         
						<br>
						
						<li><a href="<?php echo site_url('annonces');?>?locations-vacances" class="domtom">Voir toutes</a></li>
					
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row"> 
		<div class="col-md-4 paragraphe">
			<h2><i class="fa fa-handshake-o" aria-hidden="true"></i> L'Expérience VVB</h2>
			<p>Mer, Montagne, Campagne, depuis près de 30 ans, nous vous<br/>
			proposons des hébergements de tous types et pour tous les budgets : maisons, villas, meublés saisonnier,
			 gîtes, chambres d’hôtes, camping, Mobil-home, chalets, hôtel - restaurant, village vacances, séjours à la ferme, vacances insolites... 
			 sur notre site et surtout dans notre guide papier.

			Dans la rubrique : « Avant de Louer : Nos conseils » : vous trouverez pleins d’astuces qui vous guideront vers les bonnes démarches à adopter,
			 le premier conseil étant de bien s’organiser pour réserver ses vacances !</p>
		</div>
		<!--<div  class="col-md-4 paragraphe">
			<h2><i class="fa fa-thumbs-up" aria-hidden="true"></i> Authenticité</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu elit sapien. 
			Vestibulum pretium, mi vitae luctus lobortis, felis nibh eleifend erat, vel eleifend justo sapien quis dui.
			 Ut sit amet elit vitae nulla sagittis congue. Aenean lacus magna, facilisis in elementum quis, vehicula vel arcu.
			  Donec blandit tempor enim nec dictum. Aenean non felis in felis dignissim viverra. Donec vitae lorem sit amet ante tincidunt interdum vel sed enim. 
			  </p>
		</div>-->
		<div id="para_centre" class="col-md-4 paragraphe">
			<h2><i class="fa fa-book" aria-hidden="true"></i> Guide VVB</h2>
			<p>Des milliers d’annonceurs nous font confiance !
				Pour paraître dans nos prochaines éditions, inscrivez-vous sur le nouveau site VVB ou téléchargez le formulaire.

				Multipliez vos chances de location avec nos 2 supports : le site gratuit + le guide papier tiré à 28000 ex
				(3 éditions, printemps, été et préparation de la saison hivernale. Il est distribué dans 2390 points de vente dans les kiosques,
				 Maisons de Presse et Grandes et Moyennes surfaces en France et dans 7 pays de la CEE + les Iles Anglo-normandes + le Canada. 
				 PRÉPAREZ DÈS MAINTENANT VOTRE SAISON 2018 ET RÉSERVEZ VOTRE ANNONCE  dans le guide dès maintenant.
			  </p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h2 id="titre_ann">Top annonces</h2>
			
			<?php foreach($listTopAnn as $ann){?>
			<?php// var_dump($ann);?>
			<div class="row annonce">
				<div class="col-md-3 col-xs-5">
					<img src="<?php echo $ann['photocouv'];?>" class="thumbnail img-responsive" />
				</div>
				<div class="col-md-6 col-xs-12">
					<a class="lien_ann" href=""><h3><?php echo $ann['title'];?></h3></a>
					<h4><?php echo $ann['departement']; echo " (".$ann['region'].")";?></h4>
					<p><?php echo $ann['descr_courte'];?></p>
				</div>
				<div class="col-md-2 col-md-offset-1">
					<div class="note">
						<?php 
							if($ann['stars']>0){
								for($i=0;$i<$ann["stars"];$i++)
								{

									?>
									<i class="fa fa-star" aria-hidden="true"></i>
									<?php
								}
							}
						?>
						</i>
					</div>
					<p>A partir de: </p>
					<p class="prixtopann"><strong><?php echo $ann['prixbas']['prix'];?>€</strong></p>
					<p><?php echo $ann['prixbas']['periode'];?></p>
					<p></p>
					
					<a href=""><button type="submit" class="btn btn-default btn-dec" >Découvrir</button></a>
				</div>
			</div>
			<?php } ?>
		

		</div>
		<div class="col-md-4" id="panneau_pub">
			


			<?php foreach($listpubs as $pub){ ?>

			
			<div class="row">
				<div class="col-md-12 lignepub">
					<a href="<?php echo $pub['link']?>"><img class="img-responsive" src="<?php echo img_url("pubs/".$pub['file']);?>"></a>
				</div>
			</div>
		

			<?php }?>
		</div>
	</div>




