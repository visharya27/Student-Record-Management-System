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
    $dept = $_POST['dept'];
    $notes = $_POST['notes'];
    $sql = "INSERT INTO `student_records`.`students` (`name`, `age`, `gender`,`dob`, `email`, `phone`, `fname`, `mname`, `address`, `semester`, `rollno`, `dept`, `notes`, `date`) VALUES ('$name', '$age', '$gender','$dob', '$email', '$phone','$fname','$mname','$address','$semester','$rollno','$dept','$notes', current_timestamp());";
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
    <title>NITH - Student Records</title>
    <link rel="stylesheet" href="studentreg.css">
</head>
<body>
<div class="error">
</div>
	<div class="hero">
    <div class="form-box">
      <div class="button-box">
        <h4 style="padding: 5px; width: max-content;">Enter the student's details</h4>
        <?php
            if($insert == true){
            echo "<div class='submitMsg'>Thanks for submitting your form.</div>";
        }
        ?>
        </div>
      <form action="student-reg.php" method="post" id="student">
            <div class="input-fields">
            <div class="input-group">
            <input type="text" name="name" id="name" class="input-field" placeholder="Student's name">
            <input type="number" name="age" id="age" class="input-field" placeholder="Student's Age">
            <div class="input-field" style="border: none;">
            <div class="label">Gender:</div>
            <input type="radio" name="gender" id="male" required value="male" checked>
            <label for="male" style="margin-right: 10px;">Male</label>
            <input type="radio" name="gender" id="female" required value="female">
            <label for="female">Female</label><br>
            </div>
            <input type="date" name="dob" id="dob" placeholder="Student's Date of Birth" class="input-field" required>
            <input type="email" name="email" id="email" placeholder="Student's email" class="input-field" required>
            <input type="phone" name="phone" id="phone" placeholder="Student's phone no" class="input-field" required>
            <input type="text" name="fname" id="fname" placeholder="Student's fathers name" class="input-field" required>
            </div>
            <div class="input-group">
            <input type="text" name="mname" id="mname" placeholder="Student's mothers name" class="input-field" required>
            <input type="text" name="address" id="address" placeholder="Student's address" class="input-field" required>
            <input type="number" name="semester" id="semester" placeholder="Student's semester" class="input-field" required>
            <input type="number" name="rollno" id="rollno" placeholder="Student's roll no" class="input-field" required>
            <div style="display: table;">
            <label for="dept" style="margin-right: 10px;">Department:</label>
            <select name="dept" id="dept">
            <option value="Computer Science">Computer Science</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Electronics Comm.">ECE</option>
            <option value="Electrical">Electrical</option>
            <option value="Material Science">Material Science</option>
            <option value="Civil">Civil</option>
            <option value="Chemical">Chemical</option>
            <option value="Maths & Compt">MNC</option>
            </select>
            </div>
            <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Any notes ?"></textarea>
            </div>    
            </div>
            <button id="btn" type="submit" value="Submit" class="submit-btn">Submit</button> 
        </form>
    </div>
  </div>
</body>
</html>
