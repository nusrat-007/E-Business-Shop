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
            <td  width='70%'>
			<h3>Notice Board</h3><hr/>
			<a href="notice.php">Sell closed</a><br>
            <a href="notice.php">Flat sell</a><br>
            <a href="notice.php">Achivements</a>
            <a href="notice.php">others</a>
			
            </td>
        </tr>
    </table>
</body>
</html>