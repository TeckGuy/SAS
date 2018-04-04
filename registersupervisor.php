<?php
require('session.php');
require('newsupervisor.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require 'myheader.php';
    ?>

</head>

<body class="back2">
<div class="container-fluid toptechdark">
    <div class="row panelnav">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid dark">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="AdminSection.php"><img src="img/BrandingLogo.png"
                                                                         class="img-responsive"
                                                                         id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="registersupervisor.php">Add Supervisor</a></li>
                        <li><a href="RegisterSection.php">Add Student</a></li>
                        <li><a href="ProgressEngine.php">Student Progress</a></li>
                        <li><a href="SearchEngine.php">Search Details</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-muted">NEW SUPERVISOR DETAILS</h2>
            <form role="form" class="horizontal-form regform" method="post" action="">
                <div class="col-md-12">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off"
                                   placeholder="National ID" name="nid" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control lwrite text-lowercase" autocomplete="off"
                                   placeholder="SuperVisor Name [Give Only First and Last Name like James Gosling]" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off"
                                   placeholder="Personal Number" name="pnumber" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-md btn-dark btn-block btoptech2 regsuper"
                                   name="registersuper"
                                   value="REGISTER">
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<a id="to-top" href="#top" class="btn btn-dark btn-lg java3"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
<!--footer-->
<div class="row footwell java3">
    <?php
    include 'getstarted.php';
    ?>
</div>

<?php
	
	require('my_js.php');

?>
</body>
</html>

