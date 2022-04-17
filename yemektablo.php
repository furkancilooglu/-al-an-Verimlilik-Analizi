<?php
$db=mysqli_connect("localhost","root","","verimlilik");

  
$query = $db->query("SELECT * from yemek_liste ");

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'calisan_ad');
        data.addColumn('string', 'calisan_soyad');
        data.addColumn('number', 'yemek');
        
        
        
        data.addRows([
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["calisan_ad"]."','".$row["calisan_soyad"]."',{v:".$row["yemek"]." , f: '".$row["yemek"]."'}],";
            
            }
            
            
            ?>
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
    </script>
  </head>
  <body>
    <div id="table_div"></div>
  </body>
</html>