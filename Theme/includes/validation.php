<?php
$error = "";
$successMessage="";

if($_POST){
    if(!$_POST["InputEmail1"]){
        $error.="The email address is required.<br>";
    }
    if($_POST["InputEmail1"] && filter_var($_POST["InputEmail1"],FILTER_VALIDATE_EMAIL)===false){
        $error.="The email address is invalid.<br>";
    }

    if(!$_POST["InputSubject"]){
        $error.="The subject is required.<br>";
    }

    if(!$_POST["InputName"]){
        $error.="The name is required.<br>";
    }

    if(!$_POST["TextArea"]){
        $error.="The message  is required.<br>";
    }


    if($error !=""){
        $error='<div class="alert alert-danger" role ="alert"><strong>There were some error(s) in the form :</strong><br>'.$error.'</div>';
    }
    else{
        $emailTo="your@email.com";
        $subject = $_POST["InputSubject"];
        $message = $_POST["TextArea"];
        $headers = "From:".$_POST["InputEmail1"];

        if(mail($emailTo,$subject,$message,$headers)){

            $successMessage='<div class="alert alert-success" role ="alert">Your email was sent successfully</div>';

        }else{
            $successMessage='<div class="alert alert-danger" role ="alert">Your email wasn\'t send. Please try again later</div>';
        }



    }
}

?>