
 <?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/sidebar.php';
    ?>
    <style>
.card-header{
  padding: 1%;
}

.card-body{
padding: 2%;
}
.livelytble th{
  padding: 10px;
  /*float: left;*/
}
table {
  border-collapse: collapse;
  width: 120%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

.cc-legend{
  float: left;
  background-color: lightblue;
  padding: 2.5%;
  width: 100%;
  border-radius: 25px;
  margin-bottom: 1%;
}
.sqd-legend{
  float: left;
  background-color: lightgreen;
  padding: 2.5%;
  width: 100%;

  border-radius: 25px;
}


.items {
  /* Add styles for each item */
 flex: 1;
 margin: 5px; 

 float: right;
}



.tbl {
    height: 380px; /* Adjust the height as needed */
    overflow-y: auto; /* Enable vertical scrolling */
    border: 1px solid #ccc; /* Optional: Add border for visual clarity */
    overflow-x: auto; 
    
    margin-top: 1%;
}


</style>

 <div class="content-wrapper">

     <div class="content">
         <div class="container-fluid">
             <div class="row">
                <div class="col-12">
                  <div class="card-header">
                    <center>
                      <h2>TABULATION OF SURVEY RESPONSES FOR OTHER SERVICES</h2>
                      <hr>
                      <h3>DOLE X CAGAYAN DE ORO CITY FIELD OFFICE</h3>
                      <?php
                      if (isset($_POST['search']) && isset($_POST['date']) && $_POST['date']) {
                          $date = $_POST['date'];
                          $monthYear = strtotime($date);
                          $monthName = date("F", $monthYear);
                          $year = date("Y", $monthYear);

                          // Calculate the last day of the month
                          $lastDay = date("t", $monthYear); // 't' gives the number of days in the month
                          ?>
                          <h3><?php echo 'As of '.$monthName . ' 1, ' . $year . ' to ' . $monthName . ' ' . $lastDay . ' , ' . $year; ?></h3>
                      <?php 
                      } elseif (isset($_POST['search'])) {
                          echo "<br><h3>This is all the filtered data result</h3>";

                      } else {
                          // If no search is submitted, display the current month and year
                          $currentDate = date("F, Y");
                          echo "<h3> As of ".$currentDate."</h3>";
                      }
                      ?>
                    </center>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
      <br>

                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterModal">
                    Filter Data
                  </button>

                  <button id="open-modal" class="btn btn-primary" style="float:right;"  data-bs-toggle="modal" data-bs-target="#legendModal"><i class="fa fa-info-circle" style="font-size:16px"></i> 
                  Legend Information
                  </button>



                  <script type="text/javascript">
                    // Get the modal
                  const modal = document.getElementById("legend-modal");

                  // Get the button that opens the modal
                  const btn = document.getElementById("open-modal");

                  // Get the <span> element that closes the modal
                  const span = document.getElementsByClassName("close")[0];

                  // When the user clicks the button, open the modal
                  btn.onclick = function() {
                      modal.style.display = "block";
                  }

                  // When the user clicks on <span> (x), close the modal
                  span.onclick = function() {
                      modal.style.display = "none";
                  }

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }

                  </script>

    
                  <div class="card-body">

                      <br>
                    <div class='tbl'>
                      <table border="solid black" class="livelytble" id="dataTable" style="width: 300%;">
                        <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2" style="width: 300px;">Control No.</th>
                        <th rowspan="2" style="width: 300px;">Date</th>
                          <th rowspan="2">Client Type</th>
                          <th rowspan="2">Gender</th>
                          <th rowspan="2">Age Range</th>
                          <th colspan="3" style="background-color: lightblue">Citizen Charter (CC)</th>
                          <th colspan="9" style="background-color: lightgreen"><center>Service Quality Dimension (SQD)</center></th>
                        </tr>
                        <tr>
                          <th style="background-color: lightblue">CC1</th>
                          <th style="background-color: lightblue">CC2</th>
                          <th style="background-color: lightblue">CC3</th>
                          <th style="background-color: lightgreen">SQD1</th>
                          <th style="background-color: lightgreen">Responsiveness</th>
                          <th style="background-color: lightgreen">Reliability</th>
                          <th style="background-color: lightgreen">Access And Facility</th>
                          <th style="background-color: lightgreen">Communication</th>
                          <th style="background-color: lightgreen">Costs</th>
                          <th style="background-color: lightgreen">Integrity</th>
                          <th style="background-color: lightgreen">Assurance</th>
                          <th style="background-color: lightgreen">Outcome</th>
                        </tr>

                  <?php
                  if (isset($_POST['search'])) {
                      // Prepare base query
                      $sql_search = "SELECT * FROM offline WHERE service = ' '";

                      // Filter by Date
                      if (!empty($_POST['date'])) {
                          $date = $_POST['date'];
                          $sql_search .= " AND date LIKE ?";
                          $date_param = "%$date%"; // To be used as parameter
                      }

                      // Filter by Client Type
                      if (!empty($_POST['clientType'])) {
                          $clientType = $_POST['clientType'];
                          $sql_search .= " AND client = ?";
                          $client_param = $clientType; // To be used as parameter
                      }

                      // Filter by Gender
                      if (!empty($_POST['gender'])) {
                          $gender = $_POST['gender'];
                          $sql_search .= " AND gender = ?";
                          $gender_param = $gender; // To be used as parameter
                      }

                      // Filter by Age
                      if (!empty($_POST['age'])) {
                          $age = $_POST['age'];
                          switch ($age) {
                              case 'below':
                                  $sql_search .= " AND age < 25";
                                  break;
                              case '25':
                                  $sql_search .= " AND age BETWEEN 25 AND 34";
                                  break;
                              case '35':
                                  $sql_search .= " AND age BETWEEN 35 AND 44";
                                  break;
                              case '45':
                                  $sql_search .= " AND age BETWEEN 45 AND 54";
                                  break;
                              case '55':
                                  $sql_search .= " AND age BETWEEN 55 AND 64";
                                  break;
                              case '65':
                                  $sql_search .= " AND age >= 65";
                                  break;
                          }
                      }

                      // Execute query with prepared statements
                      if ($stmt = $conn->prepare($sql_search)) {
                          // Bind parameters to the prepared statement
                          if (isset($date_param)) $stmt->bind_param("s", $date_param); // Date
                          if (isset($client_param)) $stmt->bind_param("s", $client_param); // Client
                          if (isset($gender_param)) $stmt->bind_param("s", $gender_param); // Gender
                          
                          // Execute and get results
                          $stmt->execute();
                          $results = $stmt->get_result();

                          if ($results->num_rows > 0) {
                              $no = 1;
                              while ($records = $results->fetch_assoc()) { 
                                // var_dump($records['age']);
                                  $dsp_date = strtotime($records['date']);
                                  ?>
                                  <tr>
                                      <td><?php echo $no; ?></td>
                                      <td><?php echo $records['controlNumber']; ?></td>
                                      <td><?php echo date('F d, Y', $dsp_date); ?></td>
                                      <td><?php echo $records['client']; ?></td>
                                      <td><?php echo $records['gender']; ?></td>
                                      <td><?php echo displayAgeRange($records['age']); ?></td>
                                      <td><?php echo $records['c']; ?></td>
                                      <td><?php echo $records['cc']; ?></td>
                                      <td><?php echo $records['ccc']; ?></td>
                                      <td><?php echo $records['sqd']; ?></td>
                                      <td><?php echo $records['sqd_one']; ?></td>
                                      <td><?php echo $records['sqd_two']; ?></td>
                                      <td><?php echo $records['sqd_three']; ?></td>
                                      <td><?php echo $records['sqd_four']; ?></td>
                                      <td><?php echo $records['sqd_five']; ?></td>
                                      <td><?php echo $records['sqd_six']; ?></td>
                                      <td><?php echo $records['sqd_seven']; ?></td>
                                      <td><?php echo $records['sqd_eight']; ?></td>
                                  </tr>
                                  <?php
                                  $no++;
                              }
                          } else {
                              echo "<th colspan='16'>No Records Available</th>";
                          }


                      }
                  }else{

                  ###########################################################################################


                        $sql = mysqli_query($conn, "SELECT * from offline WHERE service = ' ' AND date LIKE '%$month%' ORDER BY date DESC");
                        if($sql->num_rows > 0){
                          while($fetch = $sql->fetch_assoc()) {
                             // var_dump($fetch['age']);
                            $dsp_date = strtotime($fetch['date']);
                            $no ++;
                        ?>
                        <tr>
                        <td><?php echo $no; ?></td>
                          <td><?php echo $fetch['controlNumber'];?></td>
                          <td><?php echo date('F d, Y',$dsp_date);?></td>
                          <td><?php echo $fetch['client'];?></td>
                          <td><?php echo $fetch['gender'];?></td>
                          <td><?php echo displayAgeRange($fetch['age']); ?></td>
                          <td><?php echo $fetch['c']?></td>
                          <td><?php echo $fetch['cc']?></td>
                          <td><?php echo $fetch['ccc']?></td>
                          <td><?php echo $fetch['sqd']?></td>
                          <td><?php echo $fetch['sqd_one']?></td>
                          <td><?php echo $fetch['sqd_two']?></td>
                          <td><?php echo $fetch['sqd_three']?></td>
                          <td><?php echo $fetch['sqd_four']?></td>
                          <td><?php echo $fetch['sqd_five']?></td>
                          <td><?php echo $fetch['sqd_six']?></td>
                          <td><?php echo $fetch['sqd_seven']?></td>
                          <td><?php echo $fetch['sqd_eight']?></td>
                        </tr>
                        <?php 

                      }?>
                        </table>
                      </div>

                        <div class="export-btn mt-3">
                          <a href="functions/downloadOther.php" id="exportLink">
                            <button id="exportButton" class="btn btn-primary" style='float:right;'>Export to Excel</button>
                          </a>
                        </div>
                    </div>
                      <?php
                  }else {
                    echo "<th colspan='16'>No Records Available</th>";
                  }
                }
              
                   ?> 
                        </table>
                      </div>

                        <div class="export-btn mt-3">
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


      <script>

      // SweetAlert confirmation
      document.getElementById('exportButton').addEventListener('click', function(event) {
          event.preventDefault(); // Prevent the default action (follow the link)

          // SweetAlert confirmation
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
                  // If confirmed, follow the link to download the file
                const inputOptions = new Promise((resolve) => {
                  setTimeout(() => {
                    resolve({
                      "#ff0000": "Red",
                      "#00ff00": "Green",
                      "#0000ff": "Blue"
                    });
                  }, 1000);
                });
                window.location.href = 'functions/downloadOther.php'; 
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
              }});
      });
      </script>

      </div>


<!-- Modal -->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #283957; color: white;">
        <h5 class="modal-title" id="filterModalLabel">Filter Data</h5>
        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="close" style="color: white;">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label for="search">Search:</label>
                  <select  name="search" onchange="handleChange(this)" class="form-control">
                    <option selected hidden>Filter by</option>
                    <option value="date">Date</option>
                    <option value="client">Client Type</option>
                    <option value="gender">Gender</option>
                    <option value="age">Age</option>
                  </select>
            </div>

            <form action="" method="POST" id="filterForm">
              <div id="revealDate"  hidden="">
                <label for="date">Date:</label>
                <input type="month" name="date" class="form-control">
              </div>

              <div id="revealClient" hidden="">
                <label for="clientType">Client Type:</label>
                <select name="clientType" class="form-control">
                  <option selected hidden disabled>Select Type of Client</option>
                  <option value="citizen">Citizen</option>
                  <option value="government">Government</option>
                  <option value="business">Business</option>
                </select>
              </div>

              <div id="revealGender" hidden="">
                <label for="gender">Gender:</label>
                <select name="gender" class="form-control">
                  <option selected hidden disabled>Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <div id="revealAge" hidden="">
                <label for="age">Age:</label>
                <select name="age" class="form-control">
                  <option selected hidden disabled>Select Age</option>
                  <option value="below">Below 25</option>
                  <option value="25">25-34</option>
                  <option value="35">35-44</option>
                  <option value="45">45-54</option>
                  <option value="55">55-64</option>
                  <option value="65">65 Above</option>
                </select>
              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="background-color: ;">
               <input class="btn btn-success mt-3" type="submit"name="search" value="Filter" style="right: 0; ">

            </form>
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function handleChange(selectElement) {
      const revealDate = document.getElementById('revealDate');
      const revealClient = document.getElementById('revealClient');
      const revealGender = document.getElementById('revealGender');
      const revealAge = document.getElementById('revealAge');

      // Hide all fields
      revealDate.setAttribute('hidden', '');
      revealClient.setAttribute('hidden', '');
      revealGender.setAttribute('hidden', '');
      revealAge.setAttribute('hidden', '');

      // Show the selected field
      const selectedValue = selectElement.value;
      document.getElementById('reveal' + selectedValue.charAt(0).toUpperCase() + selectedValue.slice(1)).removeAttribute('hidden');
  }

  // Add an event listener to the form to submit only the selected filter
  document.getElementById('filterForm').addEventListener('submit', function(event) {
      const selectElement = document.querySelector('[name="search"]');
      const selectedValue = selectElement.value;
      const selectedField = document.querySelector('[name="' + selectedValue + '"]');
      if (selectedField) {
          // Remove all other fields from the form submission
          const hiddenInputs = document.querySelectorAll('.items:not([hidden]) [name]');
          hiddenInputs.forEach(function(input) {
              if (input !== selectedField) {
                  input.setAttribute('disabled', true);
              }
          });
      }
  });
</script>

    <!-- Modal -->
    <div class="modal fade" id="legendModal" tabindex="-1" aria-labelledby="legendModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#283957; color: white;">
            <h2 class="modal-title fs-5" id="legendModalLabel">Legend Information</h2>
            <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"><span class="close" style="color:white;">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="cc-legend">
                <h4>Agency Citizen's Charter (CC) Legend:</h4><br>
                <ul style="margin-left: 3%;">
                    <h5><li>1 = I Know what a CC is and I saw this office's CC (CC1).<br> &nbsp&nbsp = Easy to see (CC2).<br> &nbsp&nbsp = Helped very much (CC3) </li></h5><br>
                    <h5><li>2 = I know what a CC is but I did NOT see this office's CC (CC1).<br> &nbsp&nbsp = Somewhat easy to see (CC2).<br> &nbsp&nbsp = Somewhat helped (CC3)</li></h5><br>
                    <h5><li>3 = I learned of the CC only when I saw this office's CC (CC1).<br> &nbsp&nbsp = Difficult to see (CC2).<br> &nbsp&nbsp = Did not help (CC3)</li></h5><br>
                    <h5><li>4 = I do not know what a CC is and I did not see one in this office (CC1).<br> &nbsp&nbsp = Not visible at all (CC2).<br> &nbsp&nbsp = N/A (CC3)</li></h5><br>
                    <h5><li>5 = N/A(CC2)</li></h5>
                </ul>
            </div>

            <div class="sqd-legend">
                <h4>Service Quality Dimension (SQD) Legend:</h4>
                <ul>
                    <h5><li>5 = Strongly Agree</li></h5>
                    <h5><li>4 = Agree</li></h5>
                    <h5><li>3 = Neither Agree nor Disagree</li></h5>
                    <h5><li>2 = Disagree</li></h5>
                    <h5><li>1 = Strongly Disagree</li></h5>
                </ul>
              </div>
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

const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>
  <?php
    include 'includes/footer.php';
    ?>