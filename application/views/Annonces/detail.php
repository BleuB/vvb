<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <section id="detail_annonce">
        <div class="row">  
          <h2 class="col-md-12"><?php echo $annonce['title']; ?></h2>
            
        </div>
        <div class="row" style="text-align: center;" >  
              <h4 class="col-md-12"><?php echo $annonce['town']; ?></h4>
        </div>
        </section>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <!-- Slider -->
        
            <div class="col-sm-3" id="slider-thumbs">
                <!-- Bottom switcher of slider -->
                <ul class="hide-bullets">
                    <li class="col-sm-12">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="<?php echo img_url("annonces/".$annonce['couv']); ?>">
                        </a>
                    </li>
                    <?php $i=1;
                     foreach ($images as $key => $value) {
                      ?>
                      <li class="col-sm-12">
                        <a class="thumbnail" id="carousel-selector-<?php echo $i; ?>"><img src="<?php echo img_url("annonces/".$value['file']); ?>"></a>
                      </li>
                    <?php $i++; } ?>
                </ul>
            </div>
            <div class="col-sm-8">
                <div class="col-xs-12" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                            <?php //// print_r($images);echo $annonce['couv']; ?>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="<?php echo img_url("annonces/".$annonce['couv']); ?>">
                                    </div>
                                    <?php $i=1;
                                     foreach ($images as $key => $value) {
                                      ?>
                                        <div class="item" data-slide-number="<?php echo $i; ?>">
                                          <img src="<?php echo img_url("annonces/".$value['file']); ?>">
                                        </div>
                                    <?php $i++; } ?>
                                    
                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Slider-->
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h3 class="mid-title">Localisation</h3>
            <div class="thumbnail">
              <div class="map_responsive">
                <iframe width="1000" height="450" frameborder="0" style="border:0;max-width: 100%;" src="https://www.google.com/maps/embed/v1/place?q=<?php echo str_replace(" ", "+ ", $annonce['adress'] . " " . $annonce['cp'] . "
                  " . $annonce['town']); ?>&key=AIzaSyCVJ3Q1FZbMOBBdpgXHElbvNIk4t5myAkI&zoom=9" allowfullscreen></iframe>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-12">
          <h3 class="mid-title">Description</h3>
          <p class="text-justify">
            <?php echo $annonce['descr_longue']; ?>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
            <h3 class="mid-title">Informations</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li>Capacité : <strong><?php echo $annonce['capacite']; ?></strong></li>
                  <li>Durée minimun séjour : <strong><?php echo $annonce['duree_sejour']; ?></strong></li>
                  <li>Couchages : <strong><?php echo $annonce['couchage']; ?></strong></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li>Type de logement : <strong><?php echo $annonce_type[$annonce['type']-1]['type'];?></strong></li>
                  <li>Chambres / Emplacements : <strong><?php echo $annonce['chambre']; ?></strong></li>
                  <li>Surface : <strong><?php echo $annonce['surface']; ?></strong></li>
                </ul>
              </div>
             </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h3 class="mid-title">À partir de</h3>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6  text-center-on-sm">
                <h4>Hors Saison</h4>
                <p>
                  <strong ><?php echo $annonce['hsnuit']; ?> €</strong>
                  La nuit
                </p>
                <p>
                  <strong ><?php echo $annonce['hsweek']; ?> €</strong>
                  La semaine
                </p>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6  text-center-on-sm">
                <h4>Pleine Saison</h4>
                <p>
                  <strong ><?php echo $annonce['psnuit']; ?> €</strong>
                  La nuit
                </p>
                <p>
                  <strong><?php echo $annonce['psweek']; ?> €</strong>
                  La semaine
                </p>
              </div>
            </div>
        </div>
        <div class="col-md-6">
          <h3 class="mid-title">Contacter le propriétaire</h3>
            <table class="table table-condensed">
              <tr>
                <td><i class="fa fa-user" aria-hidden="true" title="Fixe"></i></td>
                <td class="text-capitalize">
                  <?php echo $infos_client['firstname']; ?>
                  <?php echo $infos_client['lastname']; ?>
                </td>
              </tr>
              <?php
                    if($infos_client['phone']){ ?>
                <tr>
                  <td><i class="fa fa-phone" aria-hidden="true" title="Fixe"></i></td>
                  <td>
                    <?php echo ' '.$infos_client['phone']; ?>
                  </td>
                </tr>
                <?php }
                      if($infos_client['mobile']){ ?>
                <tr>
                  <td><i class="fa fa-mobile" aria-hidden="true" title="Mobile"></i></td>
                  <td>
                    <?php echo ' '.$infos_client['mobile']; ?>
                  </td>
                </tr>
                <?php }
                        if($infos_client['email']){ ?>
                <tr>
                  <td><i class="fa fa-envelope" aria-hidden="true" title="Mail"></i></td>
                  <td>
                    <?php echo ' '.$infos_client['email']; ?>
                  </td>
                </tr>
                <?php }
                          if($infos_client['url']){ ?>
                <tr>
                  <td><i class="fa fa-link" aria-hidden="true" title="Site Web"></i></td>
                  <td>
                    <a href="<?php echo ' '.$infos_client['url']; ?>">
                      <?php echo ' '.$infos_client['url']; ?>
                    </a>
                  </td>
                </tr>
                <?php } ?>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>