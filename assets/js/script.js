//Set the initial state of the website
$(document).ready(function(){
    $("#loginErrorMessage").hide();
    $("#loginErrorMessageInvalid").hide();
    $("#logoutButton").hide();
});

//click event for the login button (the one inside the modal).
$("#loginButton").click(function(){
    var loginEmail = $.trim($("#staticEmail").val());
    var loginPassword = $.trim($("#inputPassword").val());
    
    if (loginEmail.length > 0 && loginPassword.length > 0){
         //$("#loginErrorMessage").hide();
         
         var formData = {
             'email_info': loginEmail,
             'password_info': loginPassword
         };
         
         var url = 'https://basic-templating-jrivero3122.c9users.io/controllers/login.php';
         
         $.ajax({
             type   : 'POST',
             url    : url,
             data   : formData,
             //dataType   : 'json'
         }).done(function(data){
             console.log(data);
             
            response = JSON.parse(data);
            
            if(response.code === 200){
                $("#loginModal").modal('hide');
                $("#loginModalButton").hide();
                $("#logoutButton").show();
                $("#loggedUserEmail").html(response.data);
                
            }else{
                $("#loginErrorMessageInvalid").show();
            }
        });
        
    }else{
        $("#loginErrorMessage").show();
    }
});