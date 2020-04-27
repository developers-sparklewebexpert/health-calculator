jQuery(document).ready(function(){
/* #################----- switch button ----################# */
 jQuery('#switch-version span').on('click',function(){
    var target=jQuery(this).attr('data-target');
jQuery('#switch-version span').removeClass('active');
jQuery(this).addClass('active');
    jQuery('.form-switch').addClass('hide');
    jQuery(target).removeClass('hide');
  });
/*---#####Toggle CBC Form Feild#####-----*/
 jQuery('.imperial .expand_link').on('click',function(){
    var targetts=jQuery(this).attr('data-id');
    jQuery(targetts).slideToggle('fast');
    jQuery(this).find('i').removeClass('fa-minus').addClass('fa-plus');
});
 jQuery('.metric .expand_link').on('click',function(){
    var targetts=jQuery(this).attr('data-id');
    jQuery(targetts).slideToggle('fast');
    jQuery(this).find('i').removeClass('fa-minus').addClass('fa-plus');
});



  /* ############# ------calculator Imperial ajax submit----- ################# */
   jQuery(document).on('submit','#calformImp',function(event){
		event.preventDefault();
                var ImpformData = jQuery(this).serialize();

		jQuery('.submit-loader').removeClass('hide');
		jQuery.ajax({
			type: 'POST',
			url: ajax_posts.ajaxurl,
			data: ImpformData,
                       // action:jQuery(this).attr('action'),
			 success: function(data){
			 jQuery('#ajax-response-calculator .response-content').css('opacity','0.4');
			 jQuery('#ajax-response-calculator .response-content').html(data);
                         jQuery('html,body').animate({ scrollTop: jQuery('#ajax-response-calculator').offset().top - 300  }, 1500);
			 jQuery('#ajax-response-calculator .response-content').css('opacity','1');
                         jQuery('.submit-loader').addClass('hide');
			 jQuery('#calformImp').each(function() { this.reset() });
            },
            error : function(jqXHR, textStatus, errorThrown) {
				 alert(textStatus);
            }

        });
   });
    /* --############# ------calculator Metric ajax submit----- #################---- */
  jQuery(document).on('submit','#calformMetric',function(event){
		event.preventDefault();
                var ImpformData = jQuery(this).serialize();
		jQuery('.submit-loader').removeClass('hide');
                
		jQuery.ajax({
			type: 'POST',
			url: ajax_posts.ajaxurl,
			data: ImpformData,
                        //action:jQuery(this).attr('action'),
			success: function(data){
			jQuery('#ajax-response-calculator .response-content').css('opacity','0.4');
			jQuery('#ajax-response-calculator .response-content').html(data);
                        jQuery('html,body').animate({ scrollTop: jQuery('#ajax-response-calculator').offset().top - 300  }, 1500);
			jQuery('#ajax-response-calculator .response-content').css('opacity','1');
                        jQuery('.submit-loader').addClass('hide');
			jQuery('#calformMetric').each(function() { this.reset() });
            },
            error : function(jqXHR, textStatus, errorThrown) {
				alert(textStatus);
            }

        });
   });

/* -----########Autofill False#######---- */
jQuery('#calformMetric input').attr('autocomplete','off');
jQuery('#calformMetric select').attr('autocomplete','off');
jQuery('#calformMetric').each(function() { this.reset() });
jQuery('#calformImp input').attr('autocomplete','off');
jQuery('#calformImp select').attr('autocomplete','off');
jQuery('#calformImp').each(function() { this.reset() });

/* ###########----------Validation BFN Form------------########### */
 jQuery('#met-sex_bfn option').on('click',function(){
var formdn=jQuery(this).parent('select').attr('data-form');
var gendermn=jQuery(this).attr('value');
if(gendermn=='m'){ jQuery(formdn+' .met-female_bfn').addClass('hide');jQuery(formdn+' .met-male_bfn').removeClass('hide'); }
else if(gendermn=='f'){jQuery(formdn+' .met-female_bfn').removeClass('hide');jQuery(formdn+' .met-male_bfn').addClass('hide'); }
else{jQuery(formdn+' .met-female_bfn').removeClass('hide');jQuery(formdn+' .met-male_bfn').removeClass('hide');}
});
 jQuery('#imp-sex_bfn option').on('click',function(){
var formdin=jQuery(this).parent('select').attr('data-form');
var genderin=jQuery(this).attr('value');
if(genderin=='m'){ jQuery(formdin+' .imp-female_bfn').addClass('hide');jQuery(formdin+' .imp-male_bfn').removeClass('hide'); }
else if(genderin=='f'){jQuery(formdin+' .imp-female_bfn').removeClass('hide');jQuery(formdin+' .imp-male_bfn').addClass('hide'); }
else{jQuery(formdin+' .imp-female_bfn').removeClass('hide');jQuery(formdin+' .imp-male_bfn').removeClass('hide');}
});
 
/* ###########----------Validation BFM Form------------########### */
 jQuery('.met-sex_bfm option').on('click',function(){
var formd=jQuery(this).parent('select').attr('data-form');
var genderm=jQuery(this).attr('value');
if(genderm=='m'){ jQuery(formd+' .met-female_bfm').addClass('hide'); }
else if(genderm=='f'){jQuery(formd+' .met-female_bfm').removeClass('hide'); }
else{jQuery(formd+' .met-female_bfm').removeClass('hide');}
});
 jQuery('.imp-sex_bfm option').on('click',function(){
var formds=jQuery(this).parent('select').attr('data-form');
var genderi=jQuery(this).attr('value');
if(genderi=='m'){jQuery(formds+' .imp-female_bfm').addClass('hide'); }
else if(genderi=='f'){ jQuery(formds+' .imp-female_bfm').removeClass('hide'); }
else{jQuery(formds+' .imp-female_bfm').removeClass('hide');}
});
/*---End jQuery(document).ready-----*/

});
