<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
             	<h2>Gestion clients</h2>
            </div>
            <div class="col-md-12">
              <h4>total clients : <?php echo $totalClients ?></h4>
            </div>
        </div>
        <hr>
         <!-- contenu a partir d'ici -->
      	<div class="row text-center pad-top">

          	<?php
            foreach ($listClients as $key => $value) { ?>
               <div class="col-md-12" >
                 <div class="col-md-4" ><?php echo $value['lastname'].' '.$value['firstname'] ;?></div>
                 <div class="col-md-4" ><?php echo $value['email'] ;?></div>
                 <div class="col-md-4" ><?php echo $value['id'] ;?></div>
               </div>
            <?php }?>
          
            <div class="col-md-12 pag_page">
                <?php echo $pagination;?>
            </div>
      	</div>
	</div>
 <!-- /. PAGE INNER  -->
</div>