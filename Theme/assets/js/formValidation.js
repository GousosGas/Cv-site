function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}


$("form").submit(function (e) {
    e.preventDefault();

    var errorMessage = '';
    if (isEmail($("#InputEmail1").val()) == false) {
        errorMessage += "The email address is not valid!<br>";
    }

    if ($("#InputSubject").val() == "") {
        errorMessage += "The subject field is required!<br>";
    }
    if ($("#Textarea").val() == "") {
        errorMessage += "The message field is required!";
    }

    if (errorMessage != "") {
        $("#error-email").html('<div class="alert alert-danger" role ="alert"><strong>There were some error(s) in the form :</strong><br>'+errorMessage+'</div>');
    }else {
        $("form").unbind("submit").submit();
    }



});

