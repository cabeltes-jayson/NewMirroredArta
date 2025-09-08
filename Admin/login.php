<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- SweetAlert2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.css" rel="stylesheet">

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.5.1/dist/sweetalert2.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="icon" href="assets/images/DOLE.png">

    <!-- css -->
<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"> -->
<link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <style>

        .containerr {
    max-width: 600px;
    margin: 0 auto;
    padding: 50px;
    position: relative;
}

body{
    padding: 50px;
    color: white;
        background: mix(#3f3251, #002025, 70%);
    color: white;
}
    .custom-toast {
        background-color: #448749 !important; /* Green background */
        color: white !important;           /* White text for contrast */
        border: 1px solid darkgreen;       /* Optional border */
    }
/*animation*/

// START: TEMPLATE
@blue: #26bbf0;
@green: #c2d5a0;
@red: #cf6a6d;
@yellow: #ffbc0d;

@black: #343536;
@black-2: #424950;
@grey: #89949b;
@grey-2: #9aa8b1;
@light-grey: #c4c9cd ;
@light-grey-2: #dbdfe1;
@white: #f3f4f5;


* {
  transition: all .3s;
}
// END: TEMPLATE


body {
  background: mix(#3f3251, #002025, 70%);
}

#prism-logo {
  path {
    // fill: #20293b;
    // stroke: rgba(255,255,255,1);
    // stroke-width: 1px;
  }
}





#particles-background, #particles-foreground {
  left: 0%;
  top: 0%;
/*  width: auto;*/
/*  height: auto;*/
  transform: scale3d(.5, .5, 1);
}
#particles-foreground {
  position: absolute;  /* Position it absolutely within its containerr */
  top: -60px;  /* Shift the particles slightly upwards */
  left: 0;
  width: 100%;
  height: 68%;
  z-index: -1;  /* Ensure particles are behind the logo */
}

#particles-background {
  background: mix(#3f3251, #002025, 100%);
  background-image: -moz-linear-gradient(430deg, #3f3251 2%, #002025 100%);
  background-image: -webkit-linear-gradient(45deg, #3f3251 2%, #002025 100%);
  background-image: linear-gradient(45deg, #3f3251 2%, #002025 100%);
}

@keyframes rotate { 0% { transform: rotate(0deg);} 100% { transform: rotate(360deg);}}

@keyframes fade { 0% { opacity: 1;} 50% { opacity: 0.25;}}

@keyframes fade-in { 0% { opacity: 0;} 100% { opacity: 1;}}




/*WAVE BACKGROUND*/



@keyframes gradient {
    0% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 100% 100%;
    }
    100% {
        background-position: 0% 0%;
    }
}
    

.wave {
    background: rgb(255 255 255 / 25%);
    border-radius: 1000% 1000% 0 0;
    position: fixed;
    width: 200%;
    height: 12em;
    animation: wave 10s -3s linear infinite;
    transform: translate3d(0, 0, 0);
    opacity: 0.8;
    bottom: 0;
    left: 0;
    z-index: -1;
}

.wave:nth-of-type(2) {
    bottom: -1.25em;
    animation: wave 18s linear reverse infinite;
    opacity: 0.8;
}

.wave:nth-of-type(3) {
    bottom: -2.5em;
    animation: wave 20s -1s reverse infinite;
    opacity: 0.9;
}

@keyframes wave {
    2% {
        transform: translateX(1);
    }

    25% {
        transform: translateX(-25%);
    }

    50% {
        transform: translateX(-50%);
    }

    75% {
        transform: translateX(-25%);
    }

    100% {
        transform: translateX(1);
    }
}
.form-group{
    margin-bottom: 30px;
}

h2 {
    text-align: center;
}
        h3{
            text-align: center;


        }

  .center {
/*    margin-top: 5%;*/
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
    z-index: 1; /* Ensure the logo is in front of the particles */
  }

        h5 {
            margin-right:20px;
        }

.submit-btn{
    background-color: dodgerblue;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-top: 2%;
}

.submit-btn:hover{
background-color: royalblue;
}

/* Password containerr */
.password-containerr {
  position: relative;

}

/* Styling the password input */


/* Styling the toggle button */
.password-containerr button {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  background: none;
  border: none;
  cursor: pointer;
}

/* Styling the toggle icon */
.password-containerr button img {
  width: 20px;
  height: 20px;
  opacity: 0.5;
  transition: opacity 0.3s ease;
}

/* Hover effect for toggle icon */
.password-containerr button:hover img {
  opacity: 1;
}
p{
  font-size: 12px;
}

        
    </style>
</head>
<body>

<!-- <div id="particles-background" class="vertical-centered-box"></div> -->


  <div>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
 </div>
    <a href="..\" class="btn btn-danger" style="float: left;"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
<div class="containerr">
  <!-- Particle Animation Background -->
  <div id="particles-foreground">
    
  </div>
  
  <!-- Logo Image -->
  <img src="assets/images/DOLE.png" alt="" class="img-fluid center">

  <br><br>
        
        <!-- <img src="images/DOLE.png" alt="" height=150 width=120 class="center"> -->
        <h3>Anti-Red Tape Act Admin</h3><br><br>

        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form action="" method="POST">
            <div class="form-group">
                <input type="text" placeholder="Enter Username" name="uname" class="form-control" style="width: 100%;" required="">
            </div>
            
            
                <div class="password-containerr">
                    <input type="password" placeholder="Enter Password" name="pass" id="password" class="form-control" style="width: 100%;"  required="">
                    <button type="button" id="togglePassword" >

                        <!-- show password icon -->
                        <img id="visible" src="https://img.icons8.com/material-outlined/24/000000/visible--v2.png"/>

                        <!-- hide password icon -->
                        <img id="invisible" src="https://img.icons8.com/material-outlined/24/000000/invisible--v2.png"/ style="display: none;">
                    </button>
                </div>
                <br><br>
            
            <div class="form-btn " style="float:right;">
                <input type="submit" value="Login" name="login" class="btn btn-primary btn-md">
                <!-- <h5 style="margin-top:20px;">Don't have an account?</h5> -->
                <!-- <a href="registration.php">Register here</a> -->
            </div>
        </form>
<?php 

if (isset($_POST['login'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "if0_36144549_testing_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8mb4");
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    // Prepare and execute the SQL query
    $sqli = "SELECT * FROM tbl_user WHERE username=?";
    $stmt = $conn->prepare($sqli);
    $stmt->bind_param("s", $uname);  // Bind username as string
    $stmt->execute();
    $results = $stmt->get_result();

    if ($results->num_rows > 0) {
        while ($user = $results->fetch_assoc()) {
            // Verify the password using password_verify()
            if (password_verify($pass, $user['password'])) {
                // Set session variables
                $_SESSION["Name"] = $user['first_name'] . " " . $user['last_name'];
                $_SESSION["username"] = $uname;
                $_SESSION["user_role"] = $user['user_role'];
                $_SESSION["reg_date"] = $user['reg_date'];
                $_SESSION["vcode"] = $user['verification_code'];
                $_SESSION["email"] = $user['email'];
                $_SESSION["contact"] = $user['contact_number'];
                $_SESSION["office_add"] = $user['office_address'];
                $_SESSION["id"] = $user['tbl_user_id'];

                // JavaScript redirection after success
                echo "
                <script type='text/javascript'>
                    toastr.options = {
                        'closeButton': true,              
                        'progressBar': true,               
                        'positionClass': 'toast-top-right', 
                        'timeOut': '5000',                 
                        'extendedTimeOut': '1000',         
                        'showEasing': 'swing',
                        'hideEasing': 'linear',
                        'showMethod': 'fadeIn',
                        'hideMethod': 'fadeOut',
                        'toastClass': 'custom-toast'      
                    };
                    toastr.success('Logged in successfully!', 'Success');
                    setTimeout(function() {
                        window.location.replace('index.php');
                    }, 2000);
                </script>";
                exit();
            } else {
                // Password incorrect
                echo "
                <script type='text/javascript'>
                    Swal.fire({
                        title: 'Invalid User',
                        text: 'Sorry, the username or password is incorrect!',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.replace('login.php');
                        }
                    });
                </script>";
            }
        }
    } else {
        // Username does not exist
        echo "
        <script type='text/javascript'>
            Swal.fire({
                title: 'Invalid User',
                text: 'Sorry, the username or password is incorrect!',
                icon: 'error',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('login.php');
                }
            });
        </script>";
    }

    // Close the database connection
    $conn->close();
}
?>


    </div>
<!-- </div> -->
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


/*!
 * Particleground
 *
 * @author Jonathan Nicol - @mrjnicol
 * @version 1.1.0
 * @description Creates a canvas based particle system background
 *
 * Inspired by http://requestlab.fr/ and http://disruptivebydesign.com/
 */
!function(a,b){"use strict";function c(a){a=a||{};for(var b=1;b<arguments.length;b++){var c=arguments[b];if(c)for(var d in c)c.hasOwnProperty(d)&&("object"==typeof c[d]?deepExtend(a[d],c[d]):a[d]=c[d])}return a}function d(d,g){function h(){if(y){r=b.createElement("canvas"),r.className="pg-canvas",r.style.display="block",d.insertBefore(r,d.firstChild),s=r.getContext("2d"),i();for(var c=Math.round(r.width*r.height/g.density),e=0;c>e;e++){var f=new n;f.setStackPos(e),z.push(f)}a.addEventListener("resize",function(){k()},!1),b.addEventListener("mousemove",function(a){A=a.pageX,B=a.pageY},!1),D&&!C&&a.addEventListener("deviceorientation",function(){F=Math.min(Math.max(-event.beta,-30),30),E=Math.min(Math.max(-event.gamma,-30),30)},!0),j(),q("onInit")}}function i(){r.width=d.offsetWidth,r.height=d.offsetHeight,s.fillStyle=g.dotColor,s.strokeStyle=g.lineColor,s.lineWidth=g.lineWidth}function j(){if(y){u=a.innerWidth,v=a.innerHeight,s.clearRect(0,0,r.width,r.height);for(var b=0;b<z.length;b++)z[b].updatePosition();for(var b=0;b<z.length;b++)z[b].draw();G||(t=requestAnimationFrame(j))}}function k(){i();for(var a=d.offsetWidth,b=d.offsetHeight,c=z.length-1;c>=0;c--)(z[c].position.x>a||z[c].position.y>b)&&z.splice(c,1);var e=Math.round(r.width*r.height/g.density);if(e>z.length)for(;e>z.length;){var f=new n;z.push(f)}else e<z.length&&z.splice(e);for(c=z.length-1;c>=0;c--)z[c].setStackPos(c)}function l(){G=!0}function m(){G=!1,j()}function n(){switch(this.stackPos,this.active=!0,this.layer=Math.ceil(3*Math.random()),this.parallaxOffsetX=0,this.parallaxOffsetY=0,this.position={x:Math.ceil(Math.random()*r.width),y:Math.ceil(Math.random()*r.height)},this.speed={},g.directionX){case"left":this.speed.x=+(-g.maxSpeedX+Math.random()*g.maxSpeedX-g.minSpeedX).toFixed(2);break;case"right":this.speed.x=+(Math.random()*g.maxSpeedX+g.minSpeedX).toFixed(2);break;default:this.speed.x=+(-g.maxSpeedX/2+Math.random()*g.maxSpeedX).toFixed(2),this.speed.x+=this.speed.x>0?g.minSpeedX:-g.minSpeedX}switch(g.directionY){case"up":this.speed.y=+(-g.maxSpeedY+Math.random()*g.maxSpeedY-g.minSpeedY).toFixed(2);break;case"down":this.speed.y=+(Math.random()*g.maxSpeedY+g.minSpeedY).toFixed(2);break;default:this.speed.y=+(-g.maxSpeedY/2+Math.random()*g.maxSpeedY).toFixed(2),this.speed.x+=this.speed.y>0?g.minSpeedY:-g.minSpeedY}}function o(a,b){return b?void(g[a]=b):g[a]}function p(){console.log("destroy"),r.parentNode.removeChild(r),q("onDestroy"),f&&f(d).removeData("plugin_"+e)}function q(a){void 0!==g[a]&&g[a].call(d)}var r,s,t,u,v,w,x,y=!!b.createElement("canvas").getContext,z=[],A=0,B=0,C=!navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry|BB10|mobi|tablet|opera mini|nexus 7)/i),D=!!a.DeviceOrientationEvent,E=0,F=0,G=!1;return g=c({},a[e].defaults,g),n.prototype.draw=function(){s.beginPath(),s.arc(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY,g.particleRadius/2,0,2*Math.PI,!0),s.closePath(),s.fill(),s.beginPath();for(var a=z.length-1;a>this.stackPos;a--){var b=z[a],c=this.position.x-b.position.x,d=this.position.y-b.position.y,e=Math.sqrt(c*c+d*d).toFixed(2);e<g.proximity&&(s.moveTo(this.position.x+this.parallaxOffsetX,this.position.y+this.parallaxOffsetY),g.curvedLines?s.quadraticCurveTo(Math.max(b.position.x,b.position.x),Math.min(b.position.y,b.position.y),b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY):s.lineTo(b.position.x+b.parallaxOffsetX,b.position.y+b.parallaxOffsetY))}s.stroke(),s.closePath()},n.prototype.updatePosition=function(){if(g.parallax){if(D&&!C){var a=(u-0)/60;w=(E- -30)*a+0;var b=(v-0)/60;x=(F- -30)*b+0}else w=A,x=B;this.parallaxTargX=(w-u/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetX+=(this.parallaxTargX-this.parallaxOffsetX)/10,this.parallaxTargY=(x-v/2)/(g.parallaxMultiplier*this.layer),this.parallaxOffsetY+=(this.parallaxTargY-this.parallaxOffsetY)/10}var c=d.offsetWidth,e=d.offsetHeight;switch(g.directionX){case"left":this.position.x+this.speed.x+this.parallaxOffsetX<0&&(this.position.x=c-this.parallaxOffsetX);break;case"right":this.position.x+this.speed.x+this.parallaxOffsetX>c&&(this.position.x=0-this.parallaxOffsetX);break;default:(this.position.x+this.speed.x+this.parallaxOffsetX>c||this.position.x+this.speed.x+this.parallaxOffsetX<0)&&(this.speed.x=-this.speed.x)}switch(g.directionY){case"up":this.position.y+this.speed.y+this.parallaxOffsetY<0&&(this.position.y=e-this.parallaxOffsetY);break;case"down":this.position.y+this.speed.y+this.parallaxOffsetY>e&&(this.position.y=0-this.parallaxOffsetY);break;default:(this.position.y+this.speed.y+this.parallaxOffsetY>e||this.position.y+this.speed.y+this.parallaxOffsetY<0)&&(this.speed.y=-this.speed.y)}this.position.x+=this.speed.x,this.position.y+=this.speed.y},n.prototype.setStackPos=function(a){this.stackPos=a},h(),{option:o,destroy:p,start:m,pause:l}}var e="particleground",f=a.jQuery;a[e]=function(a,b){return new d(a,b)},a[e].defaults={minSpeedX:.1,maxSpeedX:.7,minSpeedY:.1,maxSpeedY:.7,directionX:"center",directionY:"center",density:1e4,dotColor:"#666666",lineColor:"#666666",particleRadius:7,lineWidth:1,curvedLines:!1,proximity:100,parallax:!0,parallaxMultiplier:5,onInit:function(){},onDestroy:function(){}},f&&(f.fn[e]=function(a){if("string"==typeof arguments[0]){var b,c=arguments[0],g=Array.prototype.slice.call(arguments,1);return this.each(function(){f.data(this,"plugin_"+e)&&"function"==typeof f.data(this,"plugin_"+e)[c]&&(b=f.data(this,"plugin_"+e)[c].apply(this,g))}),void 0!==b?b:this}return"object"!=typeof a&&a?void 0:this.each(function(){f.data(this,"plugin_"+e)||f.data(this,"plugin_"+e,new d(this,a))})})}(window,document),/**
 * requestAnimationFrame polyfill by Erik Möller. fixes from Paul Irish and Tino Zijdel
 * @see: http://paulirish.com/2011/requestanimationframe-for-smart-animating/
 * @see: http://my.opera.com/emoller/blog/2011/12/20/requestanimationframe-for-smart-er-animating
 * @license: MIT license
 */
function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(b){var c=(new Date).getTime(),d=Math.max(0,16-(c-a)),e=window.setTimeout(function(){b(c+d)},d);return a=c+d,e}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}();


particleground(document.getElementById('particles-foreground'), {
  dotColor: 'rgba(255, 255, 255, 1)',
  lineColor: 'rgba(255, 255, 255, 0.05)',
  minSpeedX: 0.3,
  maxSpeedX: 0.6,
  minSpeedY: 0.3,
  maxSpeedY: 0.6,
  density: 13500, // One particle every n pixels
  curvedLines: false,
  proximity: 250, // How close two dots need to be before they join
  parallaxMultiplier: 100, // Lower the number is more extreme parallax
  particleRadius: 5, // Dot size
});

particleground(document.getElementById('particles-background'), {
  dotColor: 'rgba(255, 255, 255, 0.5)',
  lineColor: 'rgba(255, 255, 255, 0.05)',
  minSpeedX: 0.075,
  maxSpeedX: 0.15,
  minSpeedY: 0.075,
  maxSpeedY: 0.15,
  density: 3000, // One particle every n pixels
  curvedLines: false,
  proximity: 20, // How close two dots need to be before they join
  parallaxMultiplier: 20, // Lower the number is more extreme parallax
  particleRadius: 2, // Dot size
});
</script>
</body>
</html>