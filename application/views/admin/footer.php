<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<footer>


	</footer>
	<!-- script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo js_url('lity.min'); ?>"></script>
<script type="text/javascript" src="<?php echo js_url('admin_js'); ?>"></script>
<?php if ($thispage == "pub") { ?>
<script type="text/javascript">
	$('.button-actif').click(function(){
		var toChange;
		var id = $(this).attr('id');
		if ($(this).hasClass('btn-success')) {
			$(this).children().removeClass('fa-check-square-o').addClass('fa-square-o');
			$(this).removeClass('btn-success').addClass('btn-danger');
			toChange = 0;
		}
		else{
			$(this).children().removeClass('fa-square-o').addClass('fa-check-square-o');
			$(this).removeClass('btn-danger').addClass('btn-success');
			toChange = 1;
		}
		$.post( "<?php echo site_url('admin/ajaxUpdateActif'); ?>",{ c:toChange,i:id} );
		
	});
</script>
<script type="text/javascript">
	$(document).on('lity:open', function(event, instance) {
   		var ur = instance.opener().attr('data-url');
   		var id = instance.opener().attr('data-id');
   		$('form',this).children('#url-mod').attr('value',ur);
   		$('form',this).children('#id-mod').attr('value',id);
   		$('form',this).children('#idf-mod').attr('value',id);
	});
</script>	
<?php } ?>
<?php if ($thispage == "clients") { ?>
<script type="text/javascript">
	$(document).on('lity:open', function(event, instance) {
   		var id = instance.opener().attr('data-id');
   		$('.lity-container').css('background-color','white');
   		$.ajax({
            type : 'POST',
            url : "<?php echo site_url('admin/ajaxClientsDetail'); ?>",
            data: { i:id },
            dataType : "json",
            success : function(data){
             	console.log(data[0].email,data[0].id);
             	$('#inputNom').attr('value',data[0].lastname);
             	$('#inputPrenom').attr('value',data[0].firstname);
             	$('#inputAdresse').attr('value',data[0].address);
             	$('#inputCP').attr('value',data[0].postcode);
             	$('#inputVille').attr('value',data[0].city);
            },
		});
	});
</script>

<?php } ?>
</body>
</html>