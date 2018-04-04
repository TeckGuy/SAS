<?php
require('Change.php'); // Includes login Script
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require 'myheader.php';
    ?>

</head>

<body>
<header id="top" class="helloworld">
    <div class="carousel-caption showmeso">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <img src="img/BrandingLogo.png">
                <h3>Student Password Reset</h3>
                <br/>
                <p class="text-info java2">Ones The Password Is Changed You Will Be Redirected To The Login Page</p>
                <p class="text-center text-danger java2"><b>(AUTOMATICALLY)</b></p>
                <form role="form" class="horizontal-form" method="post" action="">
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-hand-right input-group-addon lwrite"></span>
                        <input type="text" class="form-control lwrite" autocomplete="off" name="id_no"
                               placeholder="National ID_Number" required>
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-pencil input-group-addon lwrite"></span>
                        <input type="text" class="form-control lwrite text-uppercase" autocomplete="off"
                               placeholder="Enter School Reg_No" name="reg_no" required>
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-lock input-group-addon lwrite"></span>
                        <input type="password" class="form-control lwrite" autocomplete="off" name="pass1"
                               placeholder="Enter Password" required>
                    </div>
                    <div class="form-group input-group">
                        <span class="glyphicon glyphicon-lock input-group-addon lwrite"></span>
                        <input type="password" class="form-control lwrite" autocomplete="off" name="pass2"
                               placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <span><?php echo $error3; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-md btn-dark btoptech2" name="studentreset"
                               value="RESET">
                    </div>
                    <div class="form-group">
                        <a href="index.php" class="form-control btn btn-md btn-link bcolored">BACK</a>
                    </div>
                    <br/><br/>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</header>

<?php
	
	require 'my_js.php';

?>

</body>
</html>

