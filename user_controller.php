<?php
session_start();
include "model.php";

class User extends dbConn{

	public function registration($data){

		 $firstName =$data['fname'];
		 $lastname = $data['lname'];
		 $username = $data['username'];
		 $password = $data['password'];
		 $email = $_POST['email'];
		 $phone = $_POST['phone'];


		 $userExist=$this->checkUserExist($firstName,$email);

		 if(!$userExist)
		 {
		 	echo "Acount doesnot exist! Creating One ...";
			$sql="INSERT INTO userdata(first_name,last_name,username,password,email,phone) 
			VALUES('".$firstName."','".$lastname."','".$username."','".$password."','".$email."','".$phone."')";

			$this->db->query($sql);

			if($this->db->error)
			{
				die('Query error:'.$this->db->error);
			}
				print_r('<br> User Registered Successfully !!! ');
			
		}
		else
		{
			echo "Sorry Account already Exist!";
		}
	}

	public function login($data)
		{
			$username = $data['username'];
		 	$password = $data['password'];

		 	$sql="SELECT * FROM userdata WHERE username='".$username."' AND password='".$password."'" ;
		 	
			$result=$this->db->query($sql);

			if($this->db->error)
			{
				die('Query error:'.$this->db->error);
			}
				
			if ($result->num_rows > 0) {
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        print_r('Login Successfull');
			        $_SESSION['userData']=$row;
			        // $this->preData($row);
			        header('Location: dashboard.php');
			    }
			} 
			else {
			    echo "0 results , Login Failed";
			}


		}

	public function userData($username)
		{

		}


	protected function preData($data){
		print_r("<pre>");
		print_r($data);
		print_r('</pre>');
		// 	exit();
	}

	function checkUserExist($firstNameX,$emailX){

		$sql="SELECT * FROM userdata WHERE first_name='".$firstNameX."' AND email='".$emailX."' ";
		$result=$this->db->query($sql);

		if($this->db->error){
			die('Error Checking User'.$this->db->error);
		echo "Success Sending Match Query";
		}

		if($result->num_rows>0)
		{
			while($row=$result->fetch_assoc())
			{
				// $this->p($row);
				return true;
			}
			
		}
		else
		{
			return false;
		}

	}


}


class expense extends User{

	public function addExpense($data){
		print_r('<pre>');
		print_r($data);
		print_r('</pre>');

		$description=$_POST['description'];
		$amount=$_POST['amount'];
		$date=$_POST['date'];

		$sql='INSERT INTO `expense` (`description`, `amount`, `date`, `user_id`) 
			VALUES ( "'. $description.'", "'.$amount.'", "'.$date.'", "'.$_SESSION["userData"]['id'].'")';

		$this->db->query($sql);
		if($this->db->error)
			die('Expense Query Error'.$this->db->error);
		else{
			header('Location: dashboard.php');
			print_r('Expense Added ! ');
		}

	}

	public function getAllExpense(){

		$all_exp_array=[];

		$sql='SELECT * FROM expense WHERE user_id="'.$_SESSION['userData']['id'].'"';

		$result=$this->db->query($sql);

			if($this->db->error)
			{
				die('Getting All Expenses Query error:'.$this->db->error);
			}
				
			if ($result->num_rows > 0) 
			{
			    // output data of each row
			    while($row = $result->fetch_assoc()) 
			    {
			    	array_push($all_exp_array,$row);
			        
			    }
			    // print_r($all_exp_array);
			    echo json_encode($all_exp_array);
			} 
			else 
			{
			    echo "0 results , Login Failed";
			}

	}
}

// $myDb=new dbConn();


$condition = $_POST['condition'];

$myUser=new User();
$expense=new expense();



switch($condition){
	case "register":
		$myUser->registration($_POST);
		break;


	case "login":
		$myUser->login($_POST);
		break;

	case "add_expense":
		$expense->addExpense($_POST);
		
	case "getAllExpenses":
		$expense->getAllExpense($_POST);
	default:
		break;
}

?>