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
        jQuery('<p class="error-missing">First Name is empty!</p>').insertAfter("#first_name");
      };

      var string_exp = /^[A-Za-z .'-]+$/;
      if(!string_exp.test(first_name)) {
        jQuery('<p class="error-invalid">First Name contains invalid characters!</p>').insertAfter('#first_name');
        var has_errors = true;
      };

      if (last_name == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Last Name is empty!</p>').insertAfter("#last_name");
      };

      if (!string_exp.test(last_name)) {
        jQuery('<p class="error-invalid">Last Name contains invalid characters!</p>').insertAfter('#last_name');
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

      if (telephone == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Telephone number is empty!</p>').insertAfter("#telephone");
      };

      var num_exp = /^[\d -]+$/;
      if (!num_exp.test(telephone)) {
        jQuery('<p class="error-invalid">Telephone number contains invalid characters!</p>').insertAfter('#telephone');
        var has_errors = true;
      };

      if (DoB == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Date of Birth is empty!</p>').insertAfter("#DoB");
      };

      if (country == "") {
        var has_errors = true;
        jQuery('<p class="error-missing">Country is empty!</p>').insertAfter("#country");
      };

      if (terms == false) {
        var has_errors = true;
        jQuery('<p class="error-missing">You must agree to Terms and Conditions</p>').insertAfter("#terms");
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

    
});
	















