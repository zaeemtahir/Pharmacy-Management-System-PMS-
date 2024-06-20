<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
    <style media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poiret One', cursive;
}
body{
  background-color: #f1f3f6;
}
.wrapper{
  width: 330px;
  padding: 5rem 0 1rem 0;
  margin: 75px auto;
  background: #fff;
  border-radius: 10px;
  text-align: center;
  box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
  color:  #ff5252;
  font-weight: bold;
  background-color: #111111;

}
h1{
  font-size: 2rem;
  margin-bottom: 2.5rem;
}
h2{
    font-size: 1.7rem;
    margin-bottom: 2.5rem;
  }
p{
  margin-bottom: 1.7rem;
}
form input{
  width: 85%;
  outline: none;
  background: #dfe9f5;
  padding: 12px 14px;
  margin-bottom: 10px;
  border-radius: 10px;
  border: 1px solid #ff5252;
}
.recover{
  text-align: right;
  font-size: 0.8rem;
  margin: 0.2rem 1.7rem 0 0;
}
.recover a{
  text-decoration: none;
  color: #ff5252;
}
button{
  font-size: 1.1rem;
  margin-top: 1rem;
  padding: 8px 0;
  border-radius: 5px;
  outline: none;
  border: none;
  width: 30%;
  background: tomato;
  color: #fff;
  cursor: pointer;
  background-color: #ff5252;
}
/* button:hover{
  background: rgba(122, 30, 30, 0.767);
} */
.member{
  font-size: 0.8rem;
  margin-top: 1.4rem;
}
.member a{
  color: tomato;
  text-decoration: none;
}
a:hover{
  text-decoration: underline;
}

    </style>
</head>

<body>
    <div class="wrapper">
        <h1>Log-in</h1>
        <form method="post" action="Login.php">

            <input type="text" id="userName" placeholder="@username" name="userName"><br>

            <input type="password" name="userPassword" placeholder="Password" id="userPassword"><br>

            <p class="recover">
                <a href="adminLogin.php">Login as Admin</a><br>
            </p>

            <button type="submit" value="submit">Log-in</button>
        </form>
    </div>
</body>

</html>



<?php
session_start(); // Start the session

include('connection.php');

if (isset($_POST['userName']) || isset($_POST['userPassword']))
{
    $userName = $_POST['userName'];
    $password = $_POST['userPassword'];

    $signInQuery = "SELECT * FROM signin WHERE userName = '$userName'";
    $signInStmt = sqlsrv_query($conn, $signInQuery);
    $result = sqlsrv_fetch_array($signInStmt, SQLSRV_FETCH_ASSOC);
    $signInQuery2 = "SELECT staff_ID from signin WHERE userName = '$userName'";
    $signInStmt2 = sqlsrv_query($conn , $signInQuery2);
    $staff = sqlsrv_fetch_array($signInStmt2 , SQLSRV_FETCH_ASSOC);  
    $staffNo = $staff['staff_ID'];
    if (sqlsrv_has_rows($signInStmt) > 0 && $result['password'] == $password)
    {
        $signInQuery3 = "SELECT top 1 SNo from trackStaff Order by SNo DESC";
        $signInStmt3 = sqlsrv_query($conn , $signInQuery3);
        $staffID = sqlsrv_fetch_array($signInStmt3 , SQLSRV_FETCH_ASSOC);
        $updateStaffID = $staffID['SNo'] +1;
        $signInQuery4 = "INSERT INTO trackStaff(SNo , staff_ID)
                         VALUES('$updateStaffID' , '$staffNo')";
        $signInStmt4 = sqlsrv_query($conn , $signInQuery4);
        header("Location: staff_Dashboard.html");
        exit();
    }
    else if(sqlsrv_has_rows($signInStmt) == 0)
    {
        echo '<script> alert("Incorrect Username and password!"); </script>';
        
    } 
    else if ($result['password'] != $password)
    {
        echo '<script> alert("Incorrect Password!"); </script>';
    }
}
?>

