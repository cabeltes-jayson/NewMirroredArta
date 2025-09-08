
 <?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/sidebar.php';
    ?>
    <style>


</style>


  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <center>
                <h2>ARCHIVED CONSOLIDATED SURVEY REPORT</h2>
                <!-- <h3><?php //echo $dsp_date = date("F d, Y "); ?></h3> -->
              </center>

            </div>
            <div class="card-body">
              <p class="text-sm-left">This section contains relevant data results that have been collected, reviewed, organized and can be exported as Excel File.</p>
              <div class="col-12 mt-3" style="overflow-y: auto; overflow-x: auto; height: 380px;">
            
                <table class="table table-hover">
                <thead class="thead-dark">
                  <tr  style="position: sticky; top: 0; z-index: 1; background: #343a40; color: white;">
                    <th>Date</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
              <?php
                $query = "
                  SELECT DATE_FORMAT(date, '%Y-%m') AS formatted_date
                  FROM 
                      poll
                  GROUP BY formatted_date 
                  ORDER BY MIN(date) DESC";

                // Execute the query and check if it was successful
                $result = mysqli_query($conn, $query);

                // Check if the query execution was successful
                if (!$result) {
                    // Output the error and stop further execution
                    die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) { 
              ?>
                  <tr>
                    <td>
                      <?php echo date("F, Y", strtotime($row['formatted_date'])); ?>
                    </td>
                    <td>
                      <button class="btn btn-primary export-consolidated-btn" style="font-size: 14px; font-family: Arial, sans-serif; float: left;" data-export-date="<?php echo $row['formatted_date']; ?>"> <i class="fas fa-file-export"></i> Export
                      </button>
                    </td>
                  </tr>
              <script>
      // When the export button is clicked
      document.querySelectorAll('.export-consolidated-btn').forEach(button => {
          button.addEventListener('click', function(event) {
              event.preventDefault();  // Prevent the default link action
              let exportDate = this.getAttribute('data-export-date');

              // Show SweetAlert confirmation dialog
              Swal.fire({
                  title: 'Notice!',
                  text: 'Do you want to export this as an Excel file?',
                  icon: 'question',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#cc2900',
                  confirmButtonText: 'Confirm',
                  cancelButtonText: 'Cancel'
              }).then((result) => {
                  if (result.isConfirmed) {
                      // Redirect to export page if confirmed
                      window.location.href = `functions/exportArchiveConsolidated.php?export=${exportDate}`;
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
      });
      </script>
              <?php 
                    }
                } else {
              ?>
                  <tr>
                      <th colspan='2'><h5 class='not_found'> Sorry, No Data Available</h5></th>
                  </tr>
              <?php
                }
              ?>
                  </tbody>
                </table>
              </div>

              <br>
            </div>
          </div>
          <div class="card">

            <div class="card-header">
              <center>
                <h2>SERVICES FEEDBACK BY CLIENTS</h2>
              </center>
                  <!-- Trigger button for the modal -->
              <div class="filter-btn">
                  <button id="openModal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterModal">Filter Archive</button>
              </div>
            </div>  
            <div class="card-body">
            <!-- Trigger Button -->
            <div class="scroll-horizon">
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            # Check if the services and date are set in the POST request
            if (isset($_POST['services']) && isset($_POST['date'])) {
                $received_Service = $_POST['services'];
                $selected_date = $_POST['date'];
                $selected_Service = ($received_Service == '1') ? '1' : (($received_Service == 'other') ? '' : '');

                if ($received_Service == '1' || $received_Service == 'other' ) {
                    $sql_filter = "SELECT * FROM offline WHERE service = ? AND date LIKE ? ORDER BY date DESC";
                    $stmt = $conn->prepare($sql_filter);

                    # Prepare the values
                    $selected_date_like = $selected_date . '%';
                    $stmt->bind_param("ss", $selected_Service, $selected_date_like);

                    # Execute sql
                    $stmt->execute();

                    # Get the result
                    $result = $stmt->get_result();
                    $no = 0; # Initialize counter
                    $export_filenameOffline = ($received_Service == '1') ? 'exportArchiveLivelihood' : (($received_Service == 'other') ? 'exportArchiveOther' : '');
                    $title = ($received_Service == '1') ? 'Livelihood Assistance' : (($received_Service == 'other') ? 'Other Services Application' : '');
                    ?>
                    <div class="col-2 mb-3" style="float:right;">
                                <button class="btn btn-primary export-btn" style="font-size: 14px; font-family: Arial, sans-serif;" data-export-date="<?php echo $selected_date; ?>">
                                    <i class="fas fa-file-export"></i> Export
                                </button>
                            </div>
                    <script type="text/javascript">
                            document.querySelectorAll('.export-btn').forEach(button => {
                                button.addEventListener('click', function(event) {
                                    event.preventDefault();  // Prevent the default link action
                                    let exportDate = this.getAttribute('data-export-date');  // Get the export date from the data attribute

                                    // Show SweetAlert confirmation dialog
                                    Swal.fire({
                                        title: 'Notice!',
                                        text: 'Do you want to export this as an Excel file?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#cc2900',
                                        confirmButtonText: 'Confirm',
                                        cancelButtonText: 'Cancel'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Redirect to export page if confirmed
                                            window.location.href = `functions/<?php echo $export_filenameOffline; ?>.php?export=${exportDate}`;

                                            // Show a success toast after redirection
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
                                                title: "Data is being converted to Excel file"
                                            });
                                        }
                                    });
                                });
                            });

                            </script>
                              <br>
                              <h3>Archive for <?php echo $title; ?> Clients</h3>
                              <div class="col-12" style="overflow-y: auto; overflow-x: auto; height: 380px;">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr style="position: sticky; top: 0; z-index: 1; background: #343a40; color: white;">
                                            <th>#</th>
                                            <th>Control Number</th>
                                            <th>Date</th>
                                            <th>Client Type</th>
                                            <th>Gender</th>
                                            <th>Age Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                  <?php
                                  while ($row = $result->fetch_assoc()) {
                                      $no++; # Increment counter
                                      $dsp_date = strtotime($row['date']);
                                      ?>
                                      <tr>
                                          <td><?php echo $no; ?></td>
                                          <td><?php echo $row['controlNumber'];?></td>
                                          <td><?php echo date('F d, Y', $dsp_date);?></td>
                                          <td><?php echo $row['client'];?></td>
                                          <td><?php echo $row['gender'];?></td>
                                          <td style="width: 10%;"><?php 
                                              $age=$row['age'];
                                              if ($age == '24') {
                                                  echo "Below 25";
                                              } elseif ($age == '25') {
                                                  echo "Between 25 to 34";
                                              } elseif ($age == '35') {
                                                  echo "Between 35 to 44";
                                              } elseif ($age == '45') {
                                                  echo "Between 45 to 54";
                                              } elseif ($age == '55') {
                                                  echo "Between 55 to 64";
                                              } elseif ($age == '64') {
                                                  echo "Between 65 and Above ";
                                              }
                                          ?></td>
                                      </tr>
                                  <?php
                                  }

                                  // Close the statement
                                  $stmt->close();

                                  ############################### IMPORTANT SYNTAXT FOR FUTURE REFERENCE!! ##################
                                  // $export_filenameOffline = ($selected_Service == '1') ? 'exportLivelihoodArchive' : 'exportOthersArchive';
                                  // $export_filenameOffline = ($selected_Service == '1') ? 'exportArchiveLivelihood' : (($selected_Service == 'other') ? 'exportArchiveOther' : '');

                                  ?>
                                </tbody>
                              </table>
                  </div>
            </div>
                              <?php
                          } else {
                              // code...
                              # Prepare SQL 
                              $sql_filter = "SELECT * FROM poll WHERE service = $received_Service AND date LIKE ? ORDER BY date DESC";
                              $stmt = $conn->prepare($sql_filter);

                              # Prepare the values
                              $selected_date_like = $selected_date . '%';
                              // $selected_Service_like = $selected_Service . '%';
                              $stmt->bind_param("s", $selected_date_like);

                              # Execute sql
                              $stmt->execute();

                              # Get the result
                              $result = $stmt->get_result();
                              $no = 0; # Initialize counter

                              $export_filenameOnline = ($received_Service == '2') ? 'exportArchiveCSHP' 
                                  : (($received_Service == '3') ? "exportArchiveWA" 
                                  : (($received_Service == '4') ? 'exportArchiveRULE1020' : ''));


                              switch ($received_Service) {
                                case '2':
                                    $title = 'CSHP Application';
                                    break;
                                case '3':
                                    $title = "Workers' Association Application";
                                    break;
                                case '4':
                                    $title = 'RULE 1020 Application';
                                    break;
                                default:
                                    $title = '';
                                }

                              ?>
                              <div class="col-2 mb-3" style="float:right;">
                                <button class="btn btn-primary export-btn" style="font-size: 14px; font-family: Arial, sans-serif;" data-export-date="<?php echo $selected_date; ?>">
                                    <i class="fas fa-file-export"></i> Export
                                </button>
                            </div>
                            <script type="text/javascript">
                            document.querySelectorAll('.export-btn').forEach(button => {
                                button.addEventListener('click', function(event) {
                                    event.preventDefault();  // Prevent the default link action
                                    let exportDate = this.getAttribute('data-export-date');  // Get the export date from the data attribute

                                    // Show SweetAlert confirmation dialog
                                    Swal.fire({
                                        title: 'Notice!',
                                        text: 'Do you want to export this as an Excel file?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#cc2900',
                                        confirmButtonText: 'Confirm',
                                        cancelButtonText: 'Cancel'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // Redirect to export page if confirmed
                                            window.location.href = `functions/<?php echo $export_filenameOnline; ?>.php?export=${exportDate}`;

                                            // Show a success toast after redirection
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
                                                title: "Data is being converted to Excel file"
                                            });
                                        }
                                    });
                                });
                            });

                            </script>

                              <br>
                                  <h3>Archive for <?php echo $title; ?> Clients</h3>
                              <div class="col-12" style="overflow-y: auto; overflow-x: auto; height: 380px;">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr style="position: sticky; top: 0; z-index: 1; background: #343a40; color: white;">
                                            <th>#</th>
                                            <th>Control Number</th>
                                            <th>Date</th>
                                            <th>Client Type</th>
                                            <th>Gender</th>
                                            <th>Age Range</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      while ($row = $result->fetch_assoc()) {
                                          $no++; # Increment counter
                                          $dsp_date = strtotime($row['date']);
                                          ?>
                                          <tr>
                                              <td><?php echo $no; ?></td>
                                              <td><?php echo $row['controlNumber'];?></td>
                                              <td><?php echo date('F d, Y', $dsp_date);?></td>
                                              <td><?php echo $row['client'];?></td>
                                              <td><?php echo $row['gender'];?></td>
                                              <td style="width: 10%;"><?php 
                                                  $age=$row['age'];
                                                  if ($age == '24') {
                                                      echo "Below 25";
                                                  } elseif ($age == '25') {
                                                      echo "Between 25 to 34";
                                                  } elseif ($age == '35') {
                                                      echo "Between 35 to 44";
                                                  } elseif ($age == '45') {
                                                      echo "Between 45 to 54";
                                                  } elseif ($age == '55') {
                                                      echo "Between 55 to 64";
                                                  } elseif ($age == '64') {
                                                      echo "Between 65 and Above ";
                                                  }
                                              ?></td>
                                             <?php
                                  }

                                  // Close the statement
                                  $stmt->close();

                                  ?>
                                </tbody>
                              </table>
                  </div>
            </div><?php
                              }
                          } else {
                              # If false
                              echo "
                              <script>
                                  Swal.fire({
                                      icon: 'warning',
                                      title: 'Input Required',
                                      text: 'Please select both a service and a date.',
                                      confirmButtonText: 'OK'
                                  });
                              </script>
                              ";
                          }
                      } else {
                          ?>
                          <span style="font-style: italic; color:red;">Notice! Please select the type of service and date to be export</span>
                          <?php 
                      }
                      ?>
                    </table>
                  </div>
            </div>


                  

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!------------------------------------ Modal Form ---------------------------------------->
<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #283957; color: white;">
                <h5 class="modal-title" id="filterModalLabel">Filter Data to Export As Excel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="exportForm" method="POST" action="">
                    <div class="mb-3">
                        <label for="services" class="form-label">Type of Services:</label>
                        <select id="services" name="services" class="form-control" required>
                            <option disabled selected hidden>Select Services</option>
                            <option value="1">Application for Livelihood Project Assistance</option>
                            <option value="2">CSHP Application</option>
                            <option value="3">Registration of Workers' Association</option>
                            <option value="4">RULE 1020</option>
                            <option value="other">Other Services</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Filter Month:</label>
                        <select id="date" name="date" class="form-control" required>
                            <option disabled selected hidden>Select Month</option>
                            <?php
                            $query = "
                                SELECT DATE_FORMAT(date, '%Y-%m') AS formatted_date
                                FROM poll
                                GROUP BY formatted_date 
                                ORDER BY MIN(date) DESC";

                            $result = mysqli_query($conn, $query);
                            if (!$result) {
                                die("Query failed: " . mysqli_error($conn));
                            }

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <option value="<?php echo $row['formatted_date']; ?>"><?php echo date("F, Y", strtotime($row['formatted_date'])); ?></option>
                            <?php 
                                }
                            } else {
                            ?>
                                <option disabled selected hidden>Services Not Available in Database</option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="submit" form="exportForm" class="btn btn-primary filter">Filter</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to Handle Remaining Overlay -->
<script>
    // Listen for the modal hidden event to ensure overlay is removed
    document.getElementById('filterModal').addEventListener('hidden.bs.modal', function () {
        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.remove();
        });
        document.body.classList.remove('modal-open');
    });

    // Get modal element
    var modal = document.getElementById("filterModal");

    // Get open modal button
    var openModalButton = document.getElementById("openModal");

    // Get close button
    var closeModalButton = document.getElementById("closeModal");

    // Listen for open click - Use Bootstrap's modal show/hide functionality
    openModalButton.onclick = function() {
        var filterModal = new bootstrap.Modal(document.getElementById('filterModal'));
        filterModal.show();
    };

    // Listen for close click - Bootstrap automatically handles modal close
    closeModalButton.onclick = function() {
        var filterModal = new bootstrap.Modal(document.getElementById('filterModal'));
        filterModal.hide();
    };

    // Listen for outside click - Bootstrap automatically handles this
    window.onclick = function(event) {
        if (event.target === modal) {
            var filterModal = new bootstrap.Modal(document.getElementById('filterModal'));
            filterModal.hide();
        }
    };

    // Form submission validation and handling
    document.getElementById('exportForm').addEventListener('submit', function(event) {
        const services = document.getElementById('services').value;
        const date = document.getElementById('date').value;

        if (!services || !date) {
            event.preventDefault(); // Prevent form submission
            Swal.fire({
                icon: 'warning',
                title: 'Input Required',
                text: 'Please select both a service and a date.',
                confirmButtonText: 'OK'
            });
        }
    });

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