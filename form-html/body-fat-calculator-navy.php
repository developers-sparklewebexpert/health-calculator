<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="bfn_calculator" class="clearfix" id="calformImp">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
				<select name="sex" size="1" class="c_select" id="imp-sex_bfn" data-form="#calformImp" required>
						<option selected="selected" value=""><?php echo __('Select Gender','health');?></option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
 					</select>
 				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left imp-female_bfn">
 				<?php echo __('Waist size at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right imp-female_bfn">
				 <input type="number" name="abd1" class="c_input" placeholder="<?php echo __('Inches','health');?>" min="15" />
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left imp-male_bfn">
 				<?php echo __('Waist size at your naval:','health');?>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right imp-male_bfn">
				 <input type="number" name="abd2" class="c_input"  placeholder="<?php echo __('Inches','health');?>" min="15" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left imp-female_bfn">
 				<?php echo __('Hip size at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right imp-female_bfn">
				 <input type="number" name="hip" class="c_input"  placeholder="<?php echo __('Inches','health');?>" min="15" />
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Neck at narrowest point:','health');?>
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				 <input type="number" name="neck" class="c_input" required placeholder="<?php echo __('Inches','health');?>" min="8" />
 			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				 <?php echo __('Enter your weight:','health');?>
			</div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				 <input type="number" name="weight" class="c_input" required placeholder="<?php echo __('Pounds','health');?>" min="65" max="695" />
			</div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __(' Select your height:','health');?>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				 <label class="c_select_label">
					<select name="mheight" size="1" class="c_select" required>
						 <option value="55">4' 7"</option>
						 <option value="56">4' 8"</option>
						 <option value="57">4' 9"</option>
						 <option value="58">4' 10"</option>
						 <option value="59">4' 11"</option>
						 <option value="60">5'</option>
						 <option value="61">5' 1"</option>
						 <option value="62">5' 2"</option>
						 <option value="63">5' 3"</option>
						 <option value="64">5' 4"</option>
						 <option value="65">5' 5"</option>
						 <option selected="selected" value=""><?php echo __('Feet and Inches','health');?></option>
						 <option value="66">5' 6"</option>
						 <option value="67">5' 7"</option>
						 <option value="68">5' 8"</option>
						 <option value="69">5' 9"</option>
						 <option value="70">5' 10"</option>
						 <option value="71">5' 11"</option>
 						 <option value="72">6'</option>
						 <option value="73">6' 1"</option>
						 <option value="74">6' 2"</option>
						 <option value="75">6' 3"</option>
						 <option value="76">6' 4"</option>
						 <option value="77">6' 5"</option>
						 <option value="78">6' 6"</option>
						 <option value="79">6' 7"</option>
						 <option value="80">6' 8"</option>
						 <option value="81">6' 9"</option>
						 <option value="82">6' 10"</option>
						 <option value="83">6' 11"</option>
						 <option value="84">7'</option>
						 <option value="85">7' 1"</option>
						  <option value="86">7' 2"</option>
						  <option value="87">7' 3"</option>
						  <option value="88">7' 4"</option>
						  <option value="89">7' 5"</option>
					 </select>
				</label>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
 			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
 				<input type="submit" border="0" align="right" value="<?php echo __('Calculate','health');?>" name="submit" class="btn btn-imperial  active" id="submit">
				 <div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="imperial">
				<input type="hidden" name="action" value="bfn_calculator">
			 </div>
		</form>
	 </div>
	<div class="clearfix"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		<form  method="POST" action="bfn_calculator" id="calformMetric" class="clearfix">
			 <div class="calc_quest"></div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				 <?php echo __('Enter your gender:','health');?>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required id="met-sex_bfn" data-form="#calformMetric">
						 <option selected="selected" value=""><?php echo __('Select Gender','health');?></option>
						 <option value="m"><?php echo __('Male','health');?></option>
						 <option value="f"><?php echo __('Female','health');?></option>
					 </select>
				  </label>
			</div>
 			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left met-female_bfn">
				<?php echo __('Waist size at narrowest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right met-female_bfn">
				 <input type="number" name="abd1" class="c_input"  placeholder="<?php echo __('cm','health');?>" min="15" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left met-male_bfn">
				<?php echo __('Waist size at your naval:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right met-male_bfn">
				 <input type="number" name="abd2" class="c_input"  placeholder="<?php echo __('cm','health');?>" min="15" />
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left met-female_bfn">
				<?php echo __('Hip size at widest point:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right met-female_bfn">
				<input type="number" name="hip" class="c_input" placeholder="<?php echo __('cm','health');?>" min="15" />
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Neck at narrowest point:','health');?>
			 </div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				 <input type="number" name="neck" class="c_input" required placeholder="<?php echo __('cm','health');?>" min="8" />
			</div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your weight:','health');?>
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="weight" class="c_input" required placeholder="<?php echo __('kilos','health');?>" min="30" max="395" />
			 </div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				 <?php echo __('Select your height:','health');?>
 			</div>
			 <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select size="1" name="mheight" class="c_select" required="">
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
						<option value="" selected="selected"><?php echo __('Meters','health');?></option>
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
				<input type="submit" border="0" align="right" value="<?php echo __('Calculate','health');?>" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="bfn_calculator" />
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
