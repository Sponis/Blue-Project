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
    jQuery('.submitbutton').click(function(event) {
      event.preventDefault();
      alert('the form did not submitted');
    });
});
	















