<?php
    $ferr=$lerr=$oerr=$aerr=$perr=$pnerr=$pperr='';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GCM Youths Database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"> -->
</head>
<body>
    <div class="container">
        <div class="card m-auto w-75">

            <h5 class="card-header bg-info text-white text-center py-4">
                <strong>Please Fill Every Field</strong>
            </h5>
            
            <!--Card content-->
            <div class="card-body mt-4 px-lg-5 pt-0">
        
                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="register.php" method="post">
        
                    <!-- <div class="form-row"> -->
                        <!-- <div class="col"> -->
                            <!-- First name -->
                    <div class="md-form">
                        <input type="text" name = "fname" id="RegisterFormFirstName" class="form-control bg-secondary text-white" required>
                        <label for="RegisterFormFirstName">First name</label>
                        <span style="color:red"><?php echo $ferr; ?></span>
                    </div>
                        <!-- </div> -->
                        <!-- <div class="col"> -->
                            <!-- Last name -->
                    <div class="md-form">
                        <input type="text" name="lname" id="RegisterFormLastName" class="form-control bg-secondary text-white" required>
                        <label for="RegisterFormLastName">Last name</label>
                        <span style="color:red"><?php echo $lerr; ?></span>
                    </div>

                    <div class="md-form">
                        <input type="text" name="oname" id="RegisterFormOtherName" class="form-control bg-secondary text-white" required>
                        <label for="RegisterFormOtherName">Other name</label>
                        <span style="color:red"><?php echo $oerr; ?></span>
                    </div>
                        <!-- </div> -->
                    <!-- </div> -->
        
                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input type="text" name="add" id="RegisterFormAddress" class="form-control bg-secondary text-white" required>
                        <label for="RegisterFormAddress">Address</label>
                        <span style="color:red"><?php echo $aerr; ?></span>
                    </div>
        
                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="number" name="phone" id="RegisterFormPhone" class="form-control bg-secondary text-white" aria-describedby="RegisterFormPhoneHelpBlock" required>
                        <label for="RegisterFormPhone">Phone number</label>
                        <span style="color:red"><?php echo $perr; ?></span>
                    </div>

                    <div class="md-form">
                            <input type="text" name="pname" id="RegisterFormParentName" class="form-control bg-secondary text-white" required>
                            <label for="RegisterFormParentName">Parent/Guardian name</label>
                            <span style="color:red"><?php echo $pnerr; ?></span>
                    </div>

                    <div class="md-form">
                        <input type="number" name="pphone" id="RegisterFormPhone" class="form-control bg-secondary text-white" aria-describedby="RegisterFormPhoneHelpBlock" required>
                        <label for="RegisterFormPhone">Parent/Guardian Phone number</label>
                        <span style="color:red"><?php echo $pperr; ?></span>
                    </div>
        
                    <!-- Sign up button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="proceed">Submit</button>
        
                </form>
                <!-- Form -->
        
            </div>
            
        </div>
    </div>
            

</body>
</html>