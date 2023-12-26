<?php
include_once 'db.php';
$sql = "DELETE FROM students WHERE booktitle='" . $_GET["booktitle"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: 3-database.php");
   alert("Successfully Deleted");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
