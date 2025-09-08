
 <?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/sidebar.php';
    ?>
    <style>

/* Style for the column chart container */
#columnchart_material {
    max-width: 100%;  
    margin: 0 auto;
    border-radius: 15px; /* Round corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a soft shadow */
    overflow: hidden; /* Prevents the content from spilling out of rounded corners */
    background-color: #fff; /* Optional: add a background color */
    padding: 15px; /* Optional: add some padding */
}

/* Style for the top chart container */
#top_x_div {
    width: 100%;
    height: 500px;
}

.hyprlnk{
  color: black;
}
.hyprlnk:hover{
  color: green;
}

  /* For smaller screens (e.g., tablet) */
  @media (max-width: 1024px) {

    #columnchart_material {
      height: 40vh;  /* Adjust height for smaller screens */
    }

    #top_x_div {
      height: 400px;
    }
  }

  /* For even smaller screens (e.g., mobile) */
  @media (max-width: 600px) {

#columnchart_material {
      height: 30vh;  /* Adjust height further for mobile screens */
    }
    #top_x_div {
      height: 300px;
    }
  }
</style>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <center>
              <br>
              <h2>DOLE X CAGAYAN DE ORO CITY FIELD OFFICE</h2><br>
              <h4>GENERAL MONTHLY REPORT</h4>
            </center>
             <center><h5>As of this month of <?php echo isset($_GET['date']) ? date('F, Y', strtotime($_GET['date'])) : date('F, Y'); ?></h5></center>

            <br>
          <div class="filter" >
            <form method="GET">
                <label for="filterButton">Filter Date:</label>
                <input class="form-control" style="  width: 20%; margin-right: 10px;" type="month" id="filterButton" name="date" value="<?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>">
                <input class="btn btn-success" type="submit" id="filterButton" name="filter" value="Filter">
            </form>
          </div>
            <br>

              <?php
        $month = isset($_GET['date']) ? date('Y-m', strtotime($_GET['date'])) : date('Y-m');
        //$month = '2024-';

        // $month = '3';
        $total_clients_query = "
            SELECT SUM(total_clients) AS total_clients FROM (
                SELECT COUNT(*) AS total_clients FROM poll WHERE date LIKE '%$month%'
                UNION ALL
                SELECT COUNT(*) AS total_clients FROM offline WHERE date LIKE '%$month%'
            ) AS combined_counts";

        $total_clients_result = $conn->query($total_clients_query);
            $fetch_result = mysqli_fetch_assoc($total_clients_result);
            $total_clients = $fetch_result['total_clients'];


            $sql_feedback = "SELECT SUM(feedback) AS feedback FROM (
                SELECT COUNT(*) AS feedback FROM poll WHERE suggestion IS NOT NULL AND suggestion != '' AND date LIKE '%$month%'
                UNION ALL
                SELECT COUNT(*) AS feedback FROM offline WHERE suggestion IS NOT NULL AND suggestion != '' AND date LIKE '%$month%'
            ) AS feedback_counts";

            $feedback_result = $conn->query($sql_feedback);
            $fetch_feedback_result = mysqli_fetch_assoc($feedback_result);
            $total_feedback = $fetch_feedback_result['feedback'];


            $sql_male = "SELECT SUM(male) AS male FROM (
                SELECT COUNT(*) AS male FROM poll WHERE gender = 'Male' AND gender != '' AND date LIKE '%$month%'
                UNION ALL
                SELECT COUNT(*) AS male FROM offline WHERE gender = 'Male' AND gender != '' AND date LIKE '%$month%'
            ) AS male_counts";

            $male_result = $conn->query($sql_male);
            $fetch_male_result = mysqli_fetch_assoc($male_result);
            $total_male = $fetch_male_result['male'];

            $sql_female = "SELECT SUM(female) AS female FROM (
                SELECT COUNT(*) AS female FROM poll WHERE gender = 'Female' AND gender != '' AND date LIKE '%$month%'
                UNION ALL
                SELECT COUNT(*) AS female FROM offline WHERE gender = 'Female' AND gender != '' AND date LIKE '%$month%'
            ) AS female_counts";

            $female_result = $conn->query($sql_female);
            $fetch_female_result = mysqli_fetch_assoc($female_result);
            $total_female = $fetch_female_result['female'];

               ?>
       <h5> <u>  </u></h5>
          </div>



          <div class="col-12 col-sm-12 col-md-3">

            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>
              <a class="hyprlnk" href="consolidatedReport.php">

              <div class="info-box-content">
                <span class="info-box-text">Clients served</span>
                <span class="info-box-number">
                  <?php echo $total_clients; ?>
                  <small> clients</small>
                </span>
              </div>
            </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->


          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <a class="hyprlnk" href="consolidatedReport.php#gender">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-male"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Male Clients</span>
                  <span class="info-box-number"><?php echo $total_male; ?></span>
                </div>
              </div>
            </a>

            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <a class="hyprlnk" href="consolidatedReport.php#gender">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-blue elevation-1"><i class="fas fa-female"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Female Clients</span>
                  <span class="info-box-number"><?php echo $total_male; ?></span>
                </div>
              </div>
            </a>

            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>
              <a class="hyprlnk" href="#feedback">
                <div class="info-box-content">
                  <span class="info-box-text">Feedbacks</span>
                  <span class="info-box-number"><?php echo $total_feedback; ?></span>
                </div>
              </a>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

 
       
          <canvas id="myChart" class="mt-3" style="width:100%;max-width:6000px;  
              margin: 0 auto;
              border-radius: 15px; /* Round corners */
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a soft shadow */
              overflow: hidden; /* Prevents the content from spilling out of rounded corners */
              background-color: #fff; /* Optional: add a background color */
              padding: 15px; /* Optional: add some padding */"></canvas>
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <?php
          $month = date('Y-m'); // Default to current month
          if (isset($_GET['date'])) {
              $month = $_GET['date']; // Get the filtered date
          }

          // Update SQL query to use the filtered date
          $select_count = $conn->query("
              SELECT 
                  SUM(CASE WHEN service LIKE '%2.%' THEN 1 ELSE 0 END) AS count1,
                  SUM(CASE WHEN service LIKE '%3.%' THEN 1 ELSE 0 END) AS count2,
                  SUM(CASE WHEN service LIKE '%4.%' THEN 1 ELSE 0 END) AS count3,
                  (SELECT COUNT(*) FROM offline WHERE service = '1' AND date LIKE '%$month%') AS count4,
                  (SELECT COUNT(*) FROM offline WHERE service <> '1' AND date LIKE '%$month%') AS count5
              FROM poll
              WHERE date LIKE '%$month%'
          ");

          if ($select_count->num_rows > 0) {
              $row = $select_count->fetch_assoc();
              $data = array(
                  "count1" => $row['count1'],
                  "count2" => $row['count2'],
                  "count3" => $row['count3'],
                  "count4" => $row['count4'],
                  "count5" => $row['count5']
              );

              // Output the JSON data
              echo "<script>";
              echo "var data = " . json_encode($data) . ";";
              echo "</script>";
          }
          ?>

          <script>
          var xValues = ["Livelihood", "CSHP", "Worker's Association", "Rule 1020", "Other Services"];
          var barColors = ["yellow", "red", "green", "blue", "orange"];

          new Chart("myChart", {
              type: "bar",
              data: {
                  labels: xValues,
                  datasets: [{ label: 'Clients Served', backgroundColor: barColors, data: [data.count4, data.count1, data.count2, data.count3, data.count5] }]
              },
              options: {
                  legend: {display: false},
                  title: {
                      display: true,
                      text: "Clients served from " + new Date('<?php echo $month; ?>').toLocaleString('default', { month: 'long', year: 'numeric' })
                  }
              }
          });
          </script>
                  <?php
          // Prepare the data
          $data = [
              'Livelihood Assistance Citizen' => 0,
              'Livelihood Assistance Government' => 0,
              'Livelihood Assistance Business' => 0,
              'CSHP Citizen' => 0,
              'CSHP Government' => 0,
              'CSHP Business' => 0,
              'Worker Association Citizen' => 0,
              'Worker Association Government' => 0,
              'Worker Association Business' => 0,
              'RULE 1020 Citizen' => 0,
              'RULE 1020 Government' => 0,
              'RULE 1020 Business' => 0,
              'Other Services Citizen' => 0,
              'Other Services Government' => 0,
              'Other Services Business' => 0,

          ];

          // -----------------------------Livelihood-------------------
          $select_l = "SELECT COUNT(*) AS grandtotal_L FROM offline WHERE service = '1' AND date LIKE '%$month%' ";
          $query1 = $conn->query($select_l); 
          $fetch_L1 = mysqli_fetch_assoc($query1);
          $data['Livelihood Assistance'] = $fetch_L1['grandtotal_L'];

          // -----------------------------Other services-------------------
          $sql_other_services_total = "SELECT COUNT(*) AS grand_other_services FROM offline WHERE service <> '1' AND date LIKE '%$month%'";
          $totalresult = $conn->query($sql_other_services_total); 
          $totalfetch = mysqli_fetch_assoc($totalresult);
          $data['Other Services'] = $totalfetch['grand_other_services'];

                  // -------------------------------CSHP----------------------
                  $sql_CSHPtotal = "SELECT COUNT(*) AS grandtotalCSHP FROM poll WHERE service LIKE '%2.%' AND date LIKE '%$month%'";
                  $totalresult1 = $conn->query($sql_CSHPtotal); 
                  $totalfetch1 = mysqli_fetch_assoc($totalresult1);
                  $data['CSHP'] = $totalfetch1['grandtotalCSHP'];

                    //---------------------------------------worker association------------------
                    $sql_workerAssoctotal = "SELECT COUNT(*) AS grandtotalworker FROM poll WHERE service LIKE '%3.%' AND date LIKE '%$month%'";
                    $totalresult2 = $conn->query($sql_workerAssoctotal); 
                    $totalfetch2 = mysqli_fetch_assoc($totalresult2);
                    $data['Worker Association'] = $totalfetch2['grandtotalworker'];

                    //----------------------------------rule 1020---------------------
                    $sql_1020total = "SELECT COUNT(*) AS grandtotal1020 FROM poll WHERE service LIKE '%4.%' AND date LIKE '%$month%'";
                    $totalresult3 = $conn->query($sql_1020total); 
                    $totalfetch3 = mysqli_fetch_assoc($totalresult3);
                    $data['RULE 1020'] = $totalfetch3['grandtotal1020'];

            // ================================================================  Count for each client type =============================================================
                    $clientTypes = ['Citizen', 'Government', 'Business'];
                    foreach ($clientTypes as $type) {
                        $select_l_type = "SELECT COUNT(*) AS total_L FROM offline WHERE service = '1' AND client = '$type' AND date LIKE '%$month%'";
                        $query_type = $conn->query($select_l_type); 
                        $fetch_type = mysqli_fetch_assoc($query_type);
                        $data['Livelihood Assistance ' . $type] = $fetch_type['total_L'];

                        $sql_other_services_type = "SELECT COUNT(*) AS total_other_services FROM offline WHERE service <> '1' AND client = '$type' AND date LIKE '%$month%'";
                        $result_type = $conn->query($sql_other_services_type); 
                        $fetch_type = mysqli_fetch_assoc($result_type);
                        $data['Other Services ' . $type]= $fetch_type['total_other_services'];

                        $sql_CSHP_type = "SELECT COUNT(*) AS totalCSHP FROM poll WHERE service LIKE '%2.%' AND client = '$type' AND date LIKE '%$month%'";
                        $result_type = $conn->query($sql_CSHP_type); 
                        $fetch_type = mysqli_fetch_assoc($result_type);
                        $data['CSHP ' . $type] = $fetch_type['totalCSHP'];

                        $sql_workerAssoc_type = "SELECT COUNT(*) AS totalWorkerAssoc FROM poll WHERE service LIKE '%3.%' AND client = '$type' AND date LIKE '%$month%'";
                        $result_type = $conn->query($sql_workerAssoc_type); 
                        $fetch_type = mysqli_fetch_assoc($result_type);
                        $data['Worker Association ' . $type] = $fetch_type['totalWorkerAssoc'];

                        $sql_1020_type = "SELECT COUNT(*) AS total1020 FROM poll WHERE service LIKE '%4.%' AND client = '$type' AND date LIKE '%$month%'";
                        $result_type = $conn->query($sql_1020_type); 
                        $fetch_type = mysqli_fetch_assoc($result_type);
                        $data['RULE 1020 ' . $type] = $fetch_type['total1020'];
                    }


                    $total_served_client = $data['RULE 1020'] + $data['Worker Association'] + $data['CSHP']+ $data['Livelihood Assistance'] + $data['Other Services']; 


                    // Convert the data to JSON
                    $jsonData = json_encode($data);

                      echo '
                      <script type="text/javascript">
                      var jsonData = ' . $jsonData . ';

                      </script>';

                      ?>
                      <hr>
                     <div id="columnchart_material" style="width:100%;max-width:6000px;height: 500px; background-color: white;"></div>

           
                  <script type="text/javascript">
              google.charts.load('current', {'packages':['bar']});

              // Define the drawChart function first
              function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                      ['Services', 'Citizen', 'Government', 'Business'],
                      ['Livelihood Assistance', 
                          Number(jsonData['Livelihood Assistance Citizen']), 
                          Number(jsonData['Livelihood Assistance Government']), 
                          Number(jsonData['Livelihood Assistance Business'])
                      ],
                      ['CSHP', 
                          Number(jsonData['CSHP Citizen']), 
                          Number(jsonData['CSHP Government']), 
                          Number(jsonData['CSHP Business'])
                      ],
                      ['Worker Association', 
                          Number(jsonData['Worker Association Citizen']), 
                          Number(jsonData['Worker Association Government']), 
                          Number(jsonData['Worker Association Business'])
                      ],
                      ['RULE 1020', 
                          Number(jsonData['RULE 1020 Citizen']), 
                          Number(jsonData['RULE 1020 Government']), 
                          Number(jsonData['RULE 1020 Business'])
                      ],
                      ['Other Services', 
                          Number(jsonData['Other Services Citizen']), 
                          Number(jsonData['Other Services Government']), 
                          Number(jsonData['Other Services Business'])
                      ]
                  ]);

                  var options = {
                      chart: {
                          title: 'Type of Clients Served',
                          
                      }
                  };

                  var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
                  chart.draw(data, google.charts.Bar.convertOptions(options));
              }

              // Then set the callback to draw the chart
              google.charts.setOnLoadCallback(drawChart);
                      

                  console.log(jsonData);

                  </script>

          <?php 

                  // Assuming $conn is your database connection
          $sql_age = "
              SELECT 
                  SUM(CASE WHEN age = '24' THEN 1 ELSE 0 END) AS age_24_and_below,
                  SUM(CASE WHEN age BETWEEN 25 AND 34 THEN 1 ELSE 0 END) AS age_25_to_34,
                  SUM(CASE WHEN age BETWEEN 35 AND 44 THEN 1 ELSE 0 END) AS age_35_to_44,
                  SUM(CASE WHEN age BETWEEN 45 AND 54 THEN 1 ELSE 0 END) AS age_45_to_54,
                  SUM(CASE WHEN age BETWEEN 55 AND 63 THEN 1 ELSE 0 END) AS age_55_to_64,
                  SUM(CASE WHEN age = '64' THEN 1 ELSE 0 END) AS age_65_and_above,
                  SUM(CASE WHEN age IS NULL THEN 1 ELSE 0 END) AS blank_age
              FROM (
                  SELECT age FROM poll WHERE date LIKE '%$month%'
                  UNION ALL
                  SELECT age FROM offline WHERE date LIKE '%$month%'
              ) AS combined_data
          ";

          // Execute the query
          $age_result = $conn->query($sql_age);

          if ($age_result) {
              $age_row = $age_result->fetch_assoc(); // Fetch the result into an associative array
          } else {
              // Handle query error or no data found scenario
              echo "<tr><td colspan='3'>No data available</td></tr>";
          }
          ?>

          <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawStuff);

            function drawStuff() {
              // PHP data injected as JavaScript array
              var data = google.visualization.arrayToDataTable([
                ['Age Ranges', 'Count'],
                ['24 and below', <?php echo $age_row['age_24_and_below']; ?>],
                ['25 to 34', <?php echo $age_row['age_25_to_34']; ?>],
                ['35 to 44', <?php echo $age_row['age_35_to_44']; ?>],
                ['45 to 54', <?php echo $age_row['age_45_to_54']; ?>],
                ['55 to 64', <?php echo $age_row['age_55_to_64']; ?>],
                ['65 and above', <?php echo $age_row['age_65_and_above']; ?>],
                ['No age data', <?php echo $age_row['blank_age']; ?>]
              ]);

              // Get the width of the container
              var containerWidth = document.getElementById('top_x_div').offsetWidth;

              // Set the width dynamically based on the container
              var options = {
                title: 'Age Distribution',
                width: containerWidth,  // Use the container's width
                legend: { position: 'none' },
                chart: { title: ' Age Distribution', subtitle: 'Clients served by age groups' },
                bars: 'horizontal',
                axes: {
                  x: {
                    0: { side: 'top', label: 'Age Count'} // Top x-axis.
                  }
                },
                bar: { groupWidth: "500%" }
              };

              var chart = new google.charts.Bar(document.getElementById('top_x_div'));
              chart.draw(data, options);
            }

            // Redraw the chart on window resize to make it responsive
            window.addEventListener('resize', drawStuff);
          </script>

          <hr>
          <div style="    width: 100%;
              height: 550px;
              border-radius: 15px; /* Round corners */
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); /* Add a shadow with more intensity */
              background-color: #fff; /* Optional: add a background color */
              padding: 20px; /* Optional: add some padding */">
            <div id="top_x_div" style="background-color: white;"></div>
          </div>

            <?php

            // Get the selected month or default to empty string (for showing all data by default)
            $selected_month = isset($_POST['month']) ? $_POST['month'] : '';

            // Fetch suggestions and control numbers
            $sql_comment = "SELECT CONCAT(controlNumber, ' (Walked-in Client/Offline)') AS labeled_control_number, suggestion, date 
                            FROM offline 
                            WHERE suggestion IS NOT NULL AND suggestion != ''";

            // If a month is selected, apply the month filter (show only records from the selected month and year)
            if (!empty($selected_month)) {
                list($year, $month) = explode('-', $selected_month);
                $sql_comment .= " AND YEAR(date) = $year AND MONTH(date) = $month";
            }

            $sql_comment .= " UNION ALL
                            SELECT CONCAT(controlNumber, ' (Remote Client/Online)') AS labeled_control_number, suggestion, date 
                            FROM poll 
                            WHERE suggestion IS NOT NULL AND suggestion != ''";

            // Apply the same filter for the poll table if a month is selected
            if (!empty($selected_month)) {
                list($year, $month) = explode('-', $selected_month);
                $sql_comment .= " AND YEAR(date) = $year AND MONTH(date) = $month";
            }

            $sql_comment .= " ORDER BY date DESC";  // Sort the data in descending order by date
            $result2 = $conn->query($sql_comment);
            ?>            

          <div id="feedback" style="
              width: 100%;
              height: 700px;
              border-radius: 15px; 
              box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
              background-color: #fff;
              padding: 20px;
              margin-top: 3%;">
            
                <center>
                    <h2>CLIENTS SUGGESTIONS AND FEEDBACK</h2>
                    <br>
                </center>
                <div style="display: flex; align-items: center;">
                    <form method="POST" style="display: flex; align-items: center;">
                        <label for="month" style="margin-right: 10px;">Filter Date:</label>
                        <input class="form-control" type="month" name="month" id="month" value="<?php echo isset($_POST['month']) ? htmlspecialchars($_POST['month']) : ''; ?>"
                               style="margin-right: 10px; width: auto; min-width: 150px; max-width: 300px; resize: both;">
                        <input class="btn btn-success" type="submit" value="Filter">
                    </form>
                </div>

            <div class="container" style="height: 500px;">
                <?php
                if ($result2->num_rows > 0) {
                    while ($row2 = $result2->fetch_assoc()) {
                        echo '<div class="comment-box">';
                        echo '<div class="control-number">Control Number: ' . htmlspecialchars($row2['labeled_control_number']) . '</div>';
                        echo '<div class="suggestion">' . htmlspecialchars($row2['suggestion']) . '</div>';
                        echo '<div class="date"><p>' . htmlspecialchars(date("l, F d, Y", strtotime($row2['date']))) . '</p></div>';
                        echo '</div>';
                    }
                } else {
                    echo "No suggestions found.";
                }
                ?>
            </div>
          </div>

          </div>
        </div>
      </div>

<!-- SweetAlert2 JS (include this at the bottom of the page, just before closing </body>) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.js"></script>
<script>
    document.getElementById('logoutLink').addEventListener('click', function(e) {
        e.preventDefault();  // Prevent the default link behavior

        // Show SweetAlert confirmation
        Swal.fire({
            title: 'Notice!',
            text: "You are about to log out.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Confirm',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect to logout.php if confirmed
                window.location.href = 'logout.php';
            }
        });
    });


        // When the page is fully loaded, hide the preloader
        window.addEventListener('load', function() {
            // Hide the preloader
            document.querySelector('.preloader-wrapper').classList.add('hide');
        });
</script>


  <?php
    include 'includes/footer.php';
    ?>