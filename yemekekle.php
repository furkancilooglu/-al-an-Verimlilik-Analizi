<?php
    $baglan=mysqli_connect("localhost","root","","verimlilik");
    
    
    
    
    if(isset($_POST["gonderrr"]))
    {
        $yemekid=$_POST["yemekid"];
        $iddaa=$_POST["iddaa"];
        $sql="UPDATE calisan SET yemek_id='$yemekid' where calisan_id='$iddaa'";
        $sonuc=mysqli_query($baglan,$sql);
        if($sonuc)
        {
            header("Location: http://localhost/verimlilik/ui-alert.html");
        }
      
    }
    


?>