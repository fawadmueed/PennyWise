<!DOCTYPE html>
<html>
<head>
    <title>Php Project</title>

    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
    
    .grey.lighten-4 { 
    background-color: #6f18b40f !important ;
     }
</style>

<style type="text/css">
  .login{
  background-color: #333 !important; }

  body{
  	background-image: url('22.jpg');
  }
</style>

          
</head>

<body>

<center>

    
<div class="container" >
    <div class="section"></div>
<h3>PennyWise</h3>


<div class="z-depth-5 grey lighten-4 row login" style="display: inline-block; padding: 32px 100px 0px 100px"; >

    <form method="post" class="col s12" action="user_controller.php">

        <i class="small material-icons ">person</i>
        <div class='row'>
              <div class='col s12'>
              </div>
         </div>

        <input type="" name="condition" value="login" style="display: none">
        <div class='row'>
            <div class="input-field col s12">
                   <input type="text" name="username" id="user_name" class="validate">
                <label for="user_name">Username</label>
            </div>
        </div>
        <div class='row'>
            <div class="input-field col s12">
                <label>Password:</label><input type="text" name="password">
            </div>
        </div>
        

        <div class="row">
            <button type="submit" class="btn btn-floating btn-large cyan pulse">Login</button>
            
        </div>
            


    </form>
        <div class="row">
			<a href="register.php">
	            <button class="col s12 btn btn-large waves-effect indigo"> Register</button>
	        </a>
        </div>
</div>
<!-- <div class="row">
  <div class="col s6 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-5">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="yuna.jpg" alt="" class="circle responsive-img"> notice the "circle" class
            </div>
            <div class="col s10">
              <span class="black-text">
                All that glitters is not Gold! ~ Fawad
              </span>
            </div>
          </div>
        </div>
      </div>
  </div> -->
    </center>


</div>

    
</body>
</html>