
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// $join = mysql_query("SELECT offers.busines_id
// FROM offers
// INNER JOIN Customers
// ON offers.CustomerID=Customers.CustomerID;")


//   $sql= mysql_query("SELECT business_offer_name, business_offer_description, business_offer_price
//   	FROM `offers`")
//     or  die(mysql_error());


// while ($row = mysql_fetch_assoc($sql)) {
// echo $row['business_offer_name'];
// echo $row['business_offer_description'];
// echo $row['business_offer_price'];

// }

$query =   "SELECT business.business_id, offers.business_id
                        FROM business, offers
                        WHERE business.business_id = offers.business_id ";

$result = mysql_query($query) or die(mysql_error());

   while ($row = mysql_fetch_array($result)) {


  echo $row['business_id'];
  


 }
?>
