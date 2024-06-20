<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendor</title>
  <link rel="stylesheet" href="formsStyle.css">
<!-- Side Nav Bar code ends here -->


    <!-- Code for respective Page -->
  <div class="container">
    <h1>Add New Vendor</h1>
    <form action="addVendor.php" method="POST">
      <div class="row">
          <label for="vendor-id">Vendor-ID:</label>
        <input type="text" name="vendor-id" id="vendor-id" placeholder="V***">
      </div>
      <br>
      <div class="row">
        <label for="vendor-name">Name:</label>
        <input type="text" name="vendor-name" id="vendor-name" placeholder="Name">
      </div>
<br>
 <div class="row">
        <label for="vendor-address">Address:</label>
        <input type="vendor-address" name="vendor-address" id="vendor-address" placeholder="Address">
      </div>
<br> 
      <div class="row">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="e.g: 03******">
      </div>
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
if(isset($_POST['vendor-id']) || isset($_POST['vendor-name']) || isset($_POST['vendor-address']) || isset($_POST['phone']))
{
    $vendorID = $_POST['vendor-id'];
    $vendorName = $_POST['vendor-name'];
    $vendorAddress = $_POST['vendor-address'];
    $phone = $_POST['phone'];

    $sqlQuery1 = "SELECT * FROM vendor where vendor_ID = '$vendorID'";
    $stmt1 = sqlsrv_query($conn,$sqlQuery1);
    
    if(sqlsrv_has_rows($stmt1) > 0)
    {
        echo '<script> alert("vendorID already exists!"); </script>';
    }
    else
    {
        $sqlQuery = "INSERT INTO vendor (vendor_ID, vendor_name, vendor_Address, phone)
                    VALUES ('$vendorID', '$vendorName', '$vendorAddress' , '$phone')";
        $stmt = sqlsrv_query($conn, $sqlQuery);
        if($stmt){
          echo '<script> alert("Vendor Added!"); </script>';
        }
        else{
          echo '<script> alert("Error!"); </script>';
        }
          
    }
}
?>