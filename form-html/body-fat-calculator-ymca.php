<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="bfc_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required>
						<option value=''><?php echo __('Select Gender','health');?></option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Waist size at your naval:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="abd2" class="c_input" required placeholder="<?php echo __('Inches','health');?>" min="10" max="96"/>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your weight:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="weight" class="c_input" required placeholder="<?php echo __('Pounds','health');?>" min="50" max="950" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="hidden" value="imperial" name="measure"><input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="imperial" />
				<input type="hidden" name="action" value="bfc_calculator" />
			</div>
		</form>
	</div>
	<div class="clear"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		<form  method="POST" action="bfa_calculator" class="form-horizontal   clearfix" id="calformMetric">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required>
						<option value='' ><?php echo __('Select Gender','health');?></option>
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Waist size at your naval:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="abd2" class="c_input" required placeholder="<?php echo __('cm','health');?>" min="25" max="244"/>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your weight:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="weight" class="c_input" required placeholder="<?php echo __('kilos','health');?>" min="22" max="430" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="bfc_calculator" />
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>