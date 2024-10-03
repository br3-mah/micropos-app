<div>
    <script>
        // Define a JavaScript variable to indicate if the user is authenticated
        // var isAuthenticated = true;
        var isAuthenticated = @json(auth()->check());
        var current_user = @json(auth()->user());
        @verbatim
            var loginRoute = "{{ route('login') }}"; // Define the login route URL using double quotes    
        @endverbatim
        </script>
        
    <script src="public/scripts/authenticate.js"></script>
    <script src="public/scripts/routes.js"></script>
    
    <script src="public/scripts/realtime-cart.js') }}"></script>
    <script src="public/scripts/main.js') }}"></script>

</div>