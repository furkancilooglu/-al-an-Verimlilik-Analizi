<?php
$baglan=mysqli_connect("localhost","root","","verimlilik");

?>

<!DOCTYPE html>
<html lang="tr">

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
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Durum', 'Sayısı'],
          <?php
           $query = "SELECT * from verimlilik_analizi";
           $exec = mysqli_query($baglan,$query);
           while($row = mysqli_fetch_array($exec)){

            echo "['".$row['durum']."',".$row['sayi']."],";
        }
        

          ?>
          
        ]);

        var options = {
          title: 'Genel Verimlilik Durumu'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>


      

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {

       
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['Çalışan Adı', 'verimlilik', ],
          <?php
           $query2 = "SELECT * from verimlilik_dusuk";
           $execc = mysqli_query($baglan,$query2);
           while($row = mysqli_fetch_array($execc)){

            echo "['".$row['calisan_ad']."',".$row['verim']."],";
        }
        

          ?>
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: 'Verimliliği en düşük 5 çalışan',
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {

       
        var chartDiv = document.getElementById('chartt_div');

        var data = google.visualization.arrayToDataTable([
          ['Çalışan Adı', 'verimlilik', ],
          <?php
           $query3 = "SELECT * from verimlilik_yuksek";
           $execcc = mysqli_query($baglan,$query3);
           while($row = mysqli_fetch_array($execcc)){

            echo "['".$row['adi']."',".$row['verim']."],";
        }
        

          ?>
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: 'Verimliliği en yüksek 5 çalışan',
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
                    <h3 class="text-primary">Verimlilik Analizi</h3> </div>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                   
                    
                    
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 color-danger"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2>250</h2>
                                    <p class="m-b-0">Çalışan Sayımız</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="verimlilikgrafik">
                    <div id="piechart" style="width: 300px; height: 300px;"></div>
                    </div>

                    <div class="col-md-3">
                        <div class="aaa">
                            <div class="aa2">
                            <h2>Verimlilik Yorumu</h2>
                            <h4 class="asd">Çalışanların %51'i istenilen verimlilik hedefine ulaşmıştır.
                                Kalan %48'lik dilim ise istenilen verimlilik hedefinin altında kalmıştır.
                                
                            </h4>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="altcontent">
                    <div id="chart_div" style="width: 400px; height: 400px;"></div>
                </div>

                <div class="altaltcontent">
                    <div id="chartt_div" style="width: 400px; height: 400px;"></div>
                </div>
                <div class="liste">
                    <div class="listebuton">
                        <form action="denemetablo.php"> 
                            <input type="submit" class="button" value="Çalışan Tablosunu Görüntüle">
                        </form>
                    </div>
                </div>
                

                
                
                


                


                
            </div>
            
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.slimscroll.js"></script>
    
    <script src="js/sidebarmenu.js"></script>
    
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    


   
     

	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->

    <script src="js/custom.min.js"></script>

</body>

</html>