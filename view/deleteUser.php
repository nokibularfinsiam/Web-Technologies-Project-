<?php
 
    include_once('../model/userModel.php');
 
    $users = showAllUsers();
 
?>
 
<html>
<head>
    <title>Delete Users</title>
    <script src="../js/deleteUserCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/deleteUser.css">
</head>
<body>
    <a href="adminHomePage.php"> Back </a> |
    <a href="../controller/logout.php"> logout </a>
 
    <br>
 
    <form method="POST" action="../controller/deleteUserCheck.php">
        <h1>User Information</h1>
        <table border="1px">
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Gender</th>
            <th>User Type</th>
            <th>Action</th>
            </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['firstName']) ?></td>
                    <td><?= htmlspecialchars($user['lastName']) ?></td>
                    <td><?= htmlspecialchars($user['userName']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['phone']) ?></td>
                    <td><?= htmlspecialchars($user['gender']) ?></td>
                    <td><?= htmlspecialchars($user['userType']) ?></td>
                    <td><a href="#" onclick="return deleteUser('<?= urlencode($user['userName']) ?>')">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </form>
</body>
</html>