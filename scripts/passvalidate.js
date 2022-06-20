$(function(){
    var mayus = new RegExp("^(?=.*[A-Z])");
    var special = new RegExp("^(?=.*[!@#$&*])");
    var numbers = new RegExp("^(?=.*[0-9])");
    var lower = new RegExp("^(?=.*[a-z])");
    var len = new RegExp("^(?=.{8,})");

    $("#password").on("keyup", function(){
        var pass = $("#password").val();

        if(mayus.test(pass) && special.test(pass) && numbers.test(pass) && lower.test(pass) && len.test(pass)){
            $("#mensaje").text(" - Contraseña segura").css("color", "green");
        }else{
            $("#mensaje").text(" - Contraseña insegura").css("color", "red");
        }
    });
});