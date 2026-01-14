<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starvalas ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
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
        }

        .login-card {
            background: rgba(24, 51, 106, 0.92);
            border-radius: 18px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            padding: 2.5rem 2rem 2rem 2rem;
            width: 100%;
            max-width: 400px;
        }

        .login-card .form-label {
            color: #fff;
            font-weight: 500;
        }

        .login-card .form-control {
            background: rgba(255, 255, 255, 0.95);
            border: none;
            border-radius: 8px;
        }

        .login-card .form-control:focus {
            box-shadow: none;
            border-color: #034078;
        }

        .login-card .btn-primary {
            background: #007bff;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: background 0.2s;
        }

        .login-card .btn-primary:hover {
            background: #022c5b;
        }

        .login-card .card-title {
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 1.5rem;
        }

        .login-logo {
            width: 60px;
            margin-bottom: 1rem;
            display: block;
            margin-left: auto;
            margin-right: auto;
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
    </style>
</head>

<body>
    


    <div class="login-card mx-auto fade-in">
        <img src="images/logo.png" alt="Logo" class="login-logo" onerror="this.style.display='none'">
        <h3 class="card-title text-center">Log-in as Admin</h3>
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger text-center py-2"><?php echo $error; ?></div>

        <?php endif; ?>
        <form method="post" action="adminlogin">
            <div class="mb-3">
                <label for="adminUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="adminUsername" name="adminUsername"
                    placeholder="Enter admin username" required autofocus>
            </div>
            <div class="mb-3">
                <label for="adminPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="adminPassword" name="adminPassword"
                    placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>
        </form>
    </div>



</body>

</html>