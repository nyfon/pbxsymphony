<?php
session_start();
if (isset($_SESSION['k_user'])) { /* echo 'user:'.$_SESSION["k_username"]; */} else { echo '<SCRIPT LANGUAGE="javascript">location.href = "logout.php" </SCRIPT>'; } 

$load_avg_01=exec("uptime | cut -d':' -f5 | awk -F\",\" '{ print $1}'");
$load_avg_02=exec("uptime | cut -d':' -f5 | awk -F\",\" '{ print $2}'");
$load_avg_03=exec("uptime | cut -d':' -f5 | awk -F\",\" '{ print $3}'");


$mem_01=exec("free -m | grep Mem | awk '{ print $3}'");
$mem_02=exec("free -m | grep Mem | awk '{ print $4}'");
$mem_03=exec("free -m | grep Mem | awk '{ print $5}'");
$mem_04=exec("free -m | grep Mem | awk '{ print $6}'");
$mem_05=exec("free -m | grep Mem | awk '{ print $7}'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php
include 'title.php';
?>
    <script src="js/Chart.js"></script>
</head>
<body>

	<?php
	include 'head_menu-agent.php'; 
	?> <br/>

  <div class="container-fluid" >

          <div class="col-sm-6 col-md-6 col-lg-3 text-center" style="background:#F2F2F2">
               <h3>Queues Login</h3>
              <canvas id="myChartbar" width="150" height="150"></canvas>
              <script>
              var ctx1 = document.getElementById("myChartbar");
              var myChartbar = new Chart(ctx1, {
                  type: 'bar',
                  data: {
                      labels: ["Load 1", "Load 2", "Load 3"],
                      datasets: [{
                          label: 'Load Average',
                          data: ["<?php echo $load_avg_01; ?>", "<?php echo $load_avg_02; ?>", "<?php echo $load_avg_03; ?>" ],
                          backgroundColor: [
                              '#FF6384',
                              '#FFCE56',
                              '#F5A9F2'
                          ],
                          borderColor: [
                              '#FF6384',
                              '#FFCE56',
                              '#F5A9F2'
                          ],
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
              </script>
           
            <p class="text-justify"> </p>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-3 text-center" style="background:#F2F2F2">
              <h3>Memory Mb</h3>
              <canvas id="myChartpie" width="150" height="150"></canvas>
              <script>
              var ctx2 = document.getElementById("myChartpie");
              var myChartpie = new Chart(ctx2,{
                  type: 'doughnut',
                  data: {
                          labels: [
                              "Used",
                              "Free",
                              "Shared",
                              "Buffers",
                              "Cached"
                          ],
                          datasets: [
                              {
                                  data: [ "<?php echo $mem_01; ?>", "<?php echo $mem_02; ?>", "<?php echo $mem_03; ?>","<?php echo $mem_04; ?>","<?php echo $mem_05; ?>",],
                                  backgroundColor: [
                                      "#FF6384",
                                      "#01DF01",
                                      "#F5A9F2",
                                      "#36A2EB",
                                      "#FFCE56"
                                  ],
                                  hoverBackgroundColor: [
                                      "#FF6384",
                                      "#01DF01",
                                      "#F5A9F2",
                                      "#36A2EB",
                                      "#FFCE56"
                                  ]
                              }]



                        }
                  });
              </script>
            
            <p class="text-justify"> </p>
          </div>

          <div class="col-sm-6 col-md-6 col-lg-3 text-center" style="background:#F2F2F2">
                        <h3>doughnut</h3>
              <canvas id="myDoughnutChart" width="150" height="150"></canvas>
              <script>
              var ctx3 = document.getElementById("myDoughnutChart");
              var myDoughnutChart = new Chart(ctx3,{
                  type: 'doughnut',
                  data: {
                          labels: [
                              "Red",
                              "Blue",
                              "Yellow"
                          ],
                          datasets: [
                              {
                                  data: [300, 50, 100],
                                  backgroundColor: [
                                      "#FF6384",
                                      "#36A2EB",
                                      "#FFCE56"
                                  ],
                                  hoverBackgroundColor: [
                                      "#FF6384",
                                      "#36A2EB",
                                      "#FFCE56"
                                  ]
                              }]
                        }
                  });
              </script>

            <p class="text-justify"> </p>
          </div>
         
          <div class="col-sm-6 col-md-6 col-lg-3 text-center" style="background:#F2F2F2">
            <h3>Line</h3>
            <canvas id="myLineline" width="150" height="150"></canvas>
            <script>
              var ctx4 = document.getElementById("myLineline");
              var myLineline = new Chart(ctx4,{
                type: 'line',
                data: {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My A",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "green",
                            borderColor: "green",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "green",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "green",
                            pointHoverBorderColor: "green",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [65, 59, 80, 81, 56, 55, 40],
                        },
                        {
                            label: "My B",
                            fill: false,
                            lineTension: 0.1,
                            backgroundColor: "red",
                            borderColor: "red",
                            borderCapStyle: 'butt',
                            borderDash: [],
                            borderDashOffset: 0.0,
                            borderJoinStyle: 'miter',
                            pointBorderColor: "red",
                            pointBackgroundColor: "#fff",
                            pointBorderWidth: 1,
                            pointHoverRadius: 5,
                            pointHoverBackgroundColor: "red",
                            pointHoverBorderColor: "red",
                            pointHoverBorderWidth: 2,
                            pointRadius: 1,
                            pointHitRadius: 10,
                            data: [12, 55, 22, 67],
                        }
                    ]
                }
                });

            </script>
            <p class="text-justify"> </p>
          </div>

    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Chart.bundle.js"></script>

</body>
</html>