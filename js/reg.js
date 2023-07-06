// Example JavaScript code for form validation or additional functionality

// Function to validate the form before submission
function validateForm(event) {
  // Add your form validation logic here
  // You can use JavaScript to check if the form inputs meet certain criteria

  // For example, to check if the password and confirm password fields match:
  var password = document.getElementById("password").value;
  var confirm_password = document.getElementById("confirm_password").value;

  if (password !== confirm_password) {
    alert("Passwords do not match");
    event.preventDefault(); // Prevent form submission
    return false;
  }

  // Other form validation logic...

  return true; // Allow form submission
}

// Event listener to trigger form validation on submit
var form = document.getElementById("registrationForm");
form.addEventListener("submit", validateForm);
