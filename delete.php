<?php
include('connection.php');

$Book_Id =  $_GET['Book_Id'];

$query = "DELETE FROM books WHERE Book_Id = '$Book_Id'";

$data = mysqli_query($conn,$query);

if($data){
    echo "Record Deleted..";
    header("location:/takshasheela/admin.php");
            exit;
}
else{
    echo "Failed to Delete..";
}

?>