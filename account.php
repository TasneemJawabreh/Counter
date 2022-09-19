<?php



	
	  session_start();
	  if (isset($_SESSION['e'])){
		$emaill  = $_SESSION['e'];
		echo "$emaill";

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="training1";
		
		
		{
		
			$conn = new mysqli($servername, $username, $password, $dbname);
		
			if ($conn->connect_error) {
				echo "can not connect to database";
				exit;
			} else {
			}
		
		
			$qr_str = 'select * from authentication ';
		
			$result = $conn->query($qr_str);
			
			for ($i = 0; $i < ($result->num_rows); $i++) {
		
				$row = $result->fetch_assoc();
		
					if ($row['email'] == $emaill) {
						$fname=$row['first_name'];
						$lname=$row['last_name'];
		echo "$fname";
		<br>
		echo "$lname";
		
					} 
		
		
		
		
			}
		
		
		
		$conn->close();
		}

	}else{
		echo "error";
	}




	

?>

