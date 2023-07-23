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

					














			//daata insert method
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


					$sql ="SELECT DISTINCT ssc FROM register";


					$sscyear = $this -> connection -> query($sql);

					if ($sscyear){
						return $sscyear;
					}else{
						return false;
					}




				}



				

				public function login($sscyear,$contact){


					$sql ="SELECT * FROM register WHERE ssc='$sscyear' and contact='$contact' ";

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
						return $userloginfo;
					}






				}




}



?>