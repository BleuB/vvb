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
                    <div class="col-md-4" ><a href="#litbox" data-lity data-id="<?php echo $value['id'] ; ?>" data-url="<?php echo $value['link'] ; ?>"><?php echo $value['link'] ; ?></a></div>
                    <div class="col-md-4" ><img src="<?php echo base_url('assets/images/pubs/').$value['file'] ; ?>" class="img-responsive" ></div>
                    <div class="col-md-4" ><?php if ($value['active'] == 1) { ?>
                        <button id="<?php echo $value['id'] ;?>" class="btn btn-success button-actif">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        </button>
                    <?php } else{ ?>
                        <button id="<?php echo $value['id'] ;?>" class="btn btn-danger button-actif">
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


<!-- lity box -->
<div id="litbox" class="jumbotron  lity-hide " style="max-width: 80%;margin: auto;min-width: 400px;
text-align: center;" >
    <h3>Modifications</h3>
    <form method="post" action="<?php echo site_url('admin/pub'); ?>" >
        <input type="hidden" id="id-mod" name="id-mod">
        <label for="url-mod" >URL</label><br>
        <input type="text" name="url-mod" id="url-mod" value="test" style="width: 90%;" ><br>
        <input type="submit" name="modifier" value="modifier">
    </form>
    <form method="post" action="<?php echo site_url('admin/pub'); ?>" >
        <label for="im-mod" >Image</label><br>
        <input type="file" name="im-mod"><br>
        <input type="submit" name="mod-img" value="valider">
    </form>
</div>