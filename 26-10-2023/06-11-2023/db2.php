<?php
$sn="localhost";
$un="root";
$pass="";
$dn="ghgh";
$conn=mysqli_connect($sn,$un,$pass,$dn);
 if ($conn){
    echo"SUCCESS";
}
else{
    echo"UNSUCCESS";
}
mysqli_query($conn,"insert into `xcv`(name,class,gender) values ('avc','bca','male')");
?>