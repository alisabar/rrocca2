<?php
 //create a mySQL DB connection:
$dbhost = "182.50.133.146";
$dbuser = "auxstudDB6c";
$dbpass = "auxstud6cDB1!";
$dbname = "auxstudDB6c";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 //testing connection success
 if(mysqli_connect_errno()) {
 die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"
 );
 }
 
 
 $query="SELECT * FROM tbl_item_223";
 $result= mysqli_query($connection, $query);
 if(!$result){
 	die("DB query failed.");
 }
 $glasses= array();
 while ($row=mysqli_fetch_row($result)) {
     $item=array();
	 $item["index"]=$row[0];
	 $item["model"]=$row[1];
	  $item["price"]=$row[2];
	   $item["is_optic"]=$row[3];
	    $item["is_poleroid"]=$row[4];
		$item["pic_name"]=$row[5];
		$glasses[]=$item;
 }
 
 echo json_encode($glasses, JSON_PRETTY_PRINT);
 mysqli_free_result($result);
 mysqli_close($connection);
 
?>

<?php

/*
$glasses= array
  (
  array(
	  "index"=>"1"
	  ,"model"=>"5456554"
	  ,"price"=>"359"
	  ,"is_optic"=>"1"
	  ,"is_poleroid"=>"1"
	  ,"pic_name"=>"item_black_round"
  ),
  array(
	  "index"=>"2"
	  ,"model"=>"5456551"
	  ,"price"=>"359"
	  ,"is_optic"=>"1"
	  ,"is_poleroid"=>"1"
	  ,"pic_name"=>"item_black_square"
  ),
  array(
	  "index"=>"3"
	  ,"model"=>"5456552"
	  ,"price"=>"359"
	  ,"is_optic"=>"1"
	  ,"is_poleroid"=>"1"
	  ,"pic_name"=>"item_brown"
  ),
  array(
	  "index"=>"4"
	  ,"model"=>"5456553"
	  ,"price"=>"359"
	  ,"is_optic"=>"1"
	  ,"is_poleroid"=>"1"
	  ,"pic_name"=>"item_black_square"
  ),
  
  /*
  array("1","5456555","1359",1,0,"item_black_square"),
  array("1","5456556","259",0,1,"item_black_square"),
  array("1","5456557","159",1,1,"item_black_square"),
  array("1","5456558","399",1,0,"item_brown"),
  array("1","5456559","3.8",1,1,"item_black_round"),
  
  );
	
	
	echo json_encode($glasses, JSON_PRETTY_PRINT);
	/*
	foreach ($glasses as $glass) {
		$class=$glass[5];
		echo "aa".
		"bb";
	}
	 */

?>
