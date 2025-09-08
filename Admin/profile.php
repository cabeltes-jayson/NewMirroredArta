 <?php
    include 'includes/header.php';
    include 'includes/nav.php';
    include 'includes/sidebar.php';
    ?>
<style type="text/css">

/*.password-containerr {
  position: relative;

}*/

/* Styling the password input */


/* Styling the toggle button */
#togglePassword {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
}

/* Styling the toggle icon */
#togglePassword img {
  width: 20px;
  height: 20px;
  opacity: 0.5;
  transition: opacity 0.3s ease;
}

/* Hover effect for toggle icon */
#togglePassword:hover img {
  opacity: 1;
}




/* Styling the toggle button */
#revealPassword {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
}

/* Styling the toggle icon */
#revealPassword img {
  width: 20px;
  height: 20px;
  opacity: 0.5;
  transition: opacity 0.3s ease;
}

/* Hover effect for toggle icon */
#revealPassword:hover img {
  opacity: 1;
}


/* Adjust size for specific icons */
.swal2-icon-success {
    font-size: 10px !important;  /* Adjust for success icon */
}

.swal2-icon-error {
    font-size: 10px !important;  /* Adjust for error icon */
}

.swal2-icon-warning {
    font-size: 10px !important;  /* Adjust for warning icon */
}

.swal2-icon-info {
    font-size: 15px !important;  /* Adjust for info icon */
}
.swal2-confirm.custom-confirm-btn {
    font-size: 18px !important; 
    height: auto !important;
    background-color: #218838 !important;     
}
.swal2-confirm.custom-confirm-btn {
    font-size: 18px !important; 
    height: auto !important;

}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Profile</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="assets/images/dolelogs.png" alt="DOLA Logo">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['Name']; ?>
</h3>

                <p class="text-muted text-center"><?php echo $_SESSION['user_role']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <center><b>DEPARTMENT OF LABOR AND EMPLOYMENT</b></center>
                  </li>
                  <li class="list-group-item">
                    <center><b>FIELD OFFICE REGION X</b></center>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header" style="background-color: #384F7A;">
                <center>
                <h6 class="mt-1">Details:</h6>
              </center>
              </div>
              <!-- /.card-header -->
              <div class="card-body"><center>
                <strong><i class="fas fa-user mr-1"></i> ARTA-User ID</strong>

                <p class="text-muted">
                  AUID-00<?php echo $_SESSION['reg_date'].$_SESSION['id']; ?></center>
                </p>

                <hr>
                <center>
                <strong><i class="fas fa-phone-alt mr-1"></i> Contact Number</strong>

                <p class="text-muted">
                  <?php echo $_SESSION['contact']; ?></center>
                </p>

                <hr>

<!--                 <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p> -->


                <center>
                <strong><i class="far fa-envelope mr-1"></i> Email:</strong>

                <p class="text-muted">
                  <?php echo $_SESSION['email']; ?></center>
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Update Profile</a></li>
                  <!-- <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                  <li class="nav-item"><a class="nav-link ml-3" href="#settings" data-toggle="tab">Add New ARTA User</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                    <form id="updateForm" method="POST" action="functions/sql_update.php">
    <?php
        // Corrected SQL query assignment
        $sql = "SELECT * FROM tbl_user WHERE tbl_user_id = ?";
        $stmt = $conn->prepare($sql);

        // Bind the session ID to the prepared statement
        $stmt->bind_param("i", $_SESSION['id']);

        // Execute the statement
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    ?>

    <input type="hidden" name="form_type" value="update_user">
    <input type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">

    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo $row['first_name']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo $row['last_name']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputName" class="col-sm-2 col-form-label">User Role:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="role" placeholder="User Role" value="<?php echo $row['user_role']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $row['email']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="contact" class="col-sm-2 col-form-label">Mobile</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="contact" placeholder="Contact Number" value="<?php echo $row['contact_number']?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="Office" class="col-sm-2 col-form-label">Office:</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="office" placeholder="Office"><?php echo $row['office_address']; ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label for="Username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['username']?>">
        </div>
    </div>
    <div class="form-group row">
      <label for="Password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
          <input type="password" class="form-control" name="password"  id="password" placeholder="Update your password?">
          <!-- <div class="password-containerr "> -->
            <button type="button" id="togglePassword" >

                        <!-- show password icon -->
              <img id="visible" src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>

                        <!-- hide password icon -->
              <img id="invisible" src="https://img.icons8.com/material-outlined/24/000000/invisible--v2.png"/ style="display: none;">
            </button>
          <!-- </div> -->
      </div>
        
    </div>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-success" id="submitBtn">Update</button>
        </div>
    </div>
</form>

<script>
const passwordInput = document.getElementById('password');
const toggleButton = document.getElementById('togglePassword');

const visible = document.getElementById('visible');
const invisible = document.getElementById('invisible');


// Function to toggle password visibility
function togglePasswordVisibility() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    invisible.style.display = 'inline';
    visible.style.display = 'none';

  } else {
    passwordInput.type = 'password';
    invisible.style.display = 'none';
    visible.style.display = '';

  }
}

// Add click event listener to the toggle button
toggleButton.addEventListener('click', togglePasswordVisibility);


    // Event listener for form submission
    document.getElementById('submitBtn').addEventListener('click', function(event) {
        event.preventDefault(); 
        Swal.fire({
            title: "Do you wish to update your account?",
            showDenyButton: true,
            // showCancelButton: true,
            confirmButtonText: "Confirm",
            denyButtonText: `Decline`,
            customClass: {
              confirmButton: 'custom-confirm-btn',
              cancelButton: 'custom-cancel-btn'
          }
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('updateForm').submit();
                // window.location.href = 'sql_update.php';
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    });
</script>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form id="addForm" method="POST" action="functions/sql_insert.php">
                      <input type="hidden" name="form_type" value="add_user">
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <input type="text" class="form-control" name="firstname" placeholder="Firstname" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <input type="text" class="form-control" name="lastname" placeholder="Lastname"  required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <!-- <input type="text" class="form-control" name="role" placeholder="User Role"  required> -->
                              <select class="form-control" name="role" placeholder="User Role"  required>>
                                <option selected hidden disabled>Select User Role</option>
                                <option>Admin</option>
                                <option>User</option>
                                <!-- <option>IT</option> -->
                              </select>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <input type="email" class="form-control" name="email" placeholder="Email" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <input type="text" class="form-control" name="contact" placeholder="Contact Number" >
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <textarea class="form-control" name="office" placeholder="Office"></textarea>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <input type="text" class="form-control" name="username" placeholder="Username" required>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <input type="password" class="form-control" name="password" placeholder="Password" id="pass" required>
                              <button type="button" id="revealPassword">
                                  <img id="reveal" src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>
                                  <img id="hide" src="https://img.icons8.com/material-outlined/24/000000/invisible--v2.png" style="display: none;">
                              </button>
                          </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-12">
                              <button type="submit" class="btn btn-success" id="addBtn" style="float: right;">Add User</button>
                          </div>
                      </div>
                  </form>

                  <script>
                    // Password toggle functionality
                    const pass = document.getElementById('pass');
                    const revealPasswordButton = document.getElementById('revealPassword');
                    const reveal = document.getElementById('reveal');
                    const hide = document.getElementById('hide');

                    function toggleRevealPassword() {
                      if (pass.type === 'password') {
                        pass.type = 'text';
                        hide.style.display = 'inline';
                        reveal.style.display = 'none';
                      } else {
                        pass.type = 'password';
                        hide.style.display = 'none';
                        reveal.style.display = 'inline';
                      }
                    }

                    revealPasswordButton.addEventListener('click', toggleRevealPassword);

                    // Event listener for form submission with SweetAlert
                    document.getElementById('addBtn').addEventListener('click', function(event) {
                        event.preventDefault(); 
                        Swal.fire({
                            title: "Do you wish to add this user account?",
                            showDenyButton: true,
                            // showCancelButton: true,
                            confirmButtonText: "Confirm",
                            denyButtonText: `Decline`,
                            customClass: {
                              confirmButton: 'custom-confirm-btn',
                              cancelButton: 'custom-cancel-btn'
                          }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById('addForm').submit();
                            } else if (result.isDenied) {
                                Swal.fire("The user account has not been added.", "", "info");
                            }
                        });
                    });
                  </script>

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


 <?php
    include 'includes/footer.php';
    ?>