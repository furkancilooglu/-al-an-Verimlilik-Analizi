<?php
    $baglan=mysqli_connect("localhost","root","","verimlilik");
    
    
    
    
    if(isset($_POST["gonderr"]))
    {
        $izinid=$_POST["izinid"];
        $idd=$_POST["idda"];
        $sql="UPDATE calisan SET izin_gunid='$izinid' where calisan_id='$idd'";
        $sonuc=mysqli_query($baglan,$sql);
        if($sonuc)
        {
            header("Location: http://localhost/verimlilik/ui-alert.html");
        }
      
    }
    


?>
