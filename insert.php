<?php



$username="";
$password="";
$database="";
$host='';

$link = mysqli_connect($host, $username, $password, $database);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$business_name = mysqli_real_escape_string($link, $_POST['name']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$offer = mysqli_real_escape_string($link, $_POST['offer']);
$lat = mysqli_real_escape_string($link, $_POST['lat']);
$lng = mysqli_real_escape_string($link, $_POST['lng']);
 
// attempt insert query execution
$sql = "INSERT INTO markers (name, address, offer, lat, lng) VALUES ('$business_name', '$address', '$offer', '$lat', '$lng')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
