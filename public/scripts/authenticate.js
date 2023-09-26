
// Get a reference to the link and the user session information (change 'userSessionInfo' to your actual session variable)
const loginLink = document.getElementById("showLoginLink");
const userSessionInfo = sessionStorage.getItem('authuser'); // or localStorage.getItem('userData') depending on your storage choice
console.log('Session User: '+userSessionInfo);
// Check if user session information is set or not empty
if (userSessionInfo && userSessionInfo.trim() == "") {
    // If it's set and not empty, show the button
    loginLink.style.display = "block";
} else {
    // If it's not set or empty, hide the button
    loginLink.style.display = "none";
    // const u = JSON.parse(decodeURIComponent(userSessionInfo));
    auto_register(userSessionInfo);
    // $('#loginModal').modal('show');
}


// Check if userData exists
const userData = getUrlParameter('user');
const user = JSON.parse(decodeURIComponent(userData));
if (userData) {
    // console.log('check password '+user);
    document.getElementById('theemail').value = user.email;
    document.getElementById('thepassword').value = user.global_secret_word;
    $('#loginModal').modal('show');
    const csrf = '{{ csrf_token() }}';
    sessionStorage.setItem('token', csrf);
    sessionStorage.setItem('authuser', JSON.stringify(user));
    auto_register(user);
   
}

function auto_register(user){
    // Create an object to send to the Laravel controller
    const postData = {
        user: user
    };

    console.log(postData);
    // Make an AJAX POST request to the Laravel controller
    $.ajax({
        type: 'POST',
        url: 'api/auto-login', // Replace with the actual URL of your Laravel controller
        data: postData,
        success: function (response) {
            console.log('Register successfully on marketplace:', response);
        },
        error: function (error) {
            console.error('Could not auto register:', error);
        }
    });
}
// Function to extract query parameters from URL
function getUrlParameter(name) {
    name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
    const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
    const results = regex.exec(window.location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
}