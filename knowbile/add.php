<?php 
$model=$_POST['model'];
$released=$_POST['released'];
$cpu=$_POST['cpu'];
$gpu=$_POST['gpu'];
$ram=$_POST['ram'];
$internal=$_POST['internal'];
$memory=$_POST['memory'];
$battery=$_POST['battery'];
$dtype=$_POST['dtype'];
$dsize=$_POST['dsize'];
$resolution=$_POST['resolution'];
$rearc=$_POST['rearc'];
$frontc=$_POST['frontc'];

include 'db.php';

$sql = "INSERT INTO mobile_items (model,released,cpu,gpu,ram,internal,memory,battery
,dtype,dsize,resolution,rearc,frontc)
VALUES ('$model','$released','$cpu','$gpu','$ram','$internal','$memory','$battery',
'$dtype','$dsize','$resolution','$rearc','$frontc')";
$conn= mysqli_connect("localhost","root","","knowbile");
$result = mysqli_query($conn, $sql);
if($result){
    header('Location:adminadd.php');
}
else{
    echo "NUll";
}
?>