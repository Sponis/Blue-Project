jQuery(document).ready(function(){

	jQuery('#searchform input[type="text"]').on('click',function(){
		if (jQuery(this).val('Search Keywords')) {
			jQuery(this).val('');
		}

		});
	});















