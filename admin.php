
<?php 
include 'config.php';
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

<?php

if(isset($_POST['UpdateSubmit'])){
    $adults = $_POST['adults'];
$children = $_POST['children'];
$resid = $_POST['resID'];
$datein = $_POST['datein'];
$dateout = $_POST['dateout'];
$query = "UPDATE reservation SET Adults = $adults, Children = '$children', CheckIN = '$datein', CheckOut = '$dateout' WHERE ReservationID = '$resid'";
mysqli_query($conn,$query);
}

?>
<?php

if(isset($_POST['DeleteSubmit'])){
    $resid = $_POST['resID'];    
$query = "DELETE FROM reservation WHERE ReservationID = '$resid'";
mysqli_query($conn,$query);
}

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
                
                
                <a href="support.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                                <li><a class="dropdown-item" href="index.php">Home</a></li>
                                <li><a class="dropdown-item" href="index.php">Settings</a></li>
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
                                <h3 class="fs-2">90</h3>
                                <p class="fs-5">Rooms</p>
                            </div>
                            <i class="fas fa-bed fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php $result=mysqli_query($conn,"SELECT count(*) as total from reservation");
$data=mysqli_fetch_assoc($result); echo $data['total']; ?></h3>
                                <p class="fs-5">Reservations</p>
                            </div>
                            <i
                                class="fas fa-hotel fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php $result=mysqli_query($conn,"SELECT count(*) as total from userinfo");
$data=mysqli_fetch_assoc($result); echo $data['total']; ?></h3>
                                <p class="fs-5">Members</p>
                            </div>
                            <i class="fas fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php $standart=mysqli_query($conn,"SELECT count('RoomID1') as standart from reservation WHERE RoomID1 = 1");
                                $mid=mysqli_query($conn,"SELECT count('RoomID1') as mid from reservation WHERE RoomID1 = 2");
                                $suit=mysqli_query($conn,"SELECT count('RoomID1') as suit from reservation WHERE RoomID1 = 3");
                                $income = 0;
$standartcount=mysqli_fetch_assoc($standart); $midcount=mysqli_fetch_assoc($mid); $suitcount=mysqli_fetch_assoc($suit); $income = $income + $standartcount['standart']*400 + $midcount['mid']*600 + $suitcount['suit']*1000; echo $income ."$";  
    
    ?></h3>
                                <p class="fs-5">Income</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                <h3 class="fs-4 mb-3">Users</h3>
                <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                                <tr>
                                    
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nick</th>
                                </tr>
                            </thead>
<?php
$result = mysqli_query($conn,"SELECT * FROM userinfo");



               
//Bu de??i??ken i??erisine ??ekilen tabloyu bir d??ng?? ile b isimli dizi i??erisine ??ekiyoruz.
while ($b=mysqli_fetch_array($result)){
     
    //Dizi i??erisine giriyoruz ve Tablo i??erisinden ??ekilecek olan t??m s??tunlar?? tek tek de??i??ken ierisine at??yoruz.
    $FirstName = $b['UserFirstName'];
    $LastName = $b['UserLastName'];
    $UserEmail = $b['UserEmail'];
    $UserNick = $b['UserNickName'];

     
    //Tablonun ikinci sat??r??na denk gelen bu alanda gerekli yerlere bu de??i??kenleri giriyoruz. 
    echo "<tr>
    <td>$FirstName</td>
    <td>$LastName</td>
    <td>$UserEmail</td>
    <td>$UserNick</td>
</tr>";
     
}
                ?>
                </table>

<h3 class="fs-4 mb-3">Reservations</h3>
                <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                                <tr>
                                    
                                    <th scope="col">Reservation ID</th>
                                    <th scope="col">UserMail</th>
                                    <th scope="col">Adults</th>
                                    <th scope="col">Children</th>
                                    <th scope="col">CheckIN</th>
                                    <th scope="col">CheckOut</th>
                                    <th scope="col">RoomID</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <?php
$result = mysqli_query($conn,"SELECT * FROM reservation ORDER BY ReservationID");



               
//Bu de??i??ken i??erisine ??ekilen tabloyu bir d??ng?? ile b isimli dizi i??erisine ??ekiyoruz.
while ($b=mysqli_fetch_array($result)):?>
     <?php
    //Dizi i??erisine giriyoruz ve Tablo i??erisinden ??ekilecek olan t??m s??tunlar?? tek tek de??i??ken ierisine at??yoruz.
    $ResID = $b['ReservationID'];
    $UserMail = $b['UserMail'];
    $Adults = $b['Adults'];
    $Children = $b['Children'];
    $Checkin = $b['CheckIN'];
    $Checkout = $b['CheckOut'];
    $RoomID = $b['RoomID1'];
    $ResTypeID = $b['ReservationTypeID'];
    
    
     ?>
    
    <tr>
    <form action="admin.php" method="POST">
    <td><?php echo $ResID;?></td>
    <td><?php echo $UserMail;?></td>
    
    <td>
    </select>
        
        
        
        <select id="adults" name="adults"   >
        <option value='<?php echo $Adults?>' selected='selected'><?php echo $Adults?></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select></td>
    <td></select>
        
        
        
        <select id="children" name="children"   >
        <option value='<?php echo $Children?>' selected='selected'><?php echo $Children?></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select></td>
    <td><input id="datein" type="date" name="datein" value = <?php echo $Checkin;?>></td>
    <td><input id="dateout" type="date" name="dateout" value = <?php echo $Checkout;?>></td>
    <td><?php echo $RoomID;?></td>
    <td><input name = "UpdateSubmit" type="submit" value="Update"></td>
    <td><input name = "DeleteSubmit" type="submit" value="Delete"></td>
    <td><input name = "resID" type="hidden" value=<?php echo $ResID;?>></td>
    </form>
    
</tr><?php endwhile;?>
                </table>



                <div class="container">

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