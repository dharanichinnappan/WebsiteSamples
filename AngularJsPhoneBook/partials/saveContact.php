<?php include 'database.php'; ?>
<?php
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$mobileNumber = $_GET['mobileNumber'];
if ($firstName != "" && $mobileNumber != "") {
    $query = "insert into contacts (contactname,mobilenumber) values('$firstName','$mobileNumber')";
    if ($conn->query($query) === TRUE) {
        header("Location:index.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

?>