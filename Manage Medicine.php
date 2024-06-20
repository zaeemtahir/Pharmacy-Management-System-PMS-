<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Medicine</title>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
   <style media="screen">

  body {
  font-family: 'Poiret One', cursive;
  background-color: #f1f3f6;
  margin: 0;
  padding: 0;
  }

  .sidenav {
  width: 20%;
  height: 100vh;
  background-color: #111111;
  position: fixed;
  z-index: 1;
  flex: 1 0 auto;
  left: 0;
  top: 0;
    border-radius: 20px;
  }

  .card {
  margin-top: 0px;
  width: 100%;
  height: 100%;
  top: 0;
  background-color: #111111;
  width: 250px;
  padding-bottom: 10px;
  }

  .logo .logo-caption {
  font-family: 'Poiret One', cursive;
  color: #ffffff;
  text-align: center;
  margin-top: 10px;
  }

  .logo .profile {
  margin-top: 20px;
  margin-left: 50%;
  border-radius: 50%;
  transform: translate(-50%);
  }

  .logo .tweak {
  color: #ff5252;
  font-weight: bold;
  }

  .user {
  margin-top: 40px;
  color: #ff5252;
  font-family: 'Poiret One', cursive;
  text-align: center;
  }

  .main-menu-item {
  padding: 5px 5px;
  cursor: pointer;
  font-family: 'Poiret One', cursive;
  text-align: center;
  }

  .main-menu-item > a {
  color: #eeeeee;
  text-decoration: none;
  font-size: 20px;
  padding: 20px 20px;
  }

  .main-menu-item:hover > a {
  color: #ff5252;
  }

  .treeview-menu {
  margin-top: 8px;
  width: 120%;
  transform: translateX(-5%);
  }

  .treeview-menu .treeview {
  display: block;
  }

  .treeview-menu .treeview a {
  color: #eeeeee;
  width: 100%;
  text-decoration: none;
  font-size: 12px;
  background-color: #111111;
  }

  .treeview-menu .treeview a:hover {
  color: #ff5252;
  }

  .main-menu-item > a > span {
  margin-left: 10px;
  }

  .menu-list .btn {
  color: white;
  text-align: left;
  font-size: .9em;
  border-radius: none;
  width: 100%;
  cursor: pointer;
  }

  .menu-list .btn:hover {
  color: #ff5252;
  }

  .content {
  margin-left: 20%;
  width: 80%;
  height: 100vh;
  background: #f1f3f6;
  }

  .medicine-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 16px;
  margin-top: 20px;
}

.medicine-table th,
.medicine-table td {
  padding: 10px;
  border: 1px solid #dddddd;
  text-align: left;
}

.medicine-table th {
  background-color: #ff5252;
  color: #ffffff;
}

.medicine-table tr:nth-child(even) {
  background-color: #f1f3f6;
}

.medicine-table tr:hover {
  background-color: #ff5252;
  color: #ffffff;
}

  </style>
</head>
<body>
<div class="loading-container">
    <div class="loading-spinner"></div>
    <div class="load-text">
      <br><br><br><br><br>
      LOADING....
    </div>
  </div>

  <div class="content">
    <!-- Content goes here -->
    <div class="sidenav">
      <div class="card">
        <div class="card-body">
          <div class="logo">
            <img src="Images/Medicine.png" class="profile"/>
            <h1 class="logo-caption"><span class="tweak">P</span>ills Pharma<span class="tweak">+</span></h1>
            <hr style = "color: #ff5252; width:100px;"/>
            <h1 class="user">ADMIN</h1>
          </div> <!-- logo class -->


          <!-- dashboard start -->
          <div class="main-menu-item">
            <a href="Admin_Dashboard.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
          </div>
          <!-- dashboard end -->
          <hr style = "color: white; width:50px;"/>
          <!-- Medicine start -->
          <div id="first" class="main-menu-item" onclick="showhide(this.id);">
            <a  href="#">
              <i class="fa fa-balance-scale"></i><span>Medicine Stock</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li class="treeview"><a href="searchMedicine.php">Search Medicine Stock</a></li>
              <li class="treeview"><a href="Add Medicine.php">Add Medicine Stock </a></li>
            </ul>
          </div>
          <!-- Medicine end -->
       <hr style = "color: white; width:50px;"/>

          <!-- Staff strat -->
          <div id="third" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
              <i class="fa fa-shopping-bag"></i><span>Manage Staff</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li class="treeview"><a href="searchStaff.php">Search Staff</a></li>
              <li class="treeview"><a href="addStaff.php">Add new Staff</a></li>
            </ul>
          </div>
          <hr style = "color: white; width:50px;"/>
          <!-- staff end -->
          
          <!-- Supplier start -->
          <div id="sixth" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
              <i class="fa fa-dashboard"></i><span>Vendor</span></a>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="treeview"><a href="addVendor.php">Add Vendor</a></li>
            <li class="treeview"><a href="searchSupplier.php">Search Vendor</a></li>
          </div>
          <hr style = "color: white; width:50px;"/>
          <!-- Supplier end -->
          <!-- Supplier start -->
          <div id="seventh" class="main-menu-item" onclick="showhide(this.id);">
            <a href="adminLogin.php">
              <i class="fa fa-dashboard"></i><span>Log out</span></a>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
          </ul>
          </div>  <!-- Supplier end -->
      </div> <!-- card-body class -->
    </div>  <!-- card  -->
  </div>

<h1>Manage Medicines</h1>
<h2>Manage Existing Medicines</h2>
<hr style = "color: orange; border-style: solid"/>

<div class = "manage-med">
    <form action="Manage Medicine.php" method = "POST">
  <label><b>Search:</b></label>
  <input type = "Text" name="med-name" placeholder="By Medicine Name"/>
  <input type = "Text" name="gen-name" placeholder="By Generic Name"/>
  <input type = "Text" name="vendor-ID" placeholder="By Vendor ID"/>
  <button type="submit">Search</button>
</form>
</div>
<hr style = "color: darkblue; border-style: solid"/>


<?php
include('connection.php');
if(isset($_POST['med-name']) || isset($_POST['gen-name']) || isset($_POST['vendor-ID']))
{
  $medName = $_POST['med-name'];
  $genName = $_POST['gen-name'];
  $vendorID = $_POST['vendor-ID'];
  $sqlQuery = "SELECT * from medicine WHERE medName = '$medName' OR genericName='$genName' OR vendor_ID='$vendorID'";
  $stmt = sqlsrv_query($conn, $sqlQuery);
 
  if(sqlsrv_has_rows($stmt))
  {
    echo '<table style="border-collapse: collapse; width: 100%; text-align: center;">';
    echo '<tr><th style="border: 1px solid black; padding: 8px;">Medicine Name</th><th style="border: 1px solid black; padding: 8px;">Packing</th><th style="border: 1px solid black; padding: 8px;">Generic Name</th><th style="border: 1px solid black; padding: 8px;">Vendor ID</th><th style="border: 1px solid black; padding: 8px;">Number of Leaves</th><th style="border: 1px solid black; padding: 8px;">Total Stock</th><th style="border: 1px solid black; padding: 8px;">Price Per Tablet</th></tr>';
    
    while($result = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC))
    {
      echo '<tr>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['medName'] . '</td>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['packing'] . '</td>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['genericName'] . '</td>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['vendor_ID'] . '</td>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['NumberOfLeaves'] . '</td>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['totalStock'] . '</td>';
      echo '<td style="border: 1px solid black; padding: 8px;">' . $result['priceperTablet'] . '</td>';
      echo '</tr>';
    }
    
    echo "</table>";
  }
}
?>


<hr style = "color: orange; border-style: solid"/>
<script>
function showhide(id) {
var element = document.getElementById(id);
var submenu = element.querySelector(".treeview-menu");
submenu.style.display = submenu.style.display === "none" ? "block" : "none";
}
  window.addEventListener("load", function() {
    var loadingContainer = document.querySelector(".loading-container");
    var content = document.querySelector(".content");
    setTimeout(function() {
      loadingContainer.classList.add("hide");
      loadingContainer.addEventListener("transitionend", function() {
        loadingContainer.style.display = "none";
        content.classList.add("loaded");
      });
    }, 100); // Change the delay (in milliseconds) as per your requirement
  });
</script>


</body>
</html>