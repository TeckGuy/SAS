<?php
require('login.php'); // Includes login Script

if (isset($_SESSION['login_user'])) {
    header("location: AdminSection.php");
} else if (isset($_SESSION['login_student'])) {
    header("location: StudentSection.php");
} else if (isset($_SESSION['login_Supervisor'])) {
    header("location: SupervisorSection.php");
}
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
            <div class="col-md-12">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <img src="img/BrandingLogo.png">
                    <h2><span class="glyphicon glyphicon-user"></span>&nbsp;Student Attachment System&nbsp;<span
                                class="glyphicon glyphicon-pencil"></span></h2>
                    <hr/>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-12">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h4 class="text-center text-muted count">HELLO WORLD</h4>
                    <h4 id="demo" class="text-center count"></h4>
                    <h3 class="tech-club text-center text-primary">WELCOME</h3>
                    <h1 class="icon gfx-like tech-club"></h1>
                    <button type="button" class="btn btn-dark btn-lg bcolored1" data-toggle="collapse"
                            data-target="#demo2">&nbsp;GET STARTED
                    </button>
                    <div id="demo2" class="collapse">
                        <hr/>
                        <a href="#location" class="btn btn-dark btn-sm bcolored" data-toggle="modal"
                           data-target="#AdminModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Admin
                            Login</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="#location" class="btn btn-dark btn-sm bcolored" data-toggle="modal"
                           data-target="#SuperModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Supervisor
                            Login</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="#location" class="btn btn-dark btn-sm bcolored" data-toggle="modal"
                           data-target="#StudentModal"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Student
                            Login</a>
                        <hr/>
                    </div>
                    <br/>
                    <!--                    <a href="https://youtu.be/iZSuW8cZvrk" target="_blank">-->
                    <!--                        <button class="btn btn-link btn-lg">*Help*</button>-->
                    <!--                    </a>-->
                    <?php
                    //date_default_timezone_get('Africa/EAT/Nairobi');
                    //$date = date('Y/m/d h:i:s a',time());
                    $date = date('d/m/Y', time());
                    echo "<br/>";
                    echo "<h4 class='text-center text-success'>DATE</h4>" . $date;
                    ?>
                    <hr/>
                    <br/><br/><br/>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</header>

<!--class mordal starts here for admin login-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="AdminModal" role="dialog">
        <div class="modal-dialog modal-md techshow">
            <div class="modal-content techshow">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md bclose pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-lock"></span>Admin
                        Login Only</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <img src="techicons/admin.png" class="img-responsive gcolor img-circle">
                        <form role="form" class="horizontal-form adminlogin" method="post" action="">
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-user input-group-addon lwrite"></span>
                                <input type="text" class="form-control input-md lwrite" placeholder="Username"
                                       required="required" name="username">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-eye-open input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" placeholder="Password"
                                       required="required" name="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-md btn-dark btoptech2" name="submit"
                                       value="LOGIN">
                            </div>
                            <div class="form-group">
                                <span><?php echo $error; ?></span>
                            </div>
                        </form>
                        <a href="AdminResetPass.php">
                            <button class="btn btn-link btn-md pull-right">Reset Password</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="logos">
                                    <span class="icon gfx-star-3 colorblack"></span>
                                    <span class="icon gfx-star-3 colorred"></span>
                                    <span class="icon gfx-star-3 colorgreen"></span>
                                </h1>
                            </div>
                            <br/>
                            <h4 class="text-center">WELCOME BACK</h4>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of admin-->

<!--class mordal starts here for studdent login-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="StudentModal" role="dialog">
        <div class="modal-dialog modal-md techshow">
            <div class="modal-content techshow">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md bclose pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-lock"></span>Student
                        Login Only</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <img src="techicons/STUDENT.png" class="img-responsive Sgcolor img-circle">
                        <form role="form" class="horizontal-form adminlogin" method="post" action="">
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-pencil input-group-addon lwrite"></span>
                                <input type="text" class="form-control lwrite text-uppercase"
                                       placeholder="Enter School Reg_No"
                                       required="required" name="reg_no">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-eye-open input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" placeholder="Password"
                                       required="required" name="passstudent">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-md btn-dark btoptech2"
                                       name="studentlogin" value="LOGIN">
                            </div>
                            <span><?php echo $errorstud; ?></span>
                        </form>
                        <a href="StudentPassReset.php">
                            <button class="btn btn-link btn-md pull-right">Reset Password</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="logos">
                                    <span class="icon gfx-star-3 colorblack"></span>
                                    <span class="icon gfx-star-3 colorred"></span>
                                    <span class="icon gfx-star-3 colorgreen"></span>
                                </h1>
                            </div>
                            <br/>
                            <h4 class="text-center">WELCOME BACK</h4>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of student-->

<!--class mordal starts here for supervisor login-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="SuperModal" role="dialog">
        <div class="modal-dialog modal-md techshow">
            <div class="modal-content techshow">
                <div class="modal-header">
                    <button type="button" class="btn btn-dark btn-md bclose pull-right" data-dismiss="modal"><span
                                class="glyphicon glyphicon-remove"></span></button>
                    <h4 class="modal-title text-center gridcolor"><span class="glyphicon glyphicon-lock"></span>Supervisor
                        Login Only</h4>
                </div>
                <div class="modal-body">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <img src="techicons/admin.png" class="img-responsive Sgcolor img-circle">
                        <form role="form" class="horizontal-form adminlogin" method="post" action="">
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-user input-group-addon lwrite"></span>
                                <input type="text" class="form-control lwrite text-lowercase" placeholder="SuperVisor Name"
                                       required="required" name="superusername">
                            </div>
                            <div class="form-group input-group">
                                <span class="glyphicon glyphicon-eye-open input-group-addon lwrite"></span>
                                <input type="password" class="form-control lwrite" placeholder="Password"
                                       required="required" name="passwordsuper">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-md btn-dark btoptech2"
                                       name="superlogin" value="LOGIN">
                            </div>
                            <span><?php echo $errorsuper; ?></span>
                        </form>
                        <a href="SuperPassReset.php">
                            <button class="btn btn-link btn-md pull-right">Reset Password</button>
                        </a>
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="logos">
                                    <span class="icon gfx-star-3 colorblack"></span>
                                    <span class="icon gfx-star-3 colorred"></span>
                                    <span class="icon gfx-star-3 colorgreen"></span>
                                </h1>
                            </div>
                            <br/>
                            <h4 class="text-center">WELCOME BACK</h4>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of supervisor-->

<!--class mordal starts here for video-->
<!--modal classes-->
<div class="container-fluid">
    <!-- Modal tech events -->
    <div class="modal fade" id="videoModal" role="dialog">
        <div class="modal-dialog modal-lg socialshow">
            <div class="modal-content socialshow">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-center">How System Functions</h4>
                </div>
                <div class="modal-body">
                    <video id="eventshow" controls>
                        <source src="video/kisii.webm" type="video/webm">
                        Sorry Video Can't Load/Not Supported.
                    </video>
                </div>
                <div class="modal-footer">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <p class="text-uppercase text-center text-info">Student Attachment System</p>
                        <p class="text-danger text-center">**TUTORIAL**</p>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-dark btn-md bclose" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end of student-->
<!--footer-->
<div class="row footwell1 java3">
    <?php
    include 'getstarted.php';
    ?>
</div>

<?php
	
	require 'my_js.php';

?>

</body>
</html>