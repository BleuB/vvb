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
					<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Mon Espace</a>
				</li>
				<li id="passe_ann"><a href="">Passer une annonce</a></li>
				
			</ul>
		</div>
	</div>
	
