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
      console.log(first_name);
      var last_name = jQuery("#last_name").val();
      console.log(last_name);
      var email_from = jQuery("#email").val();
      console.log(email_from);
      var telephone = jQuery("#telephone").val();
      console.log(telephone);
      var DoB = jQuery("#DoB").val();
      console.log(DoB);
      var address = jQuery("#address").val();
      console.log(address);
      var country = jQuery("#country").val();
      console.log(country);
      var comments = jQuery("#comments").val();
      console.log(comments);
      var terms = jQuery("#terms").attr('checked');
      console.log(terms);
      console.log('the form did not submitted');
    });

    
});
	















