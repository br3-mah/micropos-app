<div class="modal fade" style="z-index: 9999; margin-top: 8%;" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal body -->
            <div class="modal-body text-center"> <!-- Center align the body contents -->
                <form id="autoLoginForm" method="POST" action="{{ route('login') }}" style="padding: 5%;">
                    @csrf
                    <div style="display: block">
                        <input type="email" id="theemail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>
                        <input type="password" id="thepassword" type="password" class="form-control @error('password') is-invalid @enderror" name="global_secret_word" required>
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
        </div>
    </div>
</div>


