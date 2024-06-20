<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Medicine</title>
  <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style media="screen">
  /* Here is the side bar code */

    body {
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

  /* Here starts New Invoice Code  */
  .loading-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #111111;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
        z-index: 9999;
      }

.loading-container.hide {
        opacity: 0;
        pointer-events: none;
      }

.loading-spinner {
        width: 50px;
        height: 50px;
        border: 6px solid #ff5252;
        border-radius: 50%;
        border-top-color: transparent;
        animation: spin 1s ease-in-out infinite;
      }

  @keyframes spin {
        0% {
          transform: rotate(0deg);
        }
        100% {
          transform: rotate(360deg);
        }
      }
.load-text{
           font-family: 'Poiret One', cursive;
           color:#ff5252;
           font-weight:900;
           text-align:center;
           position: fixed;
         }

.container {
font-family: 'Poiret One', cursive;
width: 400px;
margin: 0 auto;
background-color: #111111;
color: #ff5252;
border-radius: 20px;
padding: 5px 5px 5px 15px;
margin-top: 30px;
}

h1 {
text-align: center;
}

.row {
margin-bottom: 10px;
width: auto;
text-align: center;
}


label {
display: block;
font-weight: bold;
}

input {
width: 220px;
border: 1px solid #ff5252;
padding: 10px;
border-radius: 10px;
} 

 /* .button-row {
background-color: #ff5252;
color: #111111;
border: 0;
margin-left: 300px;
cursor: pointer;
width: 60px;
}  */


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
    <!-- Side Nav Bar code Starts here -->
    <div class="sidenav">
      <div class="card">
        <div class="card-body">
          <div class="logo">
            <img src="Images/Medicine.png" class="profile"/>
            <h1 class="logo-caption"><span class="tweak">P</span>ills Pharma<span class="tweak">+</span></h1>
            <hr style="color: #ff5252; width:100px;"/>
            <h1 class="user">ADMIN</h1>
          </div> <!-- logo class -->

          <!-- dashboard start -->
          <div class="main-menu-item">
            <a href="Admin_Dashboard.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
          </div>
          <!-- dashboard end -->
          <hr style = "color: white; width:50px;"/>
          <!-- invoice start -->
          <div id="first" class="main-menu-item" onclick="showhide(this.id);">
            <a  href="#">
              <i class="fa fa-balance-scale"></i><span>Invoice</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li class="treeview"><a href="New Invoice.html">New Invoice</a></li>
              <li class="treeview"><a href="Manage Invoice.html">Manage Invoice </a></li>
            </ul>
          </div>
          <!-- invoice end -->
       <hr style = "color: white; width:50px;"/>

          <!-- medicine strat -->
          <div id="third" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
              <i class="fa fa-shopping-bag"></i><span>Medicine</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li class="treeview"><a href="Add Medicine.html">Add Medicine</a></li>
              <li class="treeview"><a href="Manage Medicine.html">Manage Medicine</a></li>
              <li class="treeview"><a href="Manage Stock.html">Manage Stock</a></li>
            </ul>
          </div>
          <!-- medicine end -->
          <hr style = "color: white; width:50px;"/>
          <!-- purchase start -->
          <div id="fifth" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
              <i class="fa fa-bar-chart"></i><span>Purchase</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li class="treeview"><a href="Add Purchase.html">Add Purchase</a></li>
              <li class="treeview"><a href="Manage Purchase.html">Manage Purchase</a></li>
            </ul>
          </div>
          <hr style = "color: white; width:50px;"/>
          <!-- purchase end -->
          <!-- Sales start -->
          <div id="sixth" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
              <i class="fa fa-dashboard"></i><span>Sales</span></a>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="treeview"><a href="Dashboard.html">Sales Report</a></li>
          </ul>
          </div>
          <hr style = "color: white; width:50px;"/>
          <!-- Sales end -->
          <!-- Supplier start -->
          <div id="seventh" class="main-menu-item" onclick="showhide(this.id);">
            <a href="#">
              <i class="fa fa-dashboard"></i><span>Supplier</span></a>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="treeview"><a href="Dashboard.html">Add Supplier</a></li>
          </ul>
          </div>  <!-- Supplier end -->
        </div> <!-- card-body class -->
      </div> <!-- card class -->
    </div> <!-- sidenav class -->

<!-- Side Nav Bar code ends here -->


    <!-- Code for respective Page -->
  <div class="container">
    <h1>Add Medicine</h1>
    <form action="Add Medicine.php" method="POST">
      <div class="row">
          <label for="MedName">Medicine Name:</label>
        <input type="text" name="MedName" id="customer_name" placeholder="medicine name">
      </div>
      <br>
      <div class="row">
        <label for="MedPack">Packing:</label>
        <input type="text" name="MedPack" id="invoice_number" placeholder="packing e.g 10 Tab">
      </div>
<br>
 <div class="row">
        <label for="price">Price:</label>
        <input type="number" name="price" id="invoice_number" placeholder="PricePerTablet">
      </div>
<br> 
      <div class="row">
        <label for="genName">Generic Name:</label>
        <input type="text" name="genName" id="invoice_number" placeholder="Formula Name">
      </div>
      <br>
      <div class="row">
        <label for="suppName">Supplier:</label>
        <input type="text" name="vendor_ID" id="medicine_name" placeholder="Vendor ID">
    </div>
<br>
      <div class="row">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" placeholder="quantity">
      </div>
      <div class="row">
<br>
      <div class="row">
       <div class="button-row">
        <button type="submit" value="submit" style = "background-color: #ff5252;
color: #111111;
border: 0;
margin-left: 300px;
cursor: pointer;
width: 60px;
height:30px;
border-radius: 10px">Submit</button>
       </div>
      </div>
    </form>
  </div>
  </div>
</body>
</html>

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
    }, 2000); // Change the delay (in milliseconds) as per your requirement
  });
</script>


<?php

include ('connection.php');
if(isset($_POST['MedName']) || isset($_POST['MedPack']) || isset($_POST['price']) || isset($_POST['genName']) || isset($_POST['vendor_ID']) || isset($_POST['quantity']))
{
    $medName = $_POST['MedName'];
    $packing = $_POST['MedPack'];
    $genericName = $_POST['genName'];
    $vendorID = $_POST['vendor_ID'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $sqlQuery1 = "SELECT * FROM medicine where medName = '$medName'";
    $stmt1 = sqlsrv_query($conn,$sqlQuery1);
    $total = $quantity * $packing; 
    if(sqlsrv_has_rows($stmt1) > 0)
    {
        $sqlQuery2 = "SELECT NumberOfLeaves from medicine where medName='$medName'";
        $stmt2 = sqlsrv_query($conn,$sqlQuery2);
        $row = sqlsrv_fetch_array($stmt2, SQLSRV_FETCH_ASSOC);
        $columnValue = $row['NumberOfLeaves'];
        $updateLeaves = $columnValue+$quantity;
        $updateStock = $updateLeaves * $packing;
        $sqlQuery4 = "UPDATE medicine SET NumberOfLeaves = $updateLeaves, totalStock = $updateStock where medName = '$medName'";
        $stmt3 = sqlsrv_query($conn,$sqlQuery4);
    }
    else
    {
        $sqlQuery = "INSERT INTO medicine (medName, packing, genericName, NumberOfLeaves, totalStock, priceperTablet, vendor_ID)
                    VALUES ('$medName', '$packing', '$genericName' , '$quantity' , '$total' , '$price', '$vendorID')";
        $stmt = sqlsrv_query($conn, $sqlQuery);
    }
}
?>