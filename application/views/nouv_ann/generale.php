<div class="row">

	<h2 class="col-md-4 col-md-offset-4 big-title">Renseignements</h2>
	
</div>
<div class="row">
	<h3 class="col-md-10 col-md-offset-1 mid-title">Informations générales</h3>

</div>
<div class="row">
	
	<form>
		<div class="col-md-10 col-md-offset-1">
			<div class="row">
				<div class=" col-md-4 col-md-offset-1 form-group">
					<label>Titre de l'annonce * : </label>
					<input type="text" class="form-control"  placeholder="Mobil home à 20m de la plage">	
				</div>
				<div class="col-md-1 col-md-offset-2 form-group">
					<label>Nombre d'étoiles : </label>
					<input type="text" class="form-control"  placeholder="2">	
				</div>
			</div> 
				
				
			
			<div class="row">
				<div class="col-md-4 col-md-offset-1 form-group">
					<label>Adresse du bien * : </label>
					<input type="text" class="form-control"  placeholder="Camping de la guimorais">	
				</div>
				<div class="col-md-4 col-md-offset-2 form-group">
					<label>Tél. Fixe * : </label>
					<input type="text" class="form-control"  placeholder="02 99 73 96 51">	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-1 form-group">
					<label>Ville * : </label>
					<input type="text" class="form-control"  placeholder="Saint-Coulomb">	
				</div>
				<div class="col-md-4 col-md-offset-2 form-group">
					<label>Tél. Portable * : </label>
					<input type="text" class="form-control"  placeholder="06 62 30 44 93">	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-1 form-group">
					<label>Code Postal * : </label>
					<input type="text" class="form-control"  placeholder="35350">	
				</div>
				<div class="col-md-4 col-md-offset-2 form-group">
					<label>Fax : </label>
					<input type="text" class="form-control"  placeholder="">	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-1 form-group">
					<label>Région * : </label>
					<select class="form-control">
					<option value="0" selected="selected">---  Regions  ---</option>
					<?php  foreach ($regions as $value) {?>
						<option value="<?php echo $value['id'];?>"><?php echo $value['nom'] ?></option>
					<?php }?>
				</select>
				</select>	
				</div>
				<div class="col-md-4 col-md-offset-2 form-group">
					<label>Adresse e-mail * : </label>
					<input type="email" class="form-control"  placeholder="">	
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-1 form-group">
					<label>Département * : </label>
					<select class="form-control">
					<option value="0" selected="selected">---  Département  ---</option>
					<?php  foreach ($regions as $value) {?>
						<option value="<?php echo $value['id'];?>"><?php echo $value['nom'] ?></option>
					<?php }?>
				</select>
				</select>	
				</div>
				<div class="col-md-4 col-md-offset-2 form-group">
					<label>Site Internet * : </label>
					<input type="email" class="form-control"  placeholder="">	
				</div>
			</div>
		
			<div class="row">
				<h3 class="col-md-10 mid-title">Type de Locations</h3>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
						<div class="radio col-md-3">
	  						<label>
	   							<input type="radio" name="option1" value="">
	    						1
	  						</label>
						</div>
						<div class="radio col-md-3">
	  						<label>
	   							<input type="radio" name="option1" value="">
	    						1
	  						</label>
						</div>
						<div class="radio col-md-3">
	  						<label>
	   							<input type="radio" name="option1" value="">
	    						1
	  						</label>
						</div>

								
					</div>
					
				
				</div>
				
			</div>
	</div>
		




	

		
	</form>
	
</div>