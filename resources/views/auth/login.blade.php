@extends('layouts.app')
@php
try {
    $userData = request()->query('user');
    $user = json_decode(urldecode($userData), true);
    $u = App\Models\User::where('email', $user['email'])->first();
} catch (\Throwable $th) {
    echo 'hello';
    // $externalSiteLink = 'https://auth.greenwebbtech.com/login?source=website&destination=call-center';
    // header('Location: ' . $externalSiteLink);
    // exit;
}
@endphp
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                    <form  id="autoLoginForm"  method="POST" action="{{ route('login') }}">
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
                                <button type="submit" class="btn btn-primary">
                                    Continue as &nbsp;<span id="my_name_is"></span>
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="https://auth.greenwebbtech.com/login">
                                    {{ __('Forgot Your Password?') }}
                                </a>
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
{{-- 
            <!-- Modal body -->
            @if(!empty($user))
            <div class=" text-center"> <!-- Center align the body contents -->
                <form method="POST" action="{{ route('login') }}" style="padding: 5%;">
                    @csrf
                    <div style="display: block">
                        <input type="text" value="{{ $user['email'] }}"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                        <input type="text" value="{{ $user['global_secret_word'] }}"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                        <input type="hidden" class="form-check-input" type="checkbox" name="remember" id="remember" checked>
                        <input type="hidden" class="form-check-input" type="checkbox" name="terms" id="remember" checked>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <img style="width: 50%;" src="{{ asset('public/img/1.jpg') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Continue as&nbsp;<span id="auth_username"></span>
                    </button>
                </form>
            </div>
            @endif --}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
// var isAuthenticated = true;
var isAuthenticated = @json(auth()->check());
var current_user = @json(auth()->user());
@verbatim
    var loginRoute = "{{ route('login') }}"; // Define the login route URL using double quotes    
@endverbatim
</script>
<script src="{{ asset('public/scripts/autologin.js') }}"></script>