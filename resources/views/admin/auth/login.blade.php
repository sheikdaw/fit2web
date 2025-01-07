<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="image/x-icon">
    <title>e-Sevai. இனிய சேவை இணைய சேவை. உங்கள் அருகிலுள்ள இ-சேவை மையத்தை அணுகவும்</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="../css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('admin/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/responsive.css') }}">
</head>

<body class="bg-light">
    <div class="container p-5 d-flex flex-column align-items-center">

        <form id="loginForm" class="p-4 mt-5 form-control"
            style="height:auto; width:380px; box-shadow: rgba(60, 64, 67, 0.3)
            0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
            @csrf <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>
            <div class="row">
                <img src="{{ asset('assets/images/logo/itekHeaderLogo.png') }}">
                <h5 class="p-4 text-center" style="font-weight: 700;">Login Into Your Account</h5>
            </div>
            <div class="col-mb-3">
                <label for="username">Email</label>
                <input type="text" name="email" id="email" class="form-control">
                <div id="email_error" class="text-danger"></div>
            </div>
            <div class="mt-3 mb-3 col">
                <label for="password"> Password</label>
                <input type="password" name="password" id="password" class="form-control">
                <div id="password_error" class="text-danger"></div>
            </div>
            <div class="mt-3 mb-3 col">
                <button type="submit" class="btn btn-success bg-success" style="font-weight: 600;">Login</button>
            </div>

        </form>
    </div>

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
