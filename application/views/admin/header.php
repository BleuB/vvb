<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
		    <div class="adjust-nav">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="<?php echo site_url(''); ?>" >
		                <img class="img-responsive" style="max-height: 40px;" src="<?php echo img_url("logos/logo.png"); ?>" />
		            </a>
		        </div>
		        <?php if ($logged) { ?>
		         <span class="logout-spn" >
		          	<a href="<?php echo site_url('admin?deco'); ?>" style="color:#fff;">Se déconnecter</a>
		        </span>
		        <?php } ?>
		    </div>
		</div>
		<?php if ($logged) { ?>
       	<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 					<li <?php if ($thispage == 'accueil') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin'); ?>" ><i class="fa fa-desktop "></i>Accueil</a>
                    </li>
                    <li <?php if ($thispage == 'pub') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/pub'); ?>"><i class="fa fa-th-list"></i>Publicités</a>
                    </li>
                    <!-- <li <?php if ($thispage == 'produits') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/produits'); ?>"><i class="fa fa-edit"></i>Produits</a>
                    </li>
                    <li <?php if ($thispage == 'clients') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/clients'); ?>"><i class="fa fa-address-book"></i>Clients</a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <?php } ?>
        <!-- /. NAV SIDE  -->