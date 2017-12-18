<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>
	<header>
			<!-- -barre de navigation -->
			<div id="nav">
			  <div id="menu" class="navbar navbar-fixed-top">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
			          </button>
			          <a class="navbar-brand bsbrand hidden-xs" href="<?php echo base_url(); ?>">
			            <p class="logotop" ></p> 
			          </a>
			          
			        </div>
			        <div id="navbar" class="collapse navbar-collapse">
			          <ul class="nav navbar-nav navbar-right">
			            <li class="hidden-sm hidden-xs">
			              <a href="<?php echo base_url(); ?>"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
			            </li>        
			            <li><a href="#">Annonces</a>
			            </li>
			            <li><a href="#">Conseil</a>
			            </li>
			            <li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Mon Espace</a>
			            </li>
						<li id="passAnn"><a href="#">Passer une annonce</a></li>          
					  </ul>
			        </div>
			        <!--/.nav-collapse -->
			      </div>
			      <!--/.contatiner -->
			</div>

		</div>
		
	</header>