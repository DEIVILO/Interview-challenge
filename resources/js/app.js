// Wait for the DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function () {
    // Get reference to the registration form
    const registrationForm = document.querySelector('#customer-registration-form');

    // Add submit event listener to the form
    registrationForm.addEventListener('submit', function (event) {
        // Prevent the default form submission behavior
        event.preventDefault();

        // Get form input values
        const firstname = document.querySelector('#firstname').value.trim();
        const lastname = document.querySelector('#lastname').value.trim();
        const email = document.querySelector('#email').value.trim();
        const password = document.querySelector('#password').value;
        const confirmPassword = document.querySelector('#password_confirmation').value;

        // Perform validation
        let isValid = true;

        // Validate firstname, lastname, email fields
        if (firstname === '' || lastname === '' || email === '') {
            alert('Please fill in all required fields.');
            isValid = false;
        }

        // Validate email format
        if (!isValidEmail(email)) {
            alert('Please enter a valid email address.');
            isValid = false;
        }

        // Validate password length
        if (password.length < 8) {
            alert('Password must be at least 8 characters long.');
            isValid = false;
        }

        // Validate password confirmation
        if (password !== confirmPassword) {
            alert('Password and Confirm Password must match.');
            isValid = false;
        }

        // If all validations passed, submit the form
        if (isValid) {
            registrationForm.submit();
        }
    });

    // Add input event listeners to form fields for real-time updates
    const formFields = document.querySelectorAll('.form-input');
    formFields.forEach(function(field) {
        field.addEventListener('input', function() {
            const id = field.getAttribute('id'); // Get the field's ID
            console.log('ID: ', id); // Log the ID to the console (you can replace this with any other action you want)
        });
    });
});

// Function to validate email format
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}
