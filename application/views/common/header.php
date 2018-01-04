<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-md-offset-1">
			<a href="<?php echo site_url("home")?>"><img class="img-responsive " src="<?php echo img_url("logos/logo.png")?>"></a>
		</div>
		<div class="col-md-3 col-md-offset-2">
			<p style="color:#1D8AC9;font-size:1.5em;margin-top:25px">
				<strong>Locations de <span style="color:#E68D06;">vacances</span> pour les particuliers et les <span style="color:#E68D06;">professionnels</span></strong>
			</p>
		</div>
		<div class="col-md-2 col-md-offset-2">
			<p style="color:#1D8AC9;font-size:1.5em;margin-top:25px"><strong><i class="fa fa-phone" aria-hidden="true"></i> 02 96 85 80 88</strong></p>
			<p style="color:#1D8AC9;font-size:1.2em;">Du lundi 9h au vendredi 12h</p>
		</div>
		
		
	</div>
	<div class="row">
		<div class="col-md-12" style="padding:0;">
			
			<ul class="nav">
				<!--<li>
					<img src="<?php echo img_url("logos/logo.png")?>">
				</li>-->
				<!--<li>
					<a href="<?php echo site_url("Home");?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
				</li>-->
				<li id="firstlink">
					<a href="<?php echo site_url("Annonces");?>">Annonces</a>
				</li>


				<li >
					<a href="<?php echo site_url("Conseil");?>">Conseils</a>
				</li>

				<li>
					<a href="<?php echo site_url("compte"); ?>">
						<?php if($logged){?>
							<i class="fa fa-user" aria-hidden="true"></i>
						<?php }else{?>
							<i class="fa fa-user-o" aria-hidden="true"></i>
						<?php }?> Mon Espace
					</a>
				</li>
				<?php if($logged){?>
					<li><a href="<?php echo site_url("compte/remonteAnnonce");?>">Crédits : 0</a></li>
					<li><a href="<?php echo site_url('Home?deco'); ?>">Déconnexion</a></li>

				<?php }?>

				
				<li id="passe_ann"><a href="<?php echo site_url('compte/nouv_ann'); ?>">Passer une annonce</a></li>

				
			</ul>
		</div>
	</div>
	
