<?php
require('DatabaseConnection.php');
require('session.php');
require('Register.php');
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
            <h2 class="text-center text-muted">NEW STUDENT DETAILS</h2>
            <form role="form" class="horizontal-form regform" method="post" action="">
                <div class="col-md-12">
                    <hr/>
                    <h6 class="text-info"><span class="glyphicon glyphicon-user"></span>Personal Details</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off" placeholder="Student Name"
                                   name="studname" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off"
                                   placeholder="Mobile Number" name="monumber" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off"
                                   placeholder="National ID Number" name="natid" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="email" class="form-control lwrite text-lowercase" autocomplete="off"
                                   placeholder="Student Email" name="semail" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off" placeholder="Address"
                                   name="saddress" required>
                        </div>
                        <div class="form-group">
                            <select name="gender" class="form-control lwrite" required>
                                <option value="Others">Others(Gender)</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                    <h6 class="text-info"><span class="glyphicon glyphicon-book"></span>University Details</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control lwrite text-uppercase" autocomplete="off"
                                   placeholder="School Reg_Number" name="reg_no" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off"
                                   placeholder="Course Of Study" name="course" required>
                        </div>
                        <div class="form-group">
                            <select name="year" class="form-control lwrite" required>
                                <option value="Choose year">Choose year</option>
                                <option value="1st Year">1st Year</option>
                                <option value="2nd Year">2nd Year</option>
                                <option value="3rd Year">3rd Year</option>
                                <option value="4th Year">4th Year</option>
                                <option value="5th Year">5th Year</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php echo $erroyear; ?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <select name="uni" class="form-control lwrite" required>
                                <option value="Choose University">Choose University</option>
                                <option value="Chuka University">Chuka University</option>
                                <option value="Kisii University">Kisii University</option>
                                <option value="University Of Nairobi">University Of Nairobi</option>
                                <option value="JKUAT University">JKUAT University</option>
                                <option value="Kenyatta University">Kenyatta University</option>
                                <option value="TUK University">TUK University</option>
                                <option value="Embu University">Embu University</option>
                                <option value="Laikipia University">Laikipia University</option>
                                <option value="Maseno University">Maseno University</option>
                                <option value="Moi University">Moi University</option>
                                <option value="Karatina University">Karatina University</option>
                                <option value="Masinde Muliro">Masinde Muliro</option>
                                <option value="Pwani University">Pwani University</option>
                                <option value="Dedan Kimathi University">Dedan Kimathi University</option>
                                <option value="Egerton University">Egerton University</option>
                                <option value="Technical University Mombasa">Technical University Mombasa</option>
                                <option value="Maasai Mara University">Maasai Mara University</option>
                                <option value="Meru University">Meru University</option>
                                <option value="Kabianga University">Kabianga University</option>
                                <option value="Jaramogi Oginga University">Jaramogi Oginga University</option>
                                <option value="South Eastern Kenyatta University">South Eastern Kenyatta University
                                </option>
                                <option value="Multimedia University Kenya">Multimedia University Kenya</option>
                                <option value="Eldoret University">Eldoret University</option>
                                <option value="Taita Taveta University">Taita Taveta University</option>
                                <option value="Muran'ga University">Muran'ga University</option>
                                <option value="Kirinyaga University">Kirinyaga University</option>
                                <option value="Cooperative University">Cooperative University</option>
                                <option value="Kibabii University">Kibabii University</option>
                                <option value="Garissa University">Garissa University</option>
                                <option value="Rongo University">Rongo University</option>
                                <option value="Machakos University">Machakos University</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php echo $erroruni; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                    <h6 class="text-info"><span class="glyphicon glyphicon-blackboard"></span>Attachment Details</h6>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <p for="text" class="text-center">Attachment Period</p>
                            <br>
                            <label for="text">From</label>
                            <input type="date" class="form-control lwrite" name="datefrom"
                                   placeholder="Date Of Start yy-mm-dd" required>
                            <br/>
                            <label for="text">To</label>
                            <input type="date" class="form-control lwrite" name="dateto"
                                   placeholder="Finishing Date yy-mm-dd" required>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control lwrite" autocomplete="off"
                                   placeholder="Located/Section Place" name="place" required>
                        </div>
                        <div class="form-group">
                            <select name="supervisor" class="form-control lwrite text-lowercase" required>
                                <option value="Assigned Supervisor">Assigned Supervisor</option>
                                <?php
                                if ($connection) {
                                    $result = mysqli_query($connection, "SELECT username FROM superlogin");
                                    if ($result == TRUE) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<option value="' . $row["username"] . '">' . $row["username"] . '</option>';
                                        }
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <?php echo $errorsup; ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr/>
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        <p class="text-center text-danger">Please Recheck The Data Before Registration</p>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-md btn-dark btoptech2" name="register"
                                   value="REGISTER">
                        </div>
                    </div>
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
	
	require 'my_js.php';

?>
</body>
</html>

