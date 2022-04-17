<?php
$db=mysqli_connect("localhost","root","","verimlilik");

  
$query = $db->query("SELECT * from calisan ");

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
        data.addColumn('number', 'hedeflenen verimlilik');
        data.addColumn('number', 'gerceklesen verimlilik verimlilik');
        
        
        data.addRows([
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["calisan_ad"]."','".$row["calisan_soyad"]."',{v:".$row["hedeflenen_verimlilik"]." , f: '".$row["hedeflenen_verimlilik"]."'},{v:".$row["gercek_verimlilik"]." , f: '".$row["gercek_verimlilik"]."'}],";
            
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