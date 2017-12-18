<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<footer class="row principal">
			<div class="col-xs-12 col-lg-8 col-lg-offset-2">
				<div class="col-xs-12 col-md-4">
					<p class="text-justify">
						Site d'annonces de locations de vacances directement auprès des propriétaires et des campings. Un catalogue diffusé à 20000 exemplaires dans 7 pays européens et au Canada.
					</p>
				</div>
				<div class="vr hidden-xs hidden-sm">
					<!-- vertical lines -->
				</div>
				<div class="hr col-xs-12 visible-xs visible-sm">
					<!-- horizontal lines -->
				</div>
				<nav class="col-xs-12 col-md-4">
					<ul class="list-unstyled">
						<li><a href="<?php echo site_url('compte');?>">Espace annonceur</a></li>
						<li><a href="<?php echo site_url('legal/mentionslegales');?>">Mentions Légales</a></li>
						<li><a href="<?php echo site_url('legal/cgu');?>">Conditions générales d'utilisations</a></li>
					</ul>
				</nav>
				<div class="vr hidden-xs hidden-sm">
					<!-- vertical lines -->
				</div>
				<div class="hr col-xs-12 visible-xs visible-sm">
					<!-- horizontal lines -->
				</div>
				<div class="col-xs-12 col-md-4">
					<h4>Contactez-nous</h4>
					<p>
						Mail : <a href="mailto:contact@vacances-vertes-bleues.fr">contact@vacances-vertes-bleues.fr</a>
						<br>
						<a href="http://www.bleu-b.com/" target="blank"class="agence">Création <?php echo img('logo_footer_web.jpg','logo_footer_web.jpg');?></a>
						<br><br>
						Carte par © <a href="https://cmap.comersis.com/" class="alignnone" style="display: inline; position: absolute; margin: 0 0 0 5px;">Comersis</a>
					</p>
				</div>
			</div>
			<div class="col-xs-12 text-center">
				&copy; Vacances Vertes et Bleues, 2016
			</div>
		</footer>
	<!-- script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="<?php echo js_url('js'); ?>"></script>-->
<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/france.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/cmap.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/cmap/regions_hover.js'?>"></script>
</script>
</body>
</html>