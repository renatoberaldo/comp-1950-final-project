$( document ).ready(function() {
   
    $(function() {
        $( "#accordion" ).accordion({
            heightStyle: "content",
            active: false,
            autoHeight: false,
            navigation: true,
            collapsible: true	
        });
    });

    $( "#btn-save" ).click(function() {
       

        var erroMessage = "";

        if ($('#user-name').val() == ""){
            erroMessage = 'Please complete the field first name';
        }
        else if($('#user-last-name').val() == ""){
            erroMessage = 'Please complete the field last name';
        }
        else if($('#user-email').val() == ""){
            erroMessage = 'Please complete the field email';
        }
        else if($('#user-email').val() != ""){

             var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; 
  
             var str = $('#user-email').val();  
        
             if(str.match(pattern) == null){ 
                erroMessage = 'The email format is invalid';
             }
        }


        if($('#bcit-number').val() != ""){

             var pattern = /^\A+[0-9]{8}$/; 

             var str = $('#bcit-number').val();  
         
             if(str.match(pattern) == null){ 
                erroMessage = 'Student number invalid';
             }  
        }

        if(erroMessage != ""){
            alert(erroMessage);
        }else {
            alert("Form sent with success");
            $('form')[0].reset();
        }
    });

});

