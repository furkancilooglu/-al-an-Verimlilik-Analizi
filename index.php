<?php
$baglan=mysqli_connect("localhost","root","","verimlilik");

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

       
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Yemek', 'Kalori', ],
          <?php
           $query = "SELECT * from yemek ORDER BY kalori_100gramda ASC";
           $exec = mysqli_query($baglan,$query);
           while($row = mysqli_fetch_array($exec)){

            echo "['".$row['yemek_ad']."',".$row['kalori_100gramda']."],";
        }
        

          ?>
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: 'Kalori Analizi',
            subtitle: ''
          },
         
         
        };

        var classicOptions = {
          width: 900,
          series: {
            
            
          },
          title: 'Nearby galaxies - hedeflenenverimlilik on the left, gerceklesenverimlilik on the right',
          vAxes: {
            // Adds titles to each axis.
            
            
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          
        }

        

        drawMaterialChart();
    };
    </script>
  </head>
  <body>
    
    <br><br>
    <div id="chart_div" style="width: 800px; height: 500px;"></div>
  </body>
</html>