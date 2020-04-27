<div class="switch-change-cont">
	
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="smc_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Number of cigarettes smoked per day:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input required="required" value="0" class="c_input" name="cigarettesperday" type="number">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Number of cigarettes in a pack:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input class="c_input" name="cigarettesperpack" value="20" required="required" type="number">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Price per pack (use decimal point!):','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input size="5" value="0.00" required="required" class="c_input" name="priceperpack" type="number">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="action" value="smc_calculator" />
			</div>
		</form>   
	</div>
	<div class="clearfix"></div>
	