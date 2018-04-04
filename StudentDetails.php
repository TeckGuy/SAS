<?php
require('sessionstud.php');
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
                    <a class="navbar-brand" href="StudentSection.php"><img src="img/BrandingLogo.png"
                                                                           class="img-responsive"
                                                                           id="logoimage"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="StudentDetails.php">Profile</a></li>
                        <li><a href="LearningE.php">Learning</a></li>
                        <li><a href="Hub.php">Hub Store</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form role="form" class="horizontal-form regform" method="post" action="">
                <h5 class="text-center text-info">WELCOME BACK</h5>
                <h1 class="text-success text-center"><span class="glyphicon glyphicon-tree-deciduous"></span></h1>
                <h6 class="text-center text-uppercase"><i><?php echo $Name; ?></i></h6>
                <div class="col-md-12">
                    <hr/>
                    <h6 class="text-info"><span class="glyphicon glyphicon-user"></span>Personal Details</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <h5 class="text-success">National ID</h5>
                        <p><i><?php echo $Natid; ?></i></p>
                        <h5 class="text-success">Gender</h5>
                        <p><i><?php echo $Sgender; ?></i></p>
                        <h5 class="text-success">Phone Number</h5>
                        <p><i><?php echo $mnumber; ?></i></p>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-success">Email Address</h5>
                        <p><i><?php echo $Email; ?></i></p>
                        <h5 class="text-success">Address</h5>
                        <p><i><?php echo $SAddress; ?></i></p>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                    <h6 class="text-info"><span class="glyphicon glyphicon-book"></span>University Details</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <h5 class="text-success">Registration Number</h5>
                        <p><i><?php echo $login_session; ?></i></p>
                        <h5 class="text-success">Year Of Study</h5>
                        <p><i><?php echo $YOS; ?></i></p>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-success">University</h5>
                        <p><i><?php echo $Suni; ?></i></p>
                        <h5 class="text-success">Course Of Study</h5>
                        <p><i><?php echo $Scourse; ?></i></p>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                    <h6 class="text-info"><span class="glyphicon glyphicon-blackboard"></span>Attachment Details</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <h5 class="text-success">Section/Department</h5>
                        <p><i><?php echo $Lsection; ?></i></p>
                        <h5 class="text-success">Supervisor Name</h5>
                        <p><i><?php echo $Supername; ?></i></p>
                    </div>
                    <div class="col-md-5">
                        <h5 class="text-success">Period Of Attachment</h5>
                        <p><b>From:</b><i><?php echo $PFrom; ?></i> &nbsp;&nbsp; <b>To:</b><i><?php echo $PTo; ?></i>
                        </p>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                    <div class="col-md-5"></div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-md btn-dark btoptech2">
                                <span class="glyphicon glyphicon-edit"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
<!--footer-->
<div class="row footwell java3">
    <?php
    include 'getstarted.php';
    ?>
</div>

<?php
	
	require 'my_js.php';

?>
</body>
</html>

