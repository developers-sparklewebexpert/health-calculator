<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" action="cbc_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required="">
						<option selected="selected" value=""><?php echo __('Select Gender','health');?></option>
						<option value="Male"><?php echo __('Male','health');?></option>
						<option value="Female"><?php echo __('Female','health');?></option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your age:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input placeholder="<?php echo __('Years','health');?>" min="18" name="age" required="required" class="c_input" max="95" type="number">
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
				<?php echo __('Enter your weight:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="weight" required="required" min="65" placeholder="<?php echo __('Pounds','health');?>" class="c_input" max="695" type="number">
			</div>
			<div class="clearfix"></div><hr>
			<div class="col-md-12 col-lg-6 col-xs-12">
				<h3><center><?php echo __('Activity','health');?></center></h3>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12">
				<h3><center><?php echo __('Minutes','health');?></center></h3>
			</div><div class="clearfix"></div>
                        <hr><br>
            <div class="external-opt imperial clearfix">
				<a data-id="#imp-ar" class="expand_link"><i class="fa fa-minus fa-1x"></i><?php echo __('Around the house','health');?></a>
				<div id="imp-ar" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Brush teeth','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T107" min="1" name="T107" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Carrying an Infant','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T143" value="" name="T143" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Chop Wood','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T39" value="" id="imperial_T39" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cleaning Gutters','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T158" min="1" name="T158" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cleaning windows','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T173" min="1" id="imperial_T173" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Clearing light brush, thinning garden','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T172" value="" id="imperial_T172" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cooking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T115" min="1" name="T115" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Digging, spading, composting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T176" min="1" name="T176" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dusting or polishing furniture','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T177" min="1" name="T177" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Garden','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T40" min="1" name="T40" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Gardening - container','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T178" min="1" id="imperial_T178" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Gardening with heavy power tools','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T197" value="" id="imperial_T197" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Housework','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T41" min="1" name="T41" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Ironing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T108" min="1" name="T108" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
					<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Laundry','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T194" min="1" name="T194" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Loading/Unloading a car','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T146" value="" id="imperial_T146" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Mopping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T109" min="1" name="T109" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Mowing - push','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T42" min="1" id="imperial_T42" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Mowing - riding','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T198" value="" id="imperial_T198" min="1" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Packing Suitcase','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T159" value="" id="imperial_T159" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Push stroller with child','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T150" min="1" id="imperial_T150" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Putting away Groceries','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T154" min="1" id="imperial_T154" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Raking lawn','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T75" value="" id="imperial_T75" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rearranging Furniture','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T112" min="1" name="T112" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Scrubbing floors','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T188" min="1" name="T188" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Shovel Snow','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T46" min="1" name="T46" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Showering','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T119" value="" name="T119" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walk / run play with kids','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T76" min="1" name="T76" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Washing car','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T113" min="1" name="T113" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Washing dishes','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T114" min="1" name="T114" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Yard work','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T180" min="1" name="T180" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#imp-exer"class="expand_link"><i class="fa fa-minus fa-1x"></i><?php echo __('Exercise','health');?></a>
				<div id="imp-exer" class="expand_cont well well-sm" >
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Aerobics - high impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T2" value="" id="imperial_T2" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Aerobics - low impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T1" min="1" id="imperial_T1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Ashtanga yoga','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T129" value="" name="T129" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bikram / hot yoga','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T132" min="1" name="T132" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Calisthenics / exercise - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T61" value="" id="imperial_T61" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Calisthenics / exercise - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T62" min="1" id="imperial_T62" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Circuit training - cross fit','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="imperial_T174" value="" name="T174" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cycling / cycling 12-14 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T166" value="" name="T166" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cycling / cycling 14-16 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T167" min="1" name="T167" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Elliptical trainer','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T105" value="" id="imperial_T105" min="1" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hatha yoga','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T128" min="1" id="imperial_T128" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Jogging','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T74" min="1" name="T74" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Jumping jacks - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T126" min="1" name="T126" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Jumping jacks - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T127" value="" name="T127" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Lifting weights - general','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T124" min="1" name="T124" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Lifting weights - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T125" value="" id="imperial_T125" min="1" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Pilates Advanced','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T135" value="" id="imperial_T135" min="1" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Pilates Beginner','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T133" value="" id="imperial_T133" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Pilates Intermediate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
								<input min="1" id="imperial_T134" value="" name="T134" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Power yoga','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T130" min="1" name="T130" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Pushups - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T138" value="" id="imperial_T138" min="1" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Pushups - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T139" min="1" name="T139" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rope jumping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T77" min="1" id="imperial_T77" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rowing machine - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T3" min="1" name="T3" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rowing machine - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T4" min="1" id="imperial_T4" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 10 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T6" value="" name="T6" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 12 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T7" value="" name="T7" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 5 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T5" value="" id="imperial_T5" min="1" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 6 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T78" min="1" id="imperial_T78" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('>Running 7 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T79" min="1" name="T79" value="" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 8 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T80" min="1" name="T80" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Situps / crunches - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T136" min="1" id="imperial_T136" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Situps / crunches - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T137" min="1" name="T137" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Ski machine','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T13" value="" name="T13" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Spinning - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T168" value="" name="T168" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Spinning - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T169" min="1" name="T169" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stair Step Machine','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T8" min="1" id="imperial_T8" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stationary bicycle / spinning - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T9" value="" name="T9" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stationary bicycle / spinning - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T10" min="1" name="T10" value="" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Step aerobics - high impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T12" min="1" id="imperial_T12" class="c_input" max="1440" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Step aerobics - low impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T11" min="1" name="T11" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stretching','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T81" value="" name="T81" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Vinyasa yoga','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T131" min="1" name="T131" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking 2 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T14" min="1" id="imperial_T14" max="1440" class="c_input" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking 3 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T15" min="1" name="T15" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking 4 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T16" min="1" id="imperial_T16" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Water Aerobics','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T83" min="1" id="imperial_T83" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Zumba','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T165" min="1" name="T165" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#imp-mis" class="expand_link"><i class="fa fa-minus fa-1x"></i><?php echo __('Miscellaneous','health');?></a>
				<div id="imp-mis" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Driving','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T116" min="1" id="imperial_T116" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Elder care, Disabled adult','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T148" min="1" name="T148" value="" type="number">
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Kissing, hugging','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T185" value="" id="imperial_T185" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Organizing a room','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="imperial_T183" value="" name="T183" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Playing guitar','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T117" min="1" name="T117" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Playing piano','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T111" value="" name="T111" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Reading','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T118" value="" id="imperial_T118" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Riding in a bus, car, train, subway','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T187" value="" name="T187" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sex - foreplay','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="imperial_T43" value="" name="T43" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sex - intercourse','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T44" min="1" name="T44" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Shopping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T45" min="1" id="imperial_T45" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sitting / resting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T47" value="" id="imperial_T47" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sleeping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T48" value="" name="T48" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Standing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T120" min="1" id="imperial_T120" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Studying','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T121" min="1" name="T121" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Talking on phone','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T122" min="1" name="T122" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Touring/Traveling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T147" min="1" id="imperial_T147" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Using Crutches','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T160" min="1" id="imperial_T160" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking - up stairs','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T82" min="1" id="imperial_T82" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking the dog','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T200" min="1" name="T200" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Writing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T123" min="1" id="imperial_T123" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#imp-sport" class="expand_link"><i class="fa fa-minus fa-1x"></i><?php echo __('Sports &amp; Recreation','health');?></a>
				<div id="imp-sport" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Archery','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T49" min="1" name="T49" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Backpacking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T50" min="1" name="T50" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Backpacking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T142" min="1" name="T142" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Badminton','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T51" value="" id="imperial_T51" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball - officiating','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T52" value="" name="T52" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball - shooting baskets','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T53" min="1" name="T53" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball 1/2 court','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T19" min="1" id="imperial_T19" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball full court','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T20" min="1" id="imperial_T20" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling / biking - mountain','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T84" min="1" name="T84" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling / cycling 12-14 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T21" min="1" id="imperial_T21" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling / cycling 14-16 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T22" value="" name="T22" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Billiards','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T55" min="1" name="T55" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bowling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T56" min="1" id="imperial_T56" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Boxing - in ring','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T57" min="1" name="T57" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Boxing - punching bag','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T58" value="" name="T58" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Canoeing 2 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T23" min="1" id="imperial_T23" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Canoeing 4 mph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T24" value="" id="imperial_T24" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Card playing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T144" value="" id="imperial_T144" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Casino gambling - standing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T199" min="1" id="imperial_T199" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Coaching - team sports','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T85" value="" id="imperial_T85" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cricket','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T59" min="1" name="T59" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Croquet','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T60" value="" id="imperial_T60" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cycling - leisure','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="imperial_T54" value="" name="T54" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - aerobic, ballet, modern','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T73" value="" name="T73" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - ballroom slow','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T64" min="1" name="T64" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - disco, folk, step, line, polka, country','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T191" min="1" id="imperial_T191" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - ethnic, cultural','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T192" min="1" name="T192" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - fast ballroom','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T63" min="1" id="imperial_T63" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - tap','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T193" min="1" id="imperial_T193" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Fencing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T65" value="" id="imperial_T65" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Fishing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T66" value="" name="T66" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Football - full contact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T25" value="" id="imperial_T25" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Football - playing catch','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T86" min="1" name="T86" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Football - touch','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T26" value="" name="T26" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Frisbee playing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T87" min="1" id="imperial_T87" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Frisbee, Ultimate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T157" min="1" id="imperial_T157" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Golf - carry clubs','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T27" value="" name="T27" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Golf - cart','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T28" value="" name="T28" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Golf - pull cart','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T164" min="1" id="imperial_T164" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Handball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T67" value="" name="T67" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hang Gliding','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T141" value="" id="imperial_T141" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hiking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T68" min="1" name="T68" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hockey','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T69" min="1" id="imperial_T69" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hopscotch/Dodge ball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T152" min="1" name="T152" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horseback riding - galloping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T91" value="" id="imperial_T91" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horseback riding - trotting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T90" min="1" name="T90" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horseback riding - walking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T89" min="1" name="T89" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hunting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T70" value="" name="T70" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Judo - martial arts','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T71" value="" id="imperial_T71" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Jumping on trampoline','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T190" value="" id="imperial_T190" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Kayaking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T72" value="" id="imperial_T72" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Lacrosse','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T163" min="1" id="imperial_T163" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Marching band','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T181" min="1" name="T181" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Paddle board - standing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T184" value="" name="T184" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Paddleboat','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T92" value="" id="imperial_T92" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Playing board games','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T145" value="" name="T145" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Racquetball casual','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T93" value="" name="T93" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Racquetball competitive','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T94" min="1" id="imperial_T94" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Repelling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T106" value="" name="T106" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rock climbing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T104" min="1" name="T104" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rugby','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T162" value="" id="imperial_T162" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Scuba diving','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T189" min="1" name="T189" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skateboarding','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T95" min="1" name="T95" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skating - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T29" min="1" id="imperial_T29" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skating - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T30" min="1" id="imperial_T30" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skiing - cross country','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="imperial_T31" value="" name="T31" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skiing - downhill','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T32" value="" name="T32" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skiing - water','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T96" value="" name="T96" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sledding, toboganning','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T97" value="" name="T97" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Snorkeling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T161" value="" id="imperial_T161" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Snowmobiling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T98" min="1" id="imperial_T98" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Soccer casual','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T99" value="" id="imperial_T99" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Soccer competitive','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T100" min="1" name="T100" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Softball or baseball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T101" min="1" id="imperial_T101" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Surfing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T102" min="1" id="imperial_T102" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Swimming - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T33" min="1" id="imperial_T33" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Swimming - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T34" value="" name="T34" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Table tennis','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T103" value="" name="T103" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tennis - doubles','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="imperial_T36" min="1" name="T36" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tennis - singles','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T35" min="1" id="imperial_T35" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Volleyball - competitive','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T37" min="1" name="T37" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Volleyball - recreation','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="imperial_T38" value="" name="T38" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#imp-wr" class="expand_link"><i class="fa fa-minus fa-1x"></i><?php echo __('Work related','health');?></a>
				<div id="imp-wr" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Carpentry/Workshop','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T153" min="1" id="imperial_T153" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Chef - cooking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T175" value="" id="imperial_T175" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Construction/Remodeling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T149" min="1" id="imperial_T149" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Custodial work - light','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T170" value="" name="T170" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Custodial work - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T171" min="1" id="imperial_T171" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Farming/Feeding livestock','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T151" value="" id="imperial_T151" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hairstyling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T140" min="1" id="imperial_T140" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hanging sheetrock','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T179" min="1" name="T179" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horse grooming','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T88" value="" id="imperial_T88" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Laying or removing carpet','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T195" min="1" id="imperial_T195" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Massage therapist','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T182" value="" name="T182" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Painting house','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="imperial_T110" value="" name="T110" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Plumbing activities','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="imperial_T186" min="1" name="T186" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Roofing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T196" min="1" id="imperial_T196" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tailoring, Cutting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="imperial_T155" min="1" name="T155" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Weaving cloth','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T156" value="" id="imperial_T156" min="1" type="number">
						</div><div class="clearfix"></div>
					</div><div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="hidden" value="imperial" name="measure"><input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="imperial" />
				<input type="hidden" name="action" value="cbc_calculator" />
			</div>
		</form>
	</div>
	<div class="clearfix"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		<form  method="POST" action="cbc_calculator" class="form-horizontal   clearfix" id="calformMetric">
			<div class="calc_quest"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select your gender:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required="">
						<option selected="selected" value=""><?php echo __('Select Gender','health');?></option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your age:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input placeholder="<?php echo __('Years','health');?>" min="18" name="age" required="required" class="c_input" max="95" type="number">
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
				<?php echo __('Enter your weight:','health');?>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input max="395" class="c_input" min="30" placeholder="<?php echo __('kilos','health');?>" required="required" name="weight" type="number">
			</div>
			<div class="clearfix"></div><hr>
			<div class="col-md-12 col-lg-6 col-xs-12">
				<h3><center><?php echo __('Activity','health');?></center></h3>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12">
				<h3><center><?php echo __('Minutes','health');?></center></h3>
			</div><div class="clearfix"></div><hr><br>
            <div class="external-opt metric clearfix">
				<a data-id="#met-ar-t-h" class="expand_link"><i class="fa fa-minus fa-1x "></i><?php echo __('Around the house','health');?></a>
				<div id="met-ar-t-h" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Brush teeth','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T107" value="" id="metric_T107" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Packing Suitcase','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T143" value="" name="T143" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Chop Wood','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T39" min="1" name="T39" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cleaning Gutters','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T158" value="" id="metric_T158" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cleaning windows','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T173" min="1" id="metric_T173" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Clearing light brush, thinning garden','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T172" value="" id="metric_T172" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cooking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T115" value="" id="metric_T115" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Digging, spading, composting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T176" min="1" name="T176" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dusting or polishing furniture','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T177" min="1" name="T177" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Garden','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T40" min="1" name="T40" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Gardening - container','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T178" value="" id="metric_T178" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Gardening with heavy power tools','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T197" min="1" id="metric_T197" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('>Housework','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T41" min="1" name="T41" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Ironing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T108" min="1" name="T108" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Laundry','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T194" min="1" name="T194" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rugby','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T146" min="1" id="metric_T146" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Mopping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T109" min="1" id="metric_T109" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Mowing - push','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T42" min="1" id="metric_T42" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Mowing - riding','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T198" min="1" id="metric_T198" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Packing Suitcase','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T159" min="1" name="T159" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Push stroller with child','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T150" min="1" name="T150" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Putting away Groceries','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T154" value="" id="metric_T154" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Raking lawn','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T75" value="" id="metric_T75" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rearranging Furniture','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T112" value="" name="T112" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Scrubbing floors','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T188" min="1" id="metric_T188" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Shovel Snow','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T46" min="1" id="metric_T46" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Showering','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T119" value="" name="T119" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walk/run play with kids','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T76" min="1" id="metric_T76" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Washing car','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T113" value="" name="T113" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Washing dishes','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T114" value="" name="T114" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Yard work','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T180" value="" id="metric_T180" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#met-exe"class="expand_link">	<i class="fa fa-minus fa-1x"></i><?php echo __('Exercise','health');?></a>
				<div id="met-exe" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Aerobics - high impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T2" min="1" id="metric_T2" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Aerobics - low impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T1" min="1" name="T1" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Playing board games','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T129" min="1" id="metric_T129" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Elder care, Disabled adult','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T132" value="" name="T132" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Calisthenics - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T61" value="" name="T61" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Calisthenics - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T62" value="" id="metric_T62" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Circuit training - cross fit','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T174" value="" id="metric_T174" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cycling 19.2-22.4 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T166" value="" name="T166" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cycling 22.4-25.6 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T167" value="" id="metric_T167" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Elliptical trainer','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T105" min="1" name="T105" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Card playing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T128" min="1" name="T128" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Jogging','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T74" value="" name="T74" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Backpacking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T126" value="" id="metric_T126" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Carrying an Infant','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T127" min="1" id="metric_T127" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hairstyling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T124" min="1" id="metric_T124" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hang Gliding','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T125" value="" name="T125" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Farming/Feeding livestock','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T135" value="" id="metric_T135" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Construction/Remodeling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T133" value="" id="metric_T133" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Push stroller with child','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T134" min="1" name="T134" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Loading/Unloading a car','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T130" value="" id="metric_T130" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Putting away Groceries','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T138" value="" id="metric_T138" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tailoring, Cutting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T139" value="" name="T139" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rope jumping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T77" value="" id="metric_T77" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rowing Machine - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T3" value="" name="T3" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					 </div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rowing Machine - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T4" min="1" name="T4" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 16 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T6" value="" name="T6" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 19.2 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T7" min="1" id="metric_T7" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 8 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T5" value="" name="T5" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 9.6 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T78" min="1" name="T78" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 11.2 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T79" min="1" name="T79" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Running 12.8 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T80" value="" id="metric_T80" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hopscotch/Dodge ball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T136" value="" id="metric_T136" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Carpentry/Workshop','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T137" min="1" name="T137" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Ski Machine','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T13" min="1" name="T13" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Spinning - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T168" value="" id="metric_T168" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Spinning - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T169" value="" id="metric_T169" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stair Step Machine','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T8" min="1" name="T8" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stationary Bicycle - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T9" value="" id="metric_T9" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stationary Bicycle - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T10" value="" name="T10" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Step Aerobics - high impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T12" min="1" id="metric_T12" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Step Aerobics - low impact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T11" value="" id="metric_T11" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Stretching','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T81" value="" id="metric_T81" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Touring/Traveling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T131" min="1" name="T131" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking 3.2 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T14" value="" name="T14" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking 4.8 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T15" min="1" name="T15" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking 6.4 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T16" min="1" name="T16" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Water Aerobics','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T83" value="" id="metric_T83" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Zumba','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T165" min="1" name="T165" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#met-mis" class="expand_link"><i class="fa fa-minus fa-1x"></i><?php echo __('Miscellaneous','health');?></a>
				<div id="met-mis" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Driving','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T116" value="" name="T116" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Elder care, Disabled adult','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T148" min="1" id="metric_T148" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Kissing, hugging','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T185" value="" name="T185" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Organizing a room','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T183" min="1" id="metric_T183" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Playing Guitar','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T117" min="1" id="metric_T117" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Playing Piano','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T111" min="1" name="T111" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Reading','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T118" value="" name="T118" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Riding in a bus, car, train, subway','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T187" min="1" id="metric_T187" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sex - foreplay','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T43" value="" name="T43" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sex - intercourse','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T44" value="" name="T44" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Shopping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T45" min="1" name="T45" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sitting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T47" value="" id="metric_T47" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sleeping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T48" min="1" id="metric_T48" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Standing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T120" value="" id="metric_T120" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Studying','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T121" value="" id="metric_T121" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Talking on phone','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T122" min="1" name="T122" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Lacrosse','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T147" min="1" name="T147" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Using Crutches','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T160" value="" id="metric_T160" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking - up stairs','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T82" min="1" id="metric_T82" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Walking the dog','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T200" value="" id="metric_T200" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Writing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T123" value="" id="metric_T123" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#met-sport" class="expand_link"><i class="fa fa-minus fa-1x "></i><?php echo __('Sports &amp; Recreation','health');?></a>
				<div id="met-sport" class="expand_cont well well-sm ">
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Archery','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T49" value="" name="T49" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Backpacking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T50" min="1" name="T50" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cleaning Gutters','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T142" min="1" id="metric_T142" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Badminton','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T51" value="" name="T51" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball - officiating ','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T52" min="1" name="T52" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball - shooting baskets','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T53" min="1" name="T53" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball 1/2 court','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T19" value="" name="T19" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Basketball full court','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T20" value="" id="metric_T20" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling - Mountain','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T84" min="1" name="T84" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling 19.2-22.4 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T21" value="" name="T21" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling 22.4-25.6 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T22" min="1" id="metric_T22" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Billiards','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T55" min="1" name="T55" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bowling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T56" min="1" id="metric_T56" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Boxing - in ring','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T57" min="1" id="metric_T57" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Boxing - punching bag','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T58" min="1" name="T58" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Canoeing 3.2 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T23" min="1" name="T23" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Canoeing 6.4 kph','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T24" value="" name="T24" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Using Crutches','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T144" value="" id="metric_T144" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Casino gambling - standing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T199" min="1" id="metric_T199" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Coaching - team sports','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T85" min="1" id="metric_T85" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Cricket','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T59" min="1" id="metric_T59" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Croquet','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T60" min="1" name="T60" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Bicycling - leisure','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T54" value="" id="metric_T54" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - aerobic, ballet, modern','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T73" value="" id="metric_T73" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - ballroom slow','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T64" value="" name="T64" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - disco, folk, step, line, polka, country','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T191" value="" id="metric_T191" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - ethnic, cultural','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T192" min="1" name="T192" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - fast ballroom','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T63" min="1" id="metric_T63" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Dancing - tap','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T193" value="" id="metric_T193" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Fencing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T65" value="" name="T65" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Fishing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T66" min="1" id="metric_T66" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Football - full contact','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T25" min="1" id="metric_T25" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Football - playing catch','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T86" min="1" name="T86" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Football - touch','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T26" min="1" id="metric_T26" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Frisbee playing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T87" min="1" name="T87" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Frisbee, Ultimate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T157" value="" id="metric_T157" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Golf - carry clubs','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T27" value="" name="T27" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Golf - cart','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T28" min="1" id="metric_T28" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Golf - pull cart','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T164" value="" id="metric_T164" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Handball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T67" min="1" id="metric_T67" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Frisbee, Ultimate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" value="" name="T141" min="1" id="metric_T141" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hiking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T68" min="1" id="metric_T68" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hockey','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T69" min="1" name="T69" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hopscotch/Dodge ball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T152" min="1" id="metric_T152" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horseback riding - galloping','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T91" value="" id="metric_T91" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horseback riding - trotting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T90" value="" id="metric_T90" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horseback riding - walking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T89" value="" name="T89" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hunting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T70" value="" id="metric_T70" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Judo - martial arts','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T71" value="" name="T71" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Jumping on trampoline','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T190" value="" id="metric_T190" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Kayaking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T72" min="1" name="T72" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Lacrosse','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T163" value="" id="metric_T163" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Marching band','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T181" value="" name="T181" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Paddle board - standing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T184" value="" name="T184" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Paddleboat','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T92" value="" id="metric_T92" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Snorkeling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T145" min="1" name="T145" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Racquetball casual','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T93" min="1" name="T93" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Racquetball competitive','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T94" min="1" name="T94" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Repelling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T106" min="1" id="metric_T106" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rock climbing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T104" min="1" name="T104" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Rugby','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T162" value="" name="T162" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Scuba diving','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T189" value="" name="T189" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skateboarding','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" name="T95" value="" id="metric_T95" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skating - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T29" value="" id="metric_T29" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skating - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T30" min="1" id="metric_T30" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skiing - cross country','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T31" min="1" name="T31" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skiing - downhill','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T32" min="1" name="T32" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Skiing - water','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T96" value="" name="T96" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Sledding, toboganning','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T97" value="" id="metric_T97" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Snorkeling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T161" value="" id="metric_T161" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Snowmobiling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T98" min="1" name="T98" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Soccer casual','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T99" min="1" id="metric_T99" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Soccer competitive','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T100" min="1" name="T100" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Softball or baseball','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T101" min="1" id="metric_T101" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Surfing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T102" value="" id="metric_T102" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Swimming - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T33" min="1" id="metric_T33" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Swimming - vigorous','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T34" value="" id="metric_T34" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Table tennis','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T103" min="1" name="T103" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tennis - doubles','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T36" value="" id="metric_T36" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tennis - singles','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T35" min="1" name="T35" value="" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Volleyball - competitive','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T37" value="" name="T37" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Volleyball - recreation','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T38" value="" id="metric_T38" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<a data-id="#met-wr" class="expand_link"><i class="fa fa-minus fa-1x "></i><?php echo __('Work related','health');?></a>
				<div id="met-wr" class="expand_cont well well-sm " >
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Carpentry/Workshop','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T153" value="" id="metric_T153" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Chef - cooking','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T175" value="" name="T175" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Construction/Remodeling','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T149" min="1" id="metric_T149" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Custodial work - light','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T170" value="" name="T170" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Custodial work - moderate','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T171" value="" id="metric_T171" min="1" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Farming/Feeding livestock','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" min="1" id="metric_T151" value="" name="T151" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Weaving cloth','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input value="" name="T140" min="1" id="metric_T140" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Hanging sheetrock','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input name="T179" value="" id="metric_T179" min="1" class="c_input" max="1440" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Horse grooming','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input id="metric_T88" min="1" name="T88" value="" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Laying or removing carpet','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" min="1" id="metric_T195" value="" name="T195" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Massage therapist','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input min="1" id="metric_T182" value="" name="T182" max="1440" class="c_input" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Painting House','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" id="metric_T110" min="1" name="T110" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Plumbing activities','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" value="" name="T186" min="1" id="metric_T186" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Roofing','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input max="1440" class="c_input" id="metric_T196" min="1" name="T196" value="" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Tailoring, Cutting','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T155" value="" id="metric_T155" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="col-md-12 col-lg-12 col-xs-12">
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_left"><?php echo __('Weaving cloth','health');?></div>
						<div class="col-md-6 col-lg-6 col-xs-12 c_form_right">
							<input class="c_input" max="1440" name="T156" value="" id="metric_T156" min="1" type="number">
						</div><div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="cbc_calculator" />
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>
