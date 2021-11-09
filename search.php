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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
    td {
        background-color: #dbd4f5;
        border: 1px solid black;
    }

    th,
    td {
        font-weight: bold;
        border: 1px solid black;
        padding: 10px;
        text-align: center;
    }

    td {
        font-weight: lighter;
    }
    </style>
</head>

<body>
    <div class="hero">
        <div style="width: 1000px; height: 80vh;" class="form-box">
            <div style="text-align: center; width: 800px; height: 30px; font-size: 25px;" class="button-box">
                Search results for <i>"<?php echo $_GET["nameSearch"] ?>"</i>
            </div>
            <div class="container">
                <section>
                    <table style="margin: 0 auto; font-size: large; border: 1px solid black;">
                        <tr>
                            <th style="width: 200px;">Roll no.</th>
                            <th style="width: 200px;">Name</th>
                            <th style="width: 400px;">Department</th>
                        </tr>
                        <?php
            $query = $_GET["nameSearch"];
            $sql = "select * from students where match (name, rollno) against ('$query')"; 
            $result = mysqli_query($conn, $sql);
            $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
                $noResult = false;
                $name = $row['name'];
                $rollno = $row['rollno'];
                $dept = $row['dept'];
                
              echo'<tr>
                <td><a href="display.php?rollSearch='.$rollno.'">'. $rollno.'</a> </td>
                <td>'. $name.' </td>
                <td>'. $dept.' </td>
                </tr>';
            }
            
            ?>
                    </table>
                </section>
                <?php
                    if($noResult){
                        echo '<h2 style="margin: 20px 65px;">No Results Found!</h2>
                        <a style="margin-left:65px; text-decoration: none;" href="adminLogin.php">Register a New Student?</a>
                        ';
                    }
                ?>
            </div>
        </div>

    </div>
</body>

</html>