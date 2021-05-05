<?php 
session_id(md5($_SERVER['REMOTE_ADDR']));
session_start();
if(!isset($_SESSION['loginemail']))
{
    echo '<script language="javascript">';
    echo 'alert("not authorized")';
    echo '</script>';
header("location:auth.php");

exit();
}

session_commit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="admin.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Admin</div>
            <div class="list-group list-group-flush my-3">
                <a href="admin.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="chart.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Analytics</a>
                <a href="reports.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>Reports</a>
                
                
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>Customer Support</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $_SESSION['loginemail']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">200</h3>
                                <p class="fs-5">Rooms</p>
                            </div>
                            <i class="fas fa-bed fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">2000</h3>
                                <p class="fs-5">Reservations</p>
                            </div>
                            <i
                                class="fas fa-hotel fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">2500</h3>
                                <p class="fs-5">Members</p>
                            </div>
                            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Profit</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Recent Orders</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Room</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Suit</td>
                                    <td>Jonny</td>
                                    <td>$1000</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Standart</td>
                                    <td>Kenny</td>
                                    <td>$400</td>
                                </tr>
                                
                                
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Suit</td>
                                    <td>Filly</td>
                                    <td>$1000</td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Mid-Tier</td>
                                    <td>Bilbo</td>
                                    <td>$600</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="container">
<table style="width:100%">
  <tr>
    <th>Photo</th>
    <th>Email</th>
    <th>Password</th>
    
  </tr>
  <tr>
    <td><img src="img/user2.jpg" alt="" height = 80px width = 80px></td>
    <td>keskinburak@gmail.com</td>
    <td>Amasya94</td>
    
  </tr>
  <tr>
  <td><img src="img/user3.jpg" alt=""height = 80px width = 80px></td>
    <td>abcde@gmail.com</td>
    <td>Furkan28</td>
    
  </tr>
  <tr>
  <td><img src="img/user1.jpg" alt=""height = 80px width = 80px></td>
    <td>keskinrahsan@gmail.com</td>
    <td>Rahsan07</td>
    
  </tr>
  <tr>
  <td><img src="img/user.jpg" alt=""height = 80px width = 80px></td>
    <td>veli@gmail.com</td>
    <td>Veli8154</td>
    
  </tr>
  
</table>
            </div>
                
            </div>
            
        </div>
        
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>