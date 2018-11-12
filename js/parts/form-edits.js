$('.woocommerce-form-login').find("input[type=text], input[type=password]").each(function()
 {
     if(!$(this).val()) {
       var placeHold = $(this).attr("name");

    $(this).attr("placeholder", placeHold);
 }
 });
