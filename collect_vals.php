
<?php

 //include 'CookDB.php';

$username = "tendril";
     $password = "s1llysally";
     $dbname = "cookdb";
     $servername = "localhost";
 //function load_array($ingname,$ingqty){
     
 //}
$dishname = $_POST['dishname'];
$dishtype = $_POST['dishtype'];
$dishdesc = $_POST['dishdesc'];
$ingnames = $_POST['ingname'];
$ingdescs = $_POST['ingdesc'];
$ingorders = $_POST['ingorder'];

$stepdescs = $_POST['stepdesc'];
$steporders = $_POST['steporder'];

//$cookDB= new CookDB();
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
echo ($dishname)
//$con = $cookDB->getConn();
//$con = mysql_connect("localhost", "tendril", "s1llysally");
//$c = array_map("load_array", $name,$email)
//foreach( $name as $ingnames => $n ) {
//  //print "The name is ".$n." and email is ".$email[$key].", thank you \n <br>";
//  $sql = "INSERT INTO test (name) VALUES ('$n')";
// if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//}
    //$sql = "INSERT INTO test (name)
//VALUES ('John')";

//if ($conn->query($sql) === TRUE) {
  //  echo "New record created successfully";
//} else {
  //  echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();

?>