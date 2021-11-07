<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $semester = $_POST['semester'];
    $rollno = $_POST['rollno'];
    $did = $_POST['did'];
    $cgpi = $_POST['cgpi'];
    $sgpi = $_POST['sgpi'];
    $fees = $_POST['fees'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `srmf`.`student records management` (`name`, `age`, `gender`,`dob`, `email`, `phone`, `fname`, `mname`, `address`, `semester`, `rollno`, `did`, `cgpi`, `sgpi`, `fees`, `other`, `dt`) VALUES ('$name', '$age', '$gender','$dob', '$email', '$phone','$fname','$mname','$address','$semester','$rollno','$did','$cgpi','$sgpi','$fees', '$desc', current_timestamp());";
    // echo $sql;
    
    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NITH</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="NIT Hamirpur">
    <div class="container">
        <h1>Welcome to NIT Hamirpur</h3>
        <p>Enter your details </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
        }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="date" name="dob" id="dob" placeholder="Enter your Date of Birth">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no">
            <input type="text" name="fname" id="fname" placeholder="Enter your fathers name">
            <input type="text" name="mname" id="mname" placeholder="Enter your mothers name">
            <input type="text" name="address" id="address" placeholder="Enter your address">
            <input type="text" name="semester" id="semester" placeholder="Enter your semester">
            <input type="text" name="rollno" id="rollno" placeholder="Enter your roll no">
            <input type="text" name="did" id="did" placeholder="Enter your department id">
            <input type="text" name="cgpi" id="cgpi" placeholder="Enter your CGPI">
            <input type="text" name="sgpi" id="sgpi" placeholder="Enter your SGPI">
            <input type="text" name="fees" id="fees" placeholder="Enter your fees">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
        
    

    </div>
    <script src="scriptadminlogin.js"></script>
    
</body>
</html>
