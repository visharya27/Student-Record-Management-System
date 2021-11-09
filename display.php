<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "student_records";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check for connection success
if(!$conn){
    die("connection to this database failed due to" . mysqli_connect_error());
}
$query = $_GET["rollSearch"];
            $sql = "select * from students where rollno = $query"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $name = $row['name'];
                $age = $row['age'];
                $gender = $row['gender'];
                $dob = $row['dob'];
                $email = $row['email'];
                $phone = $row['phone'];
                $fname = $row['fname'];
                $mname = $row['mname'];
                $address = $row['address'];
                $yoadm = $row['yoadm'];
                $rollno = $row['rollno'];
                $dept = $row['dept'];
                $notes = $row['notes'];
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NITH - Student Records</title>
    <link rel="stylesheet" href="studentreg.css">
    <style>
        .label{
            margin: 10px 50px;
        }
    </style>
</head>

<body>
    <div class="hero">
        <div style="width: 40%; height: 700px;" class="form-box">
            <?php
            if($noResult){
                echo '<div class="button-box">
                <h2 style="padding: 5px; width: max-content;">Roll no. does not exist!</h4>
                </div>
                <a style="margin-left:65px; text-decoration: none;" href="adminLogin.html">Register a New Student?</a>';
            }
            else{
                echo '
                <div class="button-box">
                <h2 style="padding: 5px; width: max-content;">Student\'s Detail</h4>
                </div>
                <div style="flex-direction: column;" class="input-fields">
                <div class="label">Name: '.$name.'</div>
                <div class="label">Roll no.: '.$rollno.'</div>
                <div class="label">Father\'s Name: '.$fname.'</div>
                <div class="label">Mother\'s Name: '.$mname.'</div>
                <div class="label">Age: '.$age.'</div>
                <div class="label">Gender: '.$gender.'</div>
                <div class="label">Date of Birth: '.$dob.'</div>
                <div class="label">Email: '.$email.'</div>
                <div class="label">Mobile: '.$phone.'</div>
                <div style="margin: 10px 50px 20px 50px;" class="label">Address: '.$address.'</div>
                <div class="label">Year of Admission: '.$yoadm.'</div>
                <div class="label">Department: '.$dept.'</div>
                <div class="label">Comments: '.$notes.'</div>
                </div>
                </div>';}
                ?>
                
                </div>
                </div>
                </body>
                
                </html>