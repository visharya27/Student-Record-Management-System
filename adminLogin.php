<?php
    session_start();
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

    function console_log($output, $with_script_tags = false) {
      $js_code = `console.log(`. json_encode($output, JSON_HEX_TAG).`);`;
          if ($with_script_tags) {
              $js_code = '<script>' . $js_code . '</script>';
          }
          echo $js_code;
    }

    if(isSet($_POST['username'])) {  
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = sha1($_POST['password'] );
        console_log($username);

        $query = mysqli_query($conn, "SELECT * FROM users WHERE username='".addSlashes($username)."' AND password='".addSlashes($password)."'");
        $res = mysqli_num_rows($query);
        echo $res;
        if ($res == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['userobj'] = mysqli_fetch_assoc($query);

            header('Location: student-reg.php');
            exit;
        } else {
            echo 'Data does not match <br /> RE-Enter Username and Password';
        }
    }

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="adminlogin.css">
    
  </head>
  <body>
    
<div class="error">
</div>
	  
	  
	  
	<div class="hero">
    <div class="form-box">
      <div class="button-box">
        <h4 style="padding: 5px; width: max-content;">Admin Login</h4>
      </div>
      <div class="icon">
        <img src="https://studentcorner.epsiindia.org/upload/college/NIT_Hamirpur_logo.png"/>
      </div>
      <form action="adminLogin.php" id="login" method="POST" class="input-group">
        <input id="username" type="text" class="input-field" name="username" placeholder="Enter your UserName" required>
		    <input id="password" type="password" class="input-field" name="password" placeholder="Enter your Password" required>
        <button type="submit" class="submit-btn">Login</button>
      </form>
    </div>
  </div>
  </body>
</html>