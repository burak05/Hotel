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
#$GLOBALS['burak'] = $_SESSION['loginemail'];
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
    <title>User Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>User</div>
            <div class="list-group list-group-flush my-3">
                <a href="user.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                
                
                
                
                <a href="supportuser.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0" name ="usertitle">User Page</h2>
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
                                <li><a class="dropdown-item" href="user.php">Profile</a></li>
                                <li><a class="dropdown-item" href="user.php">Settings</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

<div class="container">
<h3 class="fs-4 mb-3">Reservations</h3>
                <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                                <tr>
                                    
                                    <th scope="col">ResID</th>
                                    <th scope="col">UserMail</th>
                                    <th scope="col">Adults</th>
                                    <th scope="col">Children</th>
                                    <th scope="col">CheckIn</th>
                                    <th scope="col">CheckOut</th>
                                    <th scope="col">RoomID</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
<?php
$result = mysqli_query($conn,"SELECT * FROM reservation WHERE UserMail = '{$_SESSION['loginemail']}' ORDER BY CheckIN");



               
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
    <form action="user.php" method="POST">
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