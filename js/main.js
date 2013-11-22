jQuery(document).ready(function(){

	twitterFetcher.fetch('398379208813985792', 'example1', 1, true);

  //slideshow + pagination//
	jQuery('#slideshow').cycle({
		fx: 'fade',
		timeout:   0,
        prev:    '#previousbutton',
        next:    '#nextbutton',
        pager:   '#pagenavi',
        pagerAnchorBuilder: pagerFactory
   	});


    //Fetching latest Tweet//
   	function pagerFactory(idx, slide) {
        var s = idx > 3 ? ' style="display:none"' : '';
        return '<li'+s+'><a href="#">'+(idx+1)+'</a></li>';
    };


    //prevent submit form//
    jQuery('.submitbutton').on("click", function(event) {
      event.preventDefault();
      var first_name = jQuery("#first_name").val();

      var last_name = jQuery("#last_name").val();

      var email_from = jQuery("#email").val();
  
      var telephone = jQuery("#telephone").val();
  
      var DoB = jQuery("#DoB").val();
  
      var address = jQuery("#address").val();
  
      var country = jQuery("#country").val();
        
      var comments = jQuery("#comments").val();
  
      var terms = jQuery("#terms").is(':checked');

      var has_errors = false;
  
      if (first_name == "") {
        var has_errors = true;
      };

      if (last_name == "") {
        var has_errors = true;
      };

      if (email_from == "") {
        var has_errors = true;
      };

      if (telephone == "") {
        var has_errors = true;
      };

      if (DoB == "") {
        var has_errors = true;
      };

      if (country == "") {
        var has_errors = true;
      };

      if (terms == false) {
        var has_errors = true;
      };
  
    });

    
});
	















