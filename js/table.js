//$(document).ready(function(){

    $("#form1").submit(function(event){
        //prevent default php processing
        event.preventDefault();
        //collect user inputs
        var datatopost =
        $(this).serializeArray();
        //send them to signup.php using ajax
        $.ajax ({
            url: "login.php",
            type: 'POST',
            data: datatopost,

            //ajax call|:successful :show error or success message
            success: function(data){
                
                if(typeof data == "string" && data.indexOf("success_user") > -1){
                    var user_email = data.substring(13, data.length);
                   window.location = "hotelbooking.php?user_email=" + user_email;
                }if(typeof data == "string" && data.indexOf("success_admin") > -1){
                    var user_email = data.substring(13, data.length);
                   window.location = "admin.php";
                }else{
                    $("#login-message").html(data);   
                }
            },
            //ajax call fails: show Ajax call error
            error: function(){

               $("#login-message").html("<div class='alert alert-danger'>There was an error with ajax call.Please try again ltr</div>");

            }


        });
    });
//});