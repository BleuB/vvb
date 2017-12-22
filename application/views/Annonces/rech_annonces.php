<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<h2 id="title" class="col-md-12 ">Trouver une Location</h2>
</div>
<div class="row">
	<form class="col-md-3 ">
		<div class="form-group">
			<label for="inputmotcle">Mot-clés</label>
			<input type="text" id="inputmotcle" class="form-control" placeholder="bretagne, hôtel, plage, ...">
		</div>

		<div class="form-group">
			<label>Régions : </label>

			<select class="form-control">
				<option value="0" selected="selected">---  Regions  ---</option>
				<?php  foreach ($regions as $value) {?>
					<option value="<?php echo $value['id'];?>"><?php echo $value['nom'] ?></option>
				<?php }?>
			</select>
		</div>

		<div class="form-group">
			<label>Département : </label>
			<select class="form-control">
				<option value="0">--- Département --</option>
			</select>
		</div>
		<label>Type de location : </label>
			<div class="form-group">
				
				<div class="row">
					<div class="col-md-6">
						<input type="checkbox" value="camping-mobilhome"> Camping - Mobil-home
					</div>
					<div class="col-md-6">
						<input type="checkbox" value="giteLocationIsolite"> Gîte - Location Insolite
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="checkbox" value="ChambreHote"> Chambre d'hôte
					</div>
					<div class="col-md-4">
						<input type="checkbox" value="MaisonVilla"> Maison - Villa
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="checkbox" value="MobilhomeChalet"> Mobil-Home - Châlet
					</div>
					<div class="col-md-6">
						<input type="checkbox" value="hotelAuberge"> Hôtel - Auberge
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<input type="checkbox" value="villageVacances"> Village Vacances
					</div>
					<div class="col-md-6">
						<input type="checkbox" value="appartement"> Appartement
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input type="checkbox" value="Châletmontagne"> Châlet à la montagne
					</div>
				</div>
		</div>
		
		<div class="form-group">
			<label>Options :</label>
			<div class="row">
				<div class="col-md-6">
					<input type="checkbox" value="accesInternet"> Accès Internet
				</div>
				<div class="col-md-6">
					<input type="checkbox" value="accesHandicape"> Accès Handicapé
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<input type="checkbox" value="chequevacance"> Chèques Vacances
				</div>
				<div class="col-md-6">
					<input type="checkbox" value="animaux"> Animaux acceptés
				</div>
			</div>
		</div>

		<button class="btn btn-default">Recherche</button>
	
	</form>

	<div class="col-md-7 " >
		
			<div class="row annonce">
				<div class="col-md-3 col-xs-5">
					<img src="<?php echo img_url("3.png")?>" class="thumbnail img-responsive" />
				</div>
				<div class="col-md-6 col-xs-12">
					<a class="lien_ann" href=""><h3>RESIDENCE HOTEL LE PARC RIVE GAUCHE</h3></a>
					<h4>auvergne-rhône-alpes</h4>
					<p>RESIDENCE HOTEL LE PARC RIVE GAUCHE (avec Parking) est à 10 minutes à pied du centre de Vichy situé aux bords de l’Allier, au coeur d’un parc de deux hectares face à Vichy. Chambres, Studios et Appart</p>
				</div>
				<div class="col-md-2 col-md-offset-1">
					<div class="note"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
					<p>A partir de: </p>
					<p>10€</p>
					<p>La nuit</p>
					<a href=""><button type="submit" class="btn btn-default btn-dec" >Découvrir</button></a>
				</div>
			</div>

			<div class="row annonce">
				<div class="col-md-3 col-xs-5">
					<img src="<?php echo img_url("3.png")?>" class="thumbnail img-responsive" />
				</div>
				<div class="col-md-6 col-xs-12">
					<a class="lien_ann" href=""><h3>RESIDENCE HOTEL LE PARC RIVE GAUCHE</h3></a>
					<h4>auvergne-rhône-alpes</h4>
					<p>RESIDENCE HOTEL LE PARC RIVE GAUCHE (avec Parking) est à 10 minutes à pied du centre de Vichy situé aux bords de l’Allier, au coeur d’un parc de deux hectares face à Vichy. Chambres, Studios et Appart</p>
				</div>
				<div class="col-md-2 col-md-offset-1">
					<div class="note"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
					<p>A partir de: </p>
					<p>10€</p>
					<p>La nuit</p>
					<a href=""><button type="submit" class="btn btn-default btn-dec" >Découvrir</button></a>
				</div>
			</div>

			<div class="row annonce">
				<div class="col-md-3 col-xs-5">
					<img src="<?php echo img_url("3.png")?>" class="thumbnail img-responsive" />
				</div>
				<div class="col-md-6 col-xs-12">
					<a class="lien_ann" href=""><h3>RESIDENCE HOTEL LE PARC RIVE GAUCHE</h3></a>
					<h4>auvergne-rhône-alpes</h4>
					<p>RESIDENCE HOTEL LE PARC RIVE GAUCHE (avec Parking) est à 10 minutes à pied du centre de Vichy situé aux bords de l’Allier, au coeur d’un parc de deux hectares face à Vichy. Chambres, Studios et Appart</p>
				</div>
				<div class="col-md-2 col-md-offset-1">
					<div class="note"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></div>
					<p>A partir de: </p>
					<p>10€</p>
					<p>La nuit</p>
					<a href=""><button type="submit" class="btn btn-default btn-dec" >Découvrir</button></a>
				</div>
			</div>
			
	</div>



</div>
