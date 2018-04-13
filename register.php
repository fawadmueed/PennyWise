<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
      <div class="container">
         <h3>Register</h3>
         <center>
            <div class="row">
               
                  <form method="post" class="col s12" action="user_controller.php">
                     <input type="" name="condition" value="register" style="display: none">
                     <div class='row'>
                        <div class="input-field col s12">
                           <label>First Name *:</label><input type="text" name="fname"><br>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="input-field col s12">
                           <label>Last Name *:</label><input type="text" name="lname"><br>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="input-field col s12">
                           <label>Username*:</label><input type="text" name="username"><br>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="input-field col s12">
                           <label>Password*:</label><input type="text" name="password"> <br>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="input-field col s12">
                           <label>Email:</label><input type="text" name="email"> <br>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="input-field col s12">
                           <label>Phone:</label><input type="text" name="phone"> <br>
                        </div>
                     </div>
                     <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                     </div>
                  </form>
               
            </div>
      </div>
      </center>
   </div></body></html>