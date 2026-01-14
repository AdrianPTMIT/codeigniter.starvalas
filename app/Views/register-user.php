<title>Register Account</title>

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

    .regis-container {
        display: flex;
        width: 100%;
        max-width: 800px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        overflow: hidden;
    }

    .regis-form {
        flex: 1;
        padding: 2.5rem;
        background: rgba(24, 51, 106, 0.92);
    }

    .regis-logo-container {
        width: 40%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem;
        background: white;
    }

    .regis-logo {
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
        .regis-container {
            flex-direction: column;
        }

        .regis-logo-container {
            width: 100%;
            padding: 1.5rem;
        }

        .regis-form {
            width: 100%;
        }
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<div class="regis-container fade-in">
    <div class="regis-form" id="regisForm">
        <h3 class="card-title">SIGN UP</h3>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger text-center py-2 mb-4"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="post" action="register-user">

            <div class="form-group">
                <i class="fas fa-envelope fa-lg form-icon" style="color: #fff"></i>
                <label class="form-label" for="email">Your Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <!-- <div class="row">

                </div> -->

            <div class="form-group">
                <i class="fas fa-lock fa-lg form-icon" style="color: #fff"></i>
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <i class="fas fa-key fa-lg form-icon" style="color: #fff"></i>
                <label class="form-label" for="confirm_password">Repeat your password</label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="termsCheck" required>
                <label class="form-check-label" for="termsCheck">
                    I agree all statements in <a href="" class="terms-link">Terms of service</a>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">REGISTER</button>



            <div class="login-link">
                Already have an account? <a href="login-user" class="terms-link">Sign In</a>
            </div>
        </form>
    </div>

    <div class="regis-logo-container">
        <img src="images/logostar.png" alt="Logo" class="regis-logo">
    </div>
</div>

<script>
document.getElementById('regisForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirm_password = document.getElementById('confirm_password').value;
    const termsChecked = document.getElementById('termsCheck').checked;
    

    // Show loading indicator
    Swal.fire({
        title: 'Registering...',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });
    
    // Prepare form data
    const formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);
    formData.append('confirm_password', confirm_password);
    
    // Send registration request
    fetch('register-user', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            return response.json().then(err => { throw err; });
        }
        return response.json();
    })
    .then(data => {
        Swal.fire({
            icon: 'success',
            title: 'Registration Successful!',
            text: 'You can now login with your credentials',
            confirmButtonText: 'Go to Login'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'login-user';
            }
        });
    })
    .catch(error => {
        let errorMessage = 'Registration failed. Please try again.';
        
        if (error.errors) {
            // Handle validation errors from server
            errorMessage = Object.values(error.errors).join('\n');
        } else if (error.message) {
            errorMessage = error.message;
        }
        
        Swal.fire({
            icon: 'error',
            title: 'Registration Failed',
            text: errorMessage,
            confirmButtonText: 'OK'
        });
    });
});

</script>

<script> 

</script>
