<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>


    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 500px;">
            <div class="text-center card-header">
                <img src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}" alt="CCMC Logo" class="img-fluid"
                    style="max-width: 100%; height: auto; max-height: 150px;">
            </div>
            <div class="card-body">
                <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>
                <form id="loginForm" class="mb-3"> <!-- Corrected ID here -->
                    @csrf <!-- CSRF token for security -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <div id="email_error" class="text-danger"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <div id="password_error" class="text-danger"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>

                <a href="#">ForgetPassword</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#loginForm').on('submit', function(e) {
                e.preventDefault();

                $('#email_error').text('');
                $('#password_error').text('');
                $('#errorMessage').hide();

                $.ajax({
                    url: "{{ route('submitLogin') }}", // Update this to your login route
                    method: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.redirect) {
                            window.location.href = response.redirect;
                        }
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            const errors = xhr.responseJSON.errors;
                            if (errors.email) {
                                $('#email_error').text(errors.email[0]);
                            }
                            if (errors.password) {
                                $('#password_error').text(errors.password[0]);
                            }
                        } else if (xhr.status === 401) {
                            $('#errorMessage').text('Invalid credentials.').show();
                        } else {
                            $('#errorMessage').text(
                                'An unexpected error occurred. Please try again.').show();
                        }
                    }
                });
            });

        });
    </script>

</body>

</html>
