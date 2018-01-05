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
               <div class="col-md-12 listClientsItem" >
                 <div class="col-md-4" ><?php echo $value['lastname'].' '.$value['firstname'] ;?></div>
                 <div class="col-md-4" ><?php echo $value['email'] ;?></div>
                 <div class="col-md-4"><a href="#litbox" data-lity data-id="<?php echo $value['id'] ; ?>"><button class="btn btn-primary">+++</button></a></div>
               </div>
            <?php }?>
          
            <div class="col-md-12 pag_page">
                <?php echo $pagination;?>
            </div>
      	</div>
	</div>
 <!-- /. PAGE INNER  -->
</div>

<!-- lity box -->
<div id="litbox" class="lity-hide" style="max-width: 80%;margin: auto;min-width: 800px;
text-align: center;" >
    <form class="form-horizontal col-md-10 col-md-offset-1">
      <div class="form-group">
        <label for="inputNom" class="col-sm-2 control-label">Nom <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputNom" placeholder="Nom" value="" >
        </div>
      </div>
      <div class="form-group">
        <label for="inputPrenom" class="col-sm-2 control-label">Prenom <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPrenom" placeholder="Prenom">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAdresse" class="col-sm-2 control-label">Adresse <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputAdresse" placeholder="5 Avenue Anatole France">
        </div>
      </div>
      <div class="form-group">
        <label for="inputCP" class="col-sm-2 control-label">Code Postal <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputCP" placeholder="75007">
        </div>
      </div>
      <div class="form-group">
        <label for="inputVille" class="col-sm-2 control-label">Ville <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputVille" placeholder="Paris">
        </div>
      </div>
      <div class="form-group">
        <label for="inputTel" class="col-sm-2 control-label">Tel. <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputTel" placeholder="02 03 04 05 06">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPortable" class="col-sm-2 control-label">Portable <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputPortable" placeholder="06 07 08 09 10">
        </div>
      </div>
      <div class="form-group">
        <label for="inputFax" class="col-sm-2 control-label">Fax</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputFax" placeholder="02 30 40 50 60">
        </div>
      </div>
      <div class="form-group">
        <label for="inputMail" class="col-sm-2 control-label">Mail <small class="text-danger"><i class="fa fa-asterisk" aria-hidden="true"></i></small></label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputMail" placeholder="exemple@mail.fr">
        </div>
      </div>
      <div class="form-group">
        <label for="inputWeb" class="col-sm-2 control-label">Site Web</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputWeb" placeholder="www.exemple.fr">
        </div>
      </div>
      <p class="text-danger pull-right"><i class="fa fa-asterisk" aria-hidden="true"></i> Champs obligatoires</p>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-lg btn-vvb center-block">Enregistrer</button>
        </div>
      </div>
    </form>
</div>