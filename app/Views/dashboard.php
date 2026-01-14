<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .sidebar {
            min-height: 100vh;
            background: #18336a;
            color: #fff;
            padding: 4rem 1rem 1rem 1rem;
            border-radius: 0 18px 18px 0;
        }

        .sidebar h4 {
            color: #fff;
            font-weight: bold;
            margin-bottom: 2rem;
            letter-spacing: 1px;
        }

        .sidebar .nav-link {
            color: #fff;
            margin-bottom: 1rem;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #034078;
            color: #fff;
        }

        .dashboard-content {
            padding: 2rem 1rem;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                min-height: auto;
                border-radius: 18px 18px 0 0;
                margin-bottom: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-lg-3 col-md-4 sidebar mb-4 mb-lg-0">
                <h4 class="col mx-5"><i class="fa fa-dashboard"></i> Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data Kurs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengaturan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminlogin">Logout</a>
                    </li>
                </ul>
            </nav>
            <!-- Main Content -->
            <?php
            $success = 'Login successful! Welcome, admin123.';
            echo '<div id="login-success-alert" class="alert alert-success text-center w-100" style="position:fixed;top:0;left:0;right:0;z-index:999;">' . $success . '</div>';

            ?>
            <script>
                setTimeout(function () {
                    var alert = document.getElementById('login-success-alert');
                    if (alert) {
                        alert.style.transition = "opacity 0.2s";
                        alert.style.opacity = 0;
                        setTimeout(function () {
                            alert.remove();
                        }, 500);
                    }
                }, 1000);
            </script>


            <main class="col-lg-9 col-md-8 dashboard-content">
                <br>
                <br>
                
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h2>Data Kurs Starvalas</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 350px; overflow-y: auto">
                            <table class="table table-info table-striped align-middle mb-0">
                                <thead class="sticky-top table-primary">
                                    <tr>
                                        <th class="text-center text-black">Country</th>
                                        <th class="text-center text-black">Currency</th>
                                        <th class="text-center text-black">Buy Rate</th>
                                        <th class="text-center text-black">Sell Rate</th>
                                        <th class="text-center text-black">Action</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/USA.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">USD0</td>
                                        <td class="text-center">16,080.00</td>
                                        <td class="text-center">16,260.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/UK.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">EUR0</td>
                                        <td class="text-center">18,340.00</td>
                                        <td class="text-center">18,540.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Hongkong.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">HKD1</td>
                                        <td class="text-center">12,570.00</td>
                                        <td class="text-center">12,690.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Japan.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">JPY0</td>
                                        <td class="text-center">10,480.00</td>
                                        <td class="text-center">10,670.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/China.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">CNY0</td>
                                        <td class="text-center">3,820.00</td>
                                        <td class="text-center">3,880.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Korea.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">KRW0</td>
                                        <td class="text-center">494.00</td>
                                        <td class="text-center">507.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Arab.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">SAR0</td>
                                        <td class="text-center">2,250.00</td>
                                        <td class="text-center">2,300.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Singapure.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">SGD0</td>
                                        <td class="text-center">494.00</td>
                                        <td class="text-center">507.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Malay.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">MYR0</td>
                                        <td class="text-center">112.00</td>
                                        <td class="text-center">115.30</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/Taiwan.webp" alt="" style="height: 25px" />
                                        </td>
                                        <td class="text-center">TWD0</td>
                                        <td class="text-center">518.00</td>
                                        <td class="text-center">536.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/euro.jpg" alt="" style="height: 20px" />
                                        </td>
                                        <td class="text-center">EUR0</td>
                                        <td class="text-center">18,410.00</td>
                                        <td class="text-center">18,610.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <img src="images/thai.jpg" alt="" style="height: 20px" />
                                        </td>
                                        <td class="text-center">THB0</td>
                                        <td class="text-center">494.00</td>
                                        <td class="text-center">507.00</td>
                                        <td class="text-center">
                                            <a href="#" title="Edit"><i class="fa-solid fa-pen-to-square"
                                                    style="color:rgb(4, 44, 138)"></i></a>
                                            <a href="#" title="Delete"
                                                onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                    class="fa-solid fa-trash" style="color:#c00"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </main>
        </div>
    </div>
</body>

</html>