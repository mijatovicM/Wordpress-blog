<?php //if ( ! defined( 'ABSPATH' ) ) exit;

// loads the shortcodes class, wordpress is loaded with it
require_once( 'shortcodes.class.php' );

// get popup type
$popup = trim( $_GET['popup'] );
$shortcode = new flo_shortcodes( $popup );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<body>
<div id="flo-popup" class="flo-popup">

	<div id="flo-shortcode-wrap">
		
		<div id="flo-sc-form-wrap">
		
			<div id="flo-sc-form-head">
			
				<?php echo $shortcode->popup_title; ?>
			
			</div>
			<!-- /#flo-sc-form-head -->
			
			<form method="post" id="flo-sc-form">
			
				<table id="flo-sc-form-table">
				
					<?php echo $shortcode->output; ?>
					
					<tbody>
						<tr class="form-row">
							<?php if( ! $shortcode->has_child ) : ?><td class="label">&nbsp;</td><?php endif; ?>
							<td class="field"><a href="#" class="button-primary flo-insert">Insert Shortcode</a></td>							
						</tr>
					</tbody>
				
				</table>
				<!-- /#flo-sc-form-table -->
				
			</form>
			<!-- /#flo-sc-form -->
		
		</div>
		<!-- /#flo-sc-form-wrap -->
		
		<div class="clear"></div>
		
	</div>
	<!-- /#flo-shortcode-wrap -->

</div>
<!-- /#flo-popup -->

</body>
</html>
