<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h2>Gestion des publicités</h2>
            </div>
        </div>
        <hr>
         <!-- /. ROW  -->
        <div class="row" >
            <div class="col-md-12" >
                <h3>Publicités accueil</h3>
                <?php foreach ($pubaccueil as $key => $value) { ?>
                <div class="col-md-12 listpub" >
                    <div class="col-md-4" ><?php echo $value['link'] ; ?></div>
                    <div class="col-md-4" ><img src="<?php echo base_url('assets/images/pubs/').$value['file'] ; ?>" class="img-responsive" ></div>
                    <div class="col-md-4" ><?php if ($value['active'] == 1) { ?>
                        <button class="btn btn-success button-actif">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </button>
                    <?php } else{ ?>
                        <button class="btn btn-danger button-actif">
                            <i class="fa fa-square-o" aria-hidden="true"></i>
                        </button> 
                    <?php } ?>
                        
                    </div>
                </div>

                <?php } ?>
                
            </div> 
            <div class="col-md-12" >
                <h3>Publicités log in</h3>
                
            </div> 
            <div class="col-md-12" >
                <h3>Publicités page de recherche</h3>
                
            </div> 
            <div class="col-md-12" >
                <h3>Publicités détails</h3>
                
            </div> 
            <div class="col-md-12" >
                <h3>Publicités conseils</h3>
                
            </div> 
        </div>
         <!-- /. ROW  -->
	</div>
 <!-- /. PAGE INNER  -->
</div>