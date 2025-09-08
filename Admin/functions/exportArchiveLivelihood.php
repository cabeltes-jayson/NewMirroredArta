<?php 
error_reporting(0);
include 'database.php';
session_start();
if (!isset($_SESSION['Name'])) {
    header("Location: login.php");
    exit(); // Exit to prevent further execution
}
date_default_timezone_set("Asia/Manila");

$ExportRecord = $_GET['export'];
echo $month = $ExportRecord;
echo '<br>'.$monthYear = strtotime($ExportRecord);

// Check if the date is valid
if (!$monthYear) {
    die("Invalid date format.");
    // echo $monthYear;
}

$dsp_date = date("F Y", $monthYear);
$filename = "CDOFO_" . str_replace(' ', '_', $dsp_date) . "_APPLICATION_FOR_LIVELIHOOD_ASSISTANCE";

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename.".xls");
header("Pragma: no-cache");
header("Expires: 0");

############################################# FOR FUTURE REFERENCE #################################################
/*$ExportRecord = $_GET['export'];
echo $month = $ExportRecord; // Outputs the '2024-10' value
echo '<br>';

// Ensure that the date is complete by adding '-01' (to indicate the first day of the month)
$monthYear = strtotime($ExportRecord . '-01'); // Now this will represent the first day of the month

// Check if the date is valid
if (!$monthYear) {
    die("Invalid date format.");
}

$dsp_date = date("F Y", $monthYear); // Format the timestamp into a full month-year format (e.g., October 2024)
echo "Formatted Date: " . $dsp_date . '<br>'; // Output the formatted date (e.g., October 2024)

// Create filename based on the formatted date
$filename = "CDOFO_" . str_replace(' ', '_', $dsp_date) . "_APPLICATION_FOR_LIVELIHOOD_ASSISTANCE";
echo "Filename: " . $filename;*/





 $sql_livelihoodtotal = "SELECT COUNT(*) AS grandtotalLivelihood FROM offline WHERE date LIKE '%$month%' AND service = '1'";
          $totalresult = $conn->query($sql_livelihoodtotal); 

          $totalfetch = mysqli_fetch_assoc($totalresult);
          $dsptotal = $totalfetch['grandtotalLivelihood'];
?>
<head>
     <style type="text/css">
         .header{
            background-color: #C2D69B;
         }

         .head-tbl{
            /*text-align: left;*/
            width: 100%;

         }

        .head-title{
            text-align: center;
        }
        .no-border{
            border: none;
        }
     </style>

</head>
<body>
        <!-- <table > -->
        <table class="head-tbl">
            <tr>
                
                <td class="head-title" colspan="86"><h2>TABULATIONS OF SURVEY RESPONSE</h2></td>
            </tr>
            <tr>
                <td colspan="12"><b>Office </td>
                <td><b> : </td>
                <td colspan="13"><b>DOLE X CAGAYAN DE ORO CITY FIELD OFFICE</td>
                <td colspan="64"></td>
                <td colspan="2"></td>

            </tr>
<?php
    // Get the month and year from $ExportRecord
    $monthYear = strtotime($ExportRecord);
    $monthName = date("F", $monthYear);
    $year = date("Y", $monthYear);
    
    // Calculate the last day of the month
    $lastDay = date("t", $monthYear); // 't' gives the number of days in the month
    
            ?>
            <tr>
                <td colspan="12"><b>Period Covered </td>
                <td><b> : </td>
                <td colspan="13" class="no-border"><b><?php  echo $monthName.' 1, '.$year.' to '.$monthName.' '.$lastDay.' , '.$year; ?></td>
                <td colspan="64"></td>
                <td colspan="2"></td>

            </tr>
            <tr>
                <td colspan="12"><b>Total Number Of Clients Served </td>
                <td><b> : </td>

                <td colspan="8" style="text-align: left;"><b><?php echo $dsptotal ; ?></td>
                <td colspan="64"></td>
                <td colspan="2"></td>

            </tr>
            <tr>
                <td colspan="12"><b>Total Number Of Clients With Completed Transaction/s (Respondents)</td>
                <td><b> : </td>
                <td colspan="8" style="text-align: left;"><b><?php echo $dsptotal ; ?></td>
                
                <td colspan="64"></td>
                <td colspan="2"></td>

            </tr>
            <tr>
                <td colspan="12"><b>Programs/Services </td>
                <td><b> : </td>
                <td colspan="8"><b>APPLICATION FOR LIVELIHOOD ASSISTANCE</td>
                <td colspan="64"></td>
                <td colspan="2"></td>

            </tr>
            
        </table>


        <table border="solid black" class="no-border" >

            
                <tr>
                    <th class="header" rowspan="3" colspan="3" >CSF Control ID</th>
                    <th class="header" rowspan="3" >Date Visited</th>
                    <th class="header" rowspan="2" colspan="3" >Type of Client</th>
                    <th class="header" rowspan="2" colspan="3" >Gender</th>
                    <th class="header" rowspan="2" colspan="7" >Age</th>
                    <th class="header" colspan="11" >Questions related to the Agency Citizen's Charter (CC)</th>
                    <th class="header" colspan="6" > </th>
                    <th class="header" colspan="48">Service Quality Dimension</th>
                    <th class="header" rowspan="3" >Comments/Suggestions</th>
                    <th class="header" rowspan="3" >Complaints</th>
                </tr>
                <tr>
                    <th class="header" colspan="4">CC1</th>
                    <th class="header" colspan="4">CC2</th>
                    <th class="header" colspan="3">CC3</th>
                    <th class="header" colspan="6">Overall Satisfaction</th>
                    <th class="header" colspan="6">Responsiveness</th>
                    <th class="header" colspan="6">Reliability</th>
                    <th class="header" colspan="6">Access and Facilities</th>
                    <th class="header" colspan="6">Communication</th>
                    <th class="header" colspan="6">Costs</th>
                    <th class="header" colspan="6">Integrity</th>
                    <th class="header" colspan="6">Assurance</th>
                    <th class="header" colspan="6">Outcome</th>
                </tr>
                <tr>
                    <th class="header">G2C</th>
                    <th class="header">G2B</th>
                    <th class="header">G2G</th>
                    <th class="header">M</th>
                    <th class="header">F</th>
                    <th class="header">NR</th>
                    <th class="header">Below 25</th>
                    <th class="header">25-34</th>
                    <th class="header">35-44</th>
                    <th class="header">45-54</th>
                    <th class="header">55-64</th>
                    <th class="header">64 Above</th>
                    <th class="header">NR</th>
                    <!-- cc -->
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <!-- <th class="header">NR</th> -->
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <!-- <th class="header">5</th> -->
                    <!-- <th class="header">NR</th> -->
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <!-- <th class="header">4</th> -->
                    <!-- <th class="header">NR</th> -->
                    <!-- sqd -->
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                    <th class="header">1</th>
                    <th class="header">2</th>
                    <th class="header">3</th>
                    <th class="header">4</th>
                    <th class="header">5</th>
                    <th class="header">N/A</th>
                </tr>
            


<?php 
    $select_sale = $conn->query("SELECT * FROM offline WHERE date LIKE '%$month%' AND service = '1' ");
        if ($select_sale->num_rows>0) {
            # code...
            while ($fetch_sale = $select_sale->fetch_assoc()) {
          echo "
                <tr>
                    <td colspan='3'>".$fetch_sale['controlNumber']."</td>
                    <td> ".date('m/d/Y', strtotime($fetch_sale['date']))."</td>
                    <td> "; 
################################################################    CLIENT TYPE                    
                    if ($fetch_sale['client'] == 'Citizen') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['client'] == 'Business') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['client'] == 'Government') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
##################################################################  GENDER
                    echo "<td>";
                     if ($fetch_sale['gender'] == 'Male') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['gender'] == 'Female') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['gender'] == ' ') {
                            echo "1</td>";   
                    }else{ echo " </td><td>";}
#############################################################       AGE
                    if ($fetch_sale['age'] == '24') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['age'] == '25') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['age'] == '35') {
                            echo "1</td>";   
                    }else{ echo " </td>";}

                    echo "<td>";
                     if ($fetch_sale['age'] == '45') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> "; 
                    if ($fetch_sale['age'] == '55') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['age'] == '64') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['age'] == ' ') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
##################################################################      CC1
                    
                    echo "<td>";
                    if ($fetch_sale['c'] == '1') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['c'] == '2') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['c'] == '3') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['c'] == '4') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    if ($fetch_sale['c'] == ' ') {
                            echo "1";   
                    }else{ echo "";}
##############........................................ CC2
                    echo "<td>";
                    if ($fetch_sale['cc'] == '1') {
                            echo "1</td>";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['cc'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['cc'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['cc'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}

                    if ($fetch_sale['cc'] == ' ') {
                            echo "1";   
                    }else{ echo "";}
#========================================================== CC3
                    echo "<td>";
                    if ($fetch_sale['ccc'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['ccc'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['ccc'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}

                    if ($fetch_sale['ccc'] == ' ') {
                            echo "1";   
                    }else{ echo "";}
#======================================================= sqd0
                    echo "<td>";
                    if ($fetch_sale['sqd'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd'] == '6') {
                            echo "1";   
                    }else{ echo " </td><td>";}
#////////////////////////////////////////////////////////..........SQD1

                    if ($fetch_sale['sqd_one'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_one'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_one'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_one'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_one'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_one'] == '6') {
                            echo "1";   
                    }else{ echo " </td><td>";}

#======================================================= sqd2

                    if ($fetch_sale['sqd_two'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_two'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_two'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_two'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_two'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_two'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td><td>";}
#////////////////////////////////////////////////////////..........SQD3

                    if ($fetch_sale['sqd_three'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_three'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_three'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_three'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_three'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_three'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td><td>";}

#======================================================= sqd4

                    if ($fetch_sale['sqd_four'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_four'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_four'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_four'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_four'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_four'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td><td>";}
#////////////////////////////////////////////////////////..........SQD5

                    if ($fetch_sale['sqd_five'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_five'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_five'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_five'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_five'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_five'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td><td>";}

#======================================================= sqd6

                    if ($fetch_sale['sqd_six'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_six'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_six'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_six'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_six'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_six'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td><td>";}
#////////////////////////////////////////////////////////..........SQD7

                    if ($fetch_sale['sqd_seven'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_seven'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_seven'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_seven'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_seven'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_seven'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td><td>";}
                    #////////////////////////////////////////////////////////..........SQD8

                    if ($fetch_sale['sqd_eight'] == '1') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_eight'] == '2') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_eight'] == '3') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_eight'] == '4') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_eight'] == '5') {
                            echo "1";   
                    }else{ echo " </td>";}
                    echo "<td> ";
                    if ($fetch_sale['sqd_eight'] == '6') {
                            echo "1</td><td>";   
                    }else{ echo " </td>";}

                    echo "<td>".$fetch_sale['suggestion'];
                    echo "<td></td>";


                    echo "</tr>";  

                          }
    }

   


    $sql_livelihood_citizen = "SELECT COUNT(*) AS totalLivelihoodCitizen FROM offline WHERE date LIKE '%$month%' AND service = '1' AND client = 'Citizen'";
          $result = $conn->query($sql_livelihood_citizen); 
          $fetch = mysqli_fetch_assoc($result);
          $dsp = $fetch['totalLivelihoodCitizen'];
          

         $sql_livelihood_business = "SELECT COUNT(*) AS totalLivelihoodBusiness FROM offline WHERE date LIKE '%$month%' AND service = '1' AND client = 'Business'";
          $result00 = $conn->query($sql_livelihood_business); 
          $fetch00 = mysqli_fetch_assoc($result00);
          $dsp00 = $fetch00['totalLivelihoodBusiness'];

         $sql_livelihood_government = "SELECT COUNT(*) AS totalLivelihoodGovernment FROM offline WHERE date LIKE '%$month%' AND service = '1' AND client = 'Government'";
          $result0 = $conn->query($sql_livelihood_government); 
          $fetch0 = mysqli_fetch_assoc($result0);
          $dsp0 = $fetch0['totalLivelihoodGovernment'];


        $sql_male = "SELECT COUNT(*) AS male_clients FROM offline WHERE date LIKE '%$month%' AND gender = 'Male' AND service = '1'";
        $gender_result = $conn->query($sql_male); 
        $fetch_male_result = mysqli_fetch_assoc($gender_result);
        $dsp_male = $fetch_male_result['male_clients'];

          $sql_female = "SELECT COUNT(*) AS female_clients FROM offline WHERE date LIKE '%$month%' AND gender = 'Female' AND service = '1'";
          $gender_result = $conn->query($sql_female); 
          $fetch_female_result = mysqli_fetch_assoc($gender_result);
          $dsp_female = $fetch_female_result['female_clients'];

          $sql_noresponse = "SELECT COUNT(*) AS gendnoresponse_clients FROM offline WHERE date LIKE '%$month%' AND gender = '' AND service = '1'";
          $gender_result = $conn->query($sql_noresponse); 
          $fetcnoresponse_result = mysqli_fetch_assoc($gender_result);
          $dsp_noresponse = $fetcnoresponse_result['gendnoresponse_clients'];



#=============================================================

          $sql_age0 = "SELECT COUNT(*) AS age0 FROM offline WHERE date LIKE '%$month%' AND age = '24' AND service = '1' ";
          $age0_result = $conn->query($sql_age0); 
          $fetchage0_result = mysqli_fetch_assoc($age0_result);
          $dsp_age0 = $fetchage0_result['age0'];

          $percent_age1 = ($dsp_age0 / $dsptotal) * 100;

          $sql_age1 = "SELECT COUNT(*) AS age1 FROM offline WHERE date LIKE '%$month%' AND age = '25' AND service = '1'";
          $age1_result = $conn->query($sql_age1); 
          $fetchage1_result = mysqli_fetch_assoc($age1_result);
          $dsp_age1 = $fetchage1_result['age1'];

          $percent_age2 = ($dsp_age1 / $dsptotal) * 100;


          $sql_age2 = "SELECT COUNT(*) AS age2 FROM offline WHERE date LIKE '%$month%' AND age = '35' AND service = '1' ";
          $age2_result = $conn->query($sql_age2); 
          $fetchage2_result = mysqli_fetch_assoc($age2_result);
          $dsp_age2 = $fetchage2_result['age2'];

          $percent_age3 = ($dsp_age2 / $dsptotal) * 100;


          $sql_age3 = "SELECT COUNT(*) AS age3 FROM offline WHERE date LIKE '%$month%' AND age = '45' AND service = '1' ";
          $age3_result = $conn->query($sql_age3); 
          $fetchage3_result = mysqli_fetch_assoc($age3_result);
          $dsp_age3 = $fetchage3_result['age3'];

          $percent_age4 = ($dsp_age3 / $dsptotal) * 100;


          $sql_age4 = "SELECT COUNT(*) AS age4 FROM offline WHERE date LIKE '%$month%' AND age = '55' AND service = '1' ";
          $age4_result = $conn->query($sql_age4); 
          $fetchage4_result = mysqli_fetch_assoc($age4_result);
          $dsp_age4 = $fetchage4_result['age4'];

          $percent_age5 = ($dsp_age4 / $dsptotal) * 100;


          $sql_age5 = "SELECT COUNT(*) AS age5 FROM offline WHERE date LIKE '%$month%' AND age = '64' AND service = '1'";
          $age5_result = $conn->query($sql_age5); 
          $fetchage5_result = mysqli_fetch_assoc($age5_result);
          $dsp_age5 = $fetchage5_result['age5'];

          $percent_age6 = ($dsp_age5 / $dsptotal) * 100;


          $sql_noage = "SELECT COUNT(*) AS noage FROM offline WHERE date LIKE '%$month%' AND age = ' ' AND service = '1' ";
          $noage_result = $conn->query($sql_noage); 
          $fetchnoage_result = mysqli_fetch_assoc($noage_result);
          $dsp_noage = $fetchnoage_result['noage'];

          $percent_noage = ($dsp_noage / $dsptotal) * 100;

#==========================================================================================================

$sql_lh_c1A = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1A FROM offline WHERE date LIKE '%$month%' AND service = '1' AND c =1 ");
$rowC1A = mysqli_fetch_assoc($sql_lh_c1A);
$totalLivelihoodC1A = $rowC1A['lh_c1A'];

$sql_lh_c1B = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1B FROM offline WHERE date LIKE '%$month%' AND service = '1' AND c =2 ");
$rowC1B = mysqli_fetch_assoc($sql_lh_c1B);
$totalLivelihoodC1B = $rowC1B['lh_c1B'];

$sql_lh_c1C = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1C FROM offline WHERE date LIKE '%$month%' AND service = '1' AND c =3 ");
$rowC1C = mysqli_fetch_assoc($sql_lh_c1C);
$totalLivelihoodC1C = $rowC1C['lh_c1C'];

$sql_lh_c1D = mysqli_query($conn, "SELECT COUNT(*) AS lh_c1D FROM offline WHERE date LIKE '%$month%' AND service = '1' AND c =4 ");
$rowC1D = mysqli_fetch_assoc($sql_lh_c1D);
$totalLivelihoodC1D = $rowC1D['lh_c1D'];

//--------------------------------------------------------------


$sql_lh_c2A = mysqli_query($conn, "SELECT 
        SUM(CASE WHEN cc = '1' THEN 1 ELSE 0 END) AS count1,
        SUM(CASE WHEN cc = '2' THEN 1 ELSE 0 END) AS count2,
        SUM(CASE WHEN cc = '3' THEN 1 ELSE 0 END) AS count3,
        SUM(CASE WHEN cc = '4' THEN 1 ELSE 0 END) AS count4,
        SUM(CASE WHEN cc = '5' THEN 1 ELSE 0 END) AS count5,
        SUM(CASE WHEN cc = ' ' THEN 1 ELSE 0 END) AS count6
    FROM offline WHERE date LIKE '%$month%' AND  service = '1'");
$rowC2A = mysqli_fetch_assoc($sql_lh_c2A);



//--------------------------------------------------------

$sql_lh_c3A = mysqli_query($conn, " SELECT 
        SUM(CASE WHEN ccc = '4' THEN 1 ELSE 0 END) AS count1,
        SUM(CASE WHEN ccc = '3' THEN 1 ELSE 0 END) AS count2,
        SUM(CASE WHEN ccc = '2' THEN 1 ELSE 0 END) AS count3,
        SUM(CASE WHEN ccc = '1' THEN 1 ELSE 0 END) AS count4,
        SUM(CASE WHEN ccc = ' ' THEN 1 ELSE 0 END) AS count5
    FROM offline WHERE date LIKE '%$month%' AND  service = '1' ");
$rowC3A = mysqli_fetch_assoc($sql_lh_c3A);


// $totalLivelihoodC3A = $rowC3A['lh_c3A'];

$sql_lh_c1no = mysqli_query($conn, "SELECT COUNT(*) AS no1 FROM offline WHERE date LIKE '%$month%' AND service = '1' AND c =' ' ");
$noC1D = mysqli_fetch_assoc($sql_lh_c1no);
$totalLivelihoodno1 = $noC1D['no1'];



$percentC1A = ($totalLivelihoodC1A / $dsptotal) * 100;
$percentC1B = ($totalLivelihoodC1B / $dsptotal) * 100;
$percentC1C = ($totalLivelihoodC1C / $dsptotal) * 100;
$percentC1D = ($totalLivelihoodC1D / $dsptotal) * 100;

$percentC2A = ($rowC2A['count1'] / $dsptotal) * 100;
$percentC2B = ($rowC2A['count2'] / $dsptotal) * 100;
$percentC2C = ($rowC2A['count3'] / $dsptotal) * 100;
$percentC2D = ($rowC2A['count4'] / $dsptotal) * 100;
$percentC2E = ($rowC2A['count5'] / $dsptotal) * 100;
$percentC2no = ($rowC2A['count6'] / $dsptotal) * 100;

$percentnoC3 = ($rowC3A['count5']/ $dsptotal) * 100;
$percentC3A = ($rowC3A['count4']/ $dsptotal) * 100;
$percentC3B = ($rowC3A['count3'] / $dsptotal) * 100;
$percentC3C = ($rowC3A['count2'] / $dsptotal) * 100;
$percentC3D = ($rowC3A['count1'] / $dsptotal) * 100;


?>

<tr>
    <th class="header" rowspan="2"  colspan='3'>Number Of Respondents: </th>
    <th class="header" rowspan="2" ><?php echo $dsptotal; ?></th>
    <td class="header"><?php echo $dsp; ?></td>
    <td class="header"> <?php echo $dsp00; ?></td>
    <td class="header"> <?php echo $dsp0; ?></td>

    <td class="header"> <?php echo $dsp_male; ?></td>
    <td class="header"> <?php echo $dsp_female; ?></td>
    <td class="header"> <?php echo $dsp_noresponse; ?></td>

    <td class="header"> <?php echo $dsp_age0; ?></td>
    <td class="header"> <?php echo $dsp_age1; ?></td>
    <td class="header"> <?php echo $dsp_age2; ?></td>
    <td class="header"> <?php echo $dsp_age3; ?></td>
    <td class="header"> <?php echo $dsp_age4; ?></td>
    <td class="header"> <?php echo $dsp_age5; ?></td>
    <td class="header"> <?php echo $dsp_noage; ?></td>


    <td class="header"> <?php echo $totalLivelihoodC1A; ?></td>
    <td class="header"> <?php echo $totalLivelihoodC1B; ?></td>
    <td class="header"> <?php echo $totalLivelihoodC1C; ?></td>
    <td class="header"> <?php echo $totalLivelihoodC1D; ?></td>
    <!-- <td class="header"> <?php #echo $totalLivelihoodno1; ?></td> -->

    <td class="header"> <?php echo $rowC2A['count1']; ?></td>
    <td class="header"> <?php echo $rowC2A['count2']; ?></td>
    <td class="header"> <?php echo $rowC2A['count3']; ?></td>
    <td class="header"> <?php echo $rowC2A['count4']; ?></td>
    <!-- <td class="header"> <?php #echo $rowC2A['count5']; ?></td> -->
    <!-- <td class="header"> <?php #echo $rowC2A['count6']; ?></td> -->

    <td class="header"> <?php echo $rowC3A['count4'];  ?></td>
    <td class="header"> <?php echo $rowC3A['count3'];  ?></td>
    <td class="header"> <?php echo $rowC3A['count2'];  ?></td>
    <!-- <td class="header"> <?php #echo $rowC3A['count1'];  ?></td> -->
    <!-- <td class="header"> <?php #echo $rowC3A['count5']; ?></td> -->

    <?php  

    $select_count = $conn->query("
    SELECT 
        SUM(CASE WHEN sqd = '5' THEN 1 ELSE 0 END) AS count1,
        SUM(CASE WHEN sqd = '4' THEN 1 ELSE 0 END) AS count2,
        SUM(CASE WHEN sqd = '3' THEN 1 ELSE 0 END) AS count3,
        SUM(CASE WHEN sqd = '2' THEN 1 ELSE 0 END) AS count4,
        SUM(CASE WHEN sqd = '1' THEN 1 ELSE 0 END) AS count5,
        SUM(CASE WHEN sqd = '6' THEN 1 ELSE 0 END) AS count6,
        SUM(CASE WHEN sqd_one = '5' THEN 1 ELSE 0 END) AS count11,
        SUM(CASE WHEN sqd_one = '4' THEN 1 ELSE 0 END) AS count22,
        SUM(CASE WHEN sqd_one = '3' THEN 1 ELSE 0 END) AS count33,
        SUM(CASE WHEN sqd_one = '2' THEN 1 ELSE 0 END) AS count44,
        SUM(CASE WHEN sqd_one = '1' THEN 1 ELSE 0 END) AS count55,
        SUM(CASE WHEN sqd_one = '6' THEN 1 ELSE 0 END) AS count66,
        SUM(CASE WHEN sqd_two = '5' THEN 1 ELSE 0 END) AS count111,
        SUM(CASE WHEN sqd_two = '4' THEN 1 ELSE 0 END) AS count222,
        SUM(CASE WHEN sqd_two = '3' THEN 1 ELSE 0 END) AS count333,
        SUM(CASE WHEN sqd_two = '2' THEN 1 ELSE 0 END) AS count444,
        SUM(CASE WHEN sqd_two = '1' THEN 1 ELSE 0 END) AS count555,
        SUM(CASE WHEN sqd_two = '6' THEN 1 ELSE 0 END) AS count666,
        SUM(CASE WHEN sqd_three = '5' THEN 1 ELSE 0 END) AS count1111,
        SUM(CASE WHEN sqd_three = '4' THEN 1 ELSE 0 END) AS count2222,
        SUM(CASE WHEN sqd_three = '3' THEN 1 ELSE 0 END) AS count3333,
        SUM(CASE WHEN sqd_three = '2' THEN 1 ELSE 0 END) AS count4444,
        SUM(CASE WHEN sqd_three = '1' THEN 1 ELSE 0 END) AS count5555,
        SUM(CASE WHEN sqd_three = '6' THEN 1 ELSE 0 END) AS count6666,
        SUM(CASE WHEN sqd_four = '5' THEN 1 ELSE 0 END) AS count11111,
        SUM(CASE WHEN sqd_four = '4' THEN 1 ELSE 0 END) AS count22222,
        SUM(CASE WHEN sqd_four = '3' THEN 1 ELSE 0 END) AS count33333,
        SUM(CASE WHEN sqd_four = '2' THEN 1 ELSE 0 END) AS count44444,
        SUM(CASE WHEN sqd_four = '1' THEN 1 ELSE 0 END) AS count55555,
        SUM(CASE WHEN sqd_four = '6' THEN 1 ELSE 0 END) AS count66666,
        SUM(CASE WHEN sqd_five = '5' THEN 1 ELSE 0 END) AS count111111,
        SUM(CASE WHEN sqd_five = '4' THEN 1 ELSE 0 END) AS count222222,
        SUM(CASE WHEN sqd_five = '3' THEN 1 ELSE 0 END) AS count333333,
        SUM(CASE WHEN sqd_five = '2' THEN 1 ELSE 0 END) AS count444444,
        SUM(CASE WHEN sqd_five = '1' THEN 1 ELSE 0 END) AS count555555,
        SUM(CASE WHEN sqd_five = '6' THEN 1 ELSE 0 END) AS count666666,
        SUM(CASE WHEN sqd_six = '5' THEN 1 ELSE 0 END) AS count1111111,
        SUM(CASE WHEN sqd_six = '4' THEN 1 ELSE 0 END) AS count2222222,
        SUM(CASE WHEN sqd_six = '3' THEN 1 ELSE 0 END) AS count3333333,
        SUM(CASE WHEN sqd_six = '2' THEN 1 ELSE 0 END) AS count4444444,
        SUM(CASE WHEN sqd_six = '1' THEN 1 ELSE 0 END) AS count5555555,
        SUM(CASE WHEN sqd_six = '6' THEN 1 ELSE 0 END) AS count6666666,
        SUM(CASE WHEN sqd_seven = '5' THEN 1 ELSE 0 END) AS count11111111,
        SUM(CASE WHEN sqd_seven = '4' THEN 1 ELSE 0 END) AS count22222222,
        SUM(CASE WHEN sqd_seven = '3' THEN 1 ELSE 0 END) AS count33333333,
        SUM(CASE WHEN sqd_seven = '2' THEN 1 ELSE 0 END) AS count44444444,
        SUM(CASE WHEN sqd_seven = '1' THEN 1 ELSE 0 END) AS count55555555,
        SUM(CASE WHEN sqd_seven = '6' THEN 1 ELSE 0 END) AS count66666666,
        SUM(CASE WHEN sqd_eight = '5' THEN 1 ELSE 0 END) AS count111111111,
        SUM(CASE WHEN sqd_eight = '4' THEN 1 ELSE 0 END) AS count222222222,
        SUM(CASE WHEN sqd_eight = '3' THEN 1 ELSE 0 END) AS count333333333,
        SUM(CASE WHEN sqd_eight = '2' THEN 1 ELSE 0 END) AS count444444444,
        SUM(CASE WHEN sqd_eight = '1' THEN 1 ELSE 0 END) AS count555555555,
        SUM(CASE WHEN sqd_eight = '6' THEN 1 ELSE 0 END) AS count666666666
    FROM offline WHERE date LIKE '%$month%' AND  service = '1'

    ");
        if ($select_count->num_rows > 0) {
    $row = $select_count->fetch_assoc();
    echo "<td class='header' rowspan='2'> " . $row['count5']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count4']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count3'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count2']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count1'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count6']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count55']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count44']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count33'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count22']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count11'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count66']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count666']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count5555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count4444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count3333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count2222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count1111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count6666']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count55555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count44444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count33333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count22222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count11111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count66666']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count555555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count444444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count333333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count222222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count111111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count666666']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count5555555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count4444444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count3333333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count2222222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count1111111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count6666666']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count55555555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count44444444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count33333333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count22222222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count11111111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count66666666']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count555555555']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count444444444']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count333333333'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count222222222']. "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count111111111'] . "</td>";
    echo "<td class='header' rowspan='2'> " . $row['count666666666']. "</td>";

}
    ?>
</tr>
<tr>
    <td class="header" colspan="3"> </td>
    <td class="header" colspan="3"> </td>
    <td class="header" rowspan="2"><?php echo round($percent_age1,2);?>%</td>
    <td class="header"  rowspan="2"><?php echo round($percent_age2,2);?>%</td>
    <td class="header"  rowspan="2"><?php echo round($percent_age3,2);?>%</td>
    <td class="header"  rowspan="2"><?php echo round($percent_age4,2);?>%</td>
    <td class="header"  rowspan="2"><?php echo round($percent_age5,2);?>%</td>
    <td class="header"  rowspan="2"><?php echo round($percent_age6,2);?>%</td>
    <td class="header"  rowspan="2"><?php echo round($percent_noage,2);?>%</td>

    <td class="header" rowspan="2"><?php echo round($percentC1A,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC1B,2);?>%</td>
    <td  class="header"rowspan="2"><?php echo round($percentC1C,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC1D,2);?>%</td>
    <!-- <td class="header" rowspan="2"><?php #echo round((($totalLivelihoodno1 / $dsptotal)*100) ,2); ?>%</td> -->
    <td class="header" rowspan="2"><?php echo round($percentC2A,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC2B,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC2C,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC2D,2);?>%</td>
    <!-- <td class="header" rowspan="2"><?php //echo round($percentC2E,2);?>%</td> -->
    <!-- <td class="header" rowspan="2"><?php #echo 'shit'; ?>%</td> -->
    <td class="header" rowspan="2"><?php echo round($percentC3A,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC3B,2);?>%</td>
    <td class="header" rowspan="2"><?php echo round($percentC3C,2);?>%</td>
    <!-- <td  class="header"rowspan="2"><?php #echo round($percentC3D,2);?>%</td> -->
    <!-- <td class="header" rowspan="2"><?php #echo 'shit'; ?>%</td> -->

    
</tr>
<?php 

    $percent_sqd0 = ((($row['count1'] + $row['count2']+ $row['count6'])/ $dsptotal)*5);

    $percent_sqd1 = ((($row['count11'] + $row['count22'] +  $row['count66'])/ $dsptotal)*5);
    $percent_sqd2 = ((($row['count111'] + $row['count222'] + $row['count666'])/ $dsptotal)*5);
    $percent_sqd3 = ((($row['count1111'] + $row['count2222'] + $row['count6666'])/ $dsptotal)*5);
    $percent_sqd4 = ((($row['count11111'] + $row['count22222'] + $row['count66666'])/ $dsptotal)*5);
    $percent_sqd5 = ((($row['count111111'] + $row['count222222'] + $row['count666666'])/ $dsptotal)*5);
    $percent_sqd6 = ((($row['count1111111'] + $row['count2222222'] + $row['count6666666'])/ $dsptotal)*5);
    $percent_sqd7 = ((($row['count11111111'] + $row['count22222222'] + $row['count66666666'])/ $dsptotal)*5);
    $percent_sqd8 = ((($row['count111111111'] + $row['count222222222'] + $row['count666666666'])/ $dsptotal )*5);



?>
<tr>
    <th class="header" rowspan="3" colspan="4">TOTAL</th>
    <th class="header" rowspan="2" colspan="6">PERCENTAGE</th>
    <td  class="header"colspan="6" ><?php echo round($percent_sqd0,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd1,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd2,2); ?></td>
    <td  class="header"colspan="6" ><?php echo round($percent_sqd3,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd4,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd5,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd6,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd7,2); ?></td>
    <td class="header" colspan="6" ><?php echo round($percent_sqd8,2); ?></td>
    
    
</tr>


<tr>
    <td class="header" colspan="7"><?php echo $total_percentAge = $percent_age1 + $percent_age2 + $percent_age3 + $percent_age4 + $percent_age5 + $percent_age6 + $percent_noage; ?>%</td>
    <td class="header" colspan="4"><?php echo round($grandtotalc1 = $percentC1A + $percentC1B + $percentC1C + $percentC1D,2); ?>%</td>
    <td class="header" colspan="4"><?php echo round($grandtotalc2 = $percentC2A + $percentC2B + $percentC2C + $percentC2D+ $percentC2E,2); ?>%</td>
    <td class="header" colspan="3"><?php echo round($grandtotalc3 = $percentC3A + $percentC3B + $percentC3C + $percentC3D,2); ?>%</td>

    <!--==========================================================SQD PERCENTAGE===========================================-->
    
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd0 / 5) * 100),2); ?>%</td>
    <td  class="header"colspan="6"><?php echo round(( ($percent_sqd1 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd2 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd3 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd4 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd5 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd6 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd7 / 5) * 100),2); ?>%</td>
    <td class="header" colspan="6"><?php echo round(( ($percent_sqd8 / 5) * 100),2); ?>%</td>
</tr>
<tr>
    

    <th class="header" colspan="6">Overall Number of Respondents</th>
    <th class="header" colspan="7"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="4"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="4"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="3"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
    <th class="header" colspan="6"><?php echo $dsptotal; ?></th>
</tr>
<tr>
<td colspan="33" class="no-border"> &nbsp</td>
</tr>
<tr>
<td colspan="33" class="no-border"> &nbsp</td>
</tr>
        <tr>
          <th colspan="10" rowspan="3" class="no-border"> </th>
          <td colspan="6" class="no-border">Prepared by:</td>

          <th colspan="6" rowspan="3" class="no-border"> </th>
          <td colspan="6" class="no-border">Reviewed by:</td>
        </tr>
        <tr>
          <td colspan="6" class="no-border"><u>JOYCE R. TANGARA/LEO I (SGD.)</u></td>
          <td colspan="6" class="no-border"><u>EMMANUEL G. TOLEDO/ CHIEF LEO (SGD.)</u></td>
        </tr>
        <tr>
          <th colspan="6" class="no-border" style="text-align: left;">CSM FOCAL</th>
          <th colspan="6" class="no-border"  style="text-align: left;">HEAD OF OFFICE</th>
        </tr>
      </table>
</body>