$(document).ready(function() {

	var fname = "";
	var lname = "";
	var email = "";
	var password = "";
	var repassword= "";

    $("#fn").on({
        keyup : function() {
            var vall = $(this).val();

            if (vall == "") {
                $("#fnerror").html("Please enter your first name");
                $(".f_n").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#fnerror").removeClass("valid-container").addClass("error-container");

                fname = "";

            	} 
            else if (vall.length < 3) {
                $("#fnerror").html("First name is too short");
                $(".f_n").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#fnerror").removeClass("valid-container").addClass("error-container");
                fname = "";
          		} 
            else {
                $("#fnerror").html("");
                $(".f_n").css({
                    "border-color": "#5cb85c",
                    "margin-bottom": "15px",
                    "box-shadow": "rgb(37, 187, 10) 0px 1px 1px inset, rgb(22, 134, 14) 0px 0px 8px"
                });
                $("#fnerror").removeClass("error-container").addClass("valid-container");

                fname = vall;
            }
        },
        blur : function() {
            $(".f_n").css({
                "box-shadow": "none"
            });
        },
        focus : function() {
            $(this).trigger('keyup');
        }

    });

	$("#ln").on({
        keyup : function() {
            var vall = $(this).val();

            if (vall == "") {
                $("#lnerror").html("Please enter your last name");
                $(".surname").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#lnerror").removeClass("valid-container").addClass("error-container");

                lname = "";

            	} 
            else if (vall.length < 2) {
                $("#lnerror").html("Last name is too short");
                $(".surname").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#lnerror").removeClass("valid-container").addClass("error-container");
                lname = "";
          		} 
            else {
                $("#lnerror").html("");
                $(".surname").css({
                    "border-color": "#5cb85c",
                    "margin-bottom": "15px",
                    "box-shadow": "rgb(37, 187, 10) 0px 1px 1px inset, rgb(22, 134, 14) 0px 0px 8px"
                });
                $("#lnerror").removeClass("error-container").addClass("valid-container");

                lname = vall;
            }
        },
        blur : function() {
            $(".surname").css({
                "box-shadow": "none"
            });
        },

        focus : function() {
            $(this).trigger('keyup');
        }

    });

    $("#email").on({
        keyup : function() {
            var vall = $(this).val();

            if (vall == "") {
                $("#eerror").html("Please enter your email address");
                $(".email").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#eerror").removeClass("valid-container").addClass("error-container");

                email = "";

            	} 
            else {
                $.ajax({
                    type: 'POST',
                    url:'register.php',
                    data:"email="+vall,
                    beforeSend: function() {
                        $("#eerror").html("Searching database");
                    }
                    success: function() {
                        if($email) {
                            $("#eerror").html("Please enter a valid email address");
                        }
                        else if() {
                             $("#eerror").html("Email address is already taken");
                        }
                        else {
                             $("#eerror").html("Email not taken yet");
                        }
                    }
                    
                });
                
            }
        },
        blur : function() {
            $(".email").css({
                "box-shadow": "none"
            });
        },

        focus : function() {
            $(this).trigger('keyup');
        }

    });

    $("#pw").on({
        keyup : function() {
            var vall = $(this).val();

            if (vall == "") {
                $("#pwerror").html("Please enter your password");
                $(".pw").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#pwerror").removeClass("valid-container").addClass("error-container");

                password = "";

            	} 
            else if (vall.length < 8) {
                $("#pwerror").html("Password is too short");
                $(".pw").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#pwerror").removeClass("valid-container").addClass("error-container");
                password = "";
          		} 
            else {
                $("#pwerror").html("");
                $(".pw").css({
                    "border-color": "#5cb85c",
                    "margin-bottom": "15px",
                    "box-shadow": "rgb(37, 187, 10) 0px 1px 1px inset, rgb(22, 134, 14) 0px 0px 8px"
                });
                $("#pwerror").removeClass("error-container").addClass("valid-container");

                password = vall;
            }
        },
        blur : function() {
            $(".pw").css({
                "box-shadow": "none"
            });
        },

        focus : function() {
            $(this).trigger('keyup');
        }

    });

    $("#c_psw").on({
        keyup : function() {
            var vall = $(this).val();

            if (vall == "") {
                $("#repassword").html("Please re-enter your password");
                $(".r_pw").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#repassword").removeClass("valid-container").addClass("error-container");

                repassword = "";

            	} 
            else if (password !== vall) {
                $("#repassword").html("Password does not match");
                $(".r_pw").css({
                    "border-color": "#da0707",
                    "box-shadow": "inset 0 1px 1px #dab6b6, 0 0 8px #da0707",
                    "margin-bottom": "0"
                });
                $("#repassword").removeClass("valid-container").addClass("error-container");
                repassword = "";
          		} 
            else {
                $("#repassword").html("");
                $(".r_pw").css({
                    "border-color": "#5cb85c",
                    "margin-bottom": "15px",
                    "box-shadow": "rgb(37, 187, 10) 0px 1px 1px inset, rgb(22, 134, 14) 0px 0px 8px"
                });
                $("#repassword").removeClass("error-container").addClass("valid-container");

                repassword = vall;
            }
        },
        blur : function() {
            $(".r_pw").css({
                "box-shadow": "none"
            });
        },

        focus : function() {
            $(this).trigger('keyup');
        }

    });

});

