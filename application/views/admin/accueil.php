<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h2>Accueil administration</h2>
            </div>
        </div>
        <hr>
         <!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">
          	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
          		<div class="div-square">
	               	<a href="<?php echo site_url('admin/pub'); ?>" >
						        <i class="fa fa-edit fa-5x"></i>
	          			<h4>Publicités</h4>
	          		</a>
          		</div>
          	</div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                  <a href="<?php echo site_url('admin/clients'); ?>" >
                    <i class="fa fa-address-book fa-5x"></i>
                  <h4>Clients</h4>
                </a>
              </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
              <div class="div-square">
                  <a href="<?php echo site_url('admin/annonces'); ?>" >
                    <i class="fa fa-th-list fa-5x"></i>
                  <h4>Annonces</h4>
                </a>
              </div>
            </div>
      	</div>
	</div>
 <!-- /. PAGE INNER  -->
</div>