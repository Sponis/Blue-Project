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


    //prevent submit form
    jQuery('.submitbutton').on("click", function(event) {
      event.preventDefault();

      jQuery(".error-missing").remove();

      jQuery(".error-invalid").remove();

      var your_name = jQuery("#your_name").val();
      
      var email_from = jQuery("#email").val();
  
      var subject = jQuery("#subject").val();
   
      var message = jQuery("#message").val();

      var has_errors = false;
  
      if (your_name == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Your Name is empty!</p>').insertAfter("#first_name");
      };

      var string_exp = /^[A-Za-z .'-]+$/;
      if(!string_exp.test(your_name)) {
        jQuery('<p class="error-invalid">Your Name contains invalid characters!</p>').insertAfter('#your_name');
        var has_errors = true;
      };

      if (email_from == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Email address is empty!</p>').insertAfter("#email");
      };

      var email_exp = /^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
      if (!email_exp.test(email_from)) {
        jQuery('<p class="error-invalid">Enail address contains invalid characters!</p>').insertAfter('#email');
        var has_errors = true;
      };

      if (subject == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Subject is empty!</p>').insertAfter("#subject");
      };

      if (message == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Country is empty!</p>').insertAfter("#message");
      };

     if (has_errors == false) {
      var postData = $('.contactus').serializeArray();
      postData.push({ name: "isAjax", value: "true" });
      var formURL = $('contactus').attr("action");
      var formmethod = $('contactus').attr("method");
    $.ajax(
    {
        url : formURL,
        type: "POST",
        data : postData,
        dataType: 'json',
        success:function(data)
          {
            console.log(data.data);
            jQuery(".wrapper2").html('<h3 class="successmsg">Your form was succesfully submitted, thank you!</h3><p>'+ data.data + '</p>');
          },
        error: function()
        {
            jQuery('<p class="server-error">There was an error submitting your form, please try again later</p>').insertAfter('.contactus');
        }
    });

      //jQuery('.contactus').submit();
     };

    });

  //google map api
  var map;
  function initialize() {
    var mapOptions = {
      zoom: 12,
      center: new google.maps.LatLng(37.956, 23.710)
    };
    map = new google.maps.Map(document.getElementById('ggl-map'),
    mapOptions);
  } 

google.maps.event.addDomListener(window, 'load', initialize);


    
});
	

  















