<?php
$baglan=mysqli_connect("localhost","root","","verimlilik");

$departmansec=$_POST["departmansec"];
$etkinliksec=$_POST["etkinliksec"];
if(isset($_POST["ekle"]))
    {
        $sql="INSERT INTO sosyal_etkinlik(departmann,etkinlik)values('".$departmansec."','".$etkinliksec."')";
        $sonuc=mysqli_query($baglan,$sql);
        if($sonuc)
        {
            header("Location: http://localhost/verimlilik/index1.php");
        }
      
    }


?>    