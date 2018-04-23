function confirm(bookingId){
	alert("confirm");
     var mainemail = $("#email").text();
     var res = mainemail.slice(13);
     var name = $("#Hname").text();
     var hotelname = name.slice(12);
  
     
     // alert(res);
	 //var datatopost = $(this).serializeArray();
	 $.ajax ({
        url: "booking_confirmed_by_admin.php",
        type: 'POST',
        data: {'bookingId':bookingId, 'confirmation':'confirm', 'email': res, 'hotelname':hotelname},

        //ajax call|:successful :show error or success message
        success: function(data){
       		if(data){
                $("#message_confirm").html(data);
            }

        },
        //ajax call fails: show Ajax call error
        error: function(){
           alert(data);
        }


    });
}

function refuse(bookingId){
	alert("refuse");
	$.ajax ({
        url: "booking_confirmed_by_admin.php",
        type: 'POST',
        data: {'bookingId':bookingId, 'confirmation':'refuse'},

        //ajax call|:successful :show error or success message
        success: function(data){
       		
        },
        //ajax call fails: show Ajax call error
        error: function(){

        }


    });
}