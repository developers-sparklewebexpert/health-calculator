<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="bfa_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
			
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required>
						<option value="" selected="selected"> <?php echo __(' Select Gender','health');?> </option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
					</select>
				</label>
			</div>
			
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Waist size at your naval:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="abd2" min="10" max="96" required class="c_input" placeholder="<?php echo __('Inches','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Hip size at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" min="0" name="hip" required class="c_input" placeholder="<?php echo __('Inches','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Neck at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="neck" min="4" max="36" required class="c_input" placeholder="<?php echo __('Inches','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Forearm at largest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" min="0" name="forearm" required class="c_input" placeholder="<?php echo __('Inches','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Wrist at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" min="0" name="wrist" required class="c_input" placeholder="<?php echo __('Inches','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your weight:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="weight" min="50" max="950" required class="c_input" placeholder="<?php echo __('Pounds','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select your height:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="height" size="1" class="c_select" required>
						<option value="55"><?php echo __("4' 7","health");?>"</option>
						<option value="56"><?php echo __("4' 8","health");?>"</option>
						<option value="57"><?php echo __("4' 9","health");?>"</option>
						<option value="58"><?php echo __("4' 10","health");?>"</option>
						<option value="59"><?php echo __("4' 11","health");?>"</option>
						<option value="60"><?php echo __("5'","health");?></option>
						<option value="61"><?php echo __("5' 1","health");?>"</option>
						<option value="62"><?php echo __("5' 2","health");?>"</option>
						<option value="63"><?php echo __("5' 3","health");?>"</option>
						<option value="64"><?php echo __("5' 4","health");?>"</option>
						<option value="65"><?php echo __("5' 5","health");?>"</option>
						<option selected="selected" value=""><?php echo __("feet and inches","health");?></option>
						<option value="66"><?php echo __("5' 6","health");?>"</option>
						<option value="67"><?php echo __("5' 7","health");?>"</option>
						<option value="68"><?php echo __("5' 8","health");?>"</option>
						<option value="69"><?php echo __("5' 9","health");?>"</option>
						<option value="70"><?php echo __("5' 10","health");?>"</option>
						<option value="71"><?php echo __("5' 11","health");?>"</option>
						<option value="72"><?php echo __("6'","health");?></option>
						<option value="73"><?php echo __("6' 1","health");?>"</option>
						<option value="74"><?php echo __("6' 2","health");?>"</option>
						<option value="75"><?php echo __("6' 3","health");?>"</option>
						<option value="76"><?php echo __("6' 4","health");?>"</option>
						<option value="77"><?php echo __("6' 5","health");?>"</option>
						<option value="78"><?php echo __("6' 6","health");?>"</option>
						<option value="79"><?php echo __("6' 7","health");?>"</option>
						<option value="80"><?php echo __("6' 8","health");?>"</option>
						<option value="81"><?php echo __("6' 9","health");?>"</option>
						<option value="82"><?php echo __("6' 10","health");?>"</option>
						<option value="83"><?php echo __("6' 11","health");?>"</option>
						<option value="84"><?php echo __("7'","health");?></option>
						<option value="85"><?php echo __("7' 1","health");?>"</option>
						<option value="86"><?php echo __("7' 2","health");?>"</option>
						<option value="87"><?php echo __("7' 3","health");?>"</option>
						<option value="88"><?php echo __("7' 4","health");?>"</option>
						<option value="89"><?php echo __("7' 5","health");?>"</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="hidden" value="imperial" name="measure"><input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="imperial" />
				<input type="hidden" name="action" value="bfa_calculator" />
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
						<option value=""selected> <?php echo __(' Select Gender ','health');?> </option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Waist size at your naval:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="abd2" min="25" max="244" required class="c_input" placeholder="<?php echo __('cm','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Hip size at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="hip" min="0" required class="c_input" placeholder="<?php echo __('cm','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Neck at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="neck" min="10" max="91" required class="c_input" placeholder="<?php echo __('cm','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Forearm at largest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" min="0" name="forearm" required class="c_input" placeholder="<?php echo __('cm','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Wrist at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" min="0" name="wrist" required class="c_input" placeholder="<?php echo __('cm','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your weight:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="weight" min="22" max="430" required class="c_input" placeholder="<?php echo __('kg','health');?>" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select your height:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select size="1" name="height" class="c_select" required="">
						<option value="55.16">1.4 m</option>
						<option value="55.554">1.41 m</option>
						<option value="55.948">1.42 m</option>
						<option value="56.342">1.43 m</option>
						<option value="56.736">1.44 m</option>
						<option value="57.13">1.45 m</option>
						<option value="57.524">1.46 m</option>
						<option value="57.918">1.47 m</option>
						<option value="58.312">1.48 m</option>
						<option value="58.706">1.49 m</option>
						<option value="59.1">1.5 m</option>
						<option value="59.494">1.51 m</option>
						<option value="59.888">1.52 m</option>
						<option value="60.282">1.53 m</option>
						<option value="60.676">1.54 m</option>
						<option value="61.07">1.55 m</option>
						<option value="61.464">1.56 m</option>
						<option value="61.858">1.57 m</option>
						<option value="62.252">1.58 m</option>
						<option value="62.646">1.59 m</option>
						<option value="63.04">1.6 m</option>
						<option value="63.434">1.61 m</option>
						<option value="63.828">1.62 m</option>
						<option value="64.222">1.63 m</option>
						<option value="64.616">1.64 m</option>
						<option value="65.01">1.65 m</option>
						<option value="65.404">1.66 m</option>
						<option value="65.798">1.67 m</option>
						<option value="66.192">1.68 m</option>
						<option value="66.586">1.69 m</option>
						<option selected="selected" value="">meters</option>
						<option value="66.98">1.7 m</option>
						<option value="67.374">1.71 m</option>
						<option value="67.768">1.72 m</option>
						<option value="68.162">1.73 m</option>
						<option value="68.556">1.74 m</option>
						<option value="68.95">1.75 m</option>
						<option value="69.344">1.76 m</option>
						<option value="69.738">1.77 m</option>
						<option value="70.132">1.78 m</option>
						<option value="70.526">1.79 m</option>
						<option value="70.92">1.8 m</option>
						<option value="71.314">1.81 m</option>
						<option value="71.708">1.82 m</option>
						<option value="72.102">1.83 m</option>
						<option value="72.496">1.84 m</option>
						<option value="72.89">1.85 m</option>
						<option value="73.284">1.86 m</option>
						<option value="73.678">1.87 m</option>
						<option value="74.072">1.88 m</option>
						<option value="74.466">1.89 m</option>
						<option value="74.86">1.9 m</option>
						<option value="75.254">1.91 m</option>
						<option value="75.648">1.92 m</option>
						<option value="76.042">1.93 m</option>
						<option value="76.436">1.94 m</option>
						<option value="76.83">1.95 m</option>
						<option value="77.224">1.96 m</option>
						<option value="77.618">1.97 m</option>
						<option value="78.012">1.98 m</option>
						<option value="78.406">1.99 m</option>
						<option value="78.8">2 m</option>
					    <option value="79.194">2.01 m</option>
						<option value="79.588">2.02 m</option>
						<option value="79.982">2.03 m</option>
						<option value="80.376">2.04 m</option>
						<option value="80.77">2.05 m</option>
						<option value="81.164">2.06 m</option>
						<option value="81.558">2.07 m</option>
						<option value="81.952">2.08 m</option>
						<option value="82.346">2.09 m</option>
						<option value="82.74">2.1 m</option>
						<option value="83.134">2.11 m</option>
						<option value="83.528">2.12 m</option>
						<option value="83.922">2.13 m</option>
						<option value="84.316">2.14 m</option>
						<option value="84.71">2.15 m</option>
						<option value="85.104">2.16 m</option>
						<option value="85.498">2.17 m</option>
						<option value="85.892">2.18 m</option>
						<option value="86.286">2.19 m</option>
						<option value="86.68">2.2 m</option>
						<option value="87.074">2.21 m</option>
						<option value="87.468">2.22 m</option>
						<option value="87.862">2.23 m</option>
						<option value="88.256">2.24 m</option>
						<option value="88.65">2.25 m</option>
						<option value="89.044">2.26 m</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="hidden" value="imperial" name="measure"><input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="bfa_calculator" />
				
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>
