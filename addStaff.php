<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Medicine</title>

<!-- Side Nav Bar code ends here -->


    <!-- Code for respective Page -->
  <div class="container">
    <h1>Add New Staff</h1>
    <form action="addStaff.php" method="POST">
      <div class="row">
          <label for="staff-id">Staff-ID:</label>
        <input type="text" name="staff-id" id="staff-id" placeholder="S***">
      </div>
      <br>
      <div class="row">
        <label for="salary">Salary:</label>
        <input type="text" name="salary" id="salary" placeholder="PKR ***">
      </div>
<br>
 <div class="row">
        <label for="staff-name">Name:</label>
        <input type="staff-name" name="staff-name" id="staff-name" placeholder="name">
      </div>
<br> 
      <div class="row">
        <label for="staff-role">Staff Role:</label>
        <input type="text" name="staff-role" id="staff-role" placeholder="e.g: Cashier">
      </div>
<br>
    <div class="row">
        <label for="userName">Username:</label>
        <input type="text" name="userName" id="userName" placeholder="e.g: xyz@..">
      </div>
<br>
    <div class="row">
        <label for="pass">Password:</label>
        <input type="text" name="pass" id="pass" placeholder="password">
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
if(isset($_POST['staff-id']) || isset($_POST['salary']) || isset($_POST['staff-name']) || isset($_POST['staff-role']) || isset($_POST['pass']) || isset($_POST['userName']))
{
    $staffID = $_POST['staff-id'];
    $salary = $_POST['salary'];
    $staffName = $_POST['staff-name'];
    $staffRole = $_POST['staff-role'];
    $password = $_POST['pass'];
    $username = $_POST['userName'];

    $sqlQuery1 = "SELECT * FROM staff where staff_ID = '$staffID'";
    $sqlQuery2 = "SELECT * FROM signin where username = '$username'";
    $stmt1 = sqlsrv_query($conn,$sqlQuery1);
    $stmt2 = sqlsrv_query($conn, $sqlQuery2);
    
    if(sqlsrv_has_rows($stmt1) > 0)
    {
        echo '<script> alert("StaffID already exists!"); </script>';
    }
    else if(sqlsrv_has_rows($stmt2) > 0){
        echo '<script> alert("Username already exists!"); </script>';
    }
    else
    {
        $sqlQuery = "INSERT INTO staff (staff_ID, salary, staff_name, staff_role)
                    VALUES ('$staffID', '$salary', '$staffName' , '$staffRole')";
        $stmt = sqlsrv_query($conn, $sqlQuery);

        $sqlQuery2 = "INSERT INTO signin (username, password, staff_id)
        VALUES ('$username', '$password', '$staffID')";
         $stmt2 = sqlsrv_query($conn, $sqlQuery2);

        echo '<script> alert("Account Created!"); </script>';
    }
}
?>