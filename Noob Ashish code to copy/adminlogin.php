<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styleadminlogin.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="scriptadminlogin.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="display.php">Display Information</a>
              </li>
              
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</div>
<br>
<div class="error">

</div>
<br>
    <div class="container">
      <div class="title">Admin Login</div>
      <div class="content">
        <!-- <form action="#" id="form">
          <div class="user-details">
            <div class="input-box">
              <span class="details">User Name</span>
              <input id= "name" type="text" placeholder="Enter your user name" required />
            </div>
            <div class="input-box">
              <span class="details">Password</span>
              <input id="password" type="password" placeholder="Enter your Password" required />
            </div>
            </div>
          <div class="button">
            <a href="/studentreg.html"><input type="submit" value="Login" /></a>
          </div>
        </form> -->
                  <div id="error">

                  </div>
                    <form id="form" action="/" method="GET" id="form">
                      <div class="user-details">
                        <div class="input-box">
                        <span class="details" for="name">User Name</span>
                        <input id="name" name="name" type="text" placeholder="Enter your user name" required>
                        </div>

                        <div class="input-box">
                        <span class="details" for="password">Password</span>
                        <input id="password" name="password" type="password" placeholder="Enter your Password" required>
                        </div>
                      </div>
                      <div class="button">
                        <input type="submit" value="Login" href="index.php"/>
                        
                      </div>
                    </form>
                  </div>
      </div>
    </div>
  </body>
</html>


<!-- <div id="error"></div>
	<form id="form" action="/" method="GET">
	  <div>
		<label for="name">Name</label>
		<input id="name" name="name" type="text" required>
	  </div>
	  <div>
		<label for="password">Password</label>
		<input id="password" name="password" type="password">
	  </div>
	  <button type="submit">Submit</button>
	</form>
</div> -->