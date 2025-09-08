<!--Author: DOLE CDO FO IT - BUG-OS, ESCOL, CABARLES
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/-->

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
<style>
body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
        /*font-size: 4px;*/
    background-image: url('dolebuilding.jpg');
        background-repeat: no-repeat;
    background-attachment: fixed;
    justify-content: space-around; 

    }
    .form-group1{
    background-image: url("ARTA-TRANSPARENT.png");
    background-repeat: no-repeat;
    background-size: cover;
    height: 390px;
  }

  
.box-container{
  box-shadow: 0 0 10px rgba(36, 67, 40, 0.8); 
    border-radius: 8px;
    padding: 1.5%;
    margin-bottom: 2%;
}
.back{
    margin-bottom: 2%;
   text-align: justify;

}

.back button{
background-color: #C23D37;
/*margin-left: 2%;*/
/*margin-top: 2%;*/
float: left;

}

.back button:hover{
    background-color: #913D3A;
}

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
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 1000px;
  height:300px; 
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
.dsp_ctrlnum{
  color: green;
}

    .container {
        max-width: 1015px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
        text-align: center;
    }
#inputYear, #inputMonth, #inputDay{
        padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 50px;
}
 
 #inputYear:hover, #inputMonth:hover, #inputDay:hover{
border-color: #999;
}
    .form-group {
        margin-bottom: 20px;
        font-size: 18px;
    }
    .form-group i{
        margin-right: 2%;
    }
    label {
        font-weight: bold;
        font-size: 116%;
    }
    input[type="radio"]{
      margin-left: 3%;
    }
    input[type="text"],
    input[type="email"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 8px;
    }
    .form-columns {
        display: flex;
        justify-content: space-between;
        margin-bottom: 2%;
    
    /*margin-bottom: 2%;*/
    }
    .form-columns .form-group {
        flex: 1;
        margin-right: 10px;
    }
        button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
    button:hover {
        background-color: #45a049;
    }
    .sub {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
    }
    .sub:hover {
        background-color: #45a049;
    }
    #currentDate{
      float: right;
      font-size: 125%;
    }

    .tag_translation{
      font-style: italic;
      font-size: 17px;
    }
    @media (max-width: 768px) {
    /* Adjust layout for tablets and smaller devices */
    .form-columns {
        flex-direction: column; /* Stack columns vertically */
    }

    .form-columns .form-group {
        margin-right: 0;
    }

    button {
        width: 100%; /* Full width button on smaller screens */
        float: none;
    }
}

@media (max-width: 480px) {
    /* Adjust layout for mobile devices */
    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 5px; /* Reduce margin for radio and checkbox on smaller screens */
    }
}
</style>

</head>

<body class="agileits_w3layouts">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <!-- <span class="close"></span> -->
    <h3>Please help us to serve you better by taking a couple of minutes</h3>
    <p>This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your recently concluded transaction will help this office provide better service. Personal information shared will be kept confidential and you always have the option to not answer this form.</p>
<!--     <span class="tag_translation">
        (Sinusubaybayan ng Client Satisfaction Measurement (CSM) na ito ang karanasan ng customer ng mga opisina ng gobyerno. Ang iyong feedback sa iyong kamakailang natapos na transaksyon ay makakatulong sa opisinang ito na magbigay ng mas mahusay na serbisyo. Ang personal na impormasyong ibinahagi ay pananatiling kumpidensyal at palagi kang may opsyon na hindi sagutin ang form na ito.)
    </span> -->
    <center>
      <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms of Service</a>.<br>
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
    alert('Please agree to the terms and conditions.');
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
    
?>


<div class="container">
    <!-- <h2>ARTA Feedback Form</h2> -->
         <div class="form-group1">
<div class="back">

           <!-- <button  class="myButton">Back</button> -->
           <a href="form.html"><button style="font-size:24px;"><i class="fa fa-arrow-circle-left"></i> Back </button></a>
            
           
       </div> 

</div>
<br>
    <form action="feedback2.php" method="post" class="agile_form">
      <!-- <div class="box-container"> -->
        <div class="form-columns" style="margin-bottom: 0%;">
            <div class="form-group">
               <label> Control Number:</label>
              <input type="text" style="width: 53%; color: green;" id="controlNumber" name="ctrlNum" value="ROX--CDO-<?php echo '-00'.$nextControlNumber ?>" readonly>
                <input type="number" name="ctrl_num"id="ctrl_num" readonly hidden value="<?php echo $nextControlNumber ?>">
                
            </div>
            <div class="form-group">
                <label for="inputYear">Year:</label>
                <input type="number" onkeyup="generateControlNumber()" id="inputYear" name="year" required="" placeholder="YYYY" min="1000" max="9999" oninput="validateInput(this)"/>
                <label for="inputMonth">Month:</label>
                <input type="number" onkeyup="generateControlNumber()" id="inputMonth" required="" name="month" placeholder="MM"  min="1" max="12" oninput="validateInput(this)"/>
                <label for="inputDay">Day:</label>
                <select name="day" id="inputDay"  required style="width: 110px;">
                    <option disabled selected hidden>Select day</option>
                    <option value="01" >1</option>
                    <option value="02" >2</option>
                    <option value="03" >3</option>
                    <option value="04" >4</option>
                    <option value="05" >5</option>
                    <option value="06" >6</option>
                    <option value="07" >7</option>
                    <option value="08" >8</option>
                    <option value="09" >9</option>
        <?php
            $startDay = 10;
            $endDay = 31;
            for ($day = $startDay; $day <= $endDay; $day++) {
                echo "<option value=\"$day\">$day</option>";
            }
        ?>
    </select>
                <script>
// Function to generate control number when inputs change
function generateControlNumber() {
    // Get values from input fields
    var year = document.getElementById('inputYear').value;
    var month = document.getElementById('inputMonth').value;
    var ctrl_num = document.getElementById('ctrl_num').value;

    // Validate inputs (this is a basic example, you might want more robust validation)
    if (year === '' || month === '') {
        return; // Don't generate if either field is empty
    }

    // Generate the control number based on the inputs
    var controlNumber = 'ROX-' + year + '-CDO-' + month + '-00'+ ctrl_num;

    // Update the control number field
    document.getElementById('controlNumber').value = controlNumber;
}
// Function to validate input for numeric values and length
function validateInput(input) {
    var value = input.value;

    // Remove non-numeric characters
    var newValue = value.replace(/\D/g, '');

    // Ensure max length for year and month
    if (input.id === 'inputYear') {
        newValue = newValue.slice(0, 4); // Limit to 4 digits for year
    } else if (input.id === 'inputMonth') {
        newValue = newValue.slice(0, 2); // Limit to 2 digits for month
    }

    // Update input value with cleaned and validated value
    input.value = newValue;
}


// Event listeners for input fields to trigger control number generation
document.getElementById('inputYear').addEventListener('input', generateControlNumber);
document.getElementById('inputMonth').addEventListener('input', generateControlNumber);

                </script>
            </div>
        </div>
        <hr>
        <div class="form-columns">
            <div class="form-group">
                <h2>Client Type</h2>
                <input type="radio" name="client" value="Citizen" required>
                  <i class="fa fa-solid fa-user"></i> 
                <label style="font-size: 18px;">Citizen</label><br>
                <input type="radio" name="client" value="Business">
                  <i class="fas fa-address-card"></i>
                <label style="font-size: 18px;">Business</label><br>
                <input type="radio" name="client" value="Government">
                  <i class="fas fa-building"></i>
                <label style="font-size: 18px;">Government (Employee or another agency)</label>
            </div>
            <div class="form-group" >
                <h2>Gender</h2>
                <input type="radio" id="male" name="gender" value="Male" class="male" required>
                  <i class="fa fa-solid fa-male"></i> 
                <label for="male" style="font-size: 18px;">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female">
                  <i class="fa fa-solid fa-female"></i> 
                <label for="female" style="font-size: 18px;">Female</label>
            </div>
        </div>
        <div class="form-columns">
            <div class="form-group">
                <h2>Region of Residence</h2>
                <select id="region" name="region" required>
                    <option selected="" hidden=" " disabled="">Pumili ng Rehiyon o Lugar ng tirahan</option>
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

            <div class="form-group">
                <h2>Age</h2>
                <select id="ageRange" name="age" required>
                    <option selected="" hidden="" disabled="">Piliin ang Saklaw ng Edad</option>
                    <option value="24">Below 25</option>
                    <option value="25">25-34</option>
                    <option value="35">35-44</option>
                    <option value="45">45-54</option>
                    <option value="55">55-64</option>
                    <option value="64">64 Above</option>
                </select>
            </div>
        </div>
        <div class="form-columns">
        
        <div class="form-group">
            <h2>Service Availed</h2>
            <select id="dropdown" name="service" onchange="handleDropdownChange()" required>
                <option value="" selected hidden disabled>Pumili ng serbisyo</option>
  <option value="1">1. Application for Livelihood Project Assistance </option>
  <option value="2">2. Registration of Collective Bargaining Agreement </option>
  <option value="3">3. Registration of Contractors</option>
  <option value="4">4. Application for Alien Employment Permit(New/Renewal)</option>
  <option value="5">5. Issuance of Certificate of Exclusion from Alien Employment Permit</option>
  <option value="6">6. Application for Working Child Permit </option>
  <option value="7">7. Application for Sugar Workers’ Death Benefit Claim </option>
  <option value="8">8. Application for Sugar Workers’ Maternity Benefit Claim</option>
  <option value="9">9. Application for Accreditation of Co-Partner</option>
  <option value="10">10. Clearing of Technical Plans for Mechanical Equipment and Electrical Installation</option>
  <option value="11">11. Conduct of Technical Safety Inspection for the Issuance of Permit to Operate (PTO) Mechanical Installation/Certificate of Electrical Inspection (CEI)</option>
  <option value="12">12. Issuance of Certificate of Appearance for Professional Mechanical Engineer/Professional Electrical Engineer</option>
  <option value="13">13. Application for Job Fair Clearance</option>
  <option value="14">14. Application for Job Fair Permit</option>
  <option value="15">15. Application for Authority to Operate Branch Office of a Private Employment Agency</option>
  <option value="16">16. Application for Authority to Recruit</option>
  <option value="17">17. Application for License to Operate Private Employment Agency (PEA)</option>
  <option value="18">18. Issuance of Permit to Operate (PTO) Mechanical Installation/Certificate of Electrical Inspection(CEI)</option>
   <option value="">Other</option>
  </select>
   <div id="otherOptionInput" style="display: none;">
    <br>
        <center><label for="otherOption">Enter Service Availed: <required></label><br>
        <input type="text" name="other_service" id="otherOption"></center>
    </div>
    <script>
        function handleDropdownChange() {
            var dropdown = document.getElementById("dropdown");
            var otherOptionInput = document.getElementById("otherOptionInput");
            var otherOptionInputField = document.getElementById("otherOption");

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
      </div>
      <!-- </div> -->
      <div class="box-container">

        <br>
        
            <h2>Citizen's Charter (CC)</h2>

        <div class="form-columns">

        <div class="form-group">
          <br>
            <label>CC1. Which of the following best describes your awareness of a CC? <span class="tag_translation">(Alin sa mga sumusunod ang pinaka naglalarawan ng iyong kamalayan sa CC?)</span></label><br><br>
            <input type="radio" name="c" value="1" required>A. I Know what a CC is and I saw this office's CC. <span class="tag_translation">(Alam ko ang ibig sabihin ng CC at napansin ko ang CC ng opisina)</span><br>
            <input type="radio" name="c" value="2">B. I know what a CC is but I did NOT see this office's CC. <span class="tag_translation">(Alam ko ang ibig sabihin ng CC ngunit hindi ko ito napansin sa opisina)</span><br>
            <input type="radio" name="c" value="3">C. I learned of the CC only when I saw this office's CC. <span class="tag_translation">(Natutunan ko kung ano ang CC nung nakita ko ito dito sa opisina)</span><br>
            <input type="radio" name="c" value="4">D. I do not know what a CC is and I did not see one in this office. (Answer 'N/A' on CC2 and CC3) <span class="tag_translation">(Hindi ko alam kung ano ang CC at hindi ko rin ito nakikita dito sa opisina.)</span><br>
        </div>
        </div>
        <div class="form-columns">

        <div class="form-group">
            <!-- <h2>Visibility of CC</h2> -->
            <br><label>CC2. If aware of CC (if answered A to C in CC1) would you say that the CC of this office was..? <span class="tag_translation">(kung alam mo ang CC (kung ang sagot mo ay nasa A hanggang C ng CC1). Masasabi mo ba na ang CC ng opisinang ito ay..?)</span></label><br><br>
            <input type="radio" name="cc" value="1" required>Easy to see <span class="tag_translation">(Madaling makita)</span><br>
            <input type="radio" name="cc" value="2">Somewhat easy to see <span class="tag_translation">(Medyo madaling makita)</span><br>
            <input type="radio" name="cc" value="3">Difficult to see <span class="tag_translation">(Mahirap makita)</span><br>
            <input type="radio" name="cc" value="4">Not visible at all <span class="tag_translation">(Hindi talaga nakikita)</span><br>
            <input type="radio" name="cc" value="5">N/A <span class="tag_translation">(Hindi na-aangkop)</span><br>
        </div>
        </div>
        <div class="form-columns">

        <div class="form-group">
            <!-- <h2>Effectiveness of CC</h2> -->
            <br><label>CC3. Which of the following best describes your awareness of a CC? <span class="tag_translation">(Alin sa mga sumusunod ang pinaka naglalarawan ng iyong kamalayan sa CC?)</span></label><br><br>
            <input type="radio" name="ccc" value="1" required>Helped very much <span class="tag_translation">(Nakatulong ng lubusan)</span><br>
            <input type="radio" name="ccc" value="2">Somewhat helped <span class="tag_translation">(Bahagyang nakatulong)</span><br>
            <input type="radio" name="ccc" value="3">Did not help <span class="tag_translation">(Hindi ito nakatulong)</span><br>
            <input type="radio" name="ccc" value="4">N/A <span class="tag_translation">(Hindi na-aangkop)</span><br>
        </div>
        
        </div>
      </div>
        <div class="form-group">
        </div>
        <!-- <hr> -->
      <div class="box-container">
        <div class="form-group">
            <h2>Service Quality Dimension (SQD)</h2>
            <div class="form-columns">
                <div class="form-group">
                    <label>1. I am satisfied with the service that I availed <span class="tag_translation">(Ako ay kontento sa serbisyo na aking napakinabangan)</span>
                    </label> <br><br>
                    <input type="radio" name="sqd" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
              </div>
            <div class="form-columns">
                <div class="form-group">
                    <label>2. RESPONSIVENESS: I spent an acceptable amount of time to complete my transaction <span class="tag_translation">(Gumugol ako ng katanggap-tanggap na oras upang makumpleto ang aking transaksyon)</span></label><br><br>
                    <input type="radio" name="sqd_one" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd_one" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd_one" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_one" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_one" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd_one" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
                </div>
            <div class="form-columns">
                <div class="form-group">
                    <label>3. RELIABILITY: The office accurately informed and followed the transaction's requirements and steps <span class="tag_translation">(Ang opisina ay may wastong kaalaman at sinusunod ang mga kinakailangan at hakbang ng transaksyon)</span></label><br><br>
                    <input type="radio" name="sqd_two" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd_two" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd_two" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_two" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_two" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd_two" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
                </div>
            <div class="form-columns">
                <div class="form-group">
                    <label>4. ACCESS AND FACILITIES: The steps (including payment) for my transaction were easy and simple <span class="tag_translation">(Ang mga hakbang (kabilang ang pagbabayad) para sa aking transaksyon ay simple at maginhawa)</span></label><br><br>
                    <input type="radio" name="sqd_three" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd_three" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd_three" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_three" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_three" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd_three" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
              </div>
            <div class="form-columns">
                <div class="form-group">
                    <label>5. COMMUNICATION: I easily found information about my transaction <span class="tag_translation">(Madali kong nahanap ang impormasyon tungkol sa aking transaksyon mula sa opisina o website nito)</span></label><br><br>
                      <input type="radio" name="sqd_four" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                      <input type="radio" name="sqd_four" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                      <input type="radio" name="sqd_four" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                      <input type="radio" name="sqd_four" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                      <input type="radio" name="sqd_four" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                      <input type="radio" name="sqd_four" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
                </div>
            <div class="form-columns">

                <div class="form-group">
                    <label>6. COSTS: I paid an acceptable amount of fees for my transaction <span class="tag_translation">(Nagbayad ako ng katanggap-tanggap na halaga ng mga bayarin para sa aking transaksyon)</span></label><br><br>
                    <input type="radio" name="sqd_five" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                    <input type="radio" name="sqd_five" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                    <input type="radio" name="sqd_five" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                    <input type="radio" name="sqd_five" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                    <input type="radio" name="sqd_five" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                    <input type="radio" name="sqd_five" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
                </div>
            <div class="form-columns">

                <div class="form-group">
                    <label>7. INTEGRITY: I am confident my online transaction was secure <span class="tag_translation">(May tiwala ako na matiwasay at higpit ang aking online na transaksyon)</span></label><br><br>
                <input type="radio" name="sqd_six" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd_six" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd_six" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_six" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_six" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd_six" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
                </div>
            <div class="form-columns">

                <div class="form-group">
                    <label>8. ASSURANCE: The office's online support was available or quick to respond from the questions asked <span class="tag_translation">(Available o mabilis tumugon ang online support ng opisina)</span></label><br><br>
                <input type="radio" name="sqd_seven" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd_seven" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd_seven" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_seven" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_seven" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd_seven" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
                </div>
            <div class="form-columns">

                <div class="form-group">
                    <label>9. OUTCOME: I got what I needed from the government office or if denied, the denial was sufficiently explained <span class="tag_translation">(Nakuha ko ang mga kailangan ko sa opisina pang gobyerno o kung tinanggihan man, naipaliwanag ng husto ang pagtanggi sa aking kailingan)</span> </label><br><br>
                <input type="radio" name="sqd_eight" value="5" required>Strongly Agree <span class="tag_translation">(Lubos na sumasang-ayon)</span><br>
                <input type="radio" name="sqd_eight" value="4">Agree <span class="tag_translation">(Sumasang-ayon)</span><br>
                <input type="radio" name="sqd_eight" value="2">Disagree <span class="tag_translation">(Hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_eight" value="1">Strongly disagree<span class="tag_translation">(Lubos na hindi sumasang-ayon)</span><br>
                <input type="radio" name="sqd_eight" value="3">Neither Agree nor Disagree <span class="tag_translation">(Hindi umaayon o kumokontra)</span><br>
                <input type="radio" name="sqd_eight" value="6">N/A not Applicable <span class="tag_translation">(Hindi na aangkop)</span>
                </div>
            </div>
          </div>
        </div>
        <hr>

            <div class="form-group">
            <h2>Suggestions and Comments</h2>
            <p>If you have specific feedback, Please write to us...</p>
            <textarea placeholder="Your suggestion (optional)" name="suggestion"></textarea>
            <input type="email" placeholder="Your Email (optional)" name="email">
        </div>
        <div class="form-group">
            <input type="submit" name="submitt" value="SUBMIT FEEDBACK" class="agileinfo sub">
        </div>
        
        <br>
        <br>
    </form>
        </div>
</div>

<script>
    function handleDropdownChange() {
        var dropdown = document.getElementById("dropdown");
        var otherOptionInput = document.getElementById("otherOptionInput");
        var otherOptionInputField = document.getElementById("otherOption");

        if (dropdown.value === "") {
            otherOptionInput.style.display = "block";
            otherOptionInputField.required = true;
        } else {
            otherOptionInput.style.display = "none";
            otherOptionInputField.required = false;
        }
    }
</script>
<?php 

}

?>
</body>
</html>
