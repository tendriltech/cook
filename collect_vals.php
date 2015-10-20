
<?php

 //include 'CookDB.php';

$username = "tendril";
     $password = "s1llysally";
     $dbname = "cookdb";
     $servername = "localhost";
 function load_array(){
     
 }
 

$dishname = $_POST['dishname'];
$dishtype = $_POST['dishtype'];
$dishdesc = $_POST['dishdesc'];
$activestatus = true;
$author = "admin";



$ingnames = $_POST['ingname'];
$ingqtys = $_POST['ingqty'];
$ingdescs = $_POST['ingdesc'];
$ingorders = $_POST['ingorder'];

//$stepdescs = $_POST['stepdesc'];
//$steporders = $_POST['steporder'];

//$cookDB= new CookDB();
$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$con = $cookDB->getConn();
$con = mysql_connect("localhost", "tendril", "s1llysally");
//$c = array_map("load_array", $name,$email)
//foreach( $name as $ingnames => $n )

/*
 * Inset Dish Name and extract the DISH ID created 
 * 
 */
$adddishsql = "INSERT INTO dishmaster(dishname,dishdesc,dishtype,activestatus,author) VALUES "
        . "('$dishname','$dishdesc','$dishtype','$activestatus','$author')";
executeSQL($adddishsql);


$dishidsql = "SELECT dishid from dishmaster where dishname ='".$dishname."'";
echo $dishidsql;
$dishid = executeReadSQL($dishidsql);

//echo (implode "",$ingnames)
$ing_items = array();
$ing_size = count($ingnames);
for($i = 0 ; $i < $ing_size ; $i++){
    // Check for part id
    if (empty($ingnames[$i])) {
        continue;
    }
    $ing_items[] = array(
        "ingname"     => $ingnames[$i], 
        "ingqty"    => $ingqtys[$i],
        "ingdesc"       => $ingdescs[$i],
            "ingorder"       => $ingorders[$i],
            "dishid"        => $dishid
    );
}

if (!empty($ing_items)) {
    $values = array();
    foreach($ing_items as $item){
        $values[] = "('{$item['ingname']}', '{$item['ingqty']}', '{$item['ingdesc']}', '{$item['ingorder']}', '{$item['dishid']}')";
    }

    $values = implode(", ", $values);

    $ingsql = "INSERT INTO ingmaster (ingname, ingqty, ingdesc, ingdesc2,dishid) VALUES  {$values}    ;" ;
    echo $ingsql;
    executeSQL($ingsql);

}
//  foreach( $ingnames as $n )
//    {
//print "The name is ".$n." , thank you \n <br>";
//  $sql = "INSERT INTO test (name) VALUES ('$n')";
// if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully <br>" ;
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

 function executeSQL($sql)
 {
     global $conn;
     //$ret = $conn->query($sql);
             
     if ($conn->query($sql) == TRUE ) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else {
          echo "New record created successfully <br>" ;
  //  return $ret; 
    }
    


 
 }
 
 function executeReadSQL($sql)
 {
     global $conn;
     $result = $conn->query($sql);
     
             if (!$conn->query("SET @a:='this will not work'")) {
        printf("Error: %s\n", $conn->error);
    }
    
    if ($result->num_rows > 0) {
    // output data of each row
                 while($row = $result->fetch_assoc()) {
        
       $ret =  $row['dishid'];
        
             }
   
    
    }
    else {
    echo "0 results";
}
    
   echo $ret;
    return $ret;
    
          //echo "New record created successfully <br>" ;
     
    
    
 }
$conn->close();

/* http://stackoverflow.com/questions/15056528/insert-php-array-into-mysql-table
 *$matstring=implode("','",$matrix[1]);

    mysql_query("INSERT INTO Australia (Price, Company, Days, Weight) VALUES ('$matstring')"); 
 * 
 *  
 */
?>
