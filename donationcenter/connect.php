<?php
include_once "session.php";
class connect2db{

	   private $servername;
     private $username;
     private $password;
     private $dbname;

     public function connect() #to connect the backend of php with your database.
     {
       $this->servername="localhost";  #these four parameters are fixed when you want to connect a database.
       $this->username="root";
       $this->password="";
       $this->dbname="blood_donation";

       $conn=new mysqli($this->servername,
                        $this->username,
                        $this->password,
                        $this->dbname);
       return $conn; #return the connection key or object.

     }

	 public function errorhandle()
	 {
		 if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();  //to handle connection errors
		}
	 }


	 /*** for registration process ***/
		public function insert_tables($fname, $lname, $email, $password, $phone, $gender, $address, $dob){
		$sql="SELECT * FROM users WHERE email='$email';";

 //checking if the username or email is available in conn
		 $check =  $this->connect()->query($sql) ;
		 $count_row = $check->num_rows;


 //if the record isnt already in db then insert to the tables
		if ($count_row == 0){

			$ret = mysqli_query($this->connect(),"INSERT INTO users(fname, lname, email, password, phone, gender, address, dob)
			VALUES('$fname', '$lname', '$email', '$password', '$phone', '$gender', '$address', '$dob');
			");
			// in case the first statement was executed successfully, execute another one
			if ($ret){
			$ret1 = mysqli_query($this->connect(), "INSERT INTO appointments(email, name, phone)
						VALUES('$email', '$fname', '$phone');
						");
						// in case the first two statements got executed.. make a third one.
						if($ret1){
							$ret2 = mysqli_query($this->connect(), "INSERT INTO inquiries(email, name)
							VALUES('$email', '$fname');
										");
						}
						}
		return $ret2;
		}
		else {
			 return false;
		 }
		}

	 /*public function insert_tables($fname, $lname, $email, $password, $phone, $gender, $address, $dob)
		{
			$ret = mysqli_query($this->connect(),"INSERT INTO users(fname, lname, email, password, phone, gender, address, dob)
			VALUES('$fname', '$lname', '$email', '$password', '$phone', '$gender', '$address', '$dob');
			");
			// in case the first statement was executed successfully, execute another one
			if ($ret){
			$ret1 = mysqli_query($this->connect(), "INSERT INTO appointments(email, name, phone)
						VALUES('$email', '$fname', '$phone');
						");
						// in case the first two statements got executed.. make a third one.
						if($ret1){
							$ret2 = mysqli_query($this->connect(), "INSERT INTO inquiries(email, name)
							VALUES('$email', '$fname');
										");
						}
						}
			return $ret2;
		}*/

	/*** for login process ***/

	public function chk_login($emailusername,$password){
			$sql2="SELECT id from users WHERE email='$emailusername'
			and password='$password'";

			//checking if the email is available in the table
			$result = mysqli_query($this->connect(),$sql2);
			$user_data = mysqli_fetch_array($result);
			$count_row = $result->num_rows;
			if ($count_row == 1) {
			return true;
			}
			else{ return false;}
			}


			public function update_appt($email, $blood){

			$ret = mysqli_query($this->connect(),"UPDATE appointments
													SET blood = '$blood'
													WHERE email = '$email'");

			return $ret;

		}

		public function appt($dayt, $time, $loc, $id){
			$timestamp = date("Y-m-d H:i:s");
												$res = mysqli_query($this->connect(),"UPDATE users
												SET donation = '$dayt'
												WHERE id = '$id';"
												);
												// in case the first statement was executed successfully, execute another one
												if ($res){
												$res1 = mysqli_query($this->connect(), "UPDATE appointments as a
															SET a.date = '$dayt',
															a.loc =  '$loc',
															a.time = '$time',
															a.doc = '$timestamp'
															WHERE uid = '$id';"
															);
															}

											return $res1;
										}


		public function update_profile($email, $fname, $phone, $password, $address, $id){

												$res = mysqli_query($this->connect(),"UPDATE users
												SET fname = '$fname',
												email = '$email',
												password = '$password',
												phone = '$phone',
												address = '$address'
												WHERE id = '$id';"
												);
												// in case the first statement was executed successfully, execute another one
												if ($res){
												$res1 = mysqli_query($this->connect(), "UPDATE appointments
															SET email = '$email',
															name =  '$fname',
															phone = '$phone'
															WHERE uid = '$id';"
															);
															// in case the first two statements got executed.. make a third one.
															if($res1){
																$res2 = mysqli_query($this->connect(), "UPDATE inquiries
																SET email = '$email',
																name = '$fname'
																WHERE uid = '$id';"
																			);
															}
															}

		return $res2;
	}

					// this is for the inquiries
					public function insertcontact($email, $msg)
					{
						$ret = mysqli_query($this->connect(),"UPDATE inquiries
						SET msg = '$msg'
						WHERE email = '$email';");
						return $ret;
					}


				public function displayintable_contact(){
							$result = mysqli_query($this ->connect(),"SELECT * FROM inquiries");

						echo "<table class =\"table table-light table-hover\" style = \"width: 80%; margin-left:auto; margin-right:auto; margin-top:60px;\">
						<strong><h1 class=\"text-center text-danger\" style = \"font-weight:1; font-size: 35px;\"> User Enquiries </h1></strong>
						<tr>
						<th>ID</th>
						<th>First name</th>
						<th>Email</th>
						<th>Message</th>
						</tr>";

						while($row = mysqli_fetch_array($result))
						{
						echo "<tr>";
						echo "<td>" . $row['uid'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['email'] . "</td>";
						echo "<td>" . $row['msg'] . "</td>";
						echo "</tr>";
						}
						echo "</table>";

						mysqli_close($this -> connect());
					}



}
?>
