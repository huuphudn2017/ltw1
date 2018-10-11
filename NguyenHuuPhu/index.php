<?php
	include ('./users.php');

	$obj_users = new users();

	$users = $obj_users->getUsers();
	//var_dump($users);

	$keyword = '';
	if(!empty($_GET['keyword'])){
		$keyword = $_GET['keyword'];
	}

	$users = $obj_users->getUsersByKeyword($keyword);
?>
<!DOCTYPE html>
<html>
<head>
	<title>WHAT WE DO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="public/css/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<script src="public/js/jquery-2.1.4.min.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($users as $user) {	?>

				<div class="col-md-4">
					<img width="100px" src="public/images/<?php echo $user['image'];?>">
					<a href=""> <?php echo $user['username']; ?> </a>
				</div>
			
			<?php } ?>
		</div>
		<form>
			<input type="text" name="keyword" placeholder="Nhập từ khóa">
			<button type="submit">Tìm kiếm</button>
		</form>
	</div>
</body>
</html>