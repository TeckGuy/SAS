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

<body class="back3">
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
            <hr/>
            <form role="form" class="horizontal-form regform" method="post" action="">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="text">Date</label>
                        <br/>
                        <input type="date" class="form-control lwrite" name="Date" placeholder="dd/mm/yy" required>
                    </div>
                    <div class="form-group">
                        <br/>
                        <?php echo $confirm; ?>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="text">What have you learned today</label>
                        <br/>
                        <textarea class="form-control lwrite" rows="10" name="learning" required></textarea>
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="text">Skills Acquired</label>
                        <br/>
                        <textarea class="form-control lwrite" rows="10" name="skills" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-lg btn-dark btoptech2" name="hub"
                               value="SAVE TO HUB">
                    </div>
                </div>
            </form>
            <div class="col-md-12">
                <hr/>
            </div>
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

