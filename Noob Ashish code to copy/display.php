<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "srmf";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `student records management`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    
    <link rel="stylesheet" href="style2.css">
</head>
  
<body>
    <section>
        <h1>Students Records</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
                <th>S No.</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Email</th>
                <th>Phone No.</th>
                <th>Fathers Name</th>
                <th>Mothers Name</th>
                <th>Address</th>
                <th>Semester</th>
                <th>Roll No.</th>
                <th>Department ID</th>
                <th>CGPI</th>
                <th>SGPI</th>
                <th>Fees</th>
                <th>Other</th>
                <th>Timestamp</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
               
   

                // We can fetch in a better way using the while loop
                while($rows=$result->fetch_assoc())
                {
                    // echo var_dump($row);
                    
                    
                
            
            
            
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['sno']; ?></td>
                <td><?php echo $rows['name']; ?></td>
                <td><?php echo $rows['age']; ?></td>
                <td><?php echo $rows['gender']; ?></td>
                <td><?php echo $rows['dob']; ?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><?php echo $rows['phone']; ?></td>
                <td><?php echo $rows['fname']; ?></td>
                <td><?php echo $rows['mname']; ?></td>
                <td><?php echo $rows['address']; ?></td>
                <td><?php echo $rows['semester']; ?></td>
                <td><?php echo $rows['rollno']; ?></td>
                <td><?php echo $rows['did']; ?></td>
                <td><?php echo $rows['cgpi']; ?></td>
                <td><?php echo $rows['sgpi']; ?></td>
                <td><?php echo $rows['fees']; ?></td>
                <td><?php echo $rows['other']; ?></td>
                <td><?php echo $rows['dt']; ?></td>
            </tr>
            <?php
                
            }
             ?>
        </table>
    </section>
</body>
  
</html>