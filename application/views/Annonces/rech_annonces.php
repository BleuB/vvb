<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<h2 id="title" class="col-md-12 ">Trouver une Location</h2>
</div>
<div class="row">
	<form id="form-rech" class=" col-md-3 col-sm-12">
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
					<div class="col-xs-6">
						<input type="checkbox" value="camping-mobilhome"> Camping - Mobil-home
					</div>
					<div class=" col-xs-6">
						<input type="checkbox" value="giteLocationIsolite"> Gîte - Location Insolite
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<input type="checkbox" value="ChambreHote"> Chambre d'hôte
					</div>
					<div class="col-xs-4">
						<input type="checkbox" value="MaisonVilla"> Maison - Villa
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<input type="checkbox" value="MobilhomeChalet"> Mobil-Home - Châlet
					</div>
					<div class="col-xs-6">
						<input type="checkbox" value="hotelAuberge"> Hôtel - Auberge
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6">
						<input type="checkbox" value="villageVacances"> Village Vacances
					</div>
					<div class="col-xs-6">
						<input type="checkbox" value="appartement"> Appartement
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<input type="checkbox" value="Châletmontagne"> Châlet à la montagne
					</div>
				</div>
		</div>
		
		<div class="form-group">
			<label>Options :</label>
			<div class="row">
				<div class="col-xs-6">
					<input type="checkbox" value="accesInternet"> Accès Internet
				</div>
				<div class="col-xs-6">
					<input type="checkbox" value="accesHandicape"> Accès Handicapé
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<input type="checkbox" value="chequevacance"> Chèques Vacances
				</div>
				<div class="col-xs-6">
					<input type="checkbox" value="animaux"> Animaux acceptés
				</div>
			</div>
		</div>
		<div class="row">
			<button class="col-md-10 col-md-offset-1 btn btn-default">Recherche</button>
		</div>
		
	
	</form>

	<div id="list-rech" class="col-md-7 col-sm-12" >
			<?php //var_dump($annonces);
			foreach($annonces as $ann){?>
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
			<?php }?>

			
			
	</div>



</div>
<div class="row">
		<div class="col-xs-12 text-center pagi_rech">
				<?php echo $pagination; ?>
		</div>
	</div>