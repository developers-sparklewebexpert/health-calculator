<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="bfm_calculator" id="calformImp" class="clearfix">
			<div class="calc_quest"></div>
			<!--div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				 <?php echo __('Enter your age:','health');?>
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="age" class="c_input" type="number" placeholder="<?php echo __('Years','health');?>" required min="18" max="95"  />
			</div-->
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your gender:','health');?>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select imp-sex_bfm" required  autocomplete="off" data-form="#calformImp">
						<option selected="selected" value=""><?php echo __(' Select Gender','health');?></option>
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
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left imp-female_bfm">
				<?php echo __('Thigh size at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right imp-female_bfm">
				<input type="number" name="thigh" class="c_input" placeholder="<?php echo __('Inches','health');?>" min="15" />
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Neck at narrowest point:','health');?>
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="neck" class="c_input" required placeholder="<?php echo __('Inches','health');?>" min="4" max="36"/>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left imp-female_bfm">
				<?php echo __('Biceps at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right imp-female_bfm">
				<input type="number" name="biceps" class="c_input"  placeholder="<?php echo __('Inches','health');?>" min="6" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left imp-female_bfm">
				<?php echo __('Forearm at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right imp-female_bfm">
				<input type="number" name="forearm" class="c_input"  placeholder="<?php echo __('Inches','health');?>" min="4" />
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="<?php echo __('Calculate','health');?>" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="imperial" />
				<input type="hidden" name="action" value="bfm_calculator" />
			</div>
		 </form>
 	</div>
	<div class="clear"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		 <form  method="POST" action="bfm_calculator" name="theFormM"  class="form-horizontal clearfix" role="form" id="calformMetric">
			 <div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your gender:','health');?>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select met-sex_bfm"  required autocomplete="off" data-form="#calformMetric">
						<option selected="selected" value=""> <?php echo __(' Select Gender ','health');?> </option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
 					</select>
				 </label>
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left" required>
				<?php echo __('Waist size at your naval:','health');?>
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="abd2" class="c_input" required placeholder="<?php echo __('cm','health');?>" min="25" max="244"/>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left met-female_bfm">
				<?php echo __('Thigh size at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right met-female_bfm">
				<input type="number" name="thigh" class="c_input"  placeholder="<?php echo __('cm','health');?>" min="15" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Neck at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="neck" class="c_input" required placeholder="<?php echo __('cm','health');?>" min="10" max="91" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left met-female_bfm">
				<?php echo __('Biceps at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right met-female_bfm">
				<input type="number" name="biceps" class="c_input"  placeholder="<?php echo __('cm','health');?>" min="10" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left met-female_bfm">
				<?php echo __('Forearm at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right met-female_bfm">
				<input type="number" name="forearm" class="c_input"  placeholder="<?php echo __('cm','health');?>" min="8" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="<?php echo __('Calculate','health');?>" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="bfm_calculator" />
			</div>
		</form>
	</div>
</div>