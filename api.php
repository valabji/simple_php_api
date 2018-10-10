<?php
// Here we do the connection to the DB
// HOST is usually localhost or you have to connect to the service provider to provide you with the host name
define('HOST','localhost');
// DB username is usally 'root'
define('USER','root');
// here you put the root password
define('PASS','password');
// then here you define the DB name
define('DB','DB Name');
// These are the connection statments
$conn = mysqli_connect(HOST,USER,PASS,DB);
mysqli_query($conn,'SET CHARACTER SET utf8');
$sql = $_POST['sql'];
mysqli_query($conn,'SET CHARACTER SET utf8');
$res = mysqli_query($conn,$sql);
$exect = 0;
if($res)
$exect = 1;
$result = array();
while($row = mysqli_fetch_array($res)){
array_push($result,array($row));
}
// this is the final statment that print the query result then closes the connection
echo json_encode(array("result"=>$result,"no_rows"=>mysqli_num_rows($res),"error"=>mysqli_error($conn),"executed"=>$exect));
mysqli_close($conn);
?>