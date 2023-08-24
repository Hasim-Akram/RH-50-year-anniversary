<?php


 
error_reporting(E_ALL & ~E_NOTICE);

session_start();


	class register{



			private $host="localhost";
			private $user="root";
			private $pass="";
			private $db="rh50";


			public $connection;


			//database connetion method
			public function __construct(){

				$connect = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);


				$this -> connection = $connect ;

				
					}

					








			//session for ssc year and phone number 

			public function mainlogin($sscyear,$contact){


				$sql="INSERT INTO user(ssc,contact) values('$sscyear','$contact')";

				$userloginfogg = $this -> connection -> query($sql);
				

				if($userloginfogg){
					$querydata ="SELECT * FROM userinfo";
					$querydatatt = $this -> connection -> query($querydata);

					if($querydatatt){
	
						while($querydatattt = $querydatatt -> fetch_assoc()){
	
							$_SESSION['ssc']=$querydatattt['ssc'];
							$_SESSION['contact']=$querydatattt['contact'];
							
	
						
					}
						header("location:main.php");
					}else{
						return $querydatatt;
					}
				}		
					
				else{
					return $userloginfogg;
				}
			

}





			//daata insert method
			public function mainreg($name,$fname,$mname,$designation,$sscyear,$blood,$email,$contact,$guestno,$guestname,$paymode,$payamount,$paydate,$paynumber,$trxid,$presentadd,$tshirt,$uimage,$imaget){

				$sqldd="INSERT INTO userinfo(name,contact,ssc,designation,fname,mname,email,blood,presentadd,noguest,guestname,paymode,payamount,paydate,paynumber,trxid,tshirt,image) values('$name','$contact','$sscyear','$designation','$fname','$mname','$email','$blood','$presentadd','$guestno','$guestname','$paymode','$payamount','$paydate','$paynumber','$trxid','$tshirt','$uimage')";


				move_uploaded_file($imaget,'images/'.$uimage);

				$data = $this -> connection -> query($sqldd);

						 if($data){
									echo "<script> confirm('Your data submit successfully')</script>";
							}else{
								echo "<script> alert('Your Phone number is registered , please login')</script>";
							   }


				

			}
		





			//daata insert method big form
				public function registration($name,$fname,$mname,$designation,$sscyear,$blood,$email,$contact,$guestno,$guestname,$paymode,$payamount,$paydate,$paynumber,$trxid,$presentadd,$permanentadd,$info,$tshirt,$uimage,$imaget){

					$sql="INSERT INTO register(name,fname,mname,designation,ssc,blood,email,contact,noguest,guestname,paymode,payamount,paydate,paynumber,trxid,presentadd,permanentadd,info,tshirt,image) values('$name','$fname','$mname','$designation','$sscyear','$blood','$email','$contact','$guestno','$guestname','$paymode','$payamount','$paydate','$paynumber','$trxid','$presentadd','$permanentadd','$info','$tshirt','$uimage')";


				    move_uploaded_file($imaget,'images/'.$uimage);




					$data = $this -> connection -> query($sql);

							 if($data){
                                        return "data insert successful";
                                }else{
                                         return "data insert failed";
                                   }


					

				}

				//data view function

				public function ssc(){


					$sql ="SELECT DISTINCT ssc FROM userinfo group by ssc DESC";


					$sscyear = $this -> connection -> query($sql);

					if ($sscyear){
						return $sscyear;
					}else{
						return false;
					}




				}



				public function ses($id){
					$sql ="SELECT * FROM userinfo WHERE id=$id ";

  					$udata = $this -> connection -> query($sql);
					if ($udata -> num_rows >=1 ){
						$ud = $udata ->fetch_assoc();
						return $ud;
						
					}
				}



				public function login($sscyear,$contact){


					$sql ="SELECT * FROM userinfo WHERE ssc='$sscyear' and contact='$contact' ";

					$userloginfo = $this -> connection -> query($sql);

					

					if ($userloginfo -> num_rows >=1 ){

						while($userloginfod = $userloginfo -> fetch_assoc()){
						
								

							$_SESSION['contact']=$userloginfod['contact'];
							$_SESSION['ssc']=$userloginfod['ssc'];
							$_SESSION['name']=$userloginfod['name'];
							$_SESSION['id']=$userloginfod['id'];
							$_SESSION['payamount']=$userloginfod['payamount'];
							$_SESSION['noguest']=$userloginfod['noguest'];
							$_SESSION['tshirt']=$userloginfod['tshirt'];
							$_SESSION['image']=$userloginfod['image'];

							

						}



						header("location:ticket.php");
					}else{
						echo "<script> alert('select ssc year and enter your registered phone number');</script>";
						echo "<script type='text/javascript'> document.location ='login.php'; </script>";
						
					}
				}

				public function  countreg(){


					$sql="SELECT count(id) as countreglist FROM userinfo";

				  
					$count = $this -> connection -> query($sql);
					 
				  if ($count) {
					return $count;
				}else{
					return false;
				}
				

			}

			//view list

			public function viewmethod(){


				$sql ="SELECT * FROM userinfo";


				$data = $this -> connection -> query($sql);

				if ($data){
					return $data;
				}else{
					return false;
				}




			}



			
			public function edit($contact){


				$sql ="SELECT * FROM userinfo where contact='$contact'";

				$uppp= $this -> connection -> query($sql);

				if ($uppp) {
					return $uppp;
				}else{
					return false;
				}

			}

			public function updatedata($name,$fname,$mname,$designation,$sscyear,$blood,$email,$contact,$guestno,$guestname,$paymode,$payamount,$paydate,$paynumber,$trxid,$presentadd,$tshirt){

				$sqlupdate="UPDATE userinfo SET name='$name',ssc='$sscyear',designation='$designation',fname='$fname',mname='$mname',email='$email',blood='$blood',presentadd='$presentadd',noguest='$guestno',guestname='$guestname',paymode='$paymode',payamount='$payamount',paydate='$paydate',paynumber='$paynumber',trxid='$trxid',tshirt='$tshirt' WHERE contact='$contact'";

				$updatedata = $this -> connection -> query($sqlupdate);

						 if($updatedata){
							echo "<script>alert('You have successfully update the data');</script>";
							echo "<script type='text/javascript'> document.location ='ticket.php'; </script>";
								
							}else{
								echo "<script> alert('Your Phone number is registered , please login')</script>";
							   }
							  


			}

			public function imgupdate($updatename,$updatecontact,$uimage){

				$sqlupdateimg="UPDATE userinfo SET image='$uimage' WHERE contact='$updatecontact'";

				$updatedata = $this -> connection -> query($sqlupdateimg);

						 if($updatedata){
							echo "<script>alert('You have successfully update the data');</script>";
							//echo "<script type='text/javascript'> document.location ='ticket.php'; </script>";
							echo '<meta HTTP-EQUIV="REFRESH" content="0; url=ticket.php">';
								
							}else{
								echo "<script> alert('Your Phone number is registered , please login')</script>";
							   }

			}
			
		





}



?>