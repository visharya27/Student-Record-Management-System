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
            while($row = mysqli_fetch_assoc($result)){
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
            <div class="button-box">
                <h2 style="padding: 5px; width: max-content;">Student's Detail</h4>
            </div>
            <div style="flex-direction: column;" class="input-fields">
                    <div class="label">Name: <?php echo $name ?></div>
                    <div class="label">Roll no.: <?php echo $rollno ?></div>
                    <div class="label">Father's Name: <?php echo $fname ?></div>
                    <div class="label">Mother's Name: <?php echo $mname ?></div>
                    <div class="label">Age: <?php echo $age ?></div>
                    <div class="label">Gender: <?php echo $gender ?></div>
                    <div class="label">Date of Birth: <?php echo $dob ?></div>
                    <div class="label">Email: <?php echo $email?></div>
                    <div class="label">Mobile: <?php echo $phone ?></div>
                    <div style="margin: 10px 50px 20px 50px;" class="label">Address: <?php echo $address ?></div>
                    <div class="label">Year of Admission: <?php echo $yoadm ?></div>
                    <div class="label">Department: <?php echo $dept ?></div>
                    <div class="label">Comments: <?php echo $notes ?></div>
                    </div>
                </div>

            </div>
        </div>
</body>

</html>