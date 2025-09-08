<!DOCTYPE html>
<html lang="en">
<head>
  <title>DOLE CLIENT FEEDBACK FORM</title>
<link rel="shortcut icon" type="x-icon" href="DOLE.png">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Elegant Feedback Form  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--/custom-theme -->
<!-- <link href="style.css" rel="stylesheet" type="text/css"/> -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
 <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- SweetAlert CSS and JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Toastr CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</head>


  <style>
* {box-sizing: border-box;}
    body {
    position: relative;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    overflow: hidden; /* Prevents scrolling issues */
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('dolebuilding.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    opacity: 0.8; /* Adjust opacity to 20% */
    z-index: -1; /* Ensures it is behind the body content */
}

/* Ensure other content appears above the pseudo-element */
body > * {
    position: relative;
    z-index: 1;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 1%;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
  display: none;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 5s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fadeIn;
  animation-duration: 3s; /* Fade in duration */
  animation-fill-mode: forwards; /* Keep the end state */
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

.fade-out {
  animation-name: fadeOut;
  animation-duration: 3s; /* Fade out duration */
  animation-fill-mode: forwards; /* Keep the end state */
}

@keyframes fadeOut {
  from {opacity: 1} 
  to {opacity: 0}
}
.swal2-container {
    z-index: 9999;
    display: flex;          /* Use flexbox */
    justify-content: center; /* Center horizontally */
    align-items: center;    /* Center vertically */
    position: fixed;        /* Position relative to the viewport */
    top: 0;                /* Align to the top */
    left: 0;               /* Align to the left */
    width: 100vw;          /* Full width */
    height: 100vh;         /* Full height */
}

.swal2-popup {
    margin: auto;          /* Center the popup itself */
    margin: auto;          
    border-radius: 10px;  /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Shadow effect */
    transition: transform 0.3s ease; /* Smooth scaling effect */
}


/* Optional: Scale effect on popup appearance */
.swal2-popup.show {
    transform: scale(1.05); /* Slightly grow the popup when shown */
}


.container {
  flex: 0.3;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

  width: 50%;
  margin: auto;
}

/* Basic styles for the modal */
.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgba(0, 0, 0, 0.5); 
    padding-top: 60px; 
}

.modal-content {
    background-color: #ffffff;
    margin: 5% auto; 
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px; /* Rounded corners */
    width: 300px; /* Fixed width for the modal */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
}
        input[type="password"],
        input[type="text"] {
            width: 100%; 
            padding: 12px 15px; 
            margin: 10px 0; 
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; 
            transition: border-color 0.3s ease; 
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff; 
            outline: none; 
        }
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

input[type="password"] {
    width: 100%; /* Full width */
    padding: 12px 15px; /* Padding for comfort */
    margin: 10px 0; /* Space between elements */
    border: 1px solid #ccc;
    border-radius: 5px; /* Rounded corners for input */
    box-sizing: border-box; /* Ensure padding is included in width */
}

button[type="submit"] {
    background-color: #007bff; /* Bootstrap primary color */
    color: white;
    border: none;
    border-radius: 5px; /* Rounded corners for button */
    padding: 10px;
    cursor: pointer;
    width: 100%; /* Full width */
}

button[type="submit"]:hover {
    background-color: #0056b3; /* Darker shade on hover */
}


    .my-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        background-color: darkblue; /* Default background color */
        color: white;
        border: none;
        cursor: pointer;
        width:180px;
        height:50px;
        border-radius: 10px;
        transition: background-color 0.3s ease; /* Smooth transition for color change */
    }
    .admin-btn{
      background-color: green;
              display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
 /* Default background color */
        color: white;
        border: none;
        cursor: pointer;
        width:180px;
        height:50px;
        border-radius: 10px;
        transition: background-color 0.3s ease; /* Smooth transition for color change */
    }
    .admin-btn:hover{
      background-color: darkgreen;
    }
    /* Hover effect */
    .my-button:hover {
        background-color: #00004d; /* New background color on hover */
    }
    .back{
      background-color: #eb142d;
    }
.back:hover {
        background-color: #a40e20; /* New background color on hover */
    }



/* Responsive styles */
@media (min-width: 600px) {
  .container {
    flex-wrap: wrap;
    justify-content: space-around;
  }

  .admin, .box, .box1, .box2 {
    width: 45%;
    max-width: none;
  }

  .footer a {
    font-size: 40px;
    color: whitesmoke;
 


  }
}

@media (min-width: 768px) {
  .admin, .box, .box1, .box2 {
    width: 30%;
  }
}

@media (min-width: 1024px) {
  .admin, .box, .box1, .box2 {
    width: 22%;
  }
}*/

.icon {
      font-size: 50px;
      color: #3b5998; /* Facebook blue color */
      text-decoration: none;
      transition: color 0.3s;
    }

    .icon:hover {
      color: #2d4373; /* Slightly darker blue on hover */
    }

  /* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<!-- <header>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <div class="hbg">
      <center><img src="Header.jpg"></center>  
    </div>
</header> -->

<body>
        <div class="slideshow-container">

          <div class="mySlides fade">
            <!-- <div class="numbertext">1 / 3</div> -->
            <img src="header.jpg" style="width:100%">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <!-- <div class="numbertext">2 / 3</div> -->
            <img src="Header2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <!-- <div class="numbertext">3 / 3</div> -->
            <img src="Header3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>

          </div>
          <br>

          <div style="text-align:center; display: none;" >
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>

          <script>
          let slideIndex = 0;
          showSlides();

          function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); // Change image every 2 seconds
          }
          </script>
  <div class="container">
    <div class="box1">
      <a href="walkin.php"><button class="my-button">WALK-IN CLIENT</button></a>
    </div>
    <div class="box">
      <a href="online.php"><button class="my-button">ONLINE CLIENT</button></a>
    </div>
    <div class="box2">  
      <button class="my-button" id="addNewFormButton">ADD NEW FORM</button>
    </div>
    <div class="admin">
      <button class="admin-btn" id="adminLoginButton">LOGIN AS ADMIN</button>
    </div>
  </div>
    <!-- Modal -->
    <div id="pinModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 style="text-align: center;">Please Enter Password</h2>
            <form id="loginForm" class="Lofo">
                <div style="position: relative;">
                    <input type="password" size="30" id="pin" placeholder="Enter Password" required>
                    <i id="togglePassword" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);" class="fa fa-eye"></i>
                </div>
                <button type="submit">Enter</button>
            </form>
        </div>
    </div>
    <script>
        // Get modal element
        var modal = document.getElementById("pinModal");
        var btn = document.getElementById("addNewFormButton");
        var span = document.getElementsByClassName("close")[0];

        // Show modal when the button is clicked
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // Close modal when the user clicks on <span> (x)
        span.onclick = function() {
            modal.style.display = "none";
        }

        // Close modal when the user clicks anywhere outside of the modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }



    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
        const pinInput = document.getElementById('pin');
        const type = pinInput.getAttribute('type') === 'password' ? 'text' : 'password';
        pinInput.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash');
    });

    // Handle form submission
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault();

        // Retrieve entered PIN
        const enteredPin = document.getElementById('pin').value;

        // Perform authentication (check if entered PIN matches admin PIN)
        if (enteredPin === 'DOLEXCDOFO') { // Replace 'DOLEXCDOFO' with the actual admin PIN
            toastr.success('Logged in successfully!', 'Success');
            setTimeout(function() {
                window.location.replace("form.php");
            }, 1000); // Redirect after 1 second
        } else {
            Swal.fire({
                title: "Invalid Password!",
                text: "Please try again.",
                icon: "error",
                confirmButtonText: "OK"
            }).then(() => {
                // Clear the input field after showing the error message
                document.getElementById('pin').value = '';
            });
        }
    }); 

    document.getElementById('adminLoginButton').addEventListener('click', function(event) {
  event.preventDefault(); // Prevent the default link action
  Swal.fire({
    title: 'Notice!',
    text: "You are now accessing Admin Page",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#2eb82e',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Confirm',
    cancelButtonText: 'Cancel'
  }).then((result) => {
    if (result.isConfirmed) {
      // If confirmed, redirect to admin login page
      window.location.href = 'admin/index.php';
    }
  });
});
  </script>
</body>

</html>