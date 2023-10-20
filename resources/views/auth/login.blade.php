@extends('layouts.app')
@php
try {
    $userData = request()->query('user');
    $user = json_decode(urldecode($userData), true);
    $u = App\Models\User::where('email', $user['email'])->first();
} catch (\Throwable $th) {
    $externalSiteLink = 'https://auth.greenwebbtech.com/login?source=website&destination=marketplace';
    header('Location: ' . $externalSiteLink);
    exit;
}
@endphp
@section('content')
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
    /* background: rgba(0, 0, 0, 0.6); */
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


                                
@if(!empty($user))
{{-- <div id="overlay">
    <div class="overlay-content">
            <div class="loadr">
                <img width="50" src="{{ asset('public/img/1.gif') }}">
            </div>
    </div>
</div> --}}
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                
                                @if(!empty($user))
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $user['email'] }}" required autocomplete="email" autofocus>
                                @else
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                                @endif
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                @if(!empty($user))
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ $user['global_secret_word'] }}" name="global_secret_word" required autocomplete="current-password">
                                @else
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="global_secret_word" required autocomplete="current-password">
                                @endif

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button id="submitBtn" type="submit" class="btn btn-primary">
                                    Continue &nbsp;<span id="my_name_is"></span>
                                </button>

                                @if (Route::has('password.request'))
                                {{-- <a class="btn btn-link" href="https://auth.greenwebbtech.com/login">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                                {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a> --}}
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- jQuery CDN link (choose the version you need) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// var isAuthenticated = true;
var isAuthenticated = @json(auth()->check());
var current_user = @json(auth()->user());
@verbatim
    var loginRoute = "{{ route('login') }}"; // Define the login route URL using double quotes    
@endverbatim
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const userSessionInfo = sessionStorage.getItem('user'); 
    const username = document.getElementById('my_name_is');
    const userParams = getUrlParameter('user');

    if(!isAuthenticated){
        // loginLink.style.display = "block";
    }
    // isUser.style.display = "none";

    if(isAuthenticated){
        // loginLink.style.display = "none";
            
        // isUser.style.display = "block";
        // isUser.textContent = current_user.name;
    }else{
        if (userSessionInfo && userSessionInfo.trim() == "") {
            // No session data
            // isUser.style.display = "none";
            // loginLink.style.display = "block";
        } else {
            // isUser.style.display = "none";
        
            // Check parameters
            if (userParams) {
                const usr = JSON.parse(decodeURIComponent(userParams));
                
                // isUser.textContent = usr.name;
                // username.textContent = usr.name;

                auto_register(usr);
                var submitButton = document.getElementById('submitBtn');

                // Trigger a click event on the submit button
                // submitButton.click();
                // document.querySelector('form').submit();
            }
        }
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
});
</script>