<?php require 'includes/validation.php' ?>

<section id="email" name="email"></section>
<!--PORTFOLIO DESCRIPTION -->
<div class="container desc">
    <div class="row">
        <div class="col-lg-2 col-lg-offset-1">
            <h5>CONTACT <i class="fa fa-caret-right" aria-hidden="true"></i></h5>
        </div>
        <div class="col-lg-10">

            <div id="error-email"> <?php echo $error.$successMessage; ?></div>

            <form method="post">
                <div class="form-group">
                    <label for="InputEmail1">Email address</label>
                    <input type="text" class="form-control" id="InputEmail1" name="InputEmail1" aria-describedby="emailHelp"
                           placeholder="yourname@name.com">
                </div>

                <div class="form-group">
                    <label for="InputSubject">Subject</label>
                    <input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Enter your Subject">
                    <div id="error-subject"></div>

                </div>

                <div class="form-group">
                    <label for="InputName">Name</label>
                    <input type="text" class="form-control" id="InputName" name="InputName" >
                    <div id="error-subject"></div>

                </div>

                <div class="form-group">
                    <label for="Textarea">What would you like to ask?</label>
                    <textarea class="form-control" id="Textarea" name="TextArea" rows="3"></textarea>
                    <div id="error-message"></div>

                </div>
                <button id="submitBtn" type="submit" class="btn btn-outline-secondary">Send</button>
            </form>


        </div>

    </div><!--/.row -->
    <br>
    <br>
</div><!--/.container -->