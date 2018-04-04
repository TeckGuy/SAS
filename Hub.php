<?php
require('sessionstud.php');
require('DatabaseConnection.php');
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

    <!--    <a href="#lprint">-->
    <!--        <button class="btn btn-dark btoptech4 btn-md pull-right">Print</button>-->
    <!--    </a>-->
    <div class="row">
        <h2 class="text-center text-muted">LEARNING EXPERIENCES</h2>
        <div class="col-md-12">
            <?php
            //connect to the database mysql
            //check for connection failures
            if ($connection) {
                //connect to db kafefiona
                //mysqli_select_db($connection, "kisii_county");
                // Get all the data from the "Learning" table
                $result = mysqli_query($connection, "SELECT * FROM _$Natid");
                if ($result == TRUE) {
                    echo "<table class='table table-responsive table-bordered'>";
                    echo "<thead>
                        <tr>
                          <th>Day</th>
                          <th>Date</th>
                          <th>What You Learnt</th>
                          <th>Skills Acquired</th>
                        </tr>
                      </thead>";
                    echo "<tbody>";
                    // keeps getting the next row until there are no more to get
                    while ($row = mysqli_fetch_array($result)) {
                        // Print out the contents of each row into a table
                        echo "<tr><td class = 'lwrite'>";
                        echo $row['ID'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['Date'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['learn'];
                        echo "</td><td class = 'lwrite'>";
                        echo $row['skill'];
                        echo "</td></tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<br/>";
                    echo "<br/>";
                    echo "<h1 class='text-center text-danger'>Sorry No Learning Record</h1>";
                    echo "<h1 class='text-center text-danger'>START SAVING YOUR LEARNING</h1>";
                }
            }
            ?>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4 input-group">
            <br/>
            <p class="text-info java">Supervisor Name .........................................</p>
            <br/>
            <p class="text-info java">Sign ......................................... Date
                ..........................................</p>
            <br/>
            <p class="text-info java">Student Name <u><?php echo $Name; ?></u></p>
            <br/>
            <p class="text-info java">Student Reg_Number <u><?php echo $login_session; ?></u></p>
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
            <p class="text-info java text-center" style="margin-left: 230px;">*Thank You For Choosing Kisii County*</p>
        </div>
        <button onclick="mydetails()" id="lprint" class="btn btn-lg btn-dark btoptech4 pull-right"
                title="Double Click To Print">
            <span class="glyphicon glyphicon-print"></span>
        </button>
        <a href="#top" class="btn btn-dark btn-lg pull-left java3"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
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

