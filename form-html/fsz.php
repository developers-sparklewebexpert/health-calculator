<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="fsz_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Select your gender:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select name="sex" size="1" class="c_select" required>
							<option value='' selected="selected"> <?php echo __(' Select Gender ','health');?></option>
							<option value="m"><?php echo __('Male','health');?></option>
							<option value="f"><?php echo __('Female','health');?></option>
						</select>
					</label>
				</div>
				
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Select your height:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select name="height" size="1" class="c_select" required="">
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
							<option value="" selected="selected" value=""><?php echo __('feet and inches','health');?></option>
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
				<div class="col-md-12 col-lg-12 col-xs-12 c_form_left clearfix">
					<b><?php echo __('Select either from given below:','health');?></b>
				</div>
				<div class="col-md-12 col-lg-12 col-xs-12 c_form_right">
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Wrist circumference:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select size="1" name="wrist" class="c_select">
							<option value="2">2"</option>
							<option value="2.125">2 1/8"</option>
							<option value="2.25">2 1/4"</option>
							<option value="2.375">2 3/8"</option>
							<option value="2.5">2 1/2"</option>
							<option value="2.625">2 5/8"</option>
							<option value="2.75">2 3/4"</option>
							<option value="2.875">2 7/8"</option>
							<option value="3">3"</option>
							<option value="3.125">3 1/8"</option>
							<option value="3.25">3 1/4"</option>
							<option value="3.375">3 3/8"</option>
							<option value="3.5">3 1/2"</option>
							<option value="3.625">3 5/8"</option>
							<option value="3.75">3 3/4"</option>
							<option value="3.875">3 7/8"</option>
							<option value="4">4"</option>
							<option value="4.125">4 1/8"</option>
							<option value="4.25">4 1/4"</option>
							<option value="4.375">4 3/8"</option>
							<option value="4.5">4 1/2"</option>
							<option value="4.625">4 5/8"</option>
							<option value="4.75">4 3/4"</option>
							<option value="4.875">4 7/8"</option>
							<option value="5">5"</option>
							<option value="5.125">5 1/8"</option>
							<option value="5.25">5 1/4"</option>
							<option value="5.375">5 3/8"</option>
							<option value="5.5">5 1/2"</option>
							<option value="5.625">5 5/8"</option>
							<option value="5.75">5 3/4"</option>
							<option value="5.875">5 7/8"</option>
							<option value="6">6"</option>
							<option value="6.125">6 1/8"</option>
							<option value="6.25">6 1/4"</option>
							<option value="6.375">6 3/8"</option>
							<option value="6.5">6 1/2"</option>
							<option value="6.625">6 5/8"</option>
							<option value="6.75">6 3/4"</option>
							<option value="6.875">6 7/8"</option>
							<option value="7">7"</option>
							<option value="7.125">7 1/8"</option>
							<option value="7.25">7 1/4"</option>
							<option value="7.375">7 3/8"</option>
							<option value="7.5">7 1/2"</option>
							<option value="7.625">7 5/8"</option>
							<option value="7.75">7 3/4"</option>
							<option value="7.875">7 7/8"</option>
							<option value="8">8"</option>
							<option value="8.125">8 1/8"</option>
							<option value="8.25">8 1/4"</option>
							<option value="8.375">8 3/8"</option>
							<option value="8.5">8 1/2"</option>
							<option value="8.625">8 5/8"</option>
							<option value="8.75">8 3/4"</option>
							<option value="8.875">8 7/8"</option>
							<option value="9">9"</option>
							<option value="9.125">9 1/8"</option>
							<option value="9.25">9 1/4"</option>
							<option value="9.375">9 3/8"</option>
							<option value="9.5">9 1/2"</option>
							<option value="9.625">9 5/8"</option>
							<option value="9.75">9 3/4"</option>
							<option value="9.875">9 7/8"</option>
							<option value="10">10"</option>
							<option value="10.125">10 1/8"</option>
							<option value="10.25">10 1/4"</option>
							<option value="10.375">10 3/8"</option>
							<option value="10.5">10 1/2"</option>
							<option value="10.625">10 5/8"</option>
							<option value="10.75">10 3/4"</option>
							<option value="10.875">10 7/8"</option>
							<option value="11">11"</option>
							<option value="" selected="selected"><?php echo __('inches','health');?></option>
						</select>
					</label>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Elbow breadth:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select size="1" name="elbow" class="c_select">
							<option value="1">1"</option>
							<option value="1.125">1 1/8"</option>
							<option value="1.25">1 1/4"</option>
							<option value="1.375">1 3/8"</option>
							<option value="1.5">1 1/2"</option>
							<option value="1.625">1 5/8"</option>
							<option value="1.75">1 3/4"</option>
							<option value="1.875">1 7/8"</option>
							<option value="2">2"</option>
							<option value="2.125">2 1/8"</option>
							<option value="2.25">2 1/4"</option>
							<option value="2.375">2 3/8"</option>
							<option value="2.5">2 1/2"</option>
							<option value="2.625">2 5/8"</option>
							<option value="2.75">2 3/4"</option>
							<option value="2.875">2 7/8"</option>
							<option value="3">3"</option>
							<option value="3.125">3 1/8"</option>
							<option value="3.25">3 1/4"</option>
							<option value="3.375">3 3/8"</option>
							<option value="3.5">3 1/2"</option>
							<option value="3.625">3 5/8"</option>
							<option value="3.75">3 3/4"</option>
							<option value="3.875">3 7/8"</option>
							<option value="4">4"</option>
							<option value="4.125">4 1/8"</option>
							<option value="4.25">4 1/4"</option>
							<option value="4.375">4 3/8"</option>
							<option value="4.5">4 1/2"</option>
							<option value="4.625">4 5/8"</option>
							<option value="4.75">4 3/4"</option>
							<option value="4.875">4 7/8"</option>
							<option value="" selected="selected"><?php echo __('inches','health');?></option>
						</select>
					</label>
				</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="hidden" value="imperial" name="measure"><input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="imperial" />
				<input type="hidden" name="action" value="fsz_calculator" />
			</div>
		</form>   
	</div>
	<div class="clear"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		<form  method="POST" action="fsz_calculator" class="form-horizontal   clearfix" id="calformMetric">
			<div class="calc_quest"></div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Select your gender:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select name="sex" size="1" class="c_select" required="">
							<option value="" selected="selected"></option>
							<option value="m"><?php echo __('Male','health');?></option>
							<option value="f"><?php echo __('Female','health');?></option>
						</select>
					</label>
				</div>
				
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Select your height:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select size="1" name="height" class="c_select" required>
							<option value="55.16"><?php echo __('1.4 m','health');?></option>
							<option value="55.554"><?php echo __('1.41 m','health');?></option>
							<option value="55.948"><?php echo __('1.42 m','health');?></option>
							<option value="56.342"><?php echo __('1.43 m','health');?></option>
							<option value="56.736"><?php echo __('1.44 m','health');?></option>
							<option value="57.13"><?php echo __('1.45 m','health');?></option>
							<option value="57.524"><?php echo __('1.46 m','health');?></option>
							<option value="57.918"><?php echo __('1.47 m','health');?></option>
							<option value="58.312"><?php echo __('1.48 m','health');?></option>
							<option value="58.706"><?php echo __('1.49 m','health');?></option>
							<option value="59.1"><?php echo __('1.5 m','health');?></option>
							<option value="59.494"><?php echo __('1.51 m','health');?></option>
							<option value="59.888"><?php echo __('1.52 m','health');?></option>
							<option value="60.282"><?php echo __('1.53 m','health');?></option>
							<option value="60.676"><?php echo __('1.54 m','health');?></option>
							<option value="61.07"><?php echo __('1.55 m','health');?></option>
							<option value="61.464"><?php echo __('1.56 m','health');?></option>
							<option value="61.858"><?php echo __('1.57 m','health');?></option>
							<option value="62.252"><?php echo __('1.58 m','health');?></option>
							<option value="62.646"><?php echo __('1.59 m','health');?></option>
							<option value="63.04"><?php echo __('1.6 m','health');?></option>
							<option value="63.434"><?php echo __('1.61 m','health');?></option>
							<option value="63.828"><?php echo __('1.62 m','health');?></option>
							<option value="64.222"><?php echo __('1.63 m','health');?></option>
							<option value="64.616"><?php echo __('1.64 m','health');?></option>
							<option value="65.01"><?php echo __('1.65 m','health');?></option>
							<option value="65.404"><?php echo __('1.66 m','health');?></option>
							<option value="65.798"><?php echo __('1.67 m','health');?></option>
							<option value="66.192"><?php echo __('1.68 m','health');?></option>
							<option value="66.586"><?php echo __('1.69 m','health');?></option>
							<option value=" " selected="selected" value=""><?php echo __('meters','health');?></option>
							<option value="66.98"><?php echo __('1.7 m','health');?></option>
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
				<div class="col-md-12 col-lg-12 col-xs-12 c_form_left">
					<b><?php echo __('Select either from given below:','health');?></b>
				</div>
				<div class="col-md-12 col-lg-12 col-xs-12 clearfix c_form_right">
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Wrist circumference:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select size="1" name="wrist" class="c_select">
							<option value="2">2"</option>
							<option value="2.125">2 1/8"</option>
							<option value="2.25">2 1/4"</option>
							<option value="2.375">2 3/8"</option>
							<option value="2.5">2 1/2"</option>
							<option value="2.625">2 5/8"</option>
							<option value="2.75">2 3/4"</option>
							<option value="2.875">2 7/8"</option>
							<option value="3">3"</option>
							<option value="3.125">3 1/8"</option>
							<option value="3.25">3 1/4"</option>
							<option value="3.375">3 3/8"</option>
							<option value="3.5">3 1/2"</option>
							<option value="3.625">3 5/8"</option>
							<option value="3.75">3 3/4"</option>
							<option value="3.875">3 7/8"</option>
							<option value="4">4"</option>
							<option value="4.125">4 1/8"</option>
							<option value="4.25">4 1/4"</option>
							<option value="4.375">4 3/8"</option>
							<option value="4.5">4 1/2"</option>
							<option value="4.625">4 5/8"</option>
							<option value="4.75">4 3/4"</option>
							<option value="4.875">4 7/8"</option>
							<option value="5">5"</option>
							<option value="5.125">5 1/8"</option>
							<option value="5.25">5 1/4"</option>
							<option value="5.375">5 3/8"</option>
							<option value="5.5">5 1/2"</option>
							<option value="5.625">5 5/8"</option>
							<option value="5.75">5 3/4"</option>
							<option value="5.875">5 7/8"</option>
							<option value="6">6"</option>
							<option value="6.125">6 1/8"</option>
							<option value="6.25">6 1/4"</option>
							<option value="6.375">6 3/8"</option>
							<option value="6.5">6 1/2"</option>
							<option value="6.625">6 5/8"</option>
							<option value="6.75">6 3/4"</option>
							<option value="6.875">6 7/8"</option>
							<option value="7">7"</option>
							<option value="7.125">7 1/8"</option>
							<option value="7.25">7 1/4"</option>
							<option value="7.375">7 3/8"</option>
							<option value="7.5">7 1/2"</option>
							<option value="7.625">7 5/8"</option>
							<option value="7.75">7 3/4"</option>
							<option value="7.875">7 7/8"</option>
							<option value="8">8"</option>
							<option value="8.125">8 1/8"</option>
							<option value="8.25">8 1/4"</option>
							<option value="8.375">8 3/8"</option>
							<option value="8.5">8 1/2"</option>
							<option value="8.625">8 5/8"</option>
							<option value="8.75">8 3/4"</option>
							<option value="8.875">8 7/8"</option>
							<option value="9">9"</option>
							<option value="9.125">9 1/8"</option>
							<option value="9.25">9 1/4"</option>
							<option value="9.375">9 3/8"</option>
							<option value="9.5">9 1/2"</option>
							<option value="9.625">9 5/8"</option>
							<option value="9.75">9 3/4"</option>
							<option value="9.875">9 7/8"</option>
							<option value="10">10"</option>
							<option value="10.125">10 1/8"</option>
							<option value="10.25">10 1/4"</option>
							<option value="10.375">10 3/8"</option>
							<option value="10.5">10 1/2"</option>
							<option value="10.625">10 5/8"</option>
							<option value="10.75">10 3/4"</option>
							<option value="10.875">10 7/8"</option>
							<option value="11">11"</option>
							<option value="" selected="selected"><?php echo __('cm','health');?></option>
						</select>
					</label>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
					<?php echo __('Elbow breadth:','health');?>
				</div>
				<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
					<label class="c_select_label">
						<select size="1" name="elbow" class="c_select">
							<option value="1">1"</option>
							<option value="1.125">1 1/8"</option>
							<option value="1.25">1 1/4"</option>
							<option value="1.375">1 3/8"</option>
							<option value="1.5">1 1/2"</option>
							<option value="1.625">1 5/8"</option>
							<option value="1.75">1 3/4"</option>
							<option value="1.875">1 7/8"</option>
							<option value="2">2"</option>
							<option value="2.125">2 1/8"</option>
							<option value="2.25">2 1/4"</option>
							<option value="2.375">2 3/8"</option>
							<option value="2.5">2 1/2"</option>
							<option value="2.625">2 5/8"</option>
							<option value="2.75">2 3/4"</option>
							<option value="2.875">2 7/8"</option>
							<option value="3">3"</option>
							<option value="3.125">3 1/8"</option>
							<option value="3.25">3 1/4"</option>
							<option value="3.375">3 3/8"</option>
							<option value="3.5">3 1/2"</option>
							<option value="3.625">3 5/8"</option>
							<option value="3.75">3 3/4"</option>
							<option value="3.875">3 7/8"</option>
							<option value="4">4"</option>
							<option value="4.125">4 1/8"</option>
							<option value="4.25">4 1/4"</option>
							<option value="4.375">4 3/8"</option>
							<option value="4.5">4 1/2"</option>
							<option value="4.625">4 5/8"</option>
							<option value="4.75">4 3/4"</option>
							<option value="4.875">4 7/8"</option>
							<option value="" selected="selected"><?php echo __('cm','health');?></option>
						</select>
					</label>
				</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="fsz_calculator" />
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>