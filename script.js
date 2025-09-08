function generateControlNumber() {
    // Generate a unique control number based on timestamp and user input
    var timestamp = Date.now(); // Get current timestamp
    var userInput = document.getElementById('userInput').value; // Get user input
    var controlNumber = timestamp + '-' + userInput; // Concatenate timestamp and user input
    return controlNumber;
}

document.getElementById('generateBtn').addEventListener('click', function() {
    // Generate and display the control number when the button is clicked
    var controlNumber = generateControlNumber();
    document.getElementById('controlNumber').innerText = 'Control Number: ' + controlNumber;
});