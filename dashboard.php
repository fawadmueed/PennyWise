<!DOCTYPE html>
<html>
<head>
	<title>PennyWise</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.semanticui.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
  


</head>
<body style="background-image: url('22.jpg');
background-size: cover;">

	<div class="row">
		<nav class="dashNav">
		    <div class="nav-wrapper">
		      <a href="#" class="brand-logo">PennyWise</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="sass.html">Profile</a></li>
		        <li><a href="badges.html">Settings</a></li>
		        <li><a href="index.php">LogOut</a></li>
		      </ul>
		    </div>
		  </nav>
		</div>

<div class="container">
<center><h4 > Welcome User!</h4></center>
<div class="row">
<div class="col s12 ">
	<!-- <center> -->
                <div class="card-panel expense z-depth-5 ">
                  <h5 class="col s3">Add your expenses</h5>
                  
                  <div class="row">
                    <form class="col s12" id="" action="user_controller.php" method="POST">
                      <input type="" name="condition" value="add_expense" style="display: none">
                      <div class="row">
                        <div class="input-field col s3">
                          <input id="description" type="text" name="description">
                          <label for="description">Description</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s3">
                         <input id="amount" type="number" name="amount">
                          <label for="amount">Amount</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s3">
                         <input id="date" type="date" name="date">
                          
                        </div>
                      </div>
                      
                      
                        <div class="row">
                          <div class="input-field col s2">
                            <button class="btn cyan waves-effect waves-light right" type="submit" >Submit
                              <i class="mdi-content-send right"></i>
                            </button>

              </div>

	</div>
</form>
</div>
</div>
<!-- </center> -->
</div>
</div>

<div class="row">
<div class="card-panel expense z-depth-5">
  <table id="expenseTable" class="stripped">
    <thead>
    	<tr>
    		<th>Item</th>
    		<th>Amount</th>
    		<th>Date</th>
    	</tr>
    </thead>
    </table>
</div>

</div>

<div class="row">			
 <div class="col s6 offset-s4"></div>
 <div class="col s2 ">
 	<a id="menu" class="waves-effect waves-light btn btn-floating" onclick="openA()"><i class="material-icons">menu</i>
 </a></div>
 <!-- Tap Target Structure -->
  <div class="tap-target" data-activates="menu">
    <div class="tap-target-content">
      <h5>PennyWise Intro</h5>
      <p>PennyWise lets you organize your expenditures and savings! Its the right place to start organizing you finances = ) 	</p>
    </div>
  </div>

</div>	
<script type="text/javascript">

	var userExpenses;

	
	
	function openA(){
		console.log('here');
	 $('.tap-target').tapTarget('open');
	}
  
  $(document).ready(function(){
  	
 $.ajax({

  type: "POST",
  url: 'user_controller.php',
  		data: {condition:'getAllExpenses'},
  async: false,
  success: function(data){
  	userExpenses=JSON.parse(data)

  }
  
});

// console.log(userExpenses);

var tbl=$('#expenseTable');
var tr=$('<tr>');

// $.each(userExpenses,function(id,val){
// 	console.log(val);
// })


$('#expenseTable').DataTable({
data: userExpenses,
 columns: [
 		{ data: 'description' },
        { data: 'amount' },
        { data: 'date' }
       ]
});



  })
        
</script>

</body>

</html>