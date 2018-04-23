//ajax call for the sign up form
//once the form is submitted
    //$(document).ready(function(){


    $("#signup-form").submit(function(event){
      //prevent default php processing
      event.preventDefault();
      //collect user inputs
      var datatopost = $(this).serializeArray();
      //debugger;
      //send them to signup.php using ajax
      $.ajax ({
            url: "signup.php",
            type: 'POST',
            data: datatopost,

        //ajax call|:sucessful :show error or suceess message
            success: function(data){
              if(data){

                $("#signup-message").html(data);
              }
              
            },
            //ajax call fails: show Ajax call error
            error: function(){

               $("#signup-message").html("<div class='alert alert-danger'>There was an error with ajax call.Please try again ltr</div>");

            }


      });


    });

//});

 	
 	
 	
 		





//ajax call for the forgot password form
//once the form is submitted
 	//prevent default php processing
 	//collect user inputs
 	//send them to login.php using ajax
 		//ajax call|:sucessful :show error or suceess message
 		//ajax call fails: show Ajax call error

 		