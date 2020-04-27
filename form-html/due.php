<div class="switch-change-cont">
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script>jQuery( function() { jQuery( "#datepicker" ).datepicker({ dateFormat: 'mm/dd/yy' }); } );</script>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="due_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter the first day of your last menstrual period?','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input autocomplete="off" placeholder="mm/dd/yyyy" name="dp1" required="required" value="" class="c_input" id="datepicker" type="text">
			</div>
			<div class="clear"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="action" value="due_calculator" />
			</div>
		</form>   
	</div>
	<div class="clearfix"></div>
	