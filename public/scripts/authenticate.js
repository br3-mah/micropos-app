
// Get a reference to the link and the user session information 
//(change 'userSessionInfo' to your actual session variable).
// Check if userParams exists in url parameters

const loginLink = document.getElementById("showLoginLink");
const userSessionInfo = sessionStorage.getItem('user'); 
const username = document.getElementById('auth_username');
const isUser = document.getElementById('isUser');
const theemail = document.getElementById('theemail');
const thepassword = document.getElementById('thepassword');
const userParams = getUrlParameter('user');

isUser.style.display = "none";

if(isAuthenticated){
    loginLink.style.display = "none";
        
    isUser.style.display = "block";
    isUser.textContent = current_user.name;
}else{
    if (userSessionInfo && userSessionInfo.trim() == "") {
        // No session data
        isUser.style.display = "none";
        loginLink.style.display = "block";
    } else {
        loginLink.style.display = "none";
        isUser.style.display = "none";
    
        // Check parameters
        if (userParams) {
            const usr = JSON.parse(decodeURIComponent(userParams));
            
            isUser.textContent = usr.name;
            username.textContent = usr.name;

            auto_register(usr);

            // theemail.value = usr.email;
            // thepassword.value = usr.global_secret_word;
            // const form = document.getElementById('autoLoginForm');
            $('#loginModal').modal('show');
            // form.submit();
        }
    }
}




// if (userParams) {
//     const user = JSON.parse(decodeURIComponent(userParams));
//     // console.log('check password '+user);
//     document.getElementById('theemail').value = user.email;
//     document.getElementById('thepassword').value = user.global_secret_word;
//     $('#loginModal').modal('show');
//     const csrf = '{{ csrf_token() }}';
//     sessionStorage.setItem('token', csrf);
//     sessionStorage.setItem('authuser', JSON.stringify(user));
//     auto_register(user);
   
// }


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