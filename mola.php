<?php 
  
   
$db=mysqli_connect("localhost","root","","verimlilik");

  
   $query = $db->query("SELECT * from mola_analiz");
   $query2 = $db->query("SELECT * from izin_analiz");
   $query3 = $db->query("SELECT * from molason");


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/v.jpg">
        <title>Verimlilik Takip Sistemi</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
    
        <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
        <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
        <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
        <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
        <link href="css/helper.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query as $row) {
            
                echo "['".$row["dk"]."',".$row["durum"]."],";
            
            }
            
            
            ?>
            
            
        ]);

        // Set chart options
        var options = {'title':'Mola Dağılımı',
                       'width':300,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          
            <?php 
            
            foreach($query2 as $row) {
            
                echo "['".$row["gun"]."',".$row["sayi"]."],";
            
            }
            
            
            ?>
            
            
        ]);

        // Set chart options
        var options = {'title':'İzin Dağılımı',
                       'width':300,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chartt_div'));
        chart.draw(data, options);
      }
    </script>




    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['scatter']});  
      google.charts.setOnLoadCallback(drawChart);

      function drawChart () {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'moladurumu');
        data.addColumn('number', 'verimlilik');

        data.addRows([
          <?php 
            
            foreach($query3 as $row) {
            
                echo "[".$row["durum"].",".$row["verim"]."],";
            
            }
            
            
            ?>
        ]);

        var options = {
          width: 800,
          height: 400,
          chart: {
            title: 'Mola Verimlilik Analizi',
            subtitle: 'Mola durumları baz alınmıştır'
          },
          hAxis: {title: 'Mola Durumu'},
          vAxis: {title: 'Verimlilik'}
        };

        var chart = new google.charts.Scatter(document.getElementById('scatterchart_material'));

        chart.draw(data, google.charts.Scatter.convertOptions(options));
      }
    </script>
    </head>
    
    <body class="fix-header fix-sidebar">
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- Main wrapper  -->
        <div id="main-wrapper">
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="verimlilik.php">
                            <!-- Logo icon -->
                            <b><img src="images/v.jpg" alt="homepage" class="dark-logo" /></b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            
                        </a>
                        <div class="baslik">
                        <h3 class="h33">Verimlilik Takip Sistemi</h3>
                        </div>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        
                            
                    </div>
                </nav>
            </div>
            <!-- End header header -->
            <!-- Left Sidebar  -->
            <div class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li class="nav-devider"></li>
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Ana Sayfa</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="verimlilik.php">Verimlilik</a></li>
                                    <li><a href="yemek.php">Yemek</a></li>
                                    <li><a href="index1.php">Sosyal Etkinlikler</a></li>
                                    <li><a href="mola.php">Mola Analizi</a></li>
                                </ul>
                            </li>
    
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-envelope"></i><span class="hide-menu">İletişim ve Mail</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="email-compose.html">E-Mail Gönder</a></li>
                                    <li><a href="https://www.google.com/intl/tr/gmail/about/" target="_blank">GMail</a></li>
                                    <li><a href="https://outlook.live.com/owa/?ref=O365.Help" target="_blank">Hotmail</a></li>
                                    <li><a href="https://www.icloud.com/" target="_blank">ICloud</a></li>
                                    
                                </ul>
                            </li>
                            
                            <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Veri Girişi</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="ui-alert.html">Veri Girişi Yap</a></li>   
                                </ul>
                            </li>
                            
                           
                            
                           
                            
                        </ul>
                    </nav>
                    
                </div>
                
            </div>
            
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Mola Analizi</h3> </div>
                
            </div>
            <div class="molacontent">
                <div class="ustgrafik">
                <div class="kutu1">
                    <h2>Mola Grafiği</h2>
                    <div id="chart_div"></div>
                </div>
                
                <div class="kutu2">
                    <h2>İzin Grafiği</h2>
                    <div id="chartt_div"></div>
                </div>
                </div>
                <br>
                <div class="kutu3">
                    <div class="kutucuk">
                    <h2>Mola/Verimlilik Grafiği</h2>
                    <div id="scatterchart_material"></div>
                    </div>
                    <div class="kutu4">
                    <span>Mola Durumları</span><br>
                    <span>Durum 1 0-20 Dakika Mola</span><br>
                    <span>Durum 2 20-40 Dakika Mola</span><br>
                    <span>Durum 3 40-60 Dakika Mola</span><br>
                    <span>Durum 4 60-90 Dakika Mola</span><br>


                    </div>
                </div>
                
           
        </div>
        
    </div>
    
    <script src="js/lib/jquery/jquery.min.js"></script>
    
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
   
    <script src="js/jquery.slimscroll.js"></script>
    
    <script src="js/sidebarmenu.js"></script>
    
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>