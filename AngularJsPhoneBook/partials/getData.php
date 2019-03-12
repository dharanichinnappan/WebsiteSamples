<?php include 'database.php'; ?>
<?php

$query = "select contactname,mobilenumber,image from contacts";
$result = $conn->query($query);

$contactList = array();

while ($contacts = $result->fetch_assoc()) {
    $contactList[]=['contactname'=> $contacts['contactname'],'mobilenumber'=>$contacts['mobilenumber'],'image'=>base64_encode($contacts['image'])];
    //$contactList[]=base64_encode($contacts['contactname']);
    
}
//$array=array($contactList);
//echo gettype($contactList);
//echo count($contactList);
//echo count($contactList);
echo json_encode($contactList);


