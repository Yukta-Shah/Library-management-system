<!DOCTYPE html>
<html lang="en">
   <head>
    <title> LMS </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" scr="bootstrap-4.4.1/js/juquery-latest.js"></script>
    <script type="text/javascript" scr="bootstrap-4.4.1/js/bootstrap.js"></script>
   <style>
    #side_bar{
      background-color: whitesmoke;
      padding: 5px;
      width: 300px;
      height:450px;

    }
   </style>
   </head>
<body>
       <nav class ="navbar navbar-expand-lg navbar-dark bg-dark">
             <div class="container-fluid">
             <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
                </div>
                <ul class ="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Admin Login</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php">User Login</a>
                          </li>
                        <li class="nav-item">
                         <a class="nav-link" href="index.php">Register</a>
                             </li>
                       </ul>
</div>
        </nav><br>
        <span><marquee> This is library Management  System  opens at 8:00 Am and close at 6:00 Pm</marquee> 
</span><br><br>
<div class="row">
  <div class="col-md-4" id=side_bar>
    <h5> Library Timing </h5>
    <ul>
      <li> Opening Timing 8:00 Am </li>
      <li> Closing Timing 6:00 Pm</li>
      <li> Sunday(Off)</li>
    </ul>
    <h5> What We Provide </h5>
        <ul>
         <li> Free Wi-Fi </li>
         <li> Peaceful Environment </li>
         <li> Newspaper</li>
        </ul>
      </div>
      <div class="col-md-8" id="main_content">
           <center><h3> User Registration Form </h3> </center>
           <form action="register.php" method="post">
            <div class="form-group">
              <label for="name">Full Name:</label>
              <input type="text" name="name" class="form-control" required>
           </div>
            <div class="form-group">
              <label for="name"> Email ID:</label>
              <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
             <label for="name"> Password</label>
              <input type="password" name="password" class="form-control" required>

             <div class="form-group">
            <label for="name"> Mobile Number</label>
          <input type="text" name="mobile" class="form-control" required>
            </div>
           <div class="form-group">
           <label for="name"> Address:</label>
            <textarea rows="3" cols="40" class="form-control" name="address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
            </div>
           </div>
          </div>
          
       </form>

        </body>
</html>