<?php $movies = array( "Neighbors" => 97, "The Amazing Spider-Man 2" => 142,"The Other Woman" => 109,"Chef" => 114 ,"Devil's Knot" => 114,"Godzilla" => 123, "The Immigrant" => 120, "Million Dollar Arm" => 124,"X-Men: Days of Future Past" => 131, "Blended" => 117, "Maleficent" => 97, "A Million Ways to Die in the West" => 116,"Edge of Tomorrow" => 113, "The Fault in Our Stars" => 125, "How to Train Your Dragon 2" => 102, "Jimi: All Is By My Side" => 118, "Lullaby" => 117,"22 Jump Street" => 112, "Think Like a Man Too" => 106, "Jersey Boys" => 134, "Third Person" => 137, "Transformers: Age of Extinction" => 157,"Snowpiercer" => 126, "Deliver Us From Evil" => 118, "Earth to Echo" => 91,"Tammy" => 96,"Dawn of the Planet of the Apes" => 130, "Land Ho!" => 95,"The Purge: Anarchy" => 104,"I Origins" => 113,"Mood Indigo" => 131,"Very Good Girls" => 91, "Begin Again" => 104, "Life Itself" => 115, "And So It Goes..." => 94, "Boyhood" => 166, "A Long Way Down" => 96, "Wish I Was Here" => 120,"Guardians of the Galaxy" =>  122,"Calvary" =>  100,"What If" =>  102,"Let's Be Cops" =>  104);?>
<div class="switch-change-cont">
	<div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch"><?php echo __('Imperial','health');?></span>
		<span class="btn btn-imperial " data-target="#metric-switch"><?php echo __('Metric','health');?></span>
	</div>
	<div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form method="POST" action="movie_calculator" class="form-horizontal clearfix" id="calformImp">
			<div class="calc_quest clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your age:','health');?> 
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input min="18" max="95" name="age" required="required" type="number" class="c_input" placeholder="<?php echo __('Years','health');?>" /> 
			</div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select your gender:','health');?>
			</div>
            <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
                <label class="c_select_label">
					<select name="sex" size="1" class="c_select" required >
						<option selected="selected" value=""><?php echo __('Select Gender','health');?></option>
						<option value="m"><?php echo __('Male','health');?></option>
						<option value="f"><?php echo __('Female','health');?></option>
					</select>
				</label> 
			</div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Enter your weight: ','health');?>
			</div>
            <div id="weight" class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input min="65" max="850" name="weight" required="required" type="number" class="c_input" placeholder="<?php echo __('Pounds','health');?>" />
			</div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				<?php echo __('Select Movie:','health');?>
			</div>
            <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select class="c_select" size="1" name="movie" required>
						<option value="" selected="selected"><?php echo __('Select Movie','health');?></option> 
					<?php foreach($movies as $movie=>$value){?>
						<option value="<?php echo $value;?>" ><?php _e($movie, 'health');?></option>
                       <?php }?>
					</select>
				</label>
			</div>
            <div class="clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
			<input value="<?php echo __('Calculate','health');?>" name="submit" class="btn btn-imperial  active" id="submit" autocomplete="off" type="submit" border="0" align="right"/>
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result... ','health');?></div>
				<input name="measure" value="imperial" autocomplete="off" type="hidden"/>
				<input name="action" value="movie_calculator" autocomplete="off" type="hidden"/>
			</div>
            <div class="clearfix"></div>
		</form>   
	</div>
	<div class="clearfix"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		<form method="POST" action="movie_calculator" class="form-horizontal   clearfix" id="calformMetric">
			<div class="calc_quest"></div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
                           <?php echo __(' Enter your age:','health');?>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
                            <input min="18" max="95" name="age" required="required" type="number" class="c_input" placeholder="<?php echo __('Years','health');?>" />
                        </div>
                         <div class="clearfix"></div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
                            <?php echo __('Select your gender:','health');?>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
                            <label class="c_select_label">
                                <select name="sex" size="1" class="c_select" required>
                                    <option selected="selected"><?php echo __('Select Gender','health');?></option>
                                    <option value="m"><?php echo __('Male','health');?></option>
                                    <option value="f"><?php echo __('Female','health');?></option>
                                </select>
                            </label>
                        </div>
                         <div class="clearfix"></div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
                           <?php echo __(' Enter your weight:','health');?>
                        </div>
                        <div id="weight" class="col-md-12 col-lg-6 col-xs-12 c_form_right">
                            <input min="22" max="250" name="weight" required="required" type="number" class="c_input" placeholder="<?php echo __('Killo','health');?>" />
                        </div>
                         <div class="clearfix"></div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
                           <?php echo __(' Select Movie:','health');?>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
                            <label class="c_select_label">
                                <select class="c_select" size="1" name="movie" required>
                                    <option value="" selected="selected"><?php echo __('Select Movie','health');?></option>
                                   <?php foreach($movies as $movie=>$value){?>
						<option value="<?php echo $value;?>" ><?php _e($movie, 'health');?></option>
                       <?php }?>
                                </select>
                            </label>
                        </div>                        
                       <div class="clearfix"></div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input value="<?php echo __('Calculate','health');?>" name="submit" class="btn btn-imperial  active" id="submit" autocomplete="off" type="submit" border="0" align="right"/>
				<div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> <?php echo __('Calculating Result...','health');?> </div>
				<input name="measure" value="metric" autocomplete="off" type="hidden"/>
				<input name="action" value="movie_calculator" autocomplete="off" type="hidden"/>
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>

