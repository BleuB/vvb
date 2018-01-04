<div class="row">
	<form class="col-md-8 col-md-offset-2">
		<h3 class="mid-title">Type d'Hôtel</h3>
		<div class="row">
			<div class="radio col-md-3 col-md-offset-1">
				<label>
    				<input type="radio" name="optionsRadios"  value="hotSimple" checked>
    				Hôtel simple
  				</label>
			</div>
			<div class="radio col-md-3">
				<label>
    				<input type="radio" name="optionsRadios"  value="hotRest">
    				Hôtel restaurant/auberge
  				</label>
			</div>
		</div>
		<h3 class="mid-title">Services</h3>
		<div class="row">
			<div class="checkbox  col-md-2 col-md-offset-1">
			  <label>
			    <input type="checkbox" value="internet">
			   	Accès internet
			  </label>
			</div>
			<div class="checkbox  col-md-2">
			  <label>
			    <input type="checkbox" value="handicap">
			   	Accès Handicapés
			  </label>
			</div>
			<div class="checkbox  col-md-2">
			  <label>
			    <input type="checkbox" value="animaux">
			   	Animaux acceptés
			  </label>
			</div>
			<div class="checkbox  col-md-2">
			  <label>
			    <input type="checkbox" value="chequeVac">
			   	Chèque Vacances acceptés
			  </label>
			</div>
			<div class="checkbox  col-md-2">
			  <label>
			    <input type="checkbox" value="dej">
			   	Petit déjeuner compris
			  </label>
			</div>
		</div>
		<div class="row">
			<div class="checkbox  col-md-2 col-md-offset-1">
			  <label>
			    <input type="checkbox" value="bebe">
			   	Lit bébé
			  </label>
			</div>
		</div>
		<h3 class="mid-title">Informations en plus</h3>
		<div class="row">
			<div class="form-group col-md-3 col-md-offset-1">
				<label>Durée minimum du séjour : </label>
				<input class="form-control" type="text" placeholder="3 jours" name="dureeMinHotel">
			</div>
			<div class="form-group col-md-3 ">
				<label>Nb chambres :  </label>
				<input  class="form-control" type="text" placeholder="3" name="nbChambreHotel">
			</div>
		</div>
		<h3 class="mid-title">Équipements</h3>
		<div class="row">
			<div class="col-md-12">
				<strong>Chambre</strong>
				<div class="row">
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="bar">
					   	Bar
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="nonfumeur">
					   	Logement non-fumeur
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="TV">
					   	Télévision
					  </label>
					</div>
				</div>
				<strong>Extérieur</strong> (5 maximum)
				<div class="row">
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="piscine">
					   	Piscine
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="jardin">
					   	Jardin
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="jeux">
					   	Jeux d'enfants
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="parking">
					   	Parking
					  </label>
					</div>
				</div>
				<div class="row">
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="terrasse">
					   	Terrasse/Balcon
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="piscineCouv">
					   	Piscine couverte
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="sport">
					   	Salle de sport
					  </label>
					</div>
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="salonJardin">
					   	Sallon de jardin
					  </label>
					</div>
				</div>
				<div class="row">
					<div class="checkbox  col-md-2">
					  <label>
					    <input type="checkbox" value="mer">
					   	Vue sur mer
					  </label>
					</div>
				</div>

			</div>
		</div>
		<h3 class="mid-title"> Tarifs</h3>
		<div class="row">
			<div class="col-md-6">
				<strong>Prix du logement</strong>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Nuit hors saison* : </label>
						<input class="form-control" type="text" placeholder="" name="prixhs"> 
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Nuit pleine saison* : </label>
						<input class="form-control" type="text" placeholder="" name="prixps"> 
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Semaine hors saison* : </label>
						<input class="form-control" type="text" placeholder="" name="prixSemhs"> 
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Semaine pleine saison* : </label>
						<input class="form-control" type="text" placeholder="" name="prixSemps"> 
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<strong>Promotions</strong>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Promo semaine : </label>
						<input class="form-control" type="text" placeholder="" name="promoS"> 
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Promo nuit : </label>
						<input class="form-control" type="text" placeholder="" name="promoN"> 
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8">
						<label>Promo Mois : </label>
						<input class="form-control" type="text" placeholder="" name="promoM"> 
					</div>
				</div>
			</div>
		</div>
		<h3 class="mid-title">Description</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="form-group col-md-8 col-md-offset-2">
						<label>Descritpion courte* : </label>
						<textarea class="form-control" placeholder="" name="shortDes"></textarea> 
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-8 col-md-offset-2">
						<label>Descritpion longue* : </label>
						<textarea class="form-control" placeholder="" name="longDes"></textarea> 
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<a href=""><button class="btn btn-default btn-log col-md-3 col-md-offset-4">Enregistrer</button></a>
		</div>
	</form>
	
</div>