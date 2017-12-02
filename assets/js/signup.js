$(document).ready(function(){

    $( "#signupForm" ).submit(function( event ) {
        var allGood = true;
        
        if( $("#inputPassword").val().length < 7 ){
            alert("Password should contain more than 7 characters");
            allGood = false;
            
        }
        
        if(allGood){
            return true;
        } else {
            event.preventDefault();
        }
    });

});