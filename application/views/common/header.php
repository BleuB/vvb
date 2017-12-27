<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="padding:0;">
			
			<ul class="nav">
				<!--<li>
					<img src="<?php echo img_url("logos/logo.png")?>">
				</li>-->
				<li>
					<a href="<?php echo site_url("Home");?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="<?php echo site_url("Annonces");?>">Annonces</a>
				</li>


				<li >
					<a href="<?php echo site_url("Conseil");?>">Conseils</a>
				</li>

				<li>
					<a href="<?php echo site_url("login"); ?>">
						<?php if($logged){?>
							<i class="fa fa-user" aria-hidden="true"></i>
						<?php }else{?>
							<i class="fa fa-user-o" aria-hidden="true"></i>
						<?php }?> Mon Espace
					</a>
				</li>
				<?php if($logged){?>
					<li>Crédits : 0</li>
					<li><a href="<?php echo site_url('Home?deco'); ?>">Déconnexion</a></li>

				<?php }?>

				<?php 
					$pass;
					if($logged){
						$pass=site_url("Home");
					}else{
						$pass=site_url("login");
					}
				?>
				<li id="passe_ann"><a href="<?php echo $pass; ?>">Passer une annonce</a></li>

				
			</ul>
		</div>
	</div>
	
