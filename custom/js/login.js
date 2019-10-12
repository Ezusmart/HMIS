$(document).ready(function(){


var textfield = $("input[name=inputUsername]");
var textfield2 = $("input[name=inputPassword]");

            $('button[type="submit"]').click(function(e) {
                e.preventDefault();
                //little validation just to check username

                if (textfield.val() != "") {
                    //$("body").scrollTo("#output");
                    if (textfield2.val() == "") {
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("Please enter password ");

                }
                else{
                    $("#lgn").submit();

                    }
                    //show avatar
                    $(".avatar").css({
                        "background-image": "url('images/site/user.png')"
                    });
                } 
                

                else {
                    //remove success mesage replaced with error message
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("Please enter username ");
                }
                //console.log(textfield.val());

            });


	
});