<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<footer>


	</footer>
	<!-- script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo js_url('admin_js'); ?>"></script>
<script type="text/javascript">
	$('.button-actif').click(function(){
		if ($(this).hasClass('btn-success')) {
			$(this).children().removeClass('fa-check-square-o').addClass('fa-square-o');
			$(this).removeClass('btn-success').addClass('btn-danger');
		}
		else{
			$(this).children().removeClass('fa-square-o').addClass('fa-check-square-o');
			$(this).removeClass('btn-danger').addClass('btn-success');
		}
	});
</script>
</body>
</html>