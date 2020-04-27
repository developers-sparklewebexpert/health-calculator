<div class="switch-change-cont">
    <div id="switch-version" data-toggle="buttons" class=" center">
		<span class="btn btn-imperial  active" data-target="#imperial-switch">Imperial</span>
		<span class="btn btn-imperial " data-target="#metric-switch">Metric</span>
	</div>
    <div class="switch-imperial-cont clearfix formimperial form-switch" id="imperial-switch">
		<form  method="POST" id="calformImp" action="bac_calculator" class="form-horizontal">
			<div class="calc_quest"></div>
			<!--div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter your age:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="age" class="c_input" type="number" placeholder="Years" required min="18" max="95"  />
			</div-->
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter your gender:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required>
						<option selected="selected"></option>
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter your weight:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="weight" class="c_input" placeholder="Pounds" required type="number" min="65" max="850" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Select your beverage:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select class="c_select" size="1" name="type" required>
						<option value="airline miniature bottle||airline miniature bottles||.7">Airline miniature bottle</option>
						<option value="pint of ale||pints of ale||.81">Ale (pint)</option>
						<option value="beer||beers||.54">Beer (12 oz)</option>
						<option value="beer||beers||.72">Beer (16 oz)</option>
						<option value="light beer||light beers||.44">Beer - Light (12 oz)</option>
						<option value="light beer||light beers||.59">Beer - Light (16 oz)</option>
						<option value="reduced alcohol beer||reduced alcohol beers||.28">Beer (reduced alcohol)</option>
						<option value="snifter of brandy||snifters of brandy||.9">Brandy (snifter)</option>
						<option value="martini||martinis||1">Dry martini</option>
						<option value="drink of gin||drinks of gin||.645">Gin (1.5 oz)</option>
						<option value="higball||highballs||.6">Highball</option>
						<option value="malt liquor||malt liqours||.71">Malt Liquor (12 oz)</option>
						<option value="manhattan||manhattans||1.15">Manhattan</option>
						<option value="pint of port||pints of port||1.1">Porter (pint)</option>
						<option value="drink of rum||drinks of rum||.645">Rum (1.5 oz)</option>
						<option value="drink of sake||drinks of sake||.8">Sake (1.5 oz)</option>
						<option value="pint of stout||pints of stout||1.3">Stout (pint)</option>
						<option value="drink of tequila||drinks of tequila||.645">Tequila (1.5 oz)</option>
						<option value="drink of vodka||drinks of vodka||.645">Vodka (1.5 oz)</option>
						<option value="drink of whiskey||drinks of whiskey||.645">Whiskey (1.5 oz)</option>
						<option value="half a glass of wine||half glasses of wine||.55">Wine (half a large glass)</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter the number of those consumed:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input class="c_input" name="number" placeholder="Number of Drinks" required type="number" min="1" max="20" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter the amount of time since drinking began:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="time" class="c_input" placeholder="Hours" required type="number" min=".5" max="24" step=".25" />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
                <div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> Calculating Result... </div>
				<input type="hidden" name="measure" value="imperial" />
				<input type="hidden" name="action" value="bac_calculator" />
			</div>
		</form>
	</div>
	<div class="clear"></div>
	<div class="switch-metric-cont hide clearfix formmetric form-switch" id="metric-switch">
		<form  method="POST" action="bac_calculator" class="form-horizontal clearfix" id="calformMetric">
			<!--div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter your age:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="age" class="c_input" type="number" placeholder="Years" required min="18" max="95"  />
			</div-->
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter your gender:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select name="sex" size="1" class="c_select" required>
						<option selected="selected"></option>
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter your weight:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="number" name="weight" class="c_input" placeholder="kilo" type="number" min="30" max="695" required />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Select your beverage:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<label class="c_select_label">
					<select class="c_select" size="1" name="type" required>
						<option value="airline miniature bottle||airline miniature bottles||.7">Airline miniature bottle</option>
						<option value="pint of ale||pints of ale||.81">Ale (pint)</option>
						<option value="beer||beers||.54">Beer (12 oz)</option>
						<option value="beer||beers||.72">Beer (16 oz)</option>
						<option value="light beer||light beers||.44">Beer - Light (12 oz)</option>
						<option value="light beer||light beers||.59">Beer - Light (16 oz)</option>
						<option value="reduced alcohol beer||reduced alcohol beers||.28">Beer (reduced alcohol)</option>
						<option value="snifter of brandy||snifters of brandy||.9">Brandy (snifter)</option>
						<option value="martini||martinis||1">Dry martini</option>
						<option value="drink of gin||drinks of gin||.645">Gin (1.5 oz)</option>
						<option value="higball||highballs||.6">Highball</option>
						<option value="malt liquor||malt liqours||.71">Malt Liquor (12 oz)</option>
						<option value="manhattan||manhattans||1.15">Manhattan</option>
						<option value="pint of port||pints of port||1.1">Porter (pint)</option>
						<option value="drink of rum||drinks of rum||.645">Rum (1.5 oz)</option>
						<option value="drink of sake||drinks of sake||.8">Sake (1.5 oz)</option>
						<option value="pint of stout||pints of stout||1.3">Stout (pint)</option>
						<option value="drink of tequila||drinks of tequila||.645">Tequila (1.5 oz)</option>
						<option value="drink of vodka||drinks of vodka||.645">Vodka (1.5 oz)</option>
						<option value="drink of whiskey||drinks of whiskey||.645">Whiskey (1.5 oz)</option>
						<option value="half a glass of wine||half glasses of wine||.55">Wine (half a large glass)</option>
					</select>
				</label>
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter the number of those consumed:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input class="c_input" name="number" placeholder="Number of Drinks" required type="number" min="1" max="20"  />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
				Enter the amount of time since drinking began:
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input name="time" class="c_input" placeholder="Hours" required type="number" min=".5" max="24"  />
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_left">
			</div>
			<div class="col-md-12 col-lg-6 col-xs-12 c_form_right">
				<input type="submit" border="0" align="right" value="Calculate" name="submit" class="btn btn-imperial  active" id="submit">
                <div class="submit-loader hide text-center text-success"><i class="fa fa-refresh fa-spin"></i> Calculating Result... </div>
				<input type="hidden" name="measure" value="metric" />
				<input type="hidden" name="action" value="bac_calculator" />
			</div>
			<div class="clear"></div>
		</form>
	</div>
</div>