<?php 
static $columnValue; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Form</title>
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
  width: 500px;
  margin-left: auto;
  margin-right: auto;
  background-color: #111111;
  color: #ff5252;
  border-radius: 20px;
  padding: 5px 5px 5px 15px;
  margin-top: 30px;
  margin-bottom: 30px;
}

h1 {
text-align: center;
}

.row {
margin-bottom: 10px;
width: auto;
display: inline-block;
text-align: center;
}

.button-row {
    display: flex;
    justify-content: space-between;
  }

.payment_row{
  text-align: center;
  padding-bottom: 10px;
  padding-top: 10px;
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

input[type="submit"] {
background-color: #ff5252;
color: #fff;
border: 0;
margin-left: 350px;
cursor: pointer;
width: 60px;
}

input[type="button"] {
background-color: #ff5252;
color: #fff;
border: 0;
margin-left: 20px;
cursor: pointer;
width: 60px;
}

hr{
  color:white;
  width:200px;
  border-top-style:solid;
  border-top-width:1px;
  border-top-color:white;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
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
    
  <div class="container">
    <h1>New Invoice</h1>
    <form action="newInvoice.php" method="POST">
      <div class="row">
          <label for="customer_name">Customer Name</label>
        <input type="text" name="customer_name" id="customer_name" placeholder="customer name">
      </div>
      <div class="row">
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
      </div>
      <br>
      <div class="payment_row">
          <label for="payment_type">Payment Type</label>
          <select name="payment_type" id="payment_type">
            <option value="cash">Cash</option>
            <option value="card">Card</option>
          </select>
      </div>
      <hr />
      <br>
      <br>
      <div class="row">
        <label for="invoice_number">Invoice Number</label>
         <input type="text" name="invoice_number" id="invoice_number" placeholder="Invoice Number"  readonly="readonly" value= <?php $min=10000; $max=90000; mt_srand(time()); $randomNumber=mt_rand($min,$max); echo $randomNumber; ?> > 
      </div>
      <div class="row">
        <label for="medicine_name">Medicine Name</label>
        <input type="text" name="medicine_name" id="medicine_name" placeholder="Enter Medicine Name">
      </div>

      <div class="row">
        <br>
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" id="quantity" placeholder="quantity" >
      </div>
      <div class="row">
        <br>
        <label for="PricePerTablet">Price/Tablet</label>
        <input type="number" name="PricePerTablet" id="PricePerTablet" placeholder="Price" readonly = "readonly">
      </div>
      <div class="row">
        <br>
        <label for="total_amount">Total Amount</label>
        <input type="number" name="total_amount" id="total_amount" placeholder="Amount" readonly = "readonly">
      </div>
      <div class="row">
        <br>
        <label for="paid_amount">Paid Amount</label>
        <input type="number" name="paid_amount" id="paid_amount" placeholder="Amount Paid by Customer">
      </div>
      <div class="row">
        <br>
       <div class="button-row">
          <input type="submit" value="Submit">
          <input type="button" value="Print">
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
    }, 100); // Change the delay (in milliseconds) as per your requirement
  });
</script>
 
<?php
include ('connection.php');

if(isset($_POST['invoice_number']) || isset($_POST['medicine_name']) || isset($_POST['quantity'])|| isset($_POST['paid_amount']))
{
  $invoiceNumber = $_POST['invoice_number'];
  $medName = $_POST['medicine_name'];
  $quantity = $_POST['quantity'];
  $paidAmount = $_POST['paid_amount'];

  $sqlQuery5 = "SELECT * FROM medicine WHERE medName='$medName'";

  $stmt5 = sqlsrv_query($conn,$sqlQuery5);

  $table = sqlsrv_fetch_array($stmt5,SQLSRV_FETCH_ASSOC);

  //calculate Total Amount
  $totalAmount = $table['priceperTablet'] * $quantity;

  //calculate stock left in the medicine table
  $stockLeft = $table['totalStock'] - $quantity;  

  //calculate leaves left in the medicine table
  $leavesLeft = $table['NumberOfLeaves'] - floor($quantity/10);


  //calculate change
  $change =  $paidAmount - $totalAmount;
  if(sqlsrv_has_rows($stmt5) == 0)
  {
    echo"<script> alert('Medicine Not Found!') </script>";
  }
  else if($table['totalStock'] < $quantity)
  {
    echo'<script> alert("Not Enough Stock!")</script>';
  }
  else
  {
    $sqlQuery6 = "SELECT staff_ID FROM trackStaff Order by SNo DESC";
    $stmt6 = sqlsrv_query($conn , $sqlQuery6);
    $staffNo = sqlsrv_fetch_array($stmt6 , SQLSRV_FETCH_ASSOC);
    $staff = $staffNo['staff_ID'];
    $price = $table['priceperTablet'];
      
    $sqlQuery = "INSERT INTO invoice(invoiceNumber, medName, quantity, priceperTablet, total_amount, paid_Amount, change, staff_ID)
                VALUES('$invoiceNumber' , '$medName' , $quantity , '$price' , '$totalAmount' , '$paidAmount' , '$change' 
                , '$staff')";

    $stmt = sqlsrv_query($conn,$sqlQuery);
     
    $query5 = "UPDATE medicine SET totalStock = $stockLeft , NumberOfLeaves = $leavesLeft WHERE medName = '$medName' ";
    $stmt6 = sqlsrv_query($conn,$query5);

    echo '<script> document.getElementById("PricePerTablet").value = "' . $table['priceperTablet'] . '";</script>';
    echo '<script> document.getElementById("total_amount").value = "' . $totalAmount . '";</script>';
    echo '<script> alert("Invoice Saved Successfully!"); </script>';
    echo '<script> alert("Inventory Updated Successfully!"); </script>';
  }
}

?>