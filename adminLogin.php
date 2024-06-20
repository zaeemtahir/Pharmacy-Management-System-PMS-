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
        <h1>Admin Log-in</h1>
        <form method="post" action="adminLogin.php">
            <input type="password" name="userPassword" placeholder="Password" id="userPassword"><br>

            <p class="recover">
                <a href="Login.php">Login as Staff</a><br>
            </p>

            <button type="submit" value="submit">Log-in</button>
        </form>
    </div>
</body>
</html>



<?php
include('connection.php');

if (isset($_POST['userPassword'])) {
    $password = $_POST['userPassword'];

   
    if ($password == "cui") {
        header("Location: Admin_Dashboard.html");
        exit();
    } else {
        echo '<script> alert("Incorrect Password!"); </script>';
    }
}
?>
?>

