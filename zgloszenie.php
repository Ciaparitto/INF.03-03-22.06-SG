<?php 
$conn = mysqli_connect("localhost","root","","zawody");
$lowisko = $_POST['lowisko'];
$data = $_POST['data'];
$sedzia = $_POST['Sedzia'];
$query = mysqli_query($conn,"INSERT INTO zawody_wedkarskie VALUES (NULL,0,$lowisko,$data,$sedzia)");
mysqli_close($conn);
?>