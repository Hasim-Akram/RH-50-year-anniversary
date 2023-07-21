<?php


 


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


					$sql ="SELECT * FROM register";


					$sscyear = $this -> connection -> query($sql);

					if ($sscyear){
						return $sscyear;
					}else{
						return false;
					}




				}




}



?>