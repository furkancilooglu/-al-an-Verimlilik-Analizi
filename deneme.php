
<?php

$baglan=mysqli_connect("localhost","root","","verimlilik");

?>
<style>
table, th, td {
  border:1px solid black;
  border-radius:1px;
  background-color:whitesmoke;
}
</style>
<table>
    <tr>
        <td>Departman</td>
        <td>Etkinlik</td>
    </tr>

<?php
    $query = "SELECT * from sosyal_etkinlik";
    $exec = mysqli_query($baglan,$query);
    while($row = mysqli_fetch_array($exec)){
        
                     
        //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
        $uyead = $row['departmann'];
        $uyesifre = $row['etkinlik'];
        
         
        //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
        echo "<tr>
        <td>$uyead</td>
        <td>$uyesifre</td>
        </tr>";
    }

?> 