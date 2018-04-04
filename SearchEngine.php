<?php
require('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    require 'myheader.php';
    ?>

</head>

<body class="back2" onload="loadresults()">
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

                <div class="form-group mydesign">
                    <div class="input-group">
                        <span class="input-group-addon lwrite">SEARCH</span>
                        <input type="text" name="search_text" id="search_text" class="form-control input-lg lwrite"
                               placeholder="Search Student Details By ID_No/Reg_No/Name/Mobile_No/University"/>
                        <span class="glyphicon glyphicon-search form-control-feedback lwrite"></span>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="result">
                <h1 class="text-center text-uppercase text-success">Search</h1>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 input-group">
                <br/>
                <p class="text-info java">Director Name .........................................</p>
                <br/>
                <p class="text-info java">Sign ......................................... Date
                    ..........................................</p>
                <br/>
                <p class="text-info java">Student Name .........................................</p>
                <br/>
                <p class="text-info java">Student Reg_Number .........................................</p>
                <br/>
                <p class="text-info java">Sign ......................................... Date
                    ..........................................</p>
                <br/>
                <br/>
                <p class="text-info java">General Remarks(For Official Use Only)</p>
                <p class="text-info java">
                    ...................................................................................................</p>
                <p class="text-info java">
                    ...................................................................................................</p>
                <p class="text-info java">
                    ...................................................................................................</p>
                <p class="text-info java">
                    ...................................................................................................</p>
                <br/>
                <br/>
                <p class="text-info java text-center" style="margin-left: 230px;">*Thank You For Choosing Kisii
                    County*</p>
            </div>
            <button onclick="adminprintprogress0()" id="lprint" class="btn btn-lg btn-dark btoptech4 pull-right"
                    title="Double Click To Print">
                <span class="glyphicon glyphicon-print"></span>
            </button>
            <a href="#top" class="btn btn-dark btn-lg pull-left java3"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
        </div>
    </div>
</div>

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
