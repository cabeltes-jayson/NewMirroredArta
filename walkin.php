<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
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

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <style>
  @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html,
body {
  max-height: 100%;
  /* overflow-x: hidden; */
}

body {
  line-height: 1.7;
  -webkit-font-smoothing: antialiased;
  /* padding: 5rem; */
}

img,
picture,
video,
canvas,
svg {
  display: block;
  max-width: 100%;
}

input,
button,
textarea,
select {
  font: inherit;
}

select {
  width: 100%;
  padding: 8px 10px;
}

input {
  width: 100%;
  padding: 3px 10px;
}

p,
h1,
h2,
h3,
h4,
h5,
h6 {
  overflow-wrap: break-word;
}

h1,
h2,
h3 {
  line-height: 1.3;
}

span {
  font-weight: 400;
}

body {
  background-image: url("ARTA-TRANSPARENT\ 1.png");
  background-repeat: no-repeat;
  background-size: cover;

  max-width: 100%;
  min-height: 100vh;

  display: flex;
  justify-content: center;
  padding-block: 15px;
  align-items: center;
  /* place-items: center; */
  /* color: white; */
  font-family: "Inter", sans-serif;
  font-size: 13px;
}

.tag_translation {
  font-style: italic;
  font-size: 13px;
  font-weight: 600;
}

.wrapper {
  width: 100%;
  height: 575px;
  overflow: hidden;
}

.dolebg {
  background-image: url("dolebuilding.jpg");
  background-repeat: no-repeat;
  background-size: cover;

  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

  padding: 2rem;
}

/* 

    MODAL 
    
*/

   .modal {
  display: none; /* Hide the modal by default */
  position: fixed;
  z-index: 999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4); /* Semi-transparent background */
}

.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  padding: 40px;
  border: 1px solid #888;
  width: 80%;
  max-width: 800px;
  /* height:310px;  */
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.modal-content h3 {
  text-align: center;
  font-size: 24px;

}

.modal-content p {
  text-align: justify;
  margin-bottom: 10px;
  font-size: 24px;
}

.modal-content center {
  text-align: center;
}

.modal-content a {
  color: blue;
}

.modal-content button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  /*margin-top: 10px;*/
  /*margin-bottom: 10px;*/
}

.modal-content button:hover {
  background-color: #45a049;
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


.feedback {
  background-color: white;
  padding: 2rem;

  display: flex;
  flex-direction: column;
  justify-content: space-between;
  gap: 12px;

  height: 100%;
}

.heading {
  display: flex;
  justify-content: space-between;
  align-items: center;

  font-weight: bold;

  > button {
    background: none;
    border: none;
    color: #403578;
    font-weight: bold;
    cursor: pointer;
  }
}

/* 

    CLIENT PAGE CSS 

*/

.clientContent {
  padding-block: 1rem;
  border-bottom: 1px solid #d9d9d9;
  border-top: 1px solid #d9d9d9;

  display: flex;
  flex-direction: column;
  gap: 12px;

  > h5 {
    align-self: flex-end;
  }

  p {
    color: rgb(0, 0, 0, 70%);
  }

  input,
  select {
    border: 1px solid rgb(0, 0, 0, 20%);
    border-radius: 5px;
  }

  .bento-input {
    display: grid;
    gap: 20px;
    grid-template-areas:
      "one one"
      "two three"
      "four five"
      "six seven"
      "eight nine";

    span {
      color: rgb(0, 0, 0, 50%);
    }
  }

  .bento-input > :nth-child(1) {
    grid-area: one;
  }

  .bento-input > :nth-child(2) {
    grid-area: two;
  }
  .bento-input > :nth-child(3) {
    grid-area: three;
  }

  .bento-input > :nth-child(4) {
    grid-area: four;
  }

  .bento-input > :nth-child(5) {
    grid-area: five;
  }

  .bento-input > :nth-child(6) {
    grid-area: six;
  }

  .bento-input > :nth-child(7) {
    grid-area: seven;
  }

  .bento-input > :nth-child(8) {
    grid-area: eight;
  }

  .bento-input > :nth-child(9) {
    grid-area: nine;
  }

  .bento-input > :nth-child(10) {
    grid-area: ten;
  }

  /* Radio Group */
  .radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    align-items: center;
  }

  .radio-group label {
    font-size: 13px;
  }

  .radio-group > div {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 10px;
  }
}

input[type="radio"] {
  accent-color: #c5322b;
}

textarea {
  resize: none;
  padding: 15px;
  width: 100%;
  height: 25vh;
}

.btns {
  display: flex;
  align-items: center;
  justify-content: flex-end;

  gap: 12px;
}

.prevBtn {
  border: none;
  background: none;
  color: #434141;
  cursor: pointer;
  width: fit-content;
  text-decoration: underline;
  font-weight: bold;
}

.nxtBtn {
  background-color: #403578;
  align-self: flex-end;
  color: white;
  border: none;
  width: fit-content;
  border-radius: 8px;
  padding: 8px 55px;
  cursor: pointer;
  font-weight: bold;
}

.ccContent {
  padding-block: 1rem;
  border-bottom: 1px solid #d9d9d9;
  border-top: 1px solid #d9d9d9;

  display: flex;
  flex-direction: column;
  gap: 18px;

  > h5 {
    align-self: flex-end;
  }
}

/* 

    END OF CLIENT PAGE CSS 
    
*/

/* 

    START CC PAGE CSS 
    
*/

.form-group {
  display: grid;
  grid-template-columns: auto auto;
  /* grid-gap: 10px; */

  margin-top: 5px;
  margin-left: 15px;
}

.form-group div {
  display: flex;
  align-items: center;
  justify-content: start;

  gap: 8px;
}

.form-group div input {
  width: fit-content;
}

label {
  /* font-weight: 600; */
}

.cc1 {
  display: grid;
  grid-template-columns: 1fr;
}

/* 

    END CC PAGE 
    
*/

/* 

    START SQD PAGE 
    
*/

.sqd-radio-group {
  display: grid;
  grid-template-columns: 1fr 1fr;

  margin-top: 5px;
  margin-left: 15px;
}

.sqd-radio-group div {
  display: flex;
  align-items: center;
  justify-content: start;

  gap: 8px;
}

.sqd-radio-group div input {
  width: fit-content;
}

/* 

    END SQD PAGE 
    
*/

/* 

    START SUGGESTIONS PAGE 
    
*/

.scContent {
  padding-block: 1.5rem;
  .emailBox {
    span {
      color: rgb(0, 0, 0, 50%);
    }

    input {
      padding: 5px 15px;
    }
  }
}

/* 

    END SUGGESTIONS PAGE 
    
*/

.form-step {
  display: none;
  animation: animate 0.5s;
  transform-origin: top;
}

@keyframes animate {
  from {
    transform: scale(1, 0);
    opacity: 0;
  }
  to {
    transform: scale(1, 1);
    opacity: 1;
  }
}

.form-step-active {
  display: flex;
}

form {
  /* display: none; */

  display: grid;
  grid-template-columns: 250px 990px;
  overflow-y: auto;
  border-radius: 12px;

  box-shadow: 0 4px 14px rgb(0, 0, 0, 25%);

  height: 100%;
  /* margin-top: 1rem; */
}

/* 

    PROGRESS BAR 
    
*/

.progressbar {
  background-image: url("dolebuilding.jpg");
  background-repeat: no-repeat;
  background-size: cover;

  padding: 2rem;

  position: relative;

  display: flex;
  flex-direction: column;
  /* align-items: center; */
  /* justify-content: space-between; */

  counter-reset: step;
}

.progwrap {
  display: flex;
  flex-direction: column;
  margin-top: 4.5rem;

  gap: 2.5rem;
}

.progressbar::before,
.progress {
  content: "";
  position: absolute;
  transform: translateX(-50%);
  top: 25%; /* anchor from the top */
  left: 23%;
  width: 6px;
  height: 50%; /* make full line span */
  background-color: #d9d9d9;
  border: none;
}

.progress {
  width: 6px;
  height: 0%;
  background-color: #403578;
}

.progress-step::after {
  content: attr(data-title);
  position: absolute;
  left: calc(100% + 12px);
  top: 50%;
  transform: translateY(-50%);
  font-size: 14px;
  width: 100%;
}

.progress-step {
  width: 50px;
  height: 50px;
  background-color: #d9d9d9;
  border-radius: 50%;
  color: white;
  font-size: 20px;
  font-weight: bold;

  display: flex;
  justify-content: center;
  align-items: center;
  position: relative;

  z-index: 1;
}

.progress-step::before {
  counter-increment: step;
  content: counter(step);
}

.progress-step-active {
  background-color: #403578;
  color: white;
}

/* 

    LOGOS 
    
*/

.logos {
  display: flex;
  align-items: center;
  justify-content: space-around;
  margin-block: 12px;
  /* margin-inline: 20px; */
  gap: 10px;

  /* img {
    max-width: 4%;
  } */
}

/* 

    FOOTER 
    
*/

footer {
  border-radius: 12px 12px 0 0;
  position: absolute;
  background-color: #8d2e28;
  bottom: 0;
  color: white;
  /* padding-top: 100px 0; */
}

/* 

    SOCIALS
    
*/

.socials {
  display: flex;
  /* align-items: end; */
  gap: 20px;
}

/* 

    ADDRESS 
    
*/

.address,
.hotline {
  display: flex;
  gap: 20px;
}

/* 

    GREETINGS 
    
*/

.greet {
  position: relative;
}

.greetingModal {
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding: 0.95rem;
  background-color: white;
  border-radius: 12px;
  gap: 0.675rem;
  width: 25%;
  text-align: center;
  box-shadow: 0 0 4px black;

  svg {
    max-width: 25%;
  }

  button {
    background-color: #403578;
    color: white;
    border: none;
    width: fit-content;
    border-radius: 8px;
    padding: 8px 40px;
    cursor: pointer;
    /* font-weight: bold; */
    outline: none;
  }
}
</style>
  <body>
    <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close"></span>
    <h3>Please help us to serve you better by taking a couple of minutes</h3>
    <p>This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide better service. Personal information shared will be kept confidential and you always have the option to not answer this form.</p>
<!--     <span class="tag_translation">
        (Sinusubaybayan ng Client Satisfaction Measurement (CSM) na ito ang karanasan ng customer ng mga opisina ng gobyerno. Ang iyong feedback sa iyong kamakailang natapos na transaksyon ay makakatulong sa opisinang ito na magbigay ng mas mahusay na serbisyo. Ang personal na impormasyong ibinahagi ay pananatiling kumpidensyal at palagi kang may opsyon na hindi sagutin ang form na ito.)
    </span> -->
    <center>
      <a href="privacy.html" target="_blank">Privacy Policy</a> and <a href="terms.html" target="_blank">Terms of Service</a>.<br>
      <br>
      <label for="agree-checkbox">I agree to the terms and conditions:</label>
      <input type="checkbox" id="agree-checkbox" required>
      <button class="next-button" id="next-button">Next</button>
    </center>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the <span> element that closes the modal
var closeBtn = modal.querySelector('.close');

// When the user clicks on <span> (x), close the modal
closeBtn.addEventListener('click', function() {
  modal.style.display = 'none';
});

// When the user clicks the next button
modal.querySelector('#next-button').addEventListener('click', function() {
  // Check if the checkbox is checked
  if (modal.querySelector('#agree-checkbox').checked) {
    // Hide the modal
    modal.style.display = 'none';
  } else {
            Swal.fire({
            icon: "warning",
            title: "Notice!",
            text: "Please agree to the terms and conditions.",
            });
  }
});

// Open the modal on page load
window.onload = function() {
  modal.style.display = 'block';
};

</script>


<?php
include 'config.php';

$tanduaySelect = 'SELECT ctrl_num FROM offline ORDER BY id DESC LIMIT 1';
$result = $conn->query($tanduaySelect);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentControlNumber = $row["ctrl_num"];
        $nextControlNumber = $currentControlNumber + 1;
    }
?>

    <form id="surveyForm" action="feedback3.php" method="post" class="agile_form">
      <div class="progressbar">
        <!-- <div class="overlay"></div> -->
        <button
        onclick="goBack()"
          style="
            background-color: #403578;
            color: white;
            border: none;
            width: fit-content;
            border-radius: 8px;
            padding: 8px 22px;
            cursor: pointer;
            font-weight: bold;
          "
        >
          Home
        </button>
        <div class="progwrap">
          <div class="progress" id="progress"></div>
          <div
            class="progress-step progress-step-active"
            data-title="Client Information"
          ></div>
          <div class="progress-step" data-title="Citizen's Charter"></div>
          <div
            class="progress-step"
            data-title="Service Quality Dimension"
          ></div>
          <div
            class="progress-step"
            data-title="Suggestions and Comments"
          ></div>
        </div>
      </div>
      <!-- 
      
          CLIENT INFORMATION PAGE 
          
      -->
      <div class="form-step form-step-active">
        <div class="wrapper">
          <!-- <div class="dolebg"></div> -->
          <div class="feedback">
            <!-- HEADING -->
            <div class="heading">
              <!-- <button>< Back</button> -->
              <h2>Client Information</h2>
              <div class="currentDateTime"></div>
            </div>
            <div class="clientContent">
              <h5>
                Control Number:
                <span> 
                  <input type="text" style="width: fit-content; color: green;" value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>" disabled>
                  <input type="text" name="ctrlNum" readonly hidden value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>">
                  <input type="number" name="ctrl_num" readonly hidden value="<?php echo $nextControlNumber ?>">
                </span>
              </h5>

              <!-- INPUTS -->

              <div class="bento-input">
                <!-- NAME OF OFFICE -->
                <div class="input-group">
                  <p>Name of Office/Operating Unit</p>
                  <input type="text" name="office" required />
                </div>

                <!-- NAME OF SERVICE -->
                <div class="input-group">
                  <p>Name of Service Provided</p>
                  <input type="text" name="service_provided" required />
                </div>

                <!-- NUMBER OF TRANSACTIONS -->
                <div class="input-group">
                  <p>Number of Transactions</p>
                  <input type="number" name="number_of_transactions" required />
                </div>

                <!-- SERVICE AVAILED -->
                <div class="input-group">
                  <p>Service Availed</p>
                  <select
                    id="dropdown"
                    name="service"
                    onchange="handleDropdownChange()"
                    required
                  >
                    <option value="" selected hidden disabled>
                      Pumili ng serbisyo
                    </option>
                    <option value="1">
                      1. Application for Livelihood Project Assistance
                    </option>
                    <option value="2">
                      2. Registration of Collective Bargaining Agreement
                    </option>
                    <option value="3">3. Registration of Contractors</option>
                    <option value="4">
                      4. Application for Alien Employment Permit(New/Renewal)
                    </option>
                    <option value="5">
                      5. Issuance of Certificate of Exclusion from Alien
                      Employment Permit
                    </option>
                    <option value="6">
                      6. Application for Working Child Permit
                    </option>
                    <option value="7">
                      7. Application for Sugar Workers’ Death Benefit Claim
                    </option>
                    <option value="8">
                      8. Application for Sugar Workers’ Maternity Benefit Claim
                    </option>
                    <option value="9">
                      9. Application for Accreditation of Co-Partner
                    </option>
                    <option value="10">
                      10. Clearing of Technical Plans for Mechanical Equipment
                      and Electrical Installation
                    </option>
                    <option value="11">
                      11. Conduct of Technical Safety Inspection for the
                      Issuance of Permit to Operate (PTO) Mechanical
                      Installation/Certificate of Electrical Inspection (CEI)
                    </option>
                    <option value="12">
                      12. Issuance of Certificate of Appearance for Professional
                      Mechanical Engineer/Professional Electrical Engineer
                    </option>
                    <option value="13">
                      13. Application for Job Fair Clearance
                    </option>
                    <option value="14">
                      14. Application for Job Fair Permit
                    </option>
                    <option value="15">
                      15. Application for Authority to Operate Branch Office of
                      a Private Employment Agency
                    </option>
                    <option value="16">
                      16. Application for Authority to Recruit
                    </option>
                    <option value="17">
                      17. Application for License to Operate Private Employment
                      Agency (PEA)
                    </option>
                    <option value="18">
                      18. Issuance of Permit to Operate (PTO) Mechanical
                      Installation/Certificate of Electrical Inspection(CEI)
                    </option>
                    <option value="">Other</option>
                  </select>
                  <div id="otherOptionInput" style="display: none">
                    <label for="otherOption">Enter Service Availed: </label
                    ><br />
                    <input
                      type="text"
                      name="other_service"
                      id="otherOption"
                      required
                    />
                  </div>
                  <script>
                    function handleDropdownChange() {
                      var dropdown = document.getElementById("dropdown");
                      var otherOptionInput =
                        document.getElementById("otherOptionInput");
                      var otherOptionInputField =
                        document.getElementById("otherOption");

                      if (dropdown.value === "") {
                        otherOptionInput.style.display = "block";
                        otherOptionInputField.required = true;
                      } else {
                        otherOptionInput.style.display = "none";
                        otherOptionInputField.required = false;
                      }
                    }
                  </script>
                </div>

                <!-- ADDRESS -->
                <div class="input-group">
                  <p>Address <span>(optional)</span></p>
                 <select id="region" name="region" >
                        <option selected="" hidden=" " disabled="">Pumili ng Rehiyon o Lugar ng tirahan (optional)</option>
                        <option value="Region X">Region X</option>
                        
                        <?php
                        $selectD1query = "SELECT * FROM brgy_tbl ORDER BY brgy_name ASC";
                        $runQuery1 = mysqli_query($conn,$selectD1query);
                            while($rowDistrict1 = mysqli_fetch_array($runQuery1)){ 
                                echo " <option value='Region X, ".$rowDistrict1['brgy_name'].", CDO' >Region X, ".$rowDistrict1['brgy_name'].", CDO</option>";
                            }
                        ?>
                    </select>

                </div>

                <!-- NAME -->
                <div class="input-group">
                  <p>Name <span>(optional)</span></p>
                  <input type="text" />
                </div>

                <!-- AGE -->
                <div class="input-group">
                  <p>Age</p>
                  <select id="ageRange" name="age" required>
                    <option value="" selected hidden disabled>
                      Piliin ang Saklaw ng Edad
                    </option>
                    <option value="24">Below 25</option>
                    <option value="25">25-34</option>
                    <option value="35">35-44</option>
                    <option value="45">45-54</option>
                    <option value="55">55-64</option>
                    <option value="64">64 Above</option>
                  </select>
                </div>

                <!-- CLIENT TYPE -->

                <div class="input-group">
                  <p>Client Type</p>
                  <div class="radio-group">
                    <div>
                      <input
                        type="radio"
                        name="client"
                        value="Citizen"
                        required
                      />
                      <i class="fa fa-solid fa-user"></i>
                      <label>Citizen</label>
                    </div>
                    <div>
                      <input type="radio" name="client" value="Business" />
                      <i class="fas fa-address-card"></i>
                      <label>Business</label>
                    </div>
                    <div>
                      <input type="radio" name="client" value="Government" />
                      <i class="fas fa-building"></i>
                      <label>Government</label>
                    </div>
                  </div>
                </div>

                <!-- GENDER -->

                <div class="input-group">
                  <p>Gender</p>
                  <div class="radio-group">
                    <div>
                      <input
                        type="radio"
                        id="male"
                        name="gender"
                        value="Male"
                        required
                      />
                      <i class="fa fa-solid fa-male"></i>
                      <label for="male">Male</label>
                    </div>
                    <div>
                      <input
                        type="radio"
                        id="female"
                        name="gender"
                        value="Female"
                      />
                      <i class="fa fa-solid fa-female"></i>
                      <label for="female">Female</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- NEXT BUTTON -->
            <div class="btns">
              <input type="button" value="Next" class="nxtBtn" />
            </div>
          </div>
        </div>
      </div>
      <!-- 
      
          CITIZEN'S CHARTER QUESTION PAGE 
        
      -->
      <div class="form-step">
        <div class="wrapper">
          <div class="feedback">
            <!-- 

              HEADING 
            
          -->
            <div class="heading">
              <!-- <button>< Back</button> -->
              <h2>Citizen's Charter (CC) Questions</h2>

              <div class="currentDateTime"></div>
            </div>
            <div class="ccContent">
                <h5>
                Control Number:
                <span> 
                  <input type="text" style="width: fit-content; color: green;" value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>" disabled>
                  <input type="text" name="ctrlNum" readonly hidden value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>">
                  <input type="number" name="ctrl_num" readonly hidden value="<?php echo $nextControlNumber ?>">
                </span>
              </h5>
              <div
                style="
                  overflow-y: scroll;
                  height: 340px;
                  display: flex;
                  flex-direction: column;
                  gap: 12px;
                "
              >
                <!-- 
              
              CC QUESTION 1 
              
            -->
                <div class="cc-q1">
                  <label>
                    CC1. Which of the following best describes your awareness of
                    a CC?
                    <span class="tag_translation"
                      >(Alin sa mga sumusunod ang pinaka naglalarawan ng iyong
                      kamalayan sa CC?)</span
                    >
                  </label>
                  <div class="form-group cc1">
                    <div>
                      <input type="radio" name="c" value="1" required />I Know
                      what a CC is and I saw this office's CC.
                      <span class="tag_translation"
                        >(Alam ko ang ibig sabihin ng CC at napansin ko ang CC
                        ng opisina)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="c" value="2" />I know what a CC
                      is but I did NOT see this office's CC.
                      <span class="tag_translation"
                        >(Alam ko ang ibig sabihin ng CC ngunit hindi ko ito
                        napansin sa opisina)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="c" value="3" />I learned of the
                      CC only when I saw this office's CC.
                      <span class="tag_translation"
                        >(Natutunan ko kung ano ang CC nung nakita ko ito dito
                        sa opisina)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="c" value="4" />I do not know
                      what a CC is and I did not see one in this office.
                      <span class="tag_translation"
                        >(Hindi ko alam kung ano ang CC at hindi ko rin ito
                        nakikita dito sa opisina.)</span
                      >
                    </div>
                  </div>
                </div>
                <!-- 
            
                CC QUESTION 2 
            
            -->
                <div class="cc-q2">
                  <label>
                    CC2. If aware of CC (if answered A to C in CC1) would you
                    say that the CC of this office was..?
                    <span class="tag_translation"
                      >(kung alam mo ang CC (kung ang sagot mo ay nasa A
                      hanggang C ng CC1). Masasabi mo ba na ang CC ng opisinang
                      ito ay..?)</span
                    >
                  </label>

                  <div class="form-group">
                    <div>
                      <input type="radio" name="cc" value="1" required />Easy to
                      see
                      <span class="tag_translation">(Madaling makita)</span>
                    </div>
                    <div>
                      <input type="radio" name="cc" value="3" />Difficult to see
                      <span class="tag_translation">(Mahirap makita)</span>
                    </div>
                    <div>
                      <input type="radio" name="cc" value="2" />Somewhat easy to
                      see
                      <span class="tag_translation"
                        >(Medyo madaling makita)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="cc" value="4" />Not visible at
                      all
                      <span class="tag_translation"
                        >(Hindi talaga nakikita)</span
                      >
                    </div>
                  </div>
                </div>
                <!-- 
            
                CC QUESTION 3 
            
            -->
                <div class="cc-q3">
                  <label>
                    CC3. If aware of CC (answered A-C in CC1), how much did the
                    CC help you in your transaction?
                    <span class="tag_translation"
                      >(Kung alam mo ang tungkol sa CC (Kung sagot mo sa CC1 ay
                      A–C), gaano kalaki ang naitulong ng CC sa iyong
                      transaksiyon?)</span
                    >
                  </label>

                  <div class="form-group">
                    <div>
                      <input type="radio" name="ccc" value="1" required />Helped
                      very much
                      <span class="tag_translation"
                        >(Nakatulong ng lubusan)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="ccc" value="3" />Did not help
                      <span class="tag_translation"
                        >(Hindi ito nakatulong)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="ccc" value="2" />Somewhat helped
                      <span class="tag_translation"
                        >(Bahagyang nakatulong)</span
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 
          
            NEXT BUTTON 
            
          -->
            <div class="btns">
              <input type="button" value="Previous" class="prevBtn" />
              <input type="button" value="Next" class="nxtBtn" />
            </div>
          </div>
        </div>
      </div>

      <!-- 
      
          SERVICE QUALITY DIMENSION PAGE 
        
      -->
      <div class="form-step">
        <div class="wrapper">
          <div class="feedback">
            <!-- 

              HEADING 
            
          -->
            <div class="heading">
              <!-- <button>< Back</button> -->
              <h2>Service Quality Dimension (SQD)</h2>

              <div class="currentDateTime"></div>
            </div>
            <div class="ccContent sqdContent">
              <h5>
                Control Number:
                <span> 
                  <input type="text" style="width: fit-content; color: green;" value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>" disabled>
                  <input type="text" name="ctrlNum" readonly hidden value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>">
                  <input type="number" name="ctrl_num" readonly hidden value="<?php echo $nextControlNumber ?>">
                </span>
              </h5>
              <div
                style="
                  overflow-y: scroll;
                  height: 340px;
                  display: flex;
                  flex-direction: column;
                  gap: 12px;
                "
              >
                <!-- 
              
              SQD QUESTION 1 
              
            -->
                <div class="sqd-q1">
                  <label>
                    1. I am satisfied with the service that I availed 
                    <span class="tag_translation"
                      >(Ako ay kontento sa serbisyo na aking
                      napakinabangan)</span
                    >
                  </label>
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 2 
                
            -->

                <div class="sqd-q2">
                  <label
                    >2. RESPONSIVENESS: I spent an acceptable amount of time to
                    complete my transaction
                    <span class="tag_translation"
                      >(Gumugol ako ng katanggap-tanggap na oras upang
                      makumpleto ang aking transaksyon)</span
                    ></label
                  >
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_one"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_one" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_one" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_one" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_one" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_one" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 3 
                
            -->

                <div class="sqd-q3">
                  <label
                    >3. RELIABILITY: The office accurately informed and followed
                    the transaction's requirements and steps based on the
                    information provided
                    <span class="tag_translation"
                      >(Ang opisina ay may wastong kaalaman at sinusunod ang mga
                      kinakailangan at hakbang ng transaksyon base sa mga
                      ibinigay na impormasyon)</span
                    ></label
                  >
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_two"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_two" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_two" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_two" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_two" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_two" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 4 
                
            -->

                <div class="sqd-q4">
                  <label
                    >4. ACCESS AND FACILITIES: The steps (including payment) for
                    my transaction were easy and simple
                    <span class="tag_translation"
                      >(Ang mga hakbang (kabilang ang pagbabayad) para sa aking
                      transaksyon ay simple at maginhawa)</span
                    ></label
                  >
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_three"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_three" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_three" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_three" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_three" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_three" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 5 
             
            -->

                <div class="sqd-q5">
                  <label
                    >5. COMMUNICATION: I easily found information about my
                    transaction
                    <span class="tag_translation"
                      >(Madali kong nahanap ang impormasyon tungkol sa aking
                      transaksyon mula sa opisina o website nito)</span
                    ></label
                  >
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_four"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_four" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_four" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_four" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_four" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_four" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 6 
                
            -->

                <div class="sqd-q6">
                  <label
                    >6. COSTS: I paid an acceptable amount of fees for my
                    transaction (If service was free, mark the 'N/A')
                    <span class="tag_translation"
                      >(Nagbayad ako ng katanggap-tanggap na halaga ng mga
                      bayarin para sa aking transaksyon)</span
                    ></label
                  >

                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_five"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_five" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_five" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_five" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_five" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_five" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 7 
                
            -->

                <div class="sqd-q7">
                  <label
                    >7. INTEGRITY: I feel the office was fair to everyone, or
                    "walang palakasan", during my transaction.
                    <span class="tag_translation"
                      >(Naramdaman ko na patas ang opisina sa lahat, o ‘walang
                      palakasan’, sa aking transaksiyon.)</span
                    ></label
                  >
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_six"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_six" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_six" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_six" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_six" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_six" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 8 
                
            -->

                <div class="sqd-q8">
                  <label
                    >8. ASSURANCE: I was treated courteously by the staff and
                    (if asked for help) the staff was helpful.<span
                      class="tag_translation"
                      >(Magalang akong tinrato ng mga kawani at (nang humingi
                      ako ng tulong) ay naging matulungin sila.)</span
                    ></label
                  >
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_seven"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_seven" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_seven" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_seven" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_seven" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_seven" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>

                <!-- 
            
                SQD QUESTION 9 
                
            -->

                <div class="sqd-q9">
                  <label
                    >9. OUTCOME: I got what I needed from the government office
                    or if denied, the denial was sufficiently explained
                    <span class="tag_translation"
                      >(Nakuha ko ang aking mga kailangan mula sa opisina pang
                      gobyerno o kung tinanggihan man, naipaliwanag ng husto ang
                      pagtanggi sa aking kahilingan)</span
                    >
                  </label>
                  <div class="sqd-radio-group">
                    <div>
                      <input
                        type="radio"
                        name="sqd_eight"
                        value="1"
                        required
                      />Strongly Agree
                      <span class="tag_translation"
                        >(Lubos na sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_eight" value="2" />Strongly
                      Disagree
                      <span class="tag_translation"
                        >(Lubos na hindi sumasang-ayon)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_eight" value="3" />Agree
                      <span class="tag_translation">(Sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_eight" value="4" />Neither Agree
                      nor Disagree
                      <span class="tag_translation"
                        >(Hindi umaayon o kumokontra)</span
                      >
                    </div>
                    <div>
                      <input type="radio" name="sqd_eight" value="5" />Disagree
                      <span class="tag_translation">(Hindi sumasang-ayon)</span>
                    </div>
                    <div>
                      <input type="radio" name="sqd_eight" value="6" />Not Applicable
                      <span class="tag_translation">(Hindi naaangkop)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 
          
            NEXT BUTTON 
            
          -->
            <div class="btns">
              <input type="button" value="Previous" class="prevBtn" />
              <input type="button" value="Next" class="nxtBtn" />
            </div>
          </div>
        </div>
      </div>

      <!-- 
      
          SUGGESTIONS AND COMMENTS PAGE 
          
      -->

      <div class="form-step">
        <div class="wrapper">
          <div class="feedback">
            <!-- 

              HEADING 
            
          -->
            <div class="heading">
              <!-- <button>< Back</button> -->
              <h2>Suggestions and Comments</h2>

              <div class="currentDateTime"></div>
            </div>
            <div class="ccContent scContent">
              <h5>
                Control Number:
                <span> 
                  <input type="text" style="width: fit-content; color: green;" value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>" disabled>
                  <input type="text" name="ctrlNum" readonly hidden value="ROX-<?php echo date('Y'); ?>-CDO-<?php echo date('m-00').$nextControlNumber ?>">
                  <input type="number" name="ctrl_num" readonly hidden value="<?php echo $nextControlNumber ?>">
                </span>
              </h5>

              <div class="suggestionBox">
                <p>If you have specific feedback, Please write to us...</p>
                <textarea
                  name="suggestion"
                  id="suggestion"
                  placeholder="Your suggestion (optional)"
                ></textarea>
              </div>

              <div class="emailBox">
                <p>Email Address <span>(optional)</span></p>
                <input type="email" name="email" id="email" />
              </div>
            </div>
            <!-- 
          
            NEXT BUTTON 
            
          -->
            <div class="btns">
              <input type="button" value="Previous" class="prevBtn" />
              <input type="submit" value="submitt" class="nxtBtn" />
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="greetingModal">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
        <!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
        <path
          fill="#403578"
          d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z"
        />
      </svg>
      <h3>Thank you for your feedback!</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi ipsam aut
        perspiciatis corporis qui.
      </p>
      <button>Return to home</button>
    </div>

    <footer>
      <div class="logos">
        <div style="display: flex; max-width: 4%; gap: 15px">
          <img
            src="Department_of_Labor_and_Employment_(DOLE).svg"
            alt="dole"
            srcset=""
          />
          <img src="Bagong_Pilipinas_logo.png" alt="bagong" />
          <img src="NQA.jpg" alt="nqa" srcset="" />
        </div>

        <div class="socials">
          <div class="address">
            <p style="font-weight: bold">Address:</p>
            <div>
              <p>Trinidad Building,</p>
              <p>Corrales-Yacapin Street,</p>
              <p>Cagayan de Oro City</p>
            </div>
          </div>
          <div class="contact">
            <p style="font-weight: bold">
              City Phone: <span>(088) 858-1658</span>
            </p>
            <p style="font-weight: bold">
              Email: <span>ro10@dole.gov.ph</span>
            </p>
          </div>
          <div class="hotline">
            <p style="font-weight: bold">DOLE-X Hotline:</p>
            <div>
              <p>Globe: 0977-114-6526</p>
              <p>Smart : 0928-233-7806</p>
            </div>
          </div>
        </div>
      </div>
      <!-- <div
        style="
          background-color: #d9d9d9;
          display: flex;
          align-items: center;
          justify-content: center;
        "
      >
        All Rights Reserved
      </div> -->
    </footer>

    <script>
        const prevBtns = document.querySelectorAll(".prevBtn");
const nextBtns = document.querySelectorAll(".nxtBtn");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
const form = document.getElementById("surveyForm");
const greetingModal = document.querySelector(".greetingModal");
const dateTime = document.querySelectorAll(".currentDateTime");

let formStepsNum = 0;

function updateDateTime() {
  const now = new Date();

  const formattedDate = now.toLocaleDateString("en-US", {
    year: "numeric",
    month: "long",
    day: "numeric",
  });

  const formattedTime = now.toLocaleTimeString("en-US", {
    hour: "numeric",
    minute: "2-digit",
    second: "2-digit",
    hour12: true,
  });

  dateTime.forEach((el) => {
    el.textContent = `${formattedDate} — ${formattedTime}`;
  });
}

function goBack() {
  window.history.back();
}

/* ---------- VALIDATION ---------- */
function validateCurrentStep() {
  const step = formSteps[formStepsNum];
  let valid = true;

  // clear old error highlights
  step.querySelectorAll(".error").forEach((el) => el.classList.remove("error"));

  // 1) inputs/selects/textareas with required (except radios)
  step
    .querySelectorAll(
      'input[required]:not([type="radio"]):not([type="checkbox"]), select[required], textarea[required]'
    )
    .forEach((field) => {
      const v = (field.value || "").trim();
      if (!v) {
        field.classList.add("error");
        valid = false;
      }
    });

  // 2) each radio QUESTION must have one checked
  // (we check per question container so duplicate "name" values won't break it)
  step.querySelectorAll('input[type="radio"][required]').forEach((reqRadio) => {
    const container =
      reqRadio.closest(".sqd-radio-group, .form-group, .radio-group") || step;
    const groupName = reqRadio.name;
    const checked = container.querySelector(
      `input[type="radio"][name="${groupName}"]:checked`
    );
    if (!checked) {
      container.classList.add("error");
      valid = false;
    }
  });

  if (!valid) {
    const firstErr = step.querySelector(".error");
    if (firstErr)
      firstErr.scrollIntoView({ behavior: "smooth", block: "center" });
    alert("Please complete the required fields before proceeding.");
  }

  return valid;
}

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    // block if current step is not valid
    if (!validateCurrentStep()) return;

    if (formStepsNum < formSteps.length - 1) {
      formStepsNum++;
      updateFormSteps();
      updateProgressBar();
    }
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (formStepsNum > 0) {
      formStepsNum--;
      updateFormSteps();
      updateProgressBar();
    }
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.remove("form-step-active");
  });
  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressBar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");
  progress.style.height =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 50 + "%";
}

(function addErrorStyle() {
  const style = document.createElement("style");
  style.textContent = `
    .error, .error input, .error select, .error textarea {
      outline: 1px solid #d92d20 !important;
      border-radius: 5px;
      border-color: 1px #d92d20 !important;
    }
  `;
  document.head.appendChild(style);
})();

form.addEventListener("submit", function (e) {
  e.preventDefault();

  form.style.display = "none";
  greetingModal.style.display = "flex";
});

updateDateTime();
setInterval(updateDateTime, 1000);

    </script>
  </body>
</html>
