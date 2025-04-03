// Home page contact us form validation
document.querySelector('.home-contactus-form').addEventListener('submit', function(event) {
    // Get the input values
    var name = document.getElementById('FormControlInput1').value;
    var email = document.getElementById('FormControlInput2').value;
    var message = document.getElementById('FormControlTextarea1').value;
    
    // Regular expression for email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    // Validate name
    if (name.trim() === '') {
        alert('Name is required');
        event.preventDefault();
        return false;
    }
    
    // Validate email
    if (!emailRegex.test(email)) {
        alert('Invalid email address');
        event.preventDefault();
        return false;
    }
    
    // Validate message length
    if (message.trim() === '') {
        alert('Message is required');
        event.preventDefault();
        return false;
    } else if (message.length > 250) {
        alert('Message must be less than or equal to 250 characters');
        event.preventDefault();
        return false;
    }
    
    // If all validations pass, the form will be submitted
});
