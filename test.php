<?php
    $baglan=mysqli_connect("localhost","root","","verimlilik");
    
    
    $molaid=$_POST["molaid"];
    $id=$_POST["id"];
    
    if(isset($_POST["gonder"]))
    {
        $sql="INSERT INTO mola_calisan(mola_durumid,calisan_id)values('".$molaid."','".$id."')";
        $sonuc=mysqli_query($baglan,$sql);
        if($sonuc)
        {
            header("Location: http://localhost/verimlilik/ui-alert.html");
        }
      
    }
    


?>