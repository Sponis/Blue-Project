jQuery(document).ready(function(){

	jQuery('#searchform input[type="text"]').on('click',function(){
		if (jQuery(this).value('Search Keywords')) {
			jQuery(this).value('');
		}

		});
	});















