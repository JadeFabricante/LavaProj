<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="icon" type="image/png" href="<?=base_url();?>public/img/favicon.ico"/>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="<?=base_url();?>public/css/main.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
    <?php
    include APP_DIR.'views/templates/nav_auth.php';
    ?>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            <?php flash_alert(); ?>
                            <form id="regForm" method="POST" action="<?=site_url('auth/register');?>">
                            <?php csrf_field(); ?>
                                <div class="row mb-3">
                                    <label for="firstname" class="col-md-4 col-form-label text-md-end">First Name</label>
                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="firstname" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-end">Last Name</label>
                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control" name="lastname" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>
                                    <div class="col-md-6">
                                        <select id="gender" class="form-control" name="gender" required>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
    <script>
        $(function() {
            var regForm = $("#regForm")
            if(regForm.length) {
                regForm.validate({
                    rules: {
                        email: {
                            required: true,
                        },
                        password: {
                            required: true,
                            minlength: 8
                        },
                        password_confirmation: {
                            required: true,
                            minlength: 8
                        },
                        firstname: {
                            required: true,
                        },
                        lastname: {
                            required: true,
                        },
                        gender: {
                            required: true,
                        }
                    },
                    messages: {
                        email: {
                            required: "Please input your email address.",
                        },
                        password: {
                            required: "Please input your password",
                            minlength: jQuery.validator.format("Password must be at least {0} characters.")
                        },
                        password_confirmation: {
                            required: "Please confirm your password",
                            minlength: jQuery.validator.format("Password confirmation must be at least {0} characters.")
                        },
                        firstname: {
                            required: "Please input your first name.",
                        },
                        lastname: {
                            required: "Please input your last name.",
                        },
                        gender: {
                            required: "Please select your gender.",
                        }
                    },
                })
            }
        })
    </script>
</body>
</html>