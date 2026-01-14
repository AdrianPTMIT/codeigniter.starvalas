<title>Login Account</title>

<!-- Bootstrap 5 & Font Awesome -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        min-height: 100vh;
        background-image: url("images/patternglobe.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .login-container {
        display: flex;
        width: 100%;
        max-width: 800px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        overflow: hidden;
    }

    .login-form {
        flex: 1;
        padding: 2.5rem;
        background: rgba(24, 51, 106, 0.92);
    }

    .login-logo-container {
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
        background: white;
    }

    .login-logo {
        max-width: 100%;
        max-height: 200px;
        object-fit: contain;
    }

    .form-label {
        color: #fff;
        font-weight: 500;
        margin-bottom: 0.3rem;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.95);
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
    }

    .form-control:focus {
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }

    .btn-primary {
        background: #007bff;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        letter-spacing: 1px;
        padding: 0.75rem;
        width: 100%;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        background: #022c5b;
        transform: translateY(-2px);
    }

    .card-title {
        color: #fff;
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
        text-align: center;
    }

    .form-check {
        margin: 1.5rem 0;
        color: rgba(255, 255, 255, 0.8);
    }

    .terms-link {
        color: #7fb8ff;
        text-decoration: none;
        transition: color 0.2s;
    }

    .terms-link:hover {
        color: #007bff;
        text-decoration: underline;
    }

    .login-link {
        color: rgba(255, 255, 255, 0.7);
        text-align: center;
        margin-top: 1.5rem;
    }

    .fade-in {
        animation: fadeIn 1s;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .login-container {
            flex-direction: column;
        }

        .login-logo-container {
            width: 100%;
            padding: 1.5rem;
        }

        .login-form {
            width: 100%;
        }
    }
</style>

<div class="login-container fade-in">
    <div class="login-form" id="loginForm">
        <h3 class="card-title">SIGN IN</h3>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger text-center py-2 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post" action="login-user" id="loginFormAjax">
            <div class="form-group">
                <i class="fas fa-envelope fa-lg form-icon" style="color: #fff"></i>
                <label class="form-label" for="email">Your Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <i class="fas fa-lock fa-lg form-icon" style="color: #fff"></i>
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group text-center mb-4">
                <i class="fas fa-shield-alt fa-lg form-icon mb-2" style="color: #fff"></i>
                <label class="form-label" for="captcha_input">CAPTCHA</label>
                <div class="mb-2 d-flex align-items-center justify-content-center">
                    <img src="<?= $captcha_image_url ?>" id="captcha-image" alt="CAPTCHA Code"
                        style="border: 1px solid #ccc; background: #fff;">
                    <button type="button" id="refresh-captcha" class="btn btn-sm btn-outline-light">
                        <i class="fas fa-sync-alt"></i>
                    </button>
                </div>
                <input type="text" id="captcha_input" name="captcha_input" class="form-control"
                    placeholder="Enter the 4-digit code" required autocomplete="off" pattern="\d{4}"
                    title="Please enter exactly 4 digits" inputmode="numeric">
            </div>


            <button type="submit" class="btn btn-primary">LOGIN</button>

            <div class="login-link">
                Don't have an account? <a href="register-user" class="terms-link">Sign Up</a>
            </div>
        </form>
    </div>

    <div class="login-logo-container">
        <img src="images/logostar.png" alt="Logo" class="login-logo">
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // Refresh CAPTCHA image
        $('#refresh-captcha').on('click', function () {
            $('#captcha-image').attr('src', '<?= $captcha_image_url ?>?t=' + new Date().getTime());
            $('#captcha_input').val('');
        });

        $('#loginFormAjax').on('submit', function (e) {
            e.preventDefault();

            const email = $('#email').val();
            const password = $('#password').val();
            const captcha = $('#captcha_input').val();

            // Client-side validation
            if (!captcha) {
                Swal.fire({
                    icon: 'error',
                    title: 'Missing CAPTCHA',
                    text: 'Please enter the CAPTCHA code'
                });
                return;
            }

            // Show loading indicator
            Swal.fire({
                title: 'Verifying CAPTCHA...',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            // Validate CAPTCHA with server
            $.ajax({
                url: '<?= base_url("login/validateCaptcha") ?>',
                method: 'POST',
                data: {
                    captcha_input: captcha,
                },
                dataType: 'json',
                success: function (response) {
                    Swal.close();
                    if (response.valid) {
                        // CAPTCHA is valid, proceed with login
                        performLogin(email, password, captcha);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid CAPTCHA',
                            text: 'The code you entered is incorrect'
                        });
                        $('#refresh-captcha').click();
                    }
                },
                error: function (xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to validate CAPTCHA. Please try again.'
                    });
                    console.error('CAPTCHA Validation Error:', xhr.responseText);
                }
            });
        });
    });

    function performLogin(email, password, captcha) {
        $.ajax({
            url: '<?= base_url("login-user") ?>',
            type: 'POST',
            data: {
                email: email,
                password: password,
                captcha_input: captcha,
                '<?= csrf_token() ?>': '<?= csrf_hash() ?>' // CSRF token for security
            },
            success: function (data) {
                if (data.token) {
                    localStorage.setItem('jwt_token', data.token);
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Successful!',
                        html: `
                        <p>You have successfully logged in!</p>
                        <div class="alert alert-info p-2 mt-3">
                            <small>Your Authorization Token:</small>
                            <div class="d-flex align-items-center mt-1">
                                <code id="token-text">Bearer ${data.token}</code>
                                <button class="btn btn-sm btn-outline-secondary ms-2" onclick="navigator.clipboard.writeText('Bearer ${data.token}')">
                                    Copy
                                </button>
                            </div>
                        </div>
                    `,
                        confirmButtonText: 'Continue'
                    }).then(() => {
                        testProtectedRoute();
                    });
                }
            },
            error: function (xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Login Failed',
                    text: xhr.responseJSON?.message || "Invalid credentials, try again"
                });
                $('#refresh-captcha').click();
            }
        });
    }

    function testProtectedRoute() {
        const token = localStorage.getItem('jwt_token');

        $.ajax({
            url: 'usersvalas',
            type: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
                'FINALLY': 'WE ARE DONESS',
            },
            success: function (data) {
                console.log('Protected route response:', data);
                Swal.fire({
                    icon: 'success',
                    title: 'Auth Successful!',
                    text: 'You successfully accessed the Protected Route'
                });
                // window.location.href = '/'; // Redirect to homepage
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Auth Failed',
                    text: xhr.responseJSON?.message || 'Failed to access Protected route'
                });
            }
        });
    }
</script>