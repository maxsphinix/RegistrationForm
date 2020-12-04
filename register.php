<?php 
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'gcmyouths');
if(!$conn){
    die("Database connection failed: " . mysql_error());
}


$ferr=$lerr=$oerr=$aerr=$perr=$pnerr=$pperr='';



if(empty($_POST['fname'])){
    $ferr = "First Name is required";
}
else{
    $fname = $_POST['fname'];
}

if(empty($_POST['lname'])){
    $lerr = "Last Name is required";
}
else{
    $lname = $_POST['lname'];
}

if(empty($_POST['oname'])){
    $oerr = "Other Name is required";
}
else{
    $oname = $_POST['oname'];
}

if(empty($_POST['add'])){
    $aerr = "Address is required";
}
else{
    $add = $_POST['add'];
}

if(empty($_POST['phone'])){
    $perr = "Phone Number is required";
}
else{
    $phone = $_POST['phone'];
}

if(empty($_POST['pname'])){
    $pnerr = "Parent or Guardian Name is required";
}
else{
    $pname = $_POST['pname'];
}

if(empty($_POST['pphone'])){
    $pperr = "Parent or Guardian Phone Number is required";
}
else{
    $pphone = $_POST['pphone'];
}


if(empty($ferr) && empty($lerr) && empty($oerr) && empty($aerr) && empty($perr) && empty($pnerr) && empty($pperr)){
    $sql = "INSERT INTO youthsdb(`FirstName`, `LastName`, `OtherName`, `HomeAddress`, `PhoneNumber`, `ParentName`, `ParentNumber`) VALUES ('$fname', '$lname', '$oname', '$add', '$phone', '$pname', '$pphone')";
    
    if(mysqli_query($conn, $sql)){
        echo "Registration successful.";
        // mail();
    }else{
        echo 'Oops! something wrong... ' . mysqli_error($conn);
    }
}
?>
