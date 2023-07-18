<?php
// include database connection file
include_once("config.php");


$nidn = $_GET['nidn'];

// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM dosen WHERE nidn=$nidn");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php?url=dosen");
?>