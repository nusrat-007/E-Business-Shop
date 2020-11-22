<?php
session_start();

?>

<!DOCTYPE html>
<html >
<head>
   
    <title>home</title>
</head>
<body>
    <table align="center" width='60%' border="1"  cellpadding="0" cellspacing="0"  >
        <tr>
            <td>
                <h3 align="center">Admin</h3>
                <hr>
                <ul>
                    <li><a href="view_user.php">View User</a></li>
                    <li><a href="chat.php">Chat</a></li>
                    <li><a href="add_user.php">Add User</a></li>
                    <li><a href="remove_user.php">Remove User</a></li>
                    <li><a href="check_seller.php">Seller Profile</a></li>
                    <li><a href="check_buyer.php">Buyer Profile</a></li>
                    <li><a href="edit_admin.php">Edit Admin Profile</a></li>
                    <li><a href="check_admin.php">Admin Profile</a></li>
                    <li><a href="support.php">Care & Support</a></li>
                    <li><a href="contactus.php">Contact Users</a></li>
                    <li><a href="notice.php">Notice</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul>                
            </td>
            <td align="center" width='70%'>
			<h3>User List</h3>
			<table align="center" width='60%' border="1"  cellpadding="0" cellspacing="0" >
			<tr>
            <td>
            SELLER NAME
            <hr>
            Harry
            <br>
            Selena
            <br>
            Emily
            <br>
            John
			</td>
			<td>
            BUYER NAME
            <hr>
            Tina
            <br>
            Erica
            <br>
            Jessica
            <br>
            Tony
			</td>
            </tr>
            </table>
			
            </td>
        </tr>
    </table>
</body>
</html>
