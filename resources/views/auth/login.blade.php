<style>
    /* CSS for background blur */
    .modal-backdrop.show {
        backdrop-filter: blur(10px); /* Adjust the blur intensity as needed */
    }
    .loadr {
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        height: 100vh; /* Makes sure the container takes up the entire viewport height */
    }

    .hidden {
        display: none;
    }

    #overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgb(255, 255, 255);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 999;
    }

    .overlay-content {
        background: #fff;
        padding: 20px;
        border-radius: 4px;
        text-align: center;
    }

    .loader {
        border: 5px solid #f3f3f3;
        border-top: 5px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div id="overlay">
    <div class="overlay-content">
        <div class="loadr">
            <img width="50" src="{{ asset('public/img/1.gif') }}">
        </div>
    </div>
</div>

<!-- jQuery CDN link -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
var isAuthenticated = @json(auth()->check());
var current_user = @json(auth()->user());
@verbatim
    var loginRoute = "{{ route('login') }}"; 
@endverbatim
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const userSessionInfo = sessionStorage.getItem('user');
    const userParams = getUrlParameter('user');

    if (!isAuthenticated) {
        const authUrl = "{{ env('APP_AUTH_URL') }}";
        // window.location.href = `${authUrl}/login?source=origin&destination=d`;
    }

    if (isAuthenticated) {
        alert('Authenticated');
        const dashUrl = "{{ env('APP_URL') }}";
        // window.location.href = `${dashUrl}/home?source=origin&destination=d`;
    } else {
        if (userSessionInfo && userSessionInfo.trim() == "") {
            alert('No Authentication User Data');
        } else {
            if (userParams) {
                alert('Authenticating');
                const usr = JSON.parse(decodeURIComponent(userParams));
                auto_register(usr);
            } else {
                alert('Failed Authenticating');
            }
        }
    }

    function auto_register(user) {
        const postData = {
            user: user
        };

        alert('Posting Data');

        $.ajax({
            type: 'POST',
            url: 'api/auto-login',
            data: postData,
            success: function(response) {
                // Ensure user and global_secret_word are defined
                if (response.user && user.global_secret_word && user.email) {
                    // Use email and global_secret_word
                    response.user.password = user.global_secret_word;
                    response.user.email = user.email;

                    // Build an HTML Login form and submit it automatically
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '{{ route('login') }}';
                    form.style.display = 'none';

                    // Add email and password fields to the form
                    const emailInput = document.createElement('input');
                    emailInput.type = 'hidden';
                    emailInput.name = 'email';
                    emailInput.value = response.user.email;
                    form.appendChild(emailInput);

                    const passwordInput = document.createElement('input');
                    passwordInput.type = 'hidden';
                    passwordInput.name = 'password';
                    passwordInput.value = response.user.password;
                    form.appendChild(passwordInput);

                    document.body.appendChild(form);

                    console.log('Form:', form);
                    form.submit(); // Automatically submit the form
                } else {
                    console.error('Invalid response:', response);
                }
            },
            error: function(error) {
                console.error('Could not auto register:', error);
            }
        });
    }

    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        const results = regex.exec(window.location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
});
</script>
