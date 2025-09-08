
 <?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/sidebar.php';

    #############################

    // include 'functions/fetch_sql.php';

    ?>

<style type="text/css">
  .card{
  width: 81%;
  float: right;
  /*margin-left: 50%;*/
  border: solid black;
  margin-right: 2%;
  margin-top: 3%;
  background-color: white;

}

.card-header{
  padding: 1%;
}

.card-body{
padding: 2%;
}


.qsd-tbl th {
  padding: 7px;
  color: black;

}
.cc-table th, .cc-table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.cc-table th {
  background-color: #f2f2f2;
}

 .cc-table tr:nth-child(even) {
  background-color: #f2f2f2;
}

.cc-table tr:hover {
  background-color: #ddd;
}
.scroll-horizon{
  overflow-x: auto;
}

.green{
  color: green;
  /*background-color: lightgreen;*/
}
</style>

 <div class="content-wrapper">

             <div class="row">
                <div class="col-12">
                  <div class="card-header" style="margin-top: 3%;">

                    <center>

                      <h2>CONSOLIDATED CLIENT SATISFACTION MEASUREMENT SURVEY RESULTS</h2>
                      <h4>DOLE X CAGAYAN DE ORO CITY FIELD OFFICE</h4>
                      <hr><br>

                      <?php
                      // Check if a date has been filtered
                      if (isset($_GET['date']) && !empty($_GET['date'])) {
                          // Format the filtered date as "Month, Year"
                          $filtered_date = $_GET['date']; 
                          $dsp_date = date("F, Y", strtotime($filtered_date)); // Format to Month, Year
                      } else {
                          // If no filter is applied, display the current date
                          $dsp_date = date("F, Y"); 
                      }
                      ?>
                      <h4>Consolidated survey result as for this month of <?php echo $dsp_date; ?></h4>

                      </center>
                      </div>

                      <div class="filter mt-3">
                          <form method="GET">
                              <label for="filterButton">Filter Date:</label>
                              <input class="form-control" style="width: 20%; margin-right: 10px;" type="month" id="filterButton" name="date" value="<?php echo isset($_GET['date']) ? $_GET['date'] : ''; ?>">
                              <input class="btn btn-success" type="submit" id="filterButton" name="filter" value="Filter">
                          </form>
                      </div>

            <br>

              <?php
        $month = isset($_GET['date']) ? date('Y-m', strtotime($_GET['date'])) : date('Y-m');
        //-----------------------------Livelihood-------------------


         $select_l = "SELECT COUNT(*) AS grandtotal_L FROM offline WHERE service = '1' AND date LIKE '%$month%' ";
          $query1 = $conn->query($select_l); 
          $fetch_L1 = mysqli_fetch_assoc($query1);
          $dsp_L = $fetch_L1['grandtotal_L'];




         $select_l_citizen = "SELECT COUNT(*) AS total_L_Citizen FROM offline WHERE service = '1' AND client = 'Citizen' AND date LIKE '%$month%'";
          $query2 = $conn->query($select_l_citizen); 
          $fetch_L2 = mysqli_fetch_assoc($query2);
          $dsp_L1 = $fetch_L2['total_L_Citizen'];
          
         $select_l_gov = "SELECT COUNT(*) AS total_L_gov FROM offline WHERE service = '1' AND client = 'Government' AND date LIKE '%$month%'";
          $query3 = $conn->query($select_l_gov); 
          $fetch_L3 = mysqli_fetch_assoc($query3);
          $dsp_L2 = $fetch_L3['total_L_gov'];

         $select_l_business = "SELECT COUNT(*) AS total_L_business FROM offline WHERE service = '1' AND client = 'Business' AND date LIKE '%$month%'";
          $query4 = $conn->query($select_l_business); 
          $fetch_L3 = mysqli_fetch_assoc($query4);
          $dsp_L3 = $fetch_L3['total_L_business'];




//-----------------------------other services-------------------


         $sql_livelihoodtotal = "SELECT COUNT(*) AS grandtotalLivelihood FROM offline WHERE service <> '1' AND date LIKE '%$month%' ";
          $totalresult = $conn->query($sql_livelihoodtotal); 

          $totalfetch = mysqli_fetch_assoc($totalresult);
          $dsptotal = $totalfetch['grandtotalLivelihood'];




         $sql_livelihood_citizen = "SELECT COUNT(*) AS totalLivelihoodCitizen FROM offline WHERE service <> '1' AND client = 'Citizen' AND date LIKE '%$month%'";
          $result = $conn->query($sql_livelihood_citizen); 

                        // if ($result->num_rows>0) {
          // $fetch = mysqli_fetch_array($result);
          // $dsp = $fetch[0]; 
          $fetch = mysqli_fetch_assoc($result);
          $dsp = $fetch['totalLivelihoodCitizen'];
          
         $sql_livelihood_government = "SELECT COUNT(*) AS totalLivelihoodGovernment FROM offline WHERE service <> '1' AND client = 'Government' AND date LIKE '%$month%'";
          $result0 = $conn->query($sql_livelihood_government); 
          $fetch0 = mysqli_fetch_assoc($result0);
          $dsp0 = $fetch0['totalLivelihoodGovernment'];

         $sql_livelihood_business = "SELECT COUNT(*) AS totalLivelihoodBusiness FROM offline WHERE service <> '1' AND client = 'Business' AND date LIKE '%$month%'";
          $result00 = $conn->query($sql_livelihood_business); 
          $fetch00 = mysqli_fetch_assoc($result00);
          $dsp00 = $fetch00['totalLivelihoodBusiness'];

// -------------------------------CSHP----------------------

         $sql_CSHPtotal = "SELECT COUNT(*) AS grandtotalCSHP FROM poll WHERE service LIKE '%2.%' AND date LIKE '%$month%'";
          $totalresult1 = $conn->query($sql_CSHPtotal); 

          $totalfetch1 = mysqli_fetch_assoc($totalresult1);
          $dsptotal1 = $totalfetch1['grandtotalCSHP'];



        $sql_CSHP = "SELECT COUNT(*) AS totalCSHP FROM poll WHERE service LIKE '%2.%' AND client = 'Citizen' AND date LIKE '%$month%'";
          $result1 = $conn->query($sql_CSHP); 

          $fetch1 = mysqli_fetch_assoc($result1);
          $dsp1 = $fetch1['totalCSHP'];

         $sql_CSHP_government = "SELECT COUNT(*) AS totalCSHPGovernment FROM poll WHERE service LIKE '%2.%' AND client = 'Government' AND date LIKE '%$month%'";
          $result11 = $conn->query($sql_CSHP_government); 
          $fetch11 = mysqli_fetch_assoc($result11);
          $dsp11 = $fetch11['totalCSHPGovernment'];

         $sql_CSHP_business = "SELECT COUNT(*) AS totalCSHPBusiness FROM poll WHERE service LIKE '%2.%' AND client = 'Business' AND date LIKE '%$month%'";
          $result111 = $conn->query($sql_CSHP_business); 
          $fetch111 = mysqli_fetch_assoc($result111);
          $dsp111 = $fetch111['totalCSHPBusiness'];

//---------------------------------------worker association------------------

         $sql_workerAssoctotal = "SELECT COUNT(*) AS grandtotalworker FROM poll WHERE service LIKE '%3.%' AND date LIKE '%$month%'";
          $totalresult2 = $conn->query($sql_workerAssoctotal); 

          $totalfetch2 = mysqli_fetch_assoc($totalresult2);
          $dsptotal2 = $totalfetch2['grandtotalworker'];

        $sql_workerAssoc = "SELECT COUNT(*) AS totalWorkerAssoc FROM poll WHERE service LIKE '%3.%' AND client = 'Citizen' AND date LIKE '%$month%'";
          $result2 = $conn->query($sql_workerAssoc); 
          $fetch2 = mysqli_fetch_assoc($result2);
          $dsp2 = $fetch2['totalWorkerAssoc'];

         $sql_workerAssoc_government = "SELECT COUNT(*) AS totalWorkerAssocGovernment FROM poll WHERE service LIKE '%3.%' AND client = 'Government' AND date LIKE '%$month%'";
          $result22 = $conn->query($sql_workerAssoc_government); 
          $fetch22 = mysqli_fetch_assoc($result22);
          $dsp22 = $fetch22['totalWorkerAssocGovernment'];

         $sql_workerAssoc_business = "SELECT COUNT(*) AS totalWorkerAssocBusiness FROM poll WHERE service LIKE '%3.%' AND client = 'Business' AND date LIKE '%$month%'";
          $result222 = $conn->query($sql_workerAssoc_business); 
          $fetch222 = mysqli_fetch_assoc($result222);
          $dsp222 = $fetch222['totalWorkerAssocBusiness'];

//----------------------------------rule 1020---------------------

         $sql_1020total = "SELECT COUNT(*) AS grandtotal1020 FROM poll WHERE service LIKE '%4.%' AND date LIKE '%$month%'";
          $totalresult3 = $conn->query($sql_1020total); 

          $totalfetch3 = mysqli_fetch_assoc($totalresult3);
          $dsptotal3 = $totalfetch3['grandtotal1020'];

        $sql_1020 = "SELECT COUNT(*) AS total1020 FROM poll WHERE service LIKE '%4.%' AND client = 'Citizen' AND date LIKE '%$month%'";
          $result3 = $conn->query($sql_1020); 

          $fetch3 = mysqli_fetch_assoc($result3);
          $dsp3 = $fetch3['total1020'];

          $sql_1020_government = "SELECT COUNT(*) AS total1020Government FROM poll WHERE service LIKE '%4.%' AND client = 'Government' AND date LIKE '%$month%'";
          $result33 = $conn->query($sql_1020_government); 
          $fetch33 = mysqli_fetch_assoc($result33);
          $dsp33 = $fetch33['total1020Government'];

         $sql_1020_business = "SELECT COUNT(*) AS total1020Business FROM poll WHERE service LIKE '%4.%' AND client = 'Business' AND date LIKE '%$month%'";
          $result333 = $conn->query($sql_1020_business); 
          $fetch333 = mysqli_fetch_assoc($result333);
          $dsp333 = $fetch333['total1020Business'];

          $total_served_client = $dsptotal3 + $dsptotal2 + $dsptotal1+ $dsptotal + $dsp_L; 

          $total_clients_query = "
    SELECT SUM(total_clients) AS total_clients FROM (
        SELECT COUNT(*) AS total_clients FROM poll WHERE date LIKE '%$month%'
        UNION ALL
        SELECT COUNT(*) AS total_clients FROM offline WHERE date LIKE '%$month%'
    ) AS combined_counts";

$total_clients_result = $conn->query($total_clients_query);
    $fetch_result = mysqli_fetch_assoc($total_clients_result);
    $total_clients = $fetch_result['total_clients'];

               ?>
                  <div class="card-body">
                    <table class="table table-bordered table-hover">
                      <thead class="thead-dark">
                        <tr >
                          <th rowspan="2">Service/Program</th>
                          <th colspan="3">Type of Client</th>
                          <th rowspan="2">Total</th>
                        </tr>
                        <tr >
                          <th>Citizen</th>
                          <th>Government</th>
                          <th>Business</th>
                        </tr>
                      </thead>
                      <tr>
                        <td>Application for Livelihood Assistance</td>
                        <td><?php echo $dsp_L1; ?></td>
                        <td><?php echo $dsp_L2; ?></td>
                        <td><?php echo $dsp_L3; ?></td>
                        <td><?php echo $dsp_L; ?></td>
                      </tr>
                      <tr>
                        <td>CSHP</td>
                        <td><?php echo $dsp1; ?></td>
                        <td><?php echo $dsp11; ?></td>
                        <td><?php echo $dsp111; ?></td>
                        <td><?php echo $dsptotal1; ?></td>
                      </tr>
                      <tr>
                        <td>Registration of Worker's Association</td>
                        <td><?php echo $dsp2; ?></td>
                        <td><?php echo $dsp22; ?></td>
                        <td><?php echo $dsp222; ?></td>
                        <td><?php echo $dsptotal2; ?></td>
                      </tr>
                      <tr>
                        <td>RULE 1020</td>
                        <td><?php echo $dsp3; ?></td>
                        <td><?php echo $dsp33; ?></td>
                        <td><?php echo $dsp333; ?></td>
                        <td><?php echo $dsptotal3; ?></td>
                      </tr>        
                      <tr>
                        <td>Other Services</td>
                        <td><?php echo $dsp; ?></td>
                        <td><?php echo $dsp0; ?></td>
                        <td><?php echo $dsp00; ?></td>
                        <td><?php echo $dsptotal; ?></td>
                      </tr>
                      <thead class="thead-dark">
                      <tr>
                        <th colspan="5" style="font-size: 15px; padding: 1px;"></th>
                      </tr>
                    </thead>
                      <tr>
                        <td>Total Type of Client Served</td>
                        <td><?php echo $dsp3 + $dsp2 + $dsp1+ $dsp + $dsp_L1; ?></td>
                        <td><?php echo $dsp33 + $dsp22 + $dsp11 + $dsp0 + $dsp_L2; ?></td>
                        <td><?php echo $dsp333 + $dsp222 + $dsp111+ $dsp00 + $dsp_L3; ?></td>
                        <td><?php echo $total_served_client; ?></td>
                      </tr>  
                    </table>
                  </div>
                </div>
            </div>


            <?php 
                $sql_select_gender = "SELECT
              SUM(CASE WHEN gender = 'Male' THEN 1 ELSE 0 END) AS male_clients,
              SUM(CASE WHEN gender = 'Female' THEN 1 ELSE 0 END) AS female_clients,
              SUM(CASE WHEN gender = '' THEN 1 ELSE 0 END) AS gendnoresponse_clients
          FROM
              (
                  SELECT gender FROM poll WHERE date LIKE '%$month%'
                  UNION ALL
                  SELECT gender FROM offline WHERE gender IN ('Male', 'Female', '') AND date LIKE '%$month%'
              ) AS combined_data";

              $gender_result = $conn->query($sql_select_gender); 
                // $fetch_gender = mysqli_fetch_assoc($gender_result);
                // $dsp_gender = $fetch_gender['gendnoresponse_clients'];

              // Check if the query executed successfully
              if ($gender_result) {
              // Fetch the result as an associative array
                  $fetch_result = mysqli_fetch_assoc($gender_result);

              // Assign values to variables
                  $dsp_male = $fetch_result['male_clients'];
                  $dsp_female = $fetch_result['female_clients'];
                  $dsp_noresponse = $fetch_result['gendnoresponse_clients'];
              } else {
              // Handle SQL query error here
                  echo "Error executing SQL query: " . $conn->error;
              }
            ?>
          <div class="row">


                <div class="col-6" id="gender">
                  <div class="card-body">

                    <table class="table table-bordered table-hover" style="margin-top: 3%; margin-bottom: 3%; float: left;">
                      <thead class="thead-dark">
                      <tr >
                        <th colspan="3" style="font-size: 14px; padding: 1px;"><center>By Sex</center></th>
                      </tr>
                      <tr >
                        <th>Total Male</th>
                        <th>Total Female</th>
                        <th>No Response</th>
                      </tr>
                    </thead>
                      <tr>
                        <td><?php echo $dsp_male; ?></td>
                        <td><?php echo $dsp_female; ?></td>
                        <td><?php echo $dsp_noresponse; ?></td>
                      </tr>

                    </table>
                    <br>
                    <h6>Total Number of Clients served: <u><?php echo $total_clients; ?></u></h6><br>
                    <h6 >Total Number of Clients with Completed Transaction/s (Respondents): <u><?php echo $total_served_client; ?></u> </h6>
                  </div>
                </div>
                <div class="col-6">
                  <div class="card-body">

                    <table class="table table-bordered table-hover" style="margin-top: 3%; float: right; margin-bottom: 3%;">
                      <thead class="thead-dark">
                      <tr>
                        <th colspan="3" style="font-size: 14px; padding: 1px;"><center>By Age</center></th>
                      </tr>
                      <tr>
                        <th>Age</th>
                        <th>Number of Respondents</th>
                        <th>No Response</th>
                      </tr>
                    </thead>
                          <!-- <p>####</p> -->
                    <?php 

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


                        <tr>
                            <td>Below 25</td>
                            <td><?php echo isset($age_row['age_24_and_below']) ? $age_row['age_24_and_below'] : '0'; ?></td>
                            <td rowspan="6"><?php echo isset($age_row['blank_age']) ? $age_row['blank_age'] : '0'; ?></td>
                        </tr>
                        <tr>
                            <td>25-34</td>
                            <td><?php echo isset($age_row['age_25_to_34']) ? $age_row['age_25_to_34'] : '0'; ?></td>
                        </tr>
                        <tr>
                            <td>35-44</td>
                            <td><?php echo isset($age_row['age_35_to_44']) ? $age_row['age_35_to_44'] : '0'; ?></td>
                        </tr>
                        <tr>
                            <td>45-54</td>
                            <td><?php echo isset($age_row['age_45_to_54']) ? $age_row['age_45_to_54'] : '0'; ?></td>
                        </tr>
                        <tr>
                            <td>55-64</td>
                            <td><?php echo isset($age_row['age_55_to_64']) ? $age_row['age_55_to_64'] : '0'; ?></td>
                        </tr>
                        <tr>
                            <td>Above 65</td>
                            <td><?php echo isset($age_row['age_65_and_above']) ? $age_row['age_65_and_above'] : '0'; ?></td>
                        </tr>
                    </table>
                  </div>
                </div>
             </div>
<br>
        <hr>
          <br>
             <div class="row">
               <div class="col-12">
                 <div class="card-header" style="margin-top: 3%;">
                  <center>
                    <h3>Questions related to the Agency Citizen's Charter (CC) %</h3>
                  </center>
                  <br>
                </div>
              <div class="card-body">

                <div class="scroll-horizon">

                <table border="solid black" class="table table-bordered table-hover cc-table">

                  <tr>
                    <th>Service/Program</th>
                    <th colspan="4">CC1</th>
                    <th>Total</th>
                    <th colspan="5">CC2</th>
                    <th>Total</th>
                    <th colspan="4">CC3</th>
                    <th>Total</th>
                    <th>Overall Satisfaction</th>




                    <?php 

          $totalLH = mysqli_query($conn, "SELECT COUNT(*) AS totalLH FROM offline WHERE service = '1' AND date LIKE '%$month%'");
          if ($totalLH) {
          $totalLH_row = mysqli_fetch_assoc($totalLH);
          $totalLivelihood = $totalLH_row['totalLH'];

            if ($totalLivelihood > 0) {

          // =========================================================

          $sql_lh_c1A = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1A FROM offline WHERE service = '1' AND  c =1 AND date LIKE '%$month%' ");
          $rowC1A = mysqli_fetch_assoc($sql_lh_c1A);
          $totalLivelihoodC1A = $rowC1A['lh_c1A'];

          $sql_lh_c1B = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1B FROM offline WHERE service = '1' AND  c =2 AND date LIKE '%$month%' ");
          $rowC1B = mysqli_fetch_assoc($sql_lh_c1B);
          $totalLivelihoodC1B = $rowC1B['lh_c1B'];

          $sql_lh_c1C = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1C FROM offline WHERE service = '1' AND  c =3 AND date LIKE '%$month%' ");
          $rowC1C = mysqli_fetch_assoc($sql_lh_c1C);
          $totalLivelihoodC1C = $rowC1C['lh_c1C'];

          $sql_lh_c1D = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1D FROM offline WHERE service = '1' AND  c =4 AND date LIKE '%$month%' ");
          $rowC1D = mysqli_fetch_assoc($sql_lh_c1D);
          $totalLivelihoodC1D = $rowC1D['lh_c1D'];

          //--------------------------------------------------------------

          $sql_lh_c2A = mysqli_query($conn, "SELECT COUNT(*) AS lh_c2A FROM offline WHERE service = '1' AND  cc =1 AND date LIKE '%$month%' ");
          $rowC2A = mysqli_fetch_assoc($sql_lh_c2A);
          $totalLivelihoodC2A = $rowC2A['lh_c2A'];

          $sql_lh_c2B = mysqli_query($conn, "SELECT COUNT(*) AS lh_c2B FROM offline WHERE service = '1' AND  cc =2 AND date LIKE '%$month%' ");
          $rowC2B = mysqli_fetch_assoc($sql_lh_c2B);
          $totalLivelihoodC2B = $rowC2B['lh_c2B'];

          $sql_lh_c2C = mysqli_query($conn, "SELECT COUNT(*) AS lh_c2C FROM offline WHERE service = '1' AND  cc =3 AND date LIKE '%$month%' ");
          $rowC2C = mysqli_fetch_assoc($sql_lh_c2C);
          $totalLivelihoodC2C = $rowC2C['lh_c2C'];

          $sql_lh_c2D = mysqli_query($conn, "SELECT COUNT(*) AS lh_c2D FROM offline WHERE service = '1' AND  cc =4 AND date LIKE '%$month%' ");
          $rowC2D = mysqli_fetch_assoc($sql_lh_c2D);
          $totalLivelihoodC2D = $rowC2D['lh_c2D'];

          $sql_lh_c2E = mysqli_query($conn, "SELECT COUNT(*) AS lh_c2E FROM offline WHERE service = '1' AND  cc =5 AND date LIKE '%$month%' ");
          $rowC2E = mysqli_fetch_assoc($sql_lh_c2E);
          $totalLivelihoodC2E = $rowC2E['lh_c2E'];

          //--------------------------------------------------------

          $sql_lh_c3A = mysqli_query($conn, "SELECT COUNT(*) AS lh_c3A FROM offline WHERE service = '1' AND  ccc =1 AND date LIKE '%$month%' ");
          $rowC3A = mysqli_fetch_assoc($sql_lh_c3A);
          $totalLivelihoodC3A = $rowC3A['lh_c3A'];

          $sql_lh_c3B = mysqli_query($conn, "SELECT COUNT(*) AS lh_c3B FROM offline WHERE service = '1' AND  ccc =2 AND date LIKE '%$month%' ");
          $rowC3B = mysqli_fetch_assoc($sql_lh_c3B);
          $totalLivelihoodC3B = $rowC3B['lh_c3B'];

          $sql_lh_c3C = mysqli_query($conn, "SELECT COUNT(*) AS lh_c3C FROM offline WHERE service = '1' AND  ccc =3 AND date LIKE '%$month%' ");
          $rowC3C = mysqli_fetch_assoc($sql_lh_c3C);
          $totalLivelihoodC3C = $rowC3C['lh_c3C'];

          $sql_lh_c3D = mysqli_query($conn, "SELECT COUNT(*) AS lh_c3D FROM offline WHERE service = '1' AND  ccc =4 AND date LIKE '%$month%' ");
          $rowC3D = mysqli_fetch_assoc($sql_lh_c3D);
          $totalLivelihoodC3D = $rowC3D['lh_c3D'];

          $percentC1A = $totalLivelihoodC1A / $totalLivelihood * 100;
          $percentC1B = $totalLivelihoodC1B / $totalLivelihood * 100;
          $percentC1C = $totalLivelihoodC1C / $totalLivelihood * 100;
          $percentC1D = $totalLivelihoodC1D / $totalLivelihood * 100;

          $percentC2A = $totalLivelihoodC2A / $totalLivelihood * 100;
          $percentC2B = $totalLivelihoodC2B / $totalLivelihood * 100;
          $percentC2C = $totalLivelihoodC2C / $totalLivelihood * 100;
          $percentC2D = $totalLivelihoodC2D / $totalLivelihood * 100;
          $percentC2E = $totalLivelihoodC2E / $totalLivelihood * 100;

          $percentC3A = $totalLivelihoodC3A / $totalLivelihood * 100;
          $percentC3B = $totalLivelihoodC3B / $totalLivelihood * 100;
          $percentC3C = $totalLivelihoodC3C / $totalLivelihood * 100;
          $percentC3D = $totalLivelihoodC3D / $totalLivelihood * 100;




          ############################################# end of livelihood CC computation ##############################################################

                    ?>

                  <tr>
                    <td>Livelihood</td>
                    <td><?php echo round($percentC1A, 2); ?>%</td>
                    <td><?php echo round($percentC1B,2); ?>%</td>
                    <td><?php echo round($percentC1C,2); ?>%</td>
                    <td><?php echo round($percentC1D,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc1Livelihood = $percentC1A + $percentC1B + $percentC1C + $percentC1D,2); ?>%</span></td>
                    

                    <td><?php echo round($percentC2A,2); ?>%</td>
                    <td><?php echo round($percentC2B,2); ?>%</td>
                    <td><?php echo round($percentC2C,2); ?>%</td>
                    <td><?php echo round($percentC2D,2); ?>%</td>
                    <td><?php echo round($percentC2E,2); ?>%</td>
                  
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc2Livelihood = $percentC2A + $percentC2B + $percentC2C + $percentC2D+ $percentC2E,2); ?>%</span></td>


                    <td><?php echo round($percentC3A,2); ?>%</td>
                    <td><?php echo round($percentC3B,2); ?>%</td>
                    <td><?php echo round($percentC3C,2); ?>%</td>
                    <td><?php echo round($percentC3D,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc3Livelihood = $percentC3A + $percentC3B + $percentC3C + $percentC3D,2); ?>%</span></td>

                    <?php $sumtotal1 = $grandtotalc1Livelihood + $grandtotalc2Livelihood + $grandtotalc3Livelihood; ?>

                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($sumtotal1/3,2); ?>%</span></td>



                  </tr>
                  
                  <?php 

          }
           else {
            echo "<tr><td class='table-warning' style='color:red;'>Livelihood *</td><td colspan =17 class='table-danger'><b> No Data Available</b></td></tr>";
           }
          }else{
            echo "Error executing query: " . mysqli_error($conn);
          }



          $totalCSHP = mysqli_query($conn, "SELECT COUNT(*) AS totalCSHP FROM poll WHERE service LIKE '%2.%' AND date LIKE '%$month%'");
          if ($totalCSHP) {
          $totalCSHP_row = mysqli_fetch_assoc($totalCSHP);
          $CSHP = $totalCSHP_row['totalCSHP'];

            if ($CSHP > 0) {


          $sql_cshp_c1A = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c1A FROM poll WHERE service LIKE '%2.%' AND c =1 AND date LIKE '%$month%'");

          $cshpC1A = mysqli_fetch_assoc($sql_cshp_c1A);
          $totalcshpC1A = $cshpC1A['cshp_c1A'];



          $sql_cshp_c1B = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c1B FROM poll WHERE service LIKE '%2.%' AND c =2 AND date LIKE '%$month%'");

          $cshpC1B = mysqli_fetch_assoc($sql_cshp_c1B);
          $totalcshpC1B = $cshpC1B['cshp_c1B'];




          $sql_cshp_c1C = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c1C FROM poll WHERE service LIKE '%2.%' AND c =3 AND date LIKE '%$month%'");

          $cshpC1C = mysqli_fetch_assoc($sql_cshp_c1C);
          $totalcshpC1C = $cshpC1C['cshp_c1C'];


          $sql_cshp_c1D = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c1D FROM poll WHERE service LIKE '%2.%' AND c =4 AND date LIKE '%$month%'");

          $cshpC1D = mysqli_fetch_assoc($sql_cshp_c1D);
          $totalcshpC1D = $cshpC1D['cshp_c1D'];

          //--------------------------------------------------------------

          $sql_cshp_c2A = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c2A FROM poll WHERE service LIKE '%2.%' AND cc =1 AND date LIKE '%$month%'");

          $cshpC2A = mysqli_fetch_assoc($sql_cshp_c2A);
          $totalcshpC2A = $cshpC2A['cshp_c2A'];

          $sql_cshp_c2B = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c2B FROM poll WHERE service LIKE '%2.%' AND cc =2 AND date LIKE '%$month%'");

          $cshpC2B = mysqli_fetch_assoc($sql_cshp_c2B);
          $totalcshpC2B = $cshpC2B['cshp_c2B'];

          $sql_cshp_c2C = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c2C FROM poll WHERE service LIKE '%2.%' AND cc =3 AND date LIKE '%$month%'");
          $cshpC2C = mysqli_fetch_assoc($sql_cshp_c2C);
          $totalcshpC2C = $cshpC2C['cshp_c2C'];


          $sql_cshp_c2D = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c2D FROM poll WHERE service LIKE '%2.%' AND cc =4 AND date LIKE '%$month%'");

          $cshpC2D = mysqli_fetch_assoc($sql_cshp_c2D);
          $totalcshpC2D = $cshpC2D['cshp_c2D'];


          $sql_cshp_c2E = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c2E FROM poll WHERE service LIKE '%2.%' AND cc =5 AND date LIKE '%$month%'");

          $cshpC2E = mysqli_fetch_assoc($sql_cshp_c2E);
          $totalcshpC2E = $cshpC2E['cshp_c2E'];

          //--------------------------------------------------------


          $sql_cshp_c3A = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c3A FROM poll WHERE service LIKE '%2.%' AND ccc =1 AND date LIKE '%$month%'");

          $cshpC3A = mysqli_fetch_assoc($sql_cshp_c3A);
          $totalcshpC3A = $cshpC3A['cshp_c3A'];

          $sql_cshp_c3B = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c3B FROM poll WHERE service LIKE '%2.%' AND ccc =2 AND date LIKE '%$month%'");

          $cshpC3B = mysqli_fetch_assoc($sql_cshp_c3B);
          $totalcshpC3B = $cshpC3B['cshp_c3B'];

          $sql_cshp_c3C = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c3C FROM poll WHERE service LIKE '%2.%' AND ccc =3 AND date LIKE '%$month%'");

          $cshpC3C = mysqli_fetch_assoc($sql_cshp_c3C);
          $totalcshpC3C = $cshpC3C['cshp_c3C'];


          $sql_cshp_c3D = mysqli_query($conn, "SELECT COUNT(*) AS cshp_c3D FROM poll WHERE service LIKE '%2.%' AND ccc =4 AND date LIKE '%$month%'");

          $cshpC3D = mysqli_fetch_assoc($sql_cshp_c3D);
          $totalcshpC3D = $cshpC3D['cshp_c3D'];


          $percentC1A1 = $totalcshpC1A / $CSHP * 100;
          $percentC1B1 = $totalcshpC1B / $CSHP * 100;
          $percentC1C1 = $totalcshpC1C / $CSHP * 100;
          $percentC1D1 = $totalcshpC1D / $CSHP * 100;


          $percentC2A1 = $totalcshpC2A / $CSHP * 100;
          $percentC2B1 = $totalcshpC2B / $CSHP * 100;
          $percentC2C1 = $totalcshpC2C / $CSHP * 100;
          $percentC2D1 = $totalcshpC2D / $CSHP * 100;
          $percentC2E1 = $totalcshpC2E / $CSHP * 100;

          $percentC3A1 = $totalcshpC3A / $CSHP * 100;
          $percentC3B1 = $totalcshpC3B / $CSHP * 100;
          $percentC3C1 = $totalcshpC3C / $CSHP * 100;
          $percentC3D1 = $totalcshpC3D / $CSHP * 100;
          ?>


                  <tr>
                    <td>CSHP</td>
                    <td><?php echo round($percentC1A1, 2); ?>%</td>
                    <td><?php echo round($percentC1B1,2); ?>%</td>
                    <td><?php echo round($percentC1C1,2); ?>%</td>
                    <td><?php echo round($percentC1D1,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc1CSHP = $percentC1A1 + $percentC1B1 + $percentC1C1 + $percentC1D1,2); ?>%</span></td>
                    

                    <td><?php echo round($percentC2A1,2); ?>%</td>
                    <td><?php echo round($percentC2B1,2); ?>%</td>
                    <td><?php echo round($percentC2C1,2); ?>%</td>
                    <td><?php echo round($percentC2D1,2); ?>%</td>
                    <td><?php echo round($percentC2E1,2); ?>%</td>
                  
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc2CSHP = $percentC2A1 + $percentC2B1 + $percentC2C1 + $percentC2D1+ $percentC2E1,2); ?>%</span></td>


                    <td><?php echo round($percentC3A1,2); ?>%</td>
                    <td><?php echo round($percentC3B1,2); ?>%</td>
                    <td><?php echo round($percentC3C1,2); ?>%</td>
                    <td><?php echo round($percentC3D1,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc3CSHP = $percentC3A1 + $percentC3B1 + $percentC3C1 + $percentC3D1,2); ?>%</span></td>

                    <?php $sumtotal2 = $grandtotalc1CSHP + $grandtotalc2CSHP + $grandtotalc3CSHP; ?>

                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($sumtotal2/3,2); ?>%</span></td>



                  </tr>
                  
                  <?php 

          }
           else {
            echo "<tr><td class='table-warning' style='color:red;'>CSHP *</td><td colspan =17 class='table-danger'><b> No Data Available</b></td></tr>";
           }
          }else{
            echo "Error executing query: " . mysqli_error($conn);
          }

          $total_WA = mysqli_query($conn, "SELECT COUNT(*) AS totalWA FROM poll WHERE service LIKE '%3.%' AND date LIKE '%$month%'");
          if ($total_WA) {
          $totalWA_WorkAssoc = mysqli_fetch_assoc($total_WA);
          $totalWA = $totalWA_WorkAssoc['totalWA'];
            if ($totalWA > 0) {


          $sql_WA_c1A = mysqli_query($conn, "SELECT COUNT(*) AS WA_c1A FROM poll WHERE service LIKE '%3.%' AND c =1 AND date LIKE '%$month%'");
          $WorkAssocC1A = mysqli_fetch_assoc($sql_WA_c1A);
          $totalWAC1A = $WorkAssocC1A['WA_c1A'];

          $sql_WA_c1B = mysqli_query($conn, "SELECT COUNT(*) AS WA_c1B FROM poll WHERE service LIKE '%3.%' AND c =2 AND date LIKE '%$month%'");
          $WorkAssocC1B = mysqli_fetch_assoc($sql_WA_c1B);
          $totalWAC1B = $WorkAssocC1B['WA_c1B'];

          $sql_WA_c1C = mysqli_query($conn, "SELECT COUNT(*) AS WA_c1C FROM poll WHERE service LIKE '%3.%' AND c =3 AND date LIKE '%$month%'");
          $WorkAssocC1C = mysqli_fetch_assoc($sql_WA_c1C);
          $totalWAC1C = $WorkAssocC1C['WA_c1C'];

          $sql_WA_c1D = mysqli_query($conn, "SELECT COUNT(*) AS WA_c1D FROM poll WHERE service LIKE '%3.%' AND c =4 AND date LIKE '%$month%'");
          $WorkAssocC1D = mysqli_fetch_assoc($sql_WA_c1D);
          $totalWAC1D = $WorkAssocC1D['WA_c1D'];

          //--------------------------------------------------------------

          $sql_WA_c2A = mysqli_query($conn, "SELECT COUNT(*) AS WA_c2A FROM poll WHERE service LIKE '%3.%' AND cc =1 AND date LIKE '%$month%'");
          $WorkAssocC2A = mysqli_fetch_assoc($sql_WA_c2A);
          $totalWAC2A = $WorkAssocC2A['WA_c2A'];

          $sql_WA_c2B = mysqli_query($conn, "SELECT COUNT(*) AS WA_c2B FROM poll WHERE service LIKE '%3.%' AND cc =2 AND date LIKE '%$month%'");
          $WorkAssocC2B = mysqli_fetch_assoc($sql_WA_c2B);
          $totalWAC2B = $WorkAssocC2B['WA_c2B'];

          $sql_WA_c2C = mysqli_query($conn, "SELECT COUNT(*) AS WA_c2C FROM poll WHERE service LIKE '%3.%' AND cc =3 AND date LIKE '%$month%'");
          $WorkAssocC2C = mysqli_fetch_assoc($sql_WA_c2C);
          $totalWAC2C = $WorkAssocC2C['WA_c2C'];


          $sql_WA_c2D = mysqli_query($conn, "SELECT COUNT(*) AS WA_c2D FROM poll WHERE service LIKE '%3.%' AND cc =4 AND date LIKE '%$month%'");
          $WorkAssocC2D = mysqli_fetch_assoc($sql_WA_c2D);
          $totalWAC2D = $WorkAssocC2D['WA_c2D'];


          $sql_WA_c2E = mysqli_query($conn, "SELECT COUNT(*) AS WA_c2E FROM poll WHERE service LIKE '%3.%' AND cc =5 AND date LIKE '%$month%'");
          $WorkAssocC2E = mysqli_fetch_assoc($sql_WA_c2E);
          $totalWAC2E = $WorkAssocC2E['WA_c2E'];

          //--------------------------------------------------------

          $sql_WA_c3A = mysqli_query($conn, "SELECT COUNT(*) AS WA_c3A FROM poll WHERE service LIKE '%3.%' AND ccc =1 AND date LIKE '%$month%'");
          $WorkAssocC3A = mysqli_fetch_assoc($sql_WA_c3A);
          $totalWAC3A = $WorkAssocC3A['WA_c3A'];




          $sql_WA_c3B = mysqli_query($conn, "SELECT COUNT(*) AS WA_c3B FROM poll WHERE service LIKE '%3.%' AND ccc =2 AND date LIKE '%$month%'");
          $WorkAssocC3B = mysqli_fetch_assoc($sql_WA_c3B);
          $totalWAC3B = $WorkAssocC3B['WA_c3B'];

          $sql_WA_c3C = mysqli_query($conn, "SELECT COUNT(*) AS WA_c3C FROM poll WHERE service LIKE '%3.%' AND ccc =3 AND date LIKE '%$month%'");
          $WorkAssocC3C = mysqli_fetch_assoc($sql_WA_c3C);
          $totalWAC3C = $WorkAssocC3C['WA_c3C'];

          $sql_WA_c3D = mysqli_query($conn, "SELECT COUNT(*) AS WA_c3D FROM poll WHERE service LIKE '%3.%' AND ccc =4 AND date LIKE '%$month%'");
          $WorkAssocC3D = mysqli_fetch_assoc($sql_WA_c3D);
          $totalWAC3D = $WorkAssocC3D['WA_c3D'];

          $percentC1A2 = $totalWAC1A / $totalWA * 100;
          $percentC1B2 = $totalWAC1B / $totalWA * 100;
          $percentC1C2 = $totalWAC1C / $totalWA * 100;
          $percentC1D2 = $totalWAC1D / $totalWA * 100;


          $percentC2A2 = $totalWAC2A / $totalWA * 100;
          $percentC2B2 = $totalWAC2B / $totalWA * 100;
          $percentC2C2 = $totalWAC2C / $totalWA * 100;
          $percentC2D2 = $totalWAC2D / $totalWA * 100;
          $percentC2E2 = $totalWAC2E / $totalWA * 100;

          $percentC3A2 = $totalWAC3A / $totalWA * 100;
          $percentC3B2 = $totalWAC3B / $totalWA * 100;
          $percentC3C2 = $totalWAC3C / $totalWA * 100;
          $percentC3D2 = $totalWAC3D / $totalWA * 100;
          ?>


                  <tr>
                    <td>Worker's Association</td>
                    <td><?php echo round($percentC1A2,2);; ?>%</td>
                    <td><?php echo round($percentC1B2,2);; ?>%</td>
                    <td><?php echo round($percentC1C2,2);; ?>%</td>
                    <td><?php echo round($percentC1D2,2);; ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc1wa = $percentC1A2 + $percentC1B2 + $percentC1C2 + $percentC1D2,2); ?>%</span></td>
                    

                    <td><?php echo round($percentC2A2,2);; ?>%</td>
                    <td><?php echo round($percentC2B2,2);; ?>%</td>
                    <td><?php echo round($percentC2C2,2);; ?>%</td>
                    <td><?php echo round($percentC2D2,2);; ?>%</td>
                    <td><?php echo round($percentC2E2,2);; ?>%</td>
                  
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc2wa = $percentC2A2 + $percentC2B2 + $percentC2C2 + $percentC2D2+ $percentC2E2,2); ?>%</span></td>


                    <td><?php echo round($percentC3A2,2);; ?>%</td>
                    <td><?php echo round($percentC3B2,2);; ?>%</td>
                    <td><?php echo round($percentC3C2,2);; ?>%</td>
                    <td><?php echo round($percentC3D2,2);; ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc3wa = $percentC3A2 + $percentC3B2 + $percentC3C2 + $percentC3D2,2); ?>%</span></td>

                    <?php $sumtotal3 = $grandtotalc1wa + $grandtotalc2wa + $grandtotalc3wa; ?>

                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($sumtotal3/3,2); ?>%</span></td>


                  </tr>

          <?php 
           }else {
            echo "<tr><td class='table-warning' style='color:red;'>Workers Association *</td><td colspan =17 class='table-danger'><b> No Data Available</b></td></tr>";
           }
          }else{
            echo "Error executing query: " . mysqli_error($conn);
          }

          $total_1020 = mysqli_query($conn, "SELECT COUNT(*) AS total1020 FROM poll WHERE service LIKE '%4.%' AND date LIKE '%$month%'");
              if ($total_1020) {
            # code...
          $total1020_row = mysqli_fetch_assoc($total_1020);
          $total1020 = $total1020_row['total1020'];

                  if ($total1020 > 0) {

          $sql_1020_c1A = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c1A FROM poll WHERE service LIKE '%4.%' AND c =1 AND date LIKE '%$month%'");
          $rowC1A = mysqli_fetch_assoc($sql_1020_c1A);
          $total1020C1A = $rowC1A['1020_c1A'];

          $sql_1020_c1B = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c1B FROM poll WHERE service LIKE '%4.%' AND c =2 AND date LIKE '%$month%'");
          $rowC1B = mysqli_fetch_assoc($sql_1020_c1B);
          $total1020C1B = $rowC1B['1020_c1B'];

          $sql_1020_c1C = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c1C FROM poll WHERE service LIKE '%4.%' AND c =3 AND date LIKE '%$month%'");
          $rowC1C = mysqli_fetch_assoc($sql_1020_c1C);
          $total1020C1C = $rowC1C['1020_c1C'];

          $sql_1020_c1D = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c1D FROM poll WHERE service LIKE '%4.%' AND c =4 AND date LIKE '%$month%'");
          $rowC1D = mysqli_fetch_assoc($sql_1020_c1D);
          $total1020C1D = $rowC1D['1020_c1D'];

          //--------------------------------------------------------------

          $sql_1020_c2A = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c2A FROM poll WHERE service LIKE '%4.%' AND cc =1 AND date LIKE '%$month%'");
          $rowC2A = mysqli_fetch_assoc($sql_1020_c2A);
          $total1020C2A = $rowC2A['1020_c2A'];

          $sql_1020_c2B = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c2B FROM poll WHERE service LIKE '%4.%' AND cc =2 AND date LIKE '%$month%'");
          $rowC2B = mysqli_fetch_assoc($sql_1020_c2B);
          $total1020C2B = $rowC2B['1020_c2B'];

          $sql_1020_c2C = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c2C FROM poll WHERE service LIKE '%4.%' AND cc =3 AND date LIKE '%$month%'");
          $rowC2C = mysqli_fetch_assoc($sql_1020_c2C);
          $total1020C2C = $rowC2C['1020_c2C'];


          $sql_1020_c2D = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c2D FROM poll WHERE service LIKE '%4.%' AND cc =4 AND date LIKE '%$month%'");
          $rowC2D = mysqli_fetch_assoc($sql_1020_c2D);
          $total1020C2D = $rowC2D['1020_c2D'];

          $sql_1020_c2E = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c2E FROM poll WHERE service LIKE '%4.%' AND cc =5 AND date LIKE '%$month%'");
          $rowC2E = mysqli_fetch_assoc($sql_1020_c2E);
          $total1020C2E = $rowC2E['1020_c2E'];

          //--------------------------------------------------------

          $sql_1020_c3A = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c3A FROM poll WHERE service LIKE '%4.%' AND ccc =1 AND date LIKE '%$month%'");
          $rowC3A = mysqli_fetch_assoc($sql_1020_c3A);
          $total1020C3A = $rowC3A['1020_c3A'];

          $sql_1020_c3B = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c3B FROM poll WHERE service LIKE '%4.%' AND ccc =2 AND date LIKE '%$month%'");
          $rowC3B = mysqli_fetch_assoc($sql_1020_c3B);
          $total1020C3B = $rowC3B['1020_c3B'];

          $sql_1020_c3C = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c3C FROM poll WHERE service LIKE '%4.%' AND ccc =3 AND date LIKE '%$month%'");
          $rowC3C = mysqli_fetch_assoc($sql_1020_c3C);
          $total1020C3C = $rowC3C['1020_c3C'];

          $sql_1020_c3D = mysqli_query($conn, "SELECT COUNT(*) AS 1020_c3D FROM poll WHERE service LIKE '%4.%' AND ccc =4 AND date LIKE '%$month%'");
          $rowC3D = mysqli_fetch_assoc($sql_1020_c3D);
          $total1020C3D = $rowC3D['1020_c3D'];

          $percentC1A3 = $total1020C1A / $total1020 * 100;
          $percentC1B3 = $total1020C1B / $total1020 * 100;
          $percentC1C3 = $total1020C1C / $total1020 * 100;
          $percentC1D3 = $total1020C1D / $total1020 * 100;


          $percentC2A3 = $total1020C2A / $total1020 * 100;
          $percentC2B3 = $total1020C2B / $total1020 * 100;
          $percentC2C3 = $total1020C2C / $total1020 * 100;
          $percentC2D3 = $total1020C2D / $total1020 * 100;
          $percentC2E3 = $total1020C2E / $total1020 * 100;

          $percentC3A3 = $total1020C3A / $total1020 * 100;
          $percentC3B3 = $total1020C3B / $total1020 * 100;
          $percentC3C3 = $total1020C3C / $total1020 * 100;
          $percentC3D3 = $total1020C3D / $total1020 * 100;

          ?>


                  <tr>
                    <td>Rule 1020</td>
                    <td><?php echo round($percentC1A3,2); ?>%</td>
                    <td><?php echo round($percentC1B3,2); ?>%</td>
                    <td><?php echo round($percentC1C3,2); ?>%</td>
                    <td><?php echo round($percentC1D3,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc11020 = $percentC1A3 + $percentC1B3 + $percentC1C3 + $percentC1D3,2); ?>%</span></td>
                    

                    <td><?php echo round($percentC2A3,2); ?>%</td>
                    <td><?php echo round($percentC2B3,2); ?>%</td>
                    <td><?php echo round($percentC2C3,2); ?>%</td>
                    <td><?php echo round($percentC2D3,2); ?>%</td>
                    <td><?php echo round($percentC2E3,2); ?>%</td>
                  
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc21020 = $percentC2A3 + $percentC2B3 + $percentC2C3 + $percentC2D3+ $percentC2E3,2); ?>%</span></td>


                    <td><?php echo round($percentC3A3,2); ?>%</td>
                    <td><?php echo round($percentC3B3,2); ?>%</td>
                    <td><?php echo round($percentC3C3,2); ?>%</td>
                    <td><?php echo round($percentC3D3,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotalc31020 = $percentC3A3 + $percentC3B3 + $percentC3C3 + $percentC3D3,2); ?>%</span></td>

                    <?php $sumtotal4 = $grandtotalc11020 + $grandtotalc21020 + $grandtotalc31020;
                    $grandtotal3 = $sumtotal4/3;
                     ?>

                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotal3,2) ; ?>%</span></td>



                  </tr>
          <?php 

          } else {
            echo "<tr><td class='table-warning' style='color:red;'>Rule 1020 *</td><td colspan =17 class='table-danger'><b> No Data Available</b></td></tr>";
           }
          }else{
            echo "Error executing query: " . mysqli_error($conn);
          }

          //===================================other services==================================


          $totalothers = mysqli_query($conn, "SELECT COUNT(*) AS totalothers FROM offline WHERE  service <> '1' AND date LIKE '%$month%'");
          if ($totalothers) {
            // if ($totalothers->num_rows > 0) {

          $totalothers_row = mysqli_fetch_assoc($totalothers);
          $totalothers = $totalothers_row['totalothers'];

            if ($totalothers > 0) {


          $sql_others_c1A = mysqli_query($conn, "SELECT COUNT(*) AS others_c1A FROM offline WHERE  service <> '1' AND c =1 AND date LIKE '%$month%'");
          $rowC1A = mysqli_fetch_assoc($sql_others_c1A);
          $totalothersC1A = $rowC1A['others_c1A'];


          $sql_others_c1B = mysqli_query($conn, "SELECT COUNT(*) AS others_c1B FROM offline WHERE  service <> '1' AND c =2 AND date LIKE '%$month%'");
          $rowC1B = mysqli_fetch_assoc($sql_others_c1B);
          $totalothersC1B = $rowC1B['others_c1B'];


          $sql_others_c1C = mysqli_query($conn, "SELECT COUNT(*) AS others_c1C FROM offline WHERE  service <> '1' AND c =3 AND date LIKE '%$month%'");
          $rowC1C = mysqli_fetch_assoc($sql_others_c1C);
          $totalothersC1C = $rowC1C['others_c1C'];


          $sql_others_c1D = mysqli_query($conn, "SELECT COUNT(*) AS others_c1D FROM offline WHERE  service <> '1' AND c =4 AND date LIKE '%$month%'");
          $rowC1D = mysqli_fetch_assoc($sql_others_c1D);
          $totalothersC1D = $rowC1D['others_c1D'];

          //--------------------------------------------------------------

          $sql_others_c2A = mysqli_query($conn, "SELECT COUNT(*) AS others_c2A FROM offline WHERE  service <> '1' AND cc =1 AND date LIKE '%$month%'");
          $rowC2A = mysqli_fetch_assoc($sql_others_c2A);
          $totalothersC2A = $rowC2A['others_c2A'];

          $sql_others_c2B = mysqli_query($conn, "SELECT COUNT(*) AS others_c2B FROM offline WHERE  service <> '1' AND cc =2 AND date LIKE '%$month%'");
          $rowC2B = mysqli_fetch_assoc($sql_others_c2B);
          $totalothersC2B = $rowC2B['others_c2B'];

          $sql_others_c2C = mysqli_query($conn, "SELECT COUNT(*) AS others_c2C FROM offline WHERE  service <> '1' AND cc =3 AND date LIKE '%$month%'");
          $rowC2C = mysqli_fetch_assoc($sql_others_c2C);
          $totalothersC2C = $rowC2C['others_c2C'];


          $sql_others_c2D = mysqli_query($conn, "SELECT COUNT(*) AS others_c2D FROM offline WHERE  service <> '1' AND cc =4 AND date LIKE '%$month%'");
          $rowC2D = mysqli_fetch_assoc($sql_others_c2D);
          $totalothersC2D = $rowC2D['others_c2D'];


          $sql_others_c2E = mysqli_query($conn, "SELECT COUNT(*) AS others_c2E FROM offline WHERE  service <> '1' AND cc =5 AND date LIKE '%$month%'");
          $rowC2E = mysqli_fetch_assoc($sql_others_c2E);
          $totalothersC2E = $rowC2E['others_c2E'];



          //--------------------------------------------------------

          $sql_others_c3A = mysqli_query($conn, "SELECT COUNT(*) AS others_c3A FROM offline WHERE  service <> '1' AND ccc =1 AND date LIKE '%$month%'");
          $rowC3A = mysqli_fetch_assoc($sql_others_c3A);
          $totalothersC3A = $rowC3A['others_c3A'];


          $sql_others_c3B = mysqli_query($conn, "SELECT COUNT(*) AS others_c3B FROM offline WHERE  service <> '1' AND ccc =2 AND date LIKE '%$month%'");
          $rowC3B = mysqli_fetch_assoc($sql_others_c3B);
          $totalothersC3B = $rowC3B['others_c3B'];


          $sql_others_c3C = mysqli_query($conn, "SELECT COUNT(*) AS others_c3C FROM offline WHERE  service <> '1' AND ccc =3 AND date LIKE '%$month%'");
          $rowC3C = mysqli_fetch_assoc($sql_others_c3C);
          $totalothersC3C = $rowC3C['others_c3C'];


          $sql_others_c3D = mysqli_query($conn, "SELECT COUNT(*) AS others_c3D FROM offline WHERE  service <> '1' AND ccc =4 AND date LIKE '%$month%'");
          $rowC3D = mysqli_fetch_assoc($sql_others_c3D);
          $totalothersC3D = $rowC3D['others_c3D'];

          $percent_Others_C1A = $totalothersC1A / $totalothers * 100;
          $percent_Others_C1B = $totalothersC1B / $totalothers * 100;
          $percent_Others_C1C = $totalothersC1C / $totalothers * 100;
          $percent_Others_C1D = $totalothersC1D / $totalothers * 100;


          $percent_Others_C2A = $totalothersC2A / $totalothers * 100;
          $percent_Others_C2B = $totalothersC2B / $totalothers * 100;
          $percent_Others_C2C = $totalothersC2C / $totalothers * 100;
          $percent_Others_C2D = $totalothersC2D / $totalothers * 100;
          $percent_Others_C2E = $totalothersC2E / $totalothers * 100;

          $percent_Others_C3A = $totalothersC3A / $totalothers * 100;
          $percent_Others_C3B = $totalothersC3B / $totalothers * 100;
          $percent_Others_C3C = $totalothersC3C / $totalothers * 100;
          $percent_Others_C3D = $totalothersC3D / $totalothers * 100;

          ?>


                  <tr>
                    <td>Other Services</td>
                    <td><?php echo round($percent_Others_C1A,2); ?>%</td>
                    <td><?php echo round($percent_Others_C1B,2); ?>%</td>
                    <td><?php echo round($percent_Others_C1C,2); ?>%</td>
                    <td><?php echo round($percent_Others_C1D,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotal_others_c1 = $percent_Others_C1A + $percent_Others_C1B + $percent_Others_C1C + $percent_Others_C1D,2); ?>%</span></td>
                    

                    <td><?php echo round($percent_Others_C2A,2); ?>%</td>
                    <td><?php echo round($percent_Others_C2B,2); ?>%</td>
                    <td><?php echo round($percent_Others_C2C,2); ?>%</td>
                    <td><?php echo round($percent_Others_C2D,2); ?>%</td>
                    <td><?php echo round($percent_Others_C2E,2); ?>%</td>
                  
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotal_others_c2 = $percent_Others_C2A + $percent_Others_C2B + $percent_Others_C2C + $percent_Others_C2D+ $percent_Others_C2E,2); ?>%</span></td>


                    <td><?php echo round($percent_Others_C3A,2); ?>%</td>
                    <td><?php echo round($percent_Others_C3B,2); ?>%</td>
                    <td><?php echo round($percent_Others_C3C,2); ?>%</td>
                    <td><?php echo round($percent_Others_C3D,2); ?>%</td>
                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($grandtotal_others_c3 = $percent_Others_C3A + $percent_Others_C3B + $percent_Others_C3C + $percent_Others_C3D,2); ?>%</span></td>

                    <?php $sumtotal5 = $grandtotal_others_c1 + $grandtotal_others_c2 + $grandtotal_others_c3; ?>

                    <td style="background-color: lightgreen;"><span class="green"><?php echo round($sumtotal5/3,2); ?>%</span></td>
                  </tr>


          <?php

          }
           else {
            echo "<tr><td class='table-warning' style='color:red;'>Other Services *</td><td colspan =17 class='table-danger'><b> No Data Available</b></td></tr>";
           }
          }else{
            echo "Error executing query: " . mysqli_error($conn);
          }
          ?>
                  
                
                  </table>
                </div>

              </div>
             </div>
           </div>
           <hr>
           <div class="row">
            <div class="col-12">
              <div class="card-header" style="margin-top: 3%;">
              <center>
                <h3>QUALITY SERVICE DIMENSION</h3>
               
              </center>
              <br>
              </div>
              <div class="card-body">
                <div class="scroll-horizon">
                <table class="table table-bordered table-hover qsd-tbl" style="width: 200%;">
                  <tr class="table-dark">
                    <th>Service/Program</th>
                    <th style="width: 200px;">Satisfaction (SQD 01)</th>
                    <th>Responsiveness</th>
                    <th>Reliability</th>
                    <th style="width: 200px;">Access and Facility</th>
                    <th>Communication</th>
                    <th>Cost</th>
                    <!-- <th>Facility</th> -->
                    <th>Integrity</th>
                    <th>Assurance</th>
                    <th>Outcome</th>
                    <th>Total Score Per Service</th>
                    <th>TOTAL PERCENTAGE PER SERVICE (%)</th>
                  </tr>

          <?php

          $sqd1_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result1 FROM offline WHERE service = '1' AND sqd IN (6,5,4) AND date LIKE '%$month%'");
          $sqd1_lh_row = mysqli_fetch_assoc($sqd1_lh);
          $dsp_sqd1_lh = $sqd1_lh_row['sum_result1'];

          $sqd2_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result2 FROM offline WHERE service = '1' AND sqd_one IN (6,5,4) AND date LIKE '%$month%'");
          $sqd2_lh_row = mysqli_fetch_assoc($sqd2_lh);
          $dsp_sqd2_lh = $sqd2_lh_row['sum_result2'];

          $sqd3_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result3 FROM offline WHERE service = '1' AND sqd_two IN (6,5,4)AND date LIKE '%$month%'");
          $sqd3_lh_row = mysqli_fetch_assoc($sqd3_lh);
          $dsp_sqd3_lh = $sqd3_lh_row['sum_result3'];

          $sqd4_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result4 FROM offline WHERE service = '1' AND sqd_three IN (6,5,4)AND date LIKE '%$month%'");
          $sqd4_lh_row = mysqli_fetch_assoc($sqd4_lh);
          $dsp_sqd4_lh = $sqd4_lh_row['sum_result4'];

          $sqd5_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result5 FROM offline WHERE service = '1' AND sqd_four IN (6,5,4) AND date LIKE '%$month%'");
          $sqd5_lh_row = mysqli_fetch_assoc($sqd5_lh);
          $dsp_sqd5_lh = $sqd5_lh_row['sum_result5'];

          $sqd6_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result6 FROM offline WHERE service = '1' AND sqd_five IN (6,5,4)AND date LIKE '%$month%'");
          $sqd6_lh_row = mysqli_fetch_assoc($sqd6_lh);
          $dsp_sqd6_lh = $sqd6_lh_row['sum_result6'];

          $sqd7_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result7 FROM offline WHERE service = '1' AND sqd_six IN (6,5,4)AND date LIKE '%$month%'");
          $sqd7_lh_row = mysqli_fetch_assoc($sqd7_lh);
          $dsp_sqd7_lh = $sqd7_lh_row['sum_result7'];

          $sqd8_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result8 FROM offline WHERE service = '1' AND sqd_seven IN (6,5,4)AND date LIKE '%$month%'");
          $sqd8_lh_row = mysqli_fetch_assoc($sqd8_lh);
          $dsp_sqd8_lh = $sqd8_lh_row['sum_result8'];

          $sqd9_lh = mysqli_query($conn, "SELECT COUNT(*) AS sum_result9 FROM offline WHERE service = '1' AND sqd_eight IN (6,5,4) AND date LIKE '%$month%'");
          $sqd9_lh_row = mysqli_fetch_assoc($sqd9_lh);
          $dsp_sqd9_lh = $sqd9_lh_row['sum_result9'];


          if ($dsp_sqd1_lh > 0 OR $dsp_sqd2_lh > 0 OR $dsp_sqd3_lh > 0 OR $dsp_sqd4_lh > 0 OR $dsp_sqd5_lh > 0 OR $dsp_sqd6_lh > 0 OR $dsp_sqd7_lh > 0 OR $dsp_sqd8_lh > 0 OR $dsp_sqd9_lh > 0) {
            // echo "ZERO!";


                  ?>

                  <tr>
                    <td class="table-primary">Livelihood</td>


<!-- Render Table Cells -->
    <?php
    echo calculateAndRender($dsp_sqd1_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd2_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd3_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd4_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd5_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd6_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd7_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd8_lh, $totalLivelihood);
    echo calculateAndRender($dsp_sqd9_lh, $totalLivelihood);
    ?>
    <!-- <td class="table-success"> -->
<?php
$values = [
    $dsp_sqd1_lh,
    $dsp_sqd2_lh,
    $dsp_sqd3_lh,
    $dsp_sqd4_lh,
    $dsp_sqd5_lh,
    $dsp_sqd6_lh,
    $dsp_sqd7_lh,
    $dsp_sqd8_lh,
    $dsp_sqd9_lh
];
echo calculateTotalScoreAndRender($values, $totalLivelihood);

?>

    <!-- </td> -->
                    <?php
if ($totalLivelihood > 0) {
    // Calculate the total score
    $total_score_lh = round(
        (
            ($dsp_sqd1_lh / $totalLivelihood) +
            ($dsp_sqd2_lh / $totalLivelihood) +
            ($dsp_sqd3_lh / $totalLivelihood) +
            ($dsp_sqd4_lh / $totalLivelihood) +
            ($dsp_sqd5_lh / $totalLivelihood) +
            ($dsp_sqd6_lh / $totalLivelihood) +
            ($dsp_sqd7_lh / $totalLivelihood) +
            ($dsp_sqd8_lh / $totalLivelihood) +
            ($dsp_sqd9_lh / $totalLivelihood)
        ) / 9 * 5, 
        2
    );
    // Calculate the percentage
    $percentage = round(($total_score_lh / 5) * 100, 2);
    // Determine the class and style
    $class = ($percentage < 100) ? 'table-warning' : 'table-success';
    $style = ($percentage < 100) ? 'color:#808000;' : '';
    // Display the percentage
    echo "<td style='$style' class='$class'>$percentage%</td>";
}
?>


                  </tr>

                  <?php 
                }
                else{
                  ?>
          <tr>
                    <td class="table-primary table-warning" style='color:red;' >Livelihood *</td><td colspan="11" class="table-danger"><b>No Data</td>
                  <?php
                }
          $sqd1_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result1CSHP FROM poll WHERE sqd IN (6,5,4) AND service LIKE '%2.%' AND date LIKE '%$month%'");
          $sqd1_CSHP_row = mysqli_fetch_assoc($sqd1_CSHP);
          $dsp_sqd1_CSHP = $sqd1_CSHP_row['sum_result1CSHP'];

          $sqd2_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result2CSHP FROM poll WHERE service LIKE '%2.%' AND sqd_one IN (6,5,4) AND date LIKE '%$month%'");
          $sqd2_CSHP_row = mysqli_fetch_assoc($sqd2_CSHP);
          $dsp_sqd2_CSHP = $sqd2_CSHP_row['sum_result2CSHP'];

          $sqd3_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result3CSHP FROM poll WHERE service LIKE '%2.%' AND sqd_two IN (6,5,4)AND date LIKE '%$month%'");
          $sqd3_CSHP_row = mysqli_fetch_assoc($sqd3_CSHP);
          $dsp_sqd3_CSHP = $sqd3_CSHP_row['sum_result3CSHP'];

          $sqd4_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result4CSHP FROM poll WHERE service LIKE '%2.%' AND sqd_three IN (6,5,4)AND date LIKE '%$month%'");
          $sqd4_CSHP_row = mysqli_fetch_assoc($sqd4_CSHP);
          $dsp_sqd4_CSHP = $sqd4_CSHP_row['sum_result4CSHP'];


          $sqd5_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result5CSHP FROM poll WHERE service LIKE '%2.%' AND sqd_four IN (6,5,4)AND date LIKE '%$month%'");
          $sqd5_CSHP_row = mysqli_fetch_assoc($sqd5_CSHP);
          $dsp_sqd5_CSHP = $sqd5_CSHP_row['sum_result5CSHP'];

          $sqd6_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result6CSHP FROM poll WHERE service LIKE '%2.%'  AND sqd_five IN (6,5,4)AND date LIKE '%$month%'");
          $sqd6_CSHP_row = mysqli_fetch_assoc($sqd6_CSHP);
          $dsp_sqd6_CSHP = $sqd6_CSHP_row['sum_result6CSHP'];

          $sqd7_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result7CSHP FROM poll WHERE service LIKE '%2.%'  AND sqd_six IN (6,5,4)AND date LIKE '%$month%'");
          $sqd7_CSHP_row = mysqli_fetch_assoc($sqd7_CSHP);
          $dsp_sqd7_CSHP = $sqd7_CSHP_row['sum_result7CSHP'];

          $sqd8_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result8CSHP FROM poll WHERE service LIKE '%2.%' AND sqd_seven IN (6,5,4)AND date LIKE '%$month%'");
          $sqd8_CSHP_row = mysqli_fetch_assoc($sqd8_CSHP);
          $dsp_sqd8_CSHP = $sqd8_CSHP_row['sum_result8CSHP'];

          $sqd9_CSHP = mysqli_query($conn, "SELECT COUNT(*) AS sum_result9CSHP FROM poll WHERE service LIKE '%2.%'  AND sqd_eight IN (6,5,4)AND date LIKE '%$month%'");
          $sqd9_CSHP_row = mysqli_fetch_assoc($sqd9_CSHP);
          $dsp_sqd9_CSHP = $sqd9_CSHP_row['sum_result9CSHP'];

          if ($dsp_sqd1_CSHP > 0 OR $dsp_sqd2_CSHP > 0 OR $dsp_sqd3_CSHP > 0 OR $dsp_sqd4_CSHP > 0 OR $dsp_sqd5_CSHP > 0 OR $dsp_sqd6_CSHP > 0 OR $dsp_sqd7_CSHP > 0 OR $dsp_sqd8_CSHP > 0 OR $dsp_sqd9_CSHP > 0) {

                  ?>
                  <tr>
                    <td class="table-primary">CSHP</td>
    <?php
    echo calculateAndRender($dsp_sqd1_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd2_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd3_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd4_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd5_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd6_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd7_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd8_CSHP, $CSHP);
    echo calculateAndRender($dsp_sqd9_CSHP, $CSHP);
    ?>
    <!-- <td class="table-success"> -->
<?php
$values = [
    $dsp_sqd1_CSHP,
    $dsp_sqd2_CSHP,
    $dsp_sqd3_CSHP,
    $dsp_sqd4_CSHP,
    $dsp_sqd5_CSHP,
    $dsp_sqd6_CSHP,
    $dsp_sqd7_CSHP,
    $dsp_sqd8_CSHP,
    $dsp_sqd9_CSHP
];
echo calculateTotalScoreAndRender($values, $CSHP);

?>
      <!-- </td> -->
<?php
if ($CSHP > 0) {
    // Calculate the total score
    $total_score_CSHP = round(
        (
            ($dsp_sqd1_CSHP / $CSHP) +
            ($dsp_sqd2_CSHP / $CSHP) +
            ($dsp_sqd3_CSHP / $CSHP) +
            ($dsp_sqd4_CSHP / $CSHP) +
            ($dsp_sqd5_CSHP / $CSHP) +
            ($dsp_sqd6_CSHP / $CSHP) +
            ($dsp_sqd7_CSHP / $CSHP) +
            ($dsp_sqd8_CSHP / $CSHP) +
            ($dsp_sqd9_CSHP / $CSHP)
        ) / 9 * 5, 
        2
    );
    // Calculate the percentage
    $percentage = round(($total_score_CSHP / 5) * 100, 2);
    // Determine the class and style
    $class = ($percentage < 100) ? 'table-warning' : 'table-success';
    $style = ($percentage < 100) ? 'color:#808000;' : '';
    // Display the percentage
    echo "<td style='$style' class='$class'>$percentage%</td>";
}
?>

                  </tr>

                  <?php 
                }
                else{
                  ?>
          <tr>
                    <td class="table-primary table-warning" style='color:red;'>CSHP *</td><td colspan="11" class="table-danger"><b> No Data</td>
                  <?php
                }
          $sqd1_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result1_WA FROM poll WHERE sqd IN (6,5,4) AND service LIKE '%3.%' AND date LIKE '%$month%'");
          $sqd1_WA_row = mysqli_fetch_assoc($sqd1_WA);
          $dsp_sqd1_WA = $sqd1_WA_row['sum_result1_WA'];

          $sqd2_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result2_WA FROM poll WHERE service LIKE '%3.%' AND sqd_one IN (6,5,4) AND date LIKE '%$month%'");
          $sqd2_WA_row = mysqli_fetch_assoc($sqd2_WA);
          $dsp_sqd2_WA = $sqd2_WA_row['sum_result2_WA'];

          $sqd3_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result3_WA FROM poll WHERE service LIKE '%3.%' AND sqd_two IN (6,5,4)AND date LIKE '%$month%'");
          $sqd3_WA_row = mysqli_fetch_assoc($sqd3_WA);
          $dsp_sqd3_WA = $sqd3_WA_row['sum_result3_WA'];

          $sqd4_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result4_WA FROM poll WHERE service LIKE '%3.%' AND sqd_three IN (6,5,4)AND date LIKE '%$month%'");
          $sqd4_WA_row = mysqli_fetch_assoc($sqd4_WA);
          $dsp_sqd4_WA = $sqd4_WA_row['sum_result4_WA'];

          $sqd5_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result5_WA FROM poll WHERE service LIKE '%3.%' AND sqd_four IN (6,5,4)AND date LIKE '%$month%'");
          $sqd5_WA_row = mysqli_fetch_assoc($sqd5_WA);
          $dsp_sqd5_WA = $sqd5_WA_row['sum_result5_WA'];

          $sqd6_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result6_WA FROM poll WHERE service LIKE '%3.%'  AND sqd_five IN (6,5,4)AND date LIKE '%$month%'");
          $sqd6_WA_row = mysqli_fetch_assoc($sqd6_WA);
          $dsp_sqd6_WA = $sqd6_WA_row['sum_result6_WA'];

          $sqd7_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result7_WA FROM poll WHERE service LIKE '%3.%'  AND sqd_six IN (6,5,4)AND date LIKE '%$month%'");
          $sqd7_WA_row = mysqli_fetch_assoc($sqd7_WA);
          $dsp_sqd7_WA = $sqd7_WA_row['sum_result7_WA'];

          $sqd8_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result8_WA FROM poll WHERE service LIKE '%3.%' AND sqd_seven IN (6,5,4)AND date LIKE '%$month%'");
          $sqd8_WA_row = mysqli_fetch_assoc($sqd8_WA);
          $dsp_sqd8_WA = $sqd8_WA_row['sum_result8_WA'];

          $sqd9_WA = mysqli_query($conn, "SELECT COUNT(*) AS sum_result9_WA FROM poll WHERE service LIKE '%3.%'  AND sqd_eight IN (6,5,4)AND date LIKE '%$month%'");
          $sqd9_WA_row = mysqli_fetch_assoc($sqd9_WA);
          $dsp_sqd9_WA = $sqd9_WA_row['sum_result9_WA'];

          if ($dsp_sqd1_WA > 0 OR $dsp_sqd2_WA > 0 OR $dsp_sqd3_WA > 0 OR $dsp_sqd4_WA > 0 OR $dsp_sqd5_WA > 0 OR $dsp_sqd6_WA > 0 OR $dsp_sqd7_WA > 0 OR $dsp_sqd8_WA > 0 OR $dsp_sqd9_WA > 0) {

                  ?>


                  <tr>
                    <td class="table-primary">Worker's Association</td>
    <?php
    echo calculateAndRender($dsp_sqd1_WA, $totalWA);
    echo calculateAndRender($dsp_sqd2_WA, $totalWA);
    echo calculateAndRender($dsp_sqd3_WA, $totalWA);
    echo calculateAndRender($dsp_sqd4_WA, $totalWA);
    echo calculateAndRender($dsp_sqd5_WA, $totalWA);
    echo calculateAndRender($dsp_sqd6_WA, $totalWA);
    echo calculateAndRender($dsp_sqd7_WA, $totalWA);
    echo calculateAndRender($dsp_sqd8_WA, $totalWA);
    echo calculateAndRender($dsp_sqd9_WA, $totalWA);
    ?>
    <!-- <td class="table-success"> -->
<?php
$values = [
    $dsp_sqd1_WA,
    $dsp_sqd2_WA,
    $dsp_sqd3_WA,
    $dsp_sqd4_WA,
    $dsp_sqd5_WA,
    $dsp_sqd6_WA,
    $dsp_sqd7_WA,
    $dsp_sqd8_WA,
    $dsp_sqd9_WA
];
echo calculateTotalScoreAndRender($values, $totalWA);

?>
      <!-- </td> -->
<?php
if ($totalWA > 0) {
    // Calculate the total score
    $total_score_WA = round(
        (
            ($dsp_sqd1_WA / $totalWA) +
            ($dsp_sqd2_WA / $totalWA) +
            ($dsp_sqd3_WA / $totalWA) +
            ($dsp_sqd4_WA / $totalWA) +
            ($dsp_sqd5_WA / $totalWA) +
            ($dsp_sqd6_WA / $totalWA) +
            ($dsp_sqd7_WA / $totalWA) +
            ($dsp_sqd8_WA / $totalWA) +
            ($dsp_sqd9_WA / $totalWA)
        ) / 9 * 5, 
        2
    );
    // Calculate the percentage
    $percentage = round(($total_score_WA / 5) * 100, 2);
    // Determine the class and style
    $class = ($percentage < 100) ? 'table-warning' : 'table-success';
    $style = ($percentage < 100) ? 'color:#808000;' : '';
    // Display the percentage
    echo "<td style='$style' class='$class'>$percentage%</td>";
}
?>


                  </tr>
                  <?php 
                }
                else{
                  ?>
          <tr>
                    <td class="table-primary table-warning" style='color:red;'>Worker's Association *</td><td colspan="11" class="table-danger"><b> No Data</td>
                  <?php

                }
          $sqd1_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result1_1020 FROM poll WHERE sqd IN (6,5,4) AND service LIKE '%4.%' AND date LIKE '%$month%'");
          $sqd1_1020_row = mysqli_fetch_assoc($sqd1_1020);
          $dsp_sqd1_1020 = $sqd1_1020_row['sum_result1_1020'];

          $sqd2_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result2_1020 FROM poll WHERE service LIKE '%4.%' AND sqd_one IN (6,5,4) AND date LIKE '%$month%'");
          $sqd2_1020_row = mysqli_fetch_assoc($sqd2_1020);
          $dsp_sqd2_1020 = $sqd2_1020_row['sum_result2_1020'];

          $sqd3_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result3_1020 FROM poll WHERE service LIKE '%4.%' AND sqd_two IN (6,5,4)AND date LIKE '%$month%'");
          $sqd3_1020_row = mysqli_fetch_assoc($sqd3_1020);
          $dsp_sqd3_1020 = $sqd3_1020_row['sum_result3_1020'];

          $sqd4_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result4_1020 FROM poll WHERE service LIKE '%4.%' AND sqd_three IN (6,5,4)AND date LIKE '%$month%'");
          $sqd4_1020_row = mysqli_fetch_assoc($sqd4_1020);
          $dsp_sqd4_1020 = $sqd4_1020_row['sum_result4_1020'];

          $sqd5_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result5_1020 FROM poll WHERE service LIKE '%4.%' AND sqd_four IN (6,5,4)AND date LIKE '%$month%'");
          $sqd5_1020_row = mysqli_fetch_assoc($sqd5_1020);
          $dsp_sqd5_1020 = $sqd5_1020_row['sum_result5_1020'];

          $sqd6_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result6_1020 FROM poll WHERE service LIKE '%4.%'  AND sqd_five IN (6,5,4)AND date LIKE '%$month%'");
          $sqd6_1020_row = mysqli_fetch_assoc($sqd6_1020);
          $dsp_sqd6_1020 = $sqd6_1020_row['sum_result6_1020'];

          $sqd7_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result7_1020 FROM poll WHERE service LIKE '%4.%'  AND sqd_six IN (6,5,4)AND date LIKE '%$month%'");
          $sqd7_1020_row = mysqli_fetch_assoc($sqd7_1020);
          $dsp_sqd7_1020 = $sqd7_1020_row['sum_result7_1020'];

          $sqd8_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result8_1020 FROM poll WHERE service LIKE '%4.%' AND sqd_seven IN (6,5,4)AND date LIKE '%$month%'");
          $sqd8_1020_row = mysqli_fetch_assoc($sqd8_1020);
          $dsp_sqd8_1020 = $sqd8_1020_row['sum_result8_1020'];

          $sqd9_1020 = mysqli_query($conn, "SELECT COUNT(*) AS sum_result9_1020 FROM poll WHERE service LIKE '%4.%'  AND sqd_eight IN (6,5,4)AND date LIKE '%$month%'");
          $sqd9_1020_row = mysqli_fetch_assoc($sqd9_1020);
          $dsp_sqd9_1020 = $sqd9_1020_row['sum_result9_1020'];

          if ($dsp_sqd1_1020 > 0 OR $dsp_sqd2_1020 > 0 OR $dsp_sqd3_1020 > 0 OR $dsp_sqd4_1020 > 0 OR $dsp_sqd5_1020 > 0 OR $dsp_sqd6_1020 > 0 OR $dsp_sqd7_1020 > 0 OR $dsp_sqd8_1020 > 0 OR $dsp_sqd9_1020 > 0) {

          ?>

                  <tr>
                    <td class="table-primary">Rule 1020</td>
    <?php
    echo calculateAndRender($dsp_sqd1_1020, $total1020);
    echo calculateAndRender($dsp_sqd2_1020, $total1020);
    echo calculateAndRender($dsp_sqd3_1020, $total1020);
    echo calculateAndRender($dsp_sqd4_1020, $total1020);
    echo calculateAndRender($dsp_sqd5_1020, $total1020);
    echo calculateAndRender($dsp_sqd6_1020, $total1020);
    echo calculateAndRender($dsp_sqd7_1020, $total1020);
    echo calculateAndRender($dsp_sqd8_1020, $total1020);
    echo calculateAndRender($dsp_sqd9_1020, $total1020);
    ?>
    <!-- <td class="table-success"> -->
<?php
$values = [
    $dsp_sqd1_1020,
    $dsp_sqd2_1020,
    $dsp_sqd3_1020,
    $dsp_sqd4_1020,
    $dsp_sqd5_1020,
    $dsp_sqd6_1020,
    $dsp_sqd7_1020,
    $dsp_sqd8_1020,
    $dsp_sqd9_1020
];
echo calculateTotalScoreAndRender($values, $total1020);

?>
      <!-- </td> -->
<?php
if ($total1020 > 0) {
    // Calculate the total score
    $total_score_1020 = round(
        (
            ($dsp_sqd1_1020 / $total1020) +
            ($dsp_sqd2_1020 / $total1020) +
            ($dsp_sqd3_1020 / $total1020) +
            ($dsp_sqd4_1020 / $total1020) +
            ($dsp_sqd5_1020 / $total1020) +
            ($dsp_sqd6_1020 / $total1020) +
            ($dsp_sqd7_1020 / $total1020) +
            ($dsp_sqd8_1020 / $total1020) +
            ($dsp_sqd9_1020 / $total1020)
        ) / 9 * 5, 
        2
    );
    // Calculate the percentage
    $percentage = round(($total_score_1020 / 5) * 100, 2);
    // Determine the class and style
    $class = ($percentage < 100) ? 'table-warning' : 'table-success';
    $style = ($percentage < 100) ? 'color:#808000;' : '';
    // Display the percentage
    echo "<td style='$style' class='$class'>$percentage%</td>";
}
?>


                  </tr>
          <?php 
                }
                else{
                  ?>
          <tr>
                    <td class="table-primary table-warning" style='color:red;'>Rule 1020 *</td><td colspan="11" class="table-danger"><b> No Data</td>
                  <?php
                }
          $total_others_sql = mysqli_query($conn, "SELECT COUNT(*) AS total_others FROM offline WHERE service <> '1' AND date LIKE '%$month%' ");
          $total_others_row = mysqli_fetch_assoc($total_others_sql);
          $total_others = $total_others_row['total_others'];

          $sqd1_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others1 FROM offline WHERE service <> '1' AND sqd IN (6,5,4) AND date LIKE '%$month%'");
          $sqd1_others_row = mysqli_fetch_assoc($sqd1_others);
          $dsp_sqd1_others = $sqd1_others_row['sum_result_others1'];

          $sqd2_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others2 FROM offline WHERE service <> '1' AND sqd_one IN (6,5,4) AND date LIKE '%$month%'");
          $sqd2_others_row = mysqli_fetch_assoc($sqd2_others);
          $dsp_sqd2_others = $sqd2_others_row['sum_result_others2'];

          $sqd3_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others3 FROM offline WHERE service <> '1' AND sqd_two IN (6,5,4)AND date LIKE '%$month%'");
          $sqd3_others_row = mysqli_fetch_assoc($sqd3_others);
          $dsp_sqd3_others = $sqd3_others_row['sum_result_others3'];

          $sqd4_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others4 FROM offline WHERE service <> '1' AND sqd_three IN (6,5,4)AND date LIKE '%$month%'");
          $sqd4_others_row = mysqli_fetch_assoc($sqd4_others);
          $dsp_sqd4_others = $sqd4_others_row['sum_result_others4'];

          $sqd5_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others5 FROM offline WHERE service <> '1' AND sqd_four IN (6,5,4) AND date LIKE '%$month%'");
          $sqd5_others_row = mysqli_fetch_assoc($sqd5_others);
          $dsp_sqd5_others = $sqd5_others_row['sum_result_others5'];

          $sqd6_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others6 FROM offline WHERE service <> '1' AND sqd_five IN (6,5,4)AND date LIKE '%$month%'");
          $sqd6_others_row = mysqli_fetch_assoc($sqd6_others);
          $dsp_sqd6_others = $sqd6_others_row['sum_result_others6'];

          $sqd7_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others7 FROM offline WHERE service <> '1' AND sqd_six IN (6,5,4)AND date LIKE '%$month%'");
          $sqd7_others_row = mysqli_fetch_assoc($sqd7_others);
          $dsp_sqd7_others = $sqd7_others_row['sum_result_others7'];

          $sqd8_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others8 FROM offline WHERE service <> '1' AND sqd_seven IN (6,5,4)AND date LIKE '%$month%'");
          $sqd8_others_row = mysqli_fetch_assoc($sqd8_others);
          $dsp_sqd8_others = $sqd8_others_row['sum_result_others8'];

          $sqd9_others = mysqli_query($conn, "SELECT COUNT(*) AS sum_result_others9 FROM offline WHERE service <> '1' AND sqd_eight IN (6,5,4) AND date LIKE '%$month%'");
          $sqd9_others_row = mysqli_fetch_assoc($sqd9_others);
          $dsp_sqd9_others = $sqd9_others_row['sum_result_others9'];


          if ($dsp_sqd1_others > 0 OR $dsp_sqd2_others > 0 OR $dsp_sqd3_others > 0 OR $dsp_sqd4_others > 0 OR $dsp_sqd5_others > 0 OR $dsp_sqd6_others > 0 OR $dsp_sqd7_others > 0 OR $dsp_sqd8_others > 0 OR $dsp_sqd9_others > 0) {
                ?>
                  <tr>
                    <td class="table-primary">Other Services</td>

    <?php
    echo calculateAndRender($dsp_sqd1_others, $total_others);
    echo calculateAndRender($dsp_sqd2_others, $total_others);
    echo calculateAndRender($dsp_sqd3_others, $total_others);
    echo calculateAndRender($dsp_sqd4_others, $total_others);
    echo calculateAndRender($dsp_sqd5_others, $total_others);
    echo calculateAndRender($dsp_sqd6_others, $total_others);
    echo calculateAndRender($dsp_sqd7_others, $total_others);
    echo calculateAndRender($dsp_sqd8_others, $total_others);
    echo calculateAndRender($dsp_sqd9_others, $total_others);
    ?>
    <!-- <td class="table-success"> -->
<?php
$values = [
    $dsp_sqd1_others,
    $dsp_sqd2_others,
    $dsp_sqd3_others,
    $dsp_sqd4_others,
    $dsp_sqd5_others,
    $dsp_sqd6_others,
    $dsp_sqd7_others,
    $dsp_sqd8_others,
    $dsp_sqd9_others
];
echo calculateTotalScoreAndRender($values, $total_others);

?>
      <!-- </td> -->
<?php
if ($totalothers > 0) {
    // Calculate the total score
    $total_score_others = round(
        (
            ($dsp_sqd1_others / $totalothers) +
            ($dsp_sqd2_others / $totalothers) +
            ($dsp_sqd3_others / $totalothers) +
            ($dsp_sqd4_others / $totalothers) +
            ($dsp_sqd5_others / $totalothers) +
            ($dsp_sqd6_others / $totalothers) +
            ($dsp_sqd7_others / $totalothers) +
            ($dsp_sqd8_others / $totalothers) +
            ($dsp_sqd9_others / $totalothers)
        ) / 9 * 5, 
        2
    );
    // Calculate the percentage
    $percentage = round(($total_score_others / 5) * 100, 2);
    // Determine the class and style
    $class = ($percentage < 100) ? 'table-warning' : 'table-success';
    $style = ($percentage < 100) ? 'color:#808000;' : '';
    // Display the percentage
    echo "<td style='$style' class='$class'>$percentage%</td>";
}
?>
                    

                  </tr>
          <?php 
                }
                else{
                  ?>
          <tr>
                    <td class="table-primary table-warning" style='color:red;'>Other Services *</td><td colspan="11" class="table-danger"><b> No Data</td>
                  <?php
                }
          ?>
                  <tr>
                      <th colspan="10"><center>OVERALL RESULT</center></th>
                      <?php
                      if ($total_score_lh > 0 || $total_score_CSHP > 0 || $total_score_WA > 0 || $total_score_1020 > 0 || $total_score_others > 0) {
                     
                          $overall_score = (
                              $total_score_lh +
                              $total_score_CSHP +
                              $total_score_WA +
                              $total_score_1020 +
                              $total_score_others
                          ) / 5;

                          // Round the final result for display
                          $rounded_overall_score = round($overall_score, 2);
                          
                          // Check if the overall score is below 5 or percentage is below 100
                          /*$score_class = ($rounded_overall_score < 4.9 && round(($overall_score / 5) * 100, 2) < 98) ? 'table-warning' : 'table-success';*/
                          $score_class = ($rounded_overall_score < 4) ? 'table-danger' : (($rounded_overall_score < 4.9) ? 'table-warning' : 'table-success');
                            echo "<th colspan='' class='$score_class'>" . $rounded_overall_score . "</th>";
                      } else {
                          echo "<th colspan='' class='table-warning'>Notice: No data has been calculated for this month.</th>";
                      }
                      if ($overall_score > 0) {
                        $percentage = round(($overall_score / 5) * 100, 2);

                        // Correct ternary logic
                        $percentage_class = ($percentage < 75) ? 'table-danger' : (($percentage < 98) ? 'table-warning' : 'table-success');
                        
                        echo "<th colspan='2' class='$percentage_class'>" . $percentage . "%</th>";?>

                  </tr>
                </table>
            </div>
            <br>
            <?php 
              if ($month == date('Y-m')) {
                # code...
            ?>
          <a href='functions/downloadConsolidated.php' id='exportLink'>
            <button id='exportButton' class='btn btn-primary' style='float:right;'>Export to Excel</button>
          </a>
            <?php }


             } else {
                          echo "<th colspan='2' class='table-warning'>Notice: Undefined Result</th>";
                      }
                      ?>
                  </tr>
                </table>
            </div>
            <br>
<!--                   <tr>
                    <th colspan="10"><center>PERCENTAGE</center></th> -->
                        <?php
                        /*if ($overall_score > 0) {
                            echo "<th colspan='2' class='table-success'>". round(($overall_score / 5) * 100, 2) . "%";
                        } else {
                            echo "<th colspan='2' class='table-warning'>Notice: Undefined Result";
                        }*/
                        ?>
<!--                     </th>
                  </tr> -->


          <script>
            document.getElementById("exportButton").addEventListener("click", function(event) {
              event.preventDefault();  // Prevent the default anchor click

                    Swal.fire({
                        title: 'Notice!',
                        text: 'Do you want to export this as Excel file?',
                        icon: 'question',
                          showCancelButton: true,
                          confirmButtonColor: '#3085d6',
                          cancelButtonColor: '#cc2900',
                          confirmButtonText: 'Confirm',
                          cancelButtonText: 'Cancel'
                    }).then((result) => {
                if (result.isConfirmed) {
                  // If confirmed, navigate to the download page
                  window.location.href = document.getElementById('exportLink').href;
                          const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                              toast.onmouseenter = Swal.stopTimer;
                              toast.onmouseleave = Swal.resumeTimer;
                            }
                          });
                          Toast.fire({
                            icon: "success",
                            title: "Data is converted to excel file"
                          });
                }
              });
            });
          </script>

            <br><br>
              </div>
            </div>
             
           </div>


         </div>


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
</script>

  <?php
    include 'includes/footer.php';
    ?>