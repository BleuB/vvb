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
                    <div class="col-md-4" ><a href="#litbox" data-lity><?php echo $value['link'] ; ?></a></div>
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
<div id="litbox" class="jumbotron  lity-hide " style="max-width: 80%;margin: auto;" >
    <h3>test</h3>
    <p>

Hac ex causa conlaticia stipe Valerius humatur ille Publicola et subsidiis amicorum mariti inops cum liberis uxor alitur Reguli et dotatur ex aerario filia Scipionis, cum nobilitas florem adultae virginis diuturnum absentia pauperis erubesceret patris.

Soleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.

Quam ob rem ut ii qui superiores sunt submittere se debent in amicitia, sic quodam modo inferiores extollere. Sunt enim quidam qui molestas amicitias faciunt, cum ipsi se contemni putant; quod non fere contingit nisi iis qui etiam contemnendos se arbitrantur; qui hac opinione non modo verbis sed etiam opere levandi sunt.
</p>
</div>