<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
	
	<div class="row"> 
		<div class="col-md-4 paragraphe">
			<h2><i class="fa fa-handshake-o" aria-hidden="true"></i> L'Expérience VVB</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu elit sapien. 
			Vestibulum pretium, mi vitae luctus lobortis, felis nibh eleifend erat, vel eleifend justo sapien quis dui. Ut sit amet elit vitae nulla sagittis congue.
			 Aenean lacus magna, facilisis in elementum quis, vehicula vel arcu. Donec blandit tempor enim nec dictum. Aenean non felis in felis dignissim viverra.
			 . </p>
		</div>
		<div id="para_centre" class="col-md-4 paragraphe">
			<h2><i class="fa fa-thumbs-up" aria-hidden="true"></i> Authenticité</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu elit sapien. 
			Vestibulum pretium, mi vitae luctus lobortis, felis nibh eleifend erat, vel eleifend justo sapien quis dui.
			 Ut sit amet elit vitae nulla sagittis congue. Aenean lacus magna, facilisis in elementum quis, vehicula vel arcu.
			  Donec blandit tempor enim nec dictum. Aenean non felis in felis dignissim viverra. Donec vitae lorem sit amet ante tincidunt interdum vel sed enim. 
			  </p>
		</div>
		<div class="col-md-4 paragraphe">
			<h2><i class="fa fa-book" aria-hidden="true"></i> Guide VVB</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
			 Praesent eu elit sapien. Vestibulum pretium, mi vitae luctus lobortis, felis nibh eleifend erat, vel eleifend justo sapien quis dui. 
			 Ut sit amet elit vitae nulla sagittis congue. Aenean lacus magna, facilisis in elementum quis, vehicula vel arcu. Donec blandit tempor enim nec dictum.
			  Aenean non felis in felis dignissim viverra. Donec vitae lorem sit amet ante tincidunt interdum vel sed enim. Fusce tristique sapien non diam viverra ullamcorper. 
			  </p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<h2 id="titre_ann">Top annonces</h2>

			<div class="row annonce">
				<div class="col-md-3 col-xs-3">
					<img src="<?php echo img_url("3.png")?>" class="thumbnail img-responsive" />
				</div>
				<div class="col-md-6 col-xs-12">
					<a class="lien_ann" href=""><h3>Chambre d'hôtes MYRTILLE de caractère</h3></a>
					<h4>Loire (auvergne-rhône-alpes)</h4>
					<p>Dans un cadre bucolique,verdoyant,fleuri et arboré,venez vous reposer dans l'une de nos 5 chambres.Près de lieux touristiques tels volcans,villages pittoresques et multiples chemins de randonné.</p>
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
				<div class="col-md-3">
					<img src="<?php echo img_url("3.png")?>" class="thumbnail img-responsive" />
				</div>
				<div class="col-md-6">
					<a class="lien_ann" href=""><h3>Chambre d'hôtes MYRTILLE de caractère</h3></a>
					<h4>Loire (auvergne-rhône-alpes)</h4>
					<p>Dans un cadre bucolique,verdoyant,fleuri et arboré,venez vous reposer dans l'une de nos 5 chambres.Près de lieux touristiques tels volcans,villages pittoresques et multiples chemins de randonné.</p>
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
		<div class="col-md-4" id="panneau_pub">
			<div class="row lignepub">
				<div class="col-md-12">
					<img src="<?php echo img_url("pubs/_10D-home2.png");?>">
				</div>
			</div>
			<div class="row lignepub">
				<div class="col-md-12">
					<img src="<?php echo img_url("pubs/450x125px-camping-le-soleil.jpg");?>">
				</div>
			</div>
			<div class="row lignepub">
				<div class="col-md-12">
					<img src="<?php echo img_url("pubs/bandeau_cancalaise_450x125px.jpg");?>">
				</div>
			</div>
		</div>
	</div>



</div>