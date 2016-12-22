<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
	<title> Users List </title>	
	<style type="text/css">
		#admin-users-but{
			color:red;
		}
    </style>	
</head>
<body>
	<?php 
	session_start();
	require_once('connect.php'); 

	if($_SESSION["is_admin"]==0) header( 'Location:access_denied.php' );
	else{
		$result = mysqli_query($connect,"SELECT * FROM users");
	}
	?> 
	
	<?php 
		require('admin_panel_head.php');
	?>
	<div class="admin-users-list">
		<table class="user-table">
		<thead>
			<tr>
				<td>#</td>
				<td>E-mail</td>
				<td>Login</td>
				<td>Удалить</td>
			</tr>
		</thead>

		<?php while($user = mysqli_fetch_array($result)) { ?>
			<tr> 
			<td> 
			<?php echo $user['id_user']; ?> 
			</td>
			<td> <?php if ($_SESSION['id_user'] == $user['id_user']) { ?>
					<a href="userpage.php"> <?php echo $user['email']; ?> </a> 
				<?php } else{ ?>
					<a href="profile_view.php?id=<?php echo $user['id_user']; ?>"> <?php echo $user['email']; ?> </a> 
				<?php } ?>
			<?php if ($user['id_user'] == $_SESSION['id_user']) echo "(Вы)"; ?>
			</td>
			<td> <?php echo $user['login']; ?> </td>
			<td> <a href="delete_user_func.php?id=<?php echo $user['id_user']; ?>"> <div id="delete-button"</a> </td>
			</tr>
		<?php } ?>

</table>
	</div>
</body>
</html>