<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>
 
<html>
<head>
<title>Add Admin</title>
<script src="../js/addAdminCheck.js"></script>
<link rel="stylesheet" type="text/css" href="../css/addUser.css">
</head>
<body>
 
    <a href="add_user_admin.php"> Back </a> |
<a href="../controller/LogoutCheck.php"> logout </a>
 
        <form method="post" name="userForm" action="../controller/addAdminCheck.php" onsubmit="return validationform()">
<center>
<fieldset>
<h2 align="center">Add Admin</h2>
<table align="center">
 
                <tr>
<td><label for="FirstName">First Name</label></td>
<td><input type="text" name="firstname" id="firstname" style="width: 96%;"/></td>
</tr>
<tr>
<td><label for="LastName">Last Name</label></td>
<td><input type="text" name="lastname" id="lastname" style="width: 96%;"/></td>
</tr>
<tr>
<td><label for="userName">User Name</label></td>
<td><input type="text" name="username" id="username" style="width: 96%;"/></td>
</tr>
<tr>
<td><label for="email">E-mail</label></td>
<td><input  type="email" name="email" id="email" style="width: 96%;"/></td>      
</tr>
<tr>
<td><label for="password">Password</label></td>
<td><input type="password" name="password" id="password" style="width: 96%;"/></td>
</tr>
<tr>
<td><label for="password">Confirm Password</label></td>
<td><input type="password" name="cpassword" id="cpassword" style="width: 96%;"/></td>
</tr>
<tr>
<td><label for="gender" id="gender">Gender</label></td>
<td>
<input type="radio" name="gender" value="male" class="gender"/>Male
<br><input type="radio" name="gender" value="female"class="gender"/>Female
<br><input  type="radio" name="gender" value="others"class="gender"/>Others
</td>
</tr>
<tr>
<td><label for="number">Phone Number</label></td>
<td><input type="text"   name="phone" id="phone" style="width: 96%;"/></td>
</tr>
<tr>
<td colspan="2"><center><input type="submit" name="submit" value="Add"></center></td>
<h2 id="print" style="color: red;"></h2>
</tr>
</table>
<p align="center">Already have an acccount? <a href="login.html">Log In</a></p>
</fieldset>
</center>
</form>
</body>
</html>