<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="row">
	<h2 class="col-md-6 col-md-offset-3 big-title">Inscrivez-vous ou connectez-vous !</h2>
</div>
<div class="row">
	<div id="inscription" class="col-md-6">
		<div class="row">
			<h2 class="col-md-8 col-md-offset-2 title_login">Pas encore inscrit ?</h2>
		</div>
		<div class="row">
			<form class="col-md-6 col-md-offset-3">
				<div class="form-group">
					<select class="form-control">
						<option>-- Etablisement --</option>
						<option>Monsieur</option>
						<option>Madame</option>
					</select>
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Prénom">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nom">
				</div>

				<div class="form-group">
					<input type="email" class="form-control" placeholder="E-mail*">
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Mot de passe*">
				</div>

				<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirmez votre mot de passe*">
				</div>

				<button class="btn btn-default btn-log">Je m'inscris !</button>



			
			</form>
		</div>
	</div>
	<div class="col-md-6">
		<div class="row">
			<h2 class="col-md-8 col-md-offset-2 title_login">Déjà inscrit ? identifiez-vous !</h2>
		</div>
		<form class="col-md-6 col-md-offset-3" method="post" action="<?php echo site_url("login");?>">
			<div class="form-group">
				<input type="email" class="form-control" name="mail" placeholder="E-mail">
			</div>

			<div class="form-group">
				<input type="password" class="form-control" name="mdp" placeholder="mot de passe">
			</div>
			<div class="form-group">
				<a href="">Mot de passe oublié ?</a>
			</div>
			

			<button class="btn btn-default btn-log" name="co">Se connecter <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
		</form>

		
	</div>
	
</div>
<div id="ligne_pub" class="row">
	<div class="col-md-4 ">
		<img class="img-responsive" src="<?php echo img_url("pubs/bandeau_cancalaise_450x125px.jpg");?>">
	</div>
	<div class="col-md-4">
		<img class="img-responsive"  src="<?php echo img_url("pubs/bandeau_cancalaise_450x125px.jpg");?>">
	</div>
	<div class="col-md-4">
		<img class="img-responsive"  src="<?php echo img_url("pubs/bandeau_cancalaise_450x125px.jpg");?>">
	</div>
</div>