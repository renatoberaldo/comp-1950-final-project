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

    $(function() {
        // Show Mobile Navigation
        // const body = document.body;
        // const btn = document.getElementById('.hamburger');

        // btn.addEventListener('click', function(){
        //     body.classList.toggle('show');
        // });

        $('.btn-menu').click(function() {
           $('body').addClass('show');
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

        if(erroMessage != ""){
            alert(erroMessage);
        }else {
            alert("Form sent with success");
        }
    });

    // Responsive Menu - Dropdown
  
});

