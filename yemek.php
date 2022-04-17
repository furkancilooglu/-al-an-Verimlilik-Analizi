<?php
$baglan=mysqli_connect("localhost","root","","verimlilik");

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
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </div>
            <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Yemek ve Kalori Takibi</h3> </div>
                
            </div>
            <div class="yemekcontent">
                <div class="ustyemek">
                <div class="kalorikutu">
                    <div id="chart_div" style="width: 800px; height: 500px;"></div>
                </div>
                </div>
                <div class="liste">
                    <div class="listebuton">
                        <form action="yemektablo.php"> 
                            <input type="submit" class="button" value="Yemek Tablosunu Görüntüle">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
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