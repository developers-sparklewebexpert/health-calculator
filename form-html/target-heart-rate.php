<div class="switch-change-cont">
	
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="thr_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
			<!--div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required="">
						<option selected="selected"></option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
					</select>
				</label>
			</div-->
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your age:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input required="required" min="18" name="age" placeholder="<?php echo __('Years','health');?>" max="95" class="c_input" type="number">
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="action" value="thr_calculator" />
			</div>
		</form>   
	</div>
	<div class="clearfix"></div>
	