<?php
include("process.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <title>Registration Form</title>
    
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" class="logo" href="#"><img src="logo.jpg" alt="logo" style="width:150px"></a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Log Out</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" href="register.php">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="About Us.html">About Us</a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="contact.awsp">Contact Us</a>
    </li>
    
  </ul>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="col" id="notification">
                    <?php echo $message_alert; ?>
                </div>
                <div class="regForm">
                    <h1>Fill the Details Here</h1>
                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="fullName" placeholder="Enter Full Name" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <label>Contact No.</label>
                            <input type="int" class="form-control" name="cont" placeholder="contact" minlength="10" maxlength="10" required>
                        </div>
                        <div class="form-group">
                            <label>Event</label>
                            <select class="form-control" name="event" required>
                                <option>--Select--</option>
                                <option value="Birthday">Birthday</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Marriage Anniversary">Marriage Anniversary</option>
                                <option value="Get Together">Get Together</option>
                                <option value="Inaugration">Inaugration</option>
                               
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Address of the Venue</label>
                            <input type="text" class="form-control" name="address" placeholder="address" maxlength="255" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm the Address</label>
                            <input type="text" class="form-control" name="confirmaddress" placeholder="Re-enter address" maxlength="255" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Enter the State</label>
                            <input type="text" class="form-control" name="state" placeholder="state" required>
                        </div>
                        <div class="form-group">
                            <label>Enter the City</label>
                            <input type="text" class="form-control" name="city" placeholder="city" required>
                        </div>
                        <div class="form-group">
                            <label>Zip/Pin Code</label>
                            <input type="int" class="form-control" name="zip" placeholder="zip" minlength="6" maxlength="6" required>
                        </div>
                        <div class="form-group">
                            <label>Event Date</label>
                            <input type="date" class="form-control" name="eventd" required>
                        </div>
                        <div class="form-group">
                            <label>Choose the Decoration</label>
                            <select class="form-control" name="deco" required>
                                <option>--Select--</option>
                                <option value="Flower">Flower</option>
                                <option value="Ballons">Ballons</option>
                                <option value="Diya">Diya</option>
                                <option value="Candles">Candles</option>
                                <option value="Name Decoration">Name Decoration</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Any Extra Requirement in Decoration?</label>
                            <input type="text" class="form-control" name="sug" required>
                        </div>
                        <div class="form-group">
                            <label>Food</label>
                            <select class="form-control" name="food" required>
                                <option>--Select--</option>
                                <option value="Veg">Veg</option>
                                <option value="Non-Veg">Non-Veg</option>
                                <option value="Both">Both</option>
                                <option value="South Indian Cuisine">South Indian Cuisine</option>
                                <option value="North Indian Cuisine">North Indian Cuisine</option>
                              
                            </select>
                        <!-- <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Male" required>
                                  <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gender" value="Female" required>
                                  <label class="form-check-label">Female</label>
                                </div>
                              </div>
                            </div>
                        </fieldset> -->
                        
                        <div class="form-group">
                            <label>Any Drink</label>
                            <select class="form-control" name="drink" >
                                <option>--Select--</option>
                                <option value="Soft Drink">Soft Drink</option>
                                <option value="Cold Drink">Cold Drink</option>
                                <option value="Juice">Juice</option>
                                <option value="Coffee and Tea">Coffee and Tea</option>
                                <option value="All">All</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label>No.of Guest</label>
                            <input type="int" class="form-control" name="guest" required>
                        </div>
                        
                        <!-- <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Languages Known</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="English" checked>
                                  <label class="form-check-label">English</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="French">
                                  <label class="form-check-label">French</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="languages[]" value="German">
                                  <label class="form-check-label">German</label>
                                </div>
                              </div>
                            </div>
                        </fieldset> -->
                        
                        <div class="form-group">
                            <label>Any Additional detail/requirement?</label>
                            <textarea class="form-control" rows="3" name="bio" placeholder="Write Something if you want something more..." required></textarea>
                        </div>
                       <!--  <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Enter Password" maxlength="15" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirmPassword" placeholder="Re-enter Password" maxlength="15" required>
                        </div> -->
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                         <!-- <a href="logout.php" class="btn btn-danger">Log Out</a> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      $(document).ready( function() {
        $('#notification').delay(3000).fadeOut();
      });
    </script>
  </body>
</html>